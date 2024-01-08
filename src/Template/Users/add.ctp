<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */

$myTemplates = [
    'inputContainer' => '<div class="input {{type}}{{required}} {{cntClass}}">{{content}}</div>',
];
$this->Form->setTemplates($myTemplates);
?>
<nav class="col-lg-2 col-md-3 columns" id="actions-sidebar">
    <ul class="side-nav nav flex-column">
        <li class="heading"><?= __('Actions') ?></li>
        <li class="nav-item"><?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'nav-link']) ?></li>
    </ul>
</nav>
<div class="users form col-lg-3 col-md-3 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->control('login', ['class' => 'form-control form-control-sm', 'templateVars' => ['cntClass' => 'mt-3 mb-3']]);
            echo $this->Form->control('password', ['class' => 'form-control form-control-sm', 'templateVars' => ['cntClass' => 'mt-3 mb-3']]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary btn-sm']) ?>
    <?= $this->Form->end() ?>
</div>
