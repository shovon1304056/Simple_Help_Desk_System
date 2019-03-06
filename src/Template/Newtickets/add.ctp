<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Newticket $newticket
 */
?>

<div class="newtickets form large-9 medium-8 columns content">
    <?= $this->Form->create($newticket) ?>
    <fieldset>
        <legend><?= __('Add Newticket') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('email');
            echo $this->Form->control('priority');
            echo $this->Form->control('subject');
            echo $this->Form->control('message');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
