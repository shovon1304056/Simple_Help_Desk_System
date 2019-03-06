<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Canned $canned
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $canned->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $canned->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Canned'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="canned form large-9 medium-8 columns content">
    <?= $this->Form->create($canned) ?>
    <fieldset>
        <legend><?= __('Edit Canned') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('message');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
