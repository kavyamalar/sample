<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Emp $emp
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Emp'), ['action' => 'edit', $emp->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Emp'), ['action' => 'delete', $emp->id], ['confirm' => __('Are you sure you want to delete # {0}?', $emp->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Emp'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Emp'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="emp view large-9 medium-8 columns content">
    <h3><?= h($emp->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($emp->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gender') ?></th>
            <td><?= h($emp->gender) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($emp->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mobile') ?></th>
            <td><?= h($emp->mobile) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Account') ?></th>
            <td><?= h($emp->account) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Department') ?></th>
            <td><?= h($emp->department) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Salary') ?></th>
            <td><?= h($emp->salary) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($emp->id) ?></td>
        </tr>
    </table>
</div>
