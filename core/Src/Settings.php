<?php

namespace Src;

use Error;

class Settings
{
    private array $_settings;
// Массив приватных настроек при создании
    public function __construct(array $settings = [])
    {
        $this->_settings = $settings;
    }

    public function __get($key)
    {
        if (array_key_exists($key, $this->_settings)) {
            return $this->_settings[$key];
        }
        throw new Error('Accessing a non-existent property');
    } // Если происходит доступ к массиву settings тогда возвращает,
    // иначе происходит исключение

    public function getRootPath(): string
    {
        return $this->path['root'] ? '/' . $this->path['root'] : '';
    }//Формирует путь до директории рутовой

    public function getViewsPath(): string
    {
        return '/' . $this->path['views'] ?? '';
    }//Возвращает путь до папки с views
    public function getDbSetting(): array
    {
        return $this->db ?? [];
    }

}

