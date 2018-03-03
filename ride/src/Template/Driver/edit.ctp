
<?php
echo $this->Html->css('karthik.css');
?>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Driver $driver
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $driver->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $driver->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Driver'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="driver form large-9 medium-8 columns content">
    <?= $this->Form->create($driver) ?>
    <fieldset>
        <legend><?= __('Edit Driver') ?></legend>
        <?php
            echo $this->Form->control('username');
            echo $this->Form->control('password');
            echo "<strong>Gender</strong>";
            echo '<span style="color:Crimson ;"> *</span>';
            echo " ";
            echo $this->Form->radio(
    'gender',
    [
        ['value' => 'Male', 'text' => 'Mele', 'style' => 'color:red;'],
        ['value' => 'Female', 'text' => 'Female', 'style' => 'color:green;'],
    ]
);
            echo $this->Form->control('dob',array(
    'label' => 'dob   :',
    'type' => 'date',
    'dateFormat' => 'Y-m-d',
    'minYear' => date('Y') - 50,
    'maxYear' => date('Y') - 0,
));
            echo $this->Form->control('mobile');
            echo $this->Form->control('email');
            echo $this->Form->control('bank_name');
            echo $this->Form->control('account_no');
            echo $this->Form->control('licence_no');
            echo $this->Form->control('licence_due',array(
    'label' => 'Licence_due        :',
    'type' => 'date',
    'dateFormat' => 'Y-m-d',
    'minYear' => date('Y') - 50,
    'maxYear' => date('Y') + 80,
));
            echo $this->Form->control('joining_date',array(
    'label' => 'Joining_date   :',
    'type' => 'date',
    'dateFormat' => 'Y-m-d',
    'minYear' => date('Y') - 50,
    'maxYear' => date('Y') - 0,
));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
    <?= $this->Form->end() ?>
</div>
