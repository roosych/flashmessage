<?php


class FlashMessage {

    //записываем в сессию ключ и сообщение
    public static function set($key, $message) {
        return $_SESSION[$key] = $message;
    }

    //получение ключа по имени массива $_SESSION
    public static function get($key) {
        return $_SESSION[$key];
    }

    public static function delete($key) {
        if(isset($_SESSION[$key])) {
            unset($_SESSION[$key]);
        }
    }

    public static function flash($key, $message = '') {
        //Если такой ключ есть в сессии и он не пустой
        if(isset($_SESSION[$key]) && self::get($key) !== '') {
            $session = self::get($key);
            self::delete($key);
            return $session;
        } else {
            //Если такого ключа нету в сессии - устанавливаем его и сообщение
            self::set($key, $message);
        }
    }


}