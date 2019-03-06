<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Newticket $newticket
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Newticket'), ['action' => 'edit', $newticket->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Newticket'), ['action' => 'delete', $newticket->id], ['confirm' => __('Are you sure you want to delete # {0}?', $newticket->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Newtickets'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Newticket'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="newtickets view large-9 medium-8 columns content">
    <h3><?= h($newticket->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($newticket->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($newticket->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Priority') ?></th>
            <td><?= h($newticket->priority) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subject') ?></th>
            <td><?= h($newticket->subject) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Message') ?></th>
            <td><?= h($newticket->message) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($newticket->id) ?></td>
        </tr>
    </table>
</div>
