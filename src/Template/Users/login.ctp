<?php
$myTemplates = [
    'inputContainer' => '<div class="input {{type}}{{required}} {{cntClass}}">{{content}}</div>',
];
$this->Form->setTemplates($myTemplates);
?>

<?= $this->Form->create(null, ['class' => 'login-form col-lg-2 col-md-3']) ?>
<h1>Login</h1>
<?= $this->Form->control('login', ['class' => 'form-control form-control-sm', 'templateVars' => ['cntClass' => 'mt-3 mb-3']]) ?>
<?= $this->Form->control('password', ['class' => 'form-control form-control-sm', 'templateVars' => ['cntClass' => 'mb-3']]) ?>
<?= $this->Form->button('Login', ['class' => 'btn btn-primary btn-sm']) ?>
<?= $this->Form->end() ?>