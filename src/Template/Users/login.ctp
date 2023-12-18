<?= $this->Form->create(null, ['class' => 'login-form']) ?>
<h1>Login</h1>
<?= $this->Form->control('login') ?>
<?= $this->Form->control('password') ?>
<?= $this->Form->button('Login') ?>
<?= $this->Form->end() ?>