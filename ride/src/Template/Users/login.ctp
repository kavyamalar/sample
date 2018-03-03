<?php
echo $this->Html->css('karthik.css');
?>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        
    </ul>
</nav>
<br>

<div class="taxi form large-4 medium-8 columns content" align="text-center">
    <div class="panel">
        <h2 class="text-center">Login</h2>
        <?= $this->Form->create(); ?>
            <?= $this->Form->input('email'); ?>
            <?= $this->Form->input('password', array('type' => 'password')); ?>
    </div>

            <?= $this->Form->button(__('Signin'),['class'=>'btn btn-primary']) ?>
            
        <?= $this->Form->end(); ?>
    
</div>