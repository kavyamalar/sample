<?php
echo $this->Html->css('karthik.css');
?>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Taxi $taxi
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $taxi->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $taxi->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Taxi'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="taxi form large-9 medium-8 columns content">
    <?= $this->Form->create($taxi) ?>
    <fieldset>
        <legend><?= __('Edit Taxi') ?></legend>
        <?php
            echo $this->Form->control('taxi_number');
            echo $this->Form->control('model');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
    <?= $this->Form->end() ?>
</div>
