<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Task[]|\Cake\Collection\CollectionInterface $tasks
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Add New Task'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tasks index large-9 medium-8 columns content">
    <h3><?= __('Tasks') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col">Description</th>
                <th scope="col"><?= $this->Paginator->sort('date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('completed') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tasks as $task): ?>
            <tr>
                <td class="actions">
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $task->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $task->id], ['confirm' => __('Are you sure you want to delete # {0}?', $task->id)]) ?>
                </td>
                <td><?= h($task->title) ?></td>
                <td><?= h($task->description) ?></td>
                <td><?= h($task->date) ?></td>
                <td><?= $this->Form->checkbox('completed', ['checked' => $task->completed]); ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
