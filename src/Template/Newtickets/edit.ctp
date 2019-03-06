<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Newticket $newticket
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $newticket->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $newticket->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Newtickets'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="newtickets form large-9 medium-8 columns content">
    <?= $this->Form->create($newticket) ?>
    <fieldset>
        <legend><?= __('Edit Newticket') ?></legend>
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
