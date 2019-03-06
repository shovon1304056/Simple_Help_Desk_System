<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Catagory $catagory
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $catagory->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $catagory->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Catagories'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="catagories form large-9 medium-8 columns content">
    <?= $this->Form->create($catagory) ?>
    <fieldset>
        <legend><?= __('Edit Catagory') ?></legend>
        <?php
            echo $this->Form->control('catagoryname');
            echo $this->Form->control('priority');
            echo $this->Form->control('tickets');
            echo $this->Form->control('graph');
            echo $this->Form->control('options');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
