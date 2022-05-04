<?php

namespace App\Core;

use App\Core\Middlewares\BaseMiddleware;

class Controller
{
	public string $layout = 'main';
	public string $action = '';
	protected array $middlewares = [];

	public function setLayout($layout)
	{
		$this->layout = $layout;
	}

	public function render($view, $params = [])
	{
		return Application::$app->view->renderView($view, $params);
	}

	public function registerMiddleware(BaseMiddleware $middleware)
	{
		$this->middlewares[] = $middleware;
	}

	public function getMiddlewares()
	{
		return $this->middlewares;
	}
}
