<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Emp[]|\Cake\Collection\CollectionInterface $emp
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Home'), ['controller' => 'Admin','action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Emp'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="emp index large-9 medium-8 columns content">
    <h3><?= __('Emp') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gender') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mobile') ?></th>
                <th scope="col"><?= $this->Paginator->sort('account') ?></th>
                <th scope="col"><?= $this->Paginator->sort('department') ?></th>
                <th scope="col"><?= $this->Paginator->sort('salary') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($emp as $emp): ?>
            <tr>
                <td><?= $this->Number->format($emp->id) ?></td>
                <td><?= h($emp->name) ?></td>
                <td><?= h($emp->gender) ?></td>
                <td><?= h($emp->email) ?></td>
                <td><?= h($emp->mobile) ?></td>
                <td><?= h($emp->account) ?></td>
                <td><?= h($emp->department) ?></td>
                <td><?= h($emp->salary) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $emp->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $emp->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $emp->id], ['confirm' => __('Are you sure you want to delete # {0}?', $emp->id)]) ?>
                </td>
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
