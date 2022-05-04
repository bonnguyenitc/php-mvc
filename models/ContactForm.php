<?php

namespace App\Models;

use App\Core\Model;

class ContactForm extends Model
{
	public string $subject = '';
	public string $email = '';
	public string $body = '';

	public function rules(): array
	{
		return [
			"subject" => [self::RULE_REQUIRED],
			"email" => [self::RULE_REQUIRED, self::RULE_EMAIL],
			"body" => [self::RULE_REQUIRED],
		];
	}

	public function labels(): array
	{
		return [
			"subject" => 'Enter your Subject',
			"email" => "Your email",
			"body" => "Body",
		];
	}

	public function send()
	{
		return true;
	}
}
