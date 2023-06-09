<?php

namespace Controller;

use Model\User;
//use Model\Post;
use Src\View;
use Src\Request;
use Src\Auth\Auth;
class Site
{
    public function signup(Request $request): string
    {
        if ($request->method === 'POST' && User::create($request->all())) {
            app()->route->redirect('/hello');
        }
        return new View('site.signup');
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

    public function logout(): void
    {
        Auth::logout();
        app()->route->redirect('/hello');
    }



    public function hello(): string
    {
        return new View('site.hello', ['message' => 'hello working']);
    }

    public function record(Request $request): string
    {
        if ($request->method === 'POST' && User::create($request->all())) {
            app()->route->redirect('/hello');
        }
        return new View('site.record');
    }

    public function post(): string
    {
        return new View('site.post', ['message' => 'hello working']);
    }


}

//var_dump($validator); die();
