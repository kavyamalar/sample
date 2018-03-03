<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Emp $emp
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $emp->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $emp->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Emp'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="emp form large-9 medium-8 columns content">
    <?= $this->Form->create($emp) ?>
    <fieldset>
        <legend><?= __('Edit Emp') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('gender');
            echo $this->Form->control('email');
            echo $this->Form->control('mobile');
            echo $this->Form->control('account');
            echo $this->Form->control('department');
            echo $this->Form->control('salary');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
