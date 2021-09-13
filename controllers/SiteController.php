<?php

namespace app\controllers;

use Ismaxim\ScratchFrameworkCore\Application;
use Ismaxim\ScratchFrameworkCore\Controller;
use Ismaxim\ScratchFrameworkCore\Request;
use Ismaxim\ScratchFrameworkCore\Response;
use app\models\ContactForm;

class SiteController extends Controller
{
    public function __construct()
    {
        $this->setLayout('main');
    }

    public function home()
    {
        $params = [
            "name" => "Maxim"
        ];

        return $this->render('home', $params);
    }

    public function contact(Request $request, Response $response)
    {
        $contact = new ContactForm;

        if ($request->isPost()) {
            $contact->loadData($request->getBody());
            if ($contact->validate() && $contact->send()) {
                Application::$app->session->setFlash('success', 'Thanks for contacting us.');

                return $response->redirect('/contact');
            }
        }

        return $this->render('contact', [
            'model' => $contact
        ]);
    }
}