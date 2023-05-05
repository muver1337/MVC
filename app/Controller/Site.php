<?php

namespace Controller;

use Src\Validator\Validator;
use Model\Worker;
use Model\Division;
use Model\Discipline;
use Model\Role;
use Model\User;
use Src\Request;
use Src\View;
use Src\Auth\Auth;


class Site
{

    public function hello(): string
    {
        $user = User::find($_SESSION['id']);
        return new View('site.hello', ['message' => 'Вы вошли в роль: ', 'user' => $user]);
    }

    public function signup(Request $request): string
    {
        if ($request->method === 'POST') {

            $validator = new Validator($request->all(), [
                'login' => ['required', 'unique:users,login'],
                'role_id' => ['required'],
                'password' => ['required']
            ], [
                'required' => 'Поле :field пусто',
                'unique' => 'Поле :field должно быть уникально'
            ]);

            if ($validator->fails()) {
                return new View('site.signup',
                    ['message' => json_encode($validator->errors(), JSON_UNESCAPED_UNICODE)]);
            }

            if (User::create($request->all())) {
                app()->route->redirect('/login');
            }
        }

        $roles = Role::all();
        if ($request->method === 'POST') {
            app()->route->redirect('/hello');
        }
        return new View('site.signup', ['roles' => $roles]);
    }

    public function login(Request $request): string
    {
        //Если просто обращение к странице, то отобразить форму
        if ($request->method === 'GET') {
            return new View('site.login');
        }
        //Если удалось аутентифицировать пользователя, то редирект
        if (Auth::attempt($request->all())) {
            app()->route->redirect('/hello');
        }
        //Если аутентификация не удалась, то сообщение об ошибке
        return new View('site.login', ['message' => 'Неправильные логин или пароль']);
    }

    public function division(Request $request): string
    {
        if ($request->method === 'POST') {
            $payload = $request->all();
            $divisionn = $payload['division'];
            Division::create(['name' => $divisionn]);
        }
        $division = Division::all();
        return new View('site.division', [
            'division' => $division,
        ]);
    }

    public function discipline(Request $request): string
    {
        if ($request->method === 'POST') {
            $paylod = $request->all();
            Discipline::create(['discipline' => $paylod['discipline'], 'division_id' => $paylod['division_id']]);
        }
        $divisionn = Division::all();
        $discipline = Discipline::all();
        return new View('site.discipline', [
            'discipline' => $discipline,
            'divisionn' => $divisionn
        ]);
    }

    public function worker(Request $request): string
    {
        if ($request->method === 'POST') {
            $temp = $request->all();
            Worker::create([$request => all()]);
        }
        $divisionn = Division::all();
        $discipline = Discipline::all();
        $worker = Worker::all();
        return new View('site.worker', [
            'discipline' => $discipline,
            'divisionn' => $divisionn,
            'worker' => $worker,
        ]);
    }

        public
        function logout(): void
        {
            Auth::logout();
            app()->route->redirect('/login');
        }
    }


