<?php

namespace app\controllers;

use Ismaxim\ScratchFrameworkCore\Application;
use Ismaxim\ScratchFrameworkCore\Controller;
use Ismaxim\ScratchFrameworkCore\middlewares\AuthMiddleware;
use Ismaxim\ScratchFrameworkCore\Request;
use Ismaxim\ScratchFrameworkCore\Response;
use app\models\LoginForm;
use app\models\User;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->setLayout('main');
        $this->registerMiddleware(new AuthMiddleware(['profile']));
    }

    public function login(Request $request, Response $response)
    {
        $loginForm = new LoginForm;

        if ($request->isPost()) {
            $loginForm->loadData($request->getBody());
            if ($loginForm->validate() && $loginForm->login()) {
                $response->redirect('/');
                
                return;
            }
        }

        return $this->render('login', [
            'model' => $loginForm
        ]);
    }

    public function logout(Request $request, Response $response)
    {
        Application::$app->logout();
        $response->redirect('/');
    }

    public function register(Request $request)
    {
        $user = new User();

        if ($request->isPost()) {
            // dd($request->getBody());

            $user->loadData($request->getBody());
            
            if ($user->validate() && $user->save()) {
                Application::$app->session->setFlash('success', 'Thanks for registering');
                Application::$app->response->redirect('/');
            }

            // dd($registerModel->errors);

            return $this->render('register', [
                'model' => $user
            ]);
        }

        return $this->render('register', [
            'model' => $user
        ]);
    }

    public function profile()
    {
        return $this->render('profile');
    }
}