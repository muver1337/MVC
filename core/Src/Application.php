<?php

namespace Src;

use Error;

class Application
{
    private Settings $settings;
    private Route $route;
//Класс делаем приватным


    public function __construct(Settings $settings)
    {
        $this->settings = $settings;
        $this->route = new Route();
        // При создании экземпляра автоматически будет создаваться объект класса Роут
    }

    public function __get($key)
    {
        if ($key === 'settings') {
            return $this->settings;
        }//Если ключ 'Settings' то возвращаем, иначе кидаем в исключения
        throw new Error('Accessing a non-existent property');
    }
    // Оградить доступ ко всем свойствам


    public function run(): void
    {
        $this->route->setPrefix($this->settings->getRootPath());
        $this->route->start();
    }//Заглушка
}
