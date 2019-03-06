<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Newticket[]|\Cake\Collection\CollectionInterface $newtickets
 */
?>
<!DOCTYPE html>
<html>
<head>

    <?= $this->Html->meta('icon') ?>

    <?php echo $this->html->css("bootstrap.min.css"); ?>


    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">





    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>



    <table border="0" class="header" cellspacing="0" cellpadding="3">
        <tbody><tr>
            <td align="left">

                <table border="0" align="left" cellpadding="0" cellspacing="0">
                    <tbody><tr>

                        <td>
                            <?php echo  $this->html->link('Home',
                                ['action'=>'../newtickets/index'],
                                ['class'=>'btn btn-primary']);?>
                        </td>
                        <td>&nbsp;&nbsp;&nbsp;</td>

                        <td>
                            <?php echo  $this->html->link('Users',
                                ['action'=>'../users/index'],
                                ['class'=>'btn btn-primary']);?>
                        </td>
                        <td>&nbsp;&nbsp;&nbsp;</td>


                        <td>
                            <?php echo  $this->html->link('Catagories',
                                ['action'=>'../catagories/index'],
                                ['class'=>'btn btn-primary']);?>

                        </td>
                        <td>&nbsp;&nbsp;&nbsp;</td>

                        <td>
                            <?php echo  $this->html->link('Canned',
                                ['action'=>'../canned/index'],
                                ['class'=>'btn btn-primary']);?>

                        </td>
                        <td>&nbsp;&nbsp;&nbsp;</td>


                        <td>
                            <?php echo  $this->html->link('Canned',
                                ['action'=>'../canned/index'],
                                ['class'=>'btn btn-primary']);?>

                        </td>
                        <td>&nbsp;&nbsp;&nbsp;</td>

                        <td>
                            <?php echo  $this->html->link('Knowledgebase',
                                ['action'=>'../knowledgebase/index'],
                                ['class'=>'btn btn-primary']);?>

                        </td>
                        <td>&nbsp;&nbsp;&nbsp;</td>







                        <td>
                            <?php echo  $this->html->link('Reports',
                                ['action'=>'../reports/index'],
                                ['class'=>'btn btn-primary']);?>

                        </td>

                        <td><a href="banned_emails.php"><img src="../img/ico_tools.png" width="26" height="26" border="0" alt="Tools" title="Tools"><br>Tools</a><br><img src="../img/blank.gif" width="50" height="1" alt=""></td>
                        <td>&nbsp;&nbsp;&nbsp;</td>

                        <td><a href="admin_settings.php"><img src="../img/ico_settings.gif" width="26" height="26" border="0" alt="Settings" title="Settings"><br>Settings</a><br><img src="../img/blank.gif" width="50" height="1" alt=""></td>
                        <td>&nbsp;&nbsp;&nbsp;</td>

                        <td>
                            <?php echo  $this->html->link('Profiles',
                                ['action'=>'../profiles/index'],
                                ['class'=>'btn btn-primary']);?>

                        </td>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                        </td>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                        <td>
                            <?php echo  $this->html->link('Mails',
                                ['action'=>'../mails/index'],
                                ['class'=>'btn btn-primary']);?>

                        </td>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                        <td><a href="index.php?a=logout&amp;token=67c03f8887c850309c280e465988f9561e0395aa"><img src="../img/ico_logout.gif" width="26" height="26" border="0" alt="Logout" title="Logout"><br>Logout</a><br><img src="../img/blank.gif" width="50" height="1" alt=""></td>
                    </tr>
                    </tbody></table>

            </td>
        </tr>
        </tbody></table>



</head>
<body>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Catagory'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="catagories index large-9 medium-8 columns content">
    <h3><?= __('Catagories') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('catagoryname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('priority') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tickets') ?></th>
                <th scope="col"><?= $this->Paginator->sort('graph') ?></th>
                <th scope="col"><?= $this->Paginator->sort('options') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($catagories as $catagory): ?>
            <tr>
                <td><?= $this->Number->format($catagory->id) ?></td>
                <td><?= h($catagory->catagoryname) ?></td>
                <td><?= h($catagory->priority) ?></td>
                <td><?= $this->Number->format($catagory->tickets) ?></td>
                <td><?= h($catagory->graph) ?></td>
                <td><?= h($catagory->options) ?>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $catagory->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $catagory->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $catagory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $catagory->id)]) ?>
                </td>


            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>


</body>
</html>
