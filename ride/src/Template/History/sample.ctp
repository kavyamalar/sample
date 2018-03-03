<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\History $history
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit History'), ['action' => 'edit', $history[0]['id']]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete History'), ['action' => 'delete', $history[0]['id']], ['confirm' => __('Are you sure you want to delete # {0}?', $history[0]['id'])]) ?> </li>
        <li><?= $this->Html->link(__('List History'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New History'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="history view large-9 medium-8 columns content">
    <h3><?= h($history[0]['id']) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($history[0]['email']) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Start Place') ?></th>
            <td><?= h($history[0]['start_place']) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('End Place') ?></th>
            <td><?= h($history[0]['end_place']) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($history[0]['id']) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Travel Date') ?></th>
            <td><?= h($history[0]['travel_date']) ?></td>
        </tr>
    </table>
</div>
