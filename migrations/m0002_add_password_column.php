<?php

use App\Core\Application;

class m0002_add_password_column
{
	public function up()
	{
		$db = Application::$app->database;
		$db->pdo->exec("ALTER TABLE users ADD COLUMN password VARCHAR(512) NOT NULL");
	}

	public function down()
	{
		$db = Application::$app->database;
		$db->pdo->exec("ALTER TABLE users DROP COLUMN password");
	}
}
