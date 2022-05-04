<?php

namespace App\Controllers;

use App\Core\Application;
use App\Core\Controller;
use App\Core\Middlewares\AuthMiddleware;
use App\Core\Request;
use App\Core\Response;
use App\Models\LoginForm;
use App\Models\User;

class AuthController extends Controller
{

	public function __construct()
	{
		$this->registerMiddleware(new AuthMiddleware(['profile']));
	}

	public function login(Request $request, Response $response)
	{
		$this->setLayout('auth');
		$loginForm = new LoginForm();
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

	public function register(Request $request)
	{
		$this->setLayout('auth');
		$user = new User();
		if ($request->isPost()) {
			$user->loadData($request->getBody());
			if ($user->validate() && $user->save()) {
				Application::$app->session->setFlash('success', 'Thanks for registering');
				Application::$app->response->redirect('/');
			}
		}
		return $this->render('register', [
			'model' => $user
		]);
	}

	public function logout(Request $request, Response $response)
	{
		Application::$app->logout();
		$response->redirect('/');
	}

	public function profile()
	{
		return $this->render('profile', []);
	}
}
