<?php
/**
 * 19. Реализуйте класс Flash, который будет использовать внутри себя класс Session из предыдущей задачи
 *(именно использовать, а не наследовать).
 * Этот класс будет использоваться для сохранения сообщений в сессию и вывода их из сессии. Зачем это нужно: такой класс часто используется для форм.
 * Например на одной странице пользователь отправляет форму, мы сохраняем в сессию сообщение об успешной отправке, редиректим пользователя на другую страницу и там показываем сообщение из сессии.
 * Класс должен иметь да метода - setMessage, который сохраняет сообщение в сессию и getMessage, который получает сообщение из сессии.
 */

class Session
{
    public function __construct()
    {
        session_start();
    }

    public function get($key)
    {
        return isset($_SESSION[$key]) ? $_SESSION[$key] : null;
    }

    public function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public function is($key)
    {
        return isset($_SESSION[$key]) ? true : false;
    }

    public function delete($key)
    {
        unset($_SESSION[$key]);
    }

    public function __destruct()
    {
        session_write_close();
    }
}

class Flash
{
    private $session;

    public function __construct()

    {
        $this->session = new Session;
    }

    public function setMessage($name, $key)

    {
        $this->session->set($name, $key);
    }

    public function getMessage($name)
    {
        return $this->session->get($name);
    }

}
