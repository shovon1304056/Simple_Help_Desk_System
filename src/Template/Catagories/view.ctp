<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Catagory $catagory
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Catagory'), ['action' => 'edit', $catagory->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Catagory'), ['action' => 'delete', $catagory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $catagory->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Catagories'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Catagory'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="catagories view large-9 medium-8 columns content">
    <h3><?= h($catagory->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('CatagoryName') ?></th>
            <td><?= h($catagory->catagoryname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Priority') ?></th>
            <td><?= h($catagory->priority) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Graph') ?></th>
            <td><?= h($catagory->graph) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Options') ?></th>
            <td><?= h($catagory->options) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($catagory->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tickets') ?></th>
            <td><?= $this->Number->format($catagory->tickets) ?></td>
        </tr>
    </table>
</div>
