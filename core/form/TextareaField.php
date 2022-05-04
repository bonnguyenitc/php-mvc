<?php

namespace App\Core\Form;

class TextareaField extends BaseField
{
	public function renderInput()
	{
		return sprintf(
			'<textarea  name="%s" value="%s"  class="form-control %s"> </textarea>',
			$this->attribute,
			$this->model->{$this->attribute},
			$this->model->hasError($this->attribute) ? 'is-invalid' : '',
		);
	}
}
