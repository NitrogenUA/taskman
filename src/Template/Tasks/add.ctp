<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Task $task
 */

$myTemplates = [
    'inputContainer' => '<div class="input {{type}}{{required}} {{cntClass}}">{{content}}</div>',
];
$this->Form->setTemplates($myTemplates);
?>
<nav class="col-lg-2 col-md-3 columns" id="actions-sidebar">
    <ul class="side-nav nav flex-column">
        <li class="heading"><?= __('Actions') ?></li>
        <li class="nav-item"><?= $this->Html->link(__('List Tasks'), ['action' => 'index'], ['class' => 'nav-link']) ?></li>
    </ul>
</nav>
<div class="tasks form col-lg-3 col-md-3 columns content">
    <?= $this->Form->create($task) ?>
    <fieldset>
        <legend><?= __('Add Task') ?></legend>
        <?php
            echo $this->Form->control('title', ['class' => 'form-control form-control-sm', 'templateVars' => ['cntClass' => 'mt-3 mb-3']]);
            echo $this->Form->control('description', ['class' => 'form-control form-control-sm', 'templateVars' => ['cntClass' => 'mb-3']]);
            echo $this->Form->label('date');
            echo $this->Form->text('date', ['type' => 'date', 'id' => 'date', 'class' => 'form-control form-control-sm mb-3']);
            echo $this->Form->control('completed', ['label' => ['class' => 'form-check-label'], 'class' => 'form-check-input', 'templateVars' => ['cntClass' => 'form-check mb-3']]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary btn-sm']) ?>
    <?= $this->Form->end() ?>
</div>
