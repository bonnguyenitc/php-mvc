<?php
$this->title = "Register"
?>
<h1>Create account</h1>

<?php
$form =  \App\Core\Form\Form::begin('', 'post')
?>
<div class="row">
	<div class="col">
		<?php echo $form->field($model, 'firstname') ?>
	</div>
	<div class="col">
		<?php echo $form->field($model, 'lastname') ?>
	</div>
</div>
<?php echo $form->field($model, 'email') ?>
<?php echo $form->field($model, 'password')->passwordField() ?>
<?php echo $form->field($model, 'confirmPassword')->passwordField() ?>
<button type="submit" class="btn btn-primary">Register</button>
<?php
\App\Core\Form\Form::end()
?>
