<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Canned $canned
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Canned'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="canned form large-9 medium-8 columns content">
    <?= $this->Form->create($canned) ?>
    <fieldset>
        <legend><?= __('Add Canned') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('message');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
