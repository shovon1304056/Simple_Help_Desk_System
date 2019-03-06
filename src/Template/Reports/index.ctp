<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Report[]|\Cake\Collection\CollectionInterface $reports
 */
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
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

<!-- TABS -->
<div id="tab1" class="tabberlive" style="margin-top:0px">

    <ul class="tabbernav">
        <li class="tabberactive"><a title="Run reports" href="javascript:void(null);" onclick="javascript:alert('The reports section lets you run several reports and see ticket statistics in a chosen date range.')">Run reports [?]</a></li>
        <li class=""><a title="Export tickets" href="export.php">Export tickets</a></li>	</ul>

    <div class="tabbertab">

        &nbsp;

        <!-- ** START REPORTS FORM ** -->

        <form action="reports.php" method="get" name="form1">

            <table border="0" cellpadding="3" cellspacing="0" width="100%">
                <tbody><tr>
                    <td width="20%" class="alignTop"><b>Date range</b>: &nbsp; </td>
                    <td width="80%">
                        <!-- START DATE -->
                        <input type="radio" name="w" value="0" id="w0" checked="checked">
                        <select name="time" onclick="document.getElementById('w0').checked = true" onfocus="document.getElementById('w0').checked = true" style="margin-top:5px;margin-bottom:5px;">
                            <option value="1">Today (Monday)</option>
                            <option value="2">Yesterday (Sunday)</option>
                            <option value="3" selected="selected">This month (February)</option>
                            <option value="4">Last month (January)</option>
                            <option value="5">Last 30 days</option>
                            <option value="6">This week (Mon-Sun)</option>
                            <option value="7">Last week (Mon-Sun)</option>
                            <option value="8">This business week (Mon-Fri)</option>
                            <option value="9">Last business week (Mon-Fri)</option>
                            <option value="10">This year (2019)</option>
                            <option value="11">Last year (2018)</option>
                            <option value="12">All time</option>
                        </select>

                        <br>

                        <input type="radio" name="w" value="1" id="w1">
                        From <input type="text" name="datefrom" value="01/18/2019" id="datefrom" class="tcal tcalInput" size="10" onclick="document.getElementById('w1').checked = true" onfocus="document.getElementById('w1').checked = true;this.focus;">
                        to <input type="text" name="dateto" value="02/18/2019" id="dateto" class="tcal tcalInput" size="10" onclick="document.getElementById('w1').checked = true" onfocus="document.getElementById('w1').checked = true; this.focus;">
                        <!-- END DATE -->

                    </td>
                </tr>
                <tr>
                    <td width="20%" class="borderTop alignTop"><b>Report type</b>: &nbsp; </td>
                    <td width="80%" class="borderTop">
                        <!-- START TYPE -->
                        <select name="type" style="margin-top:5px;margin-bottom:5px;">
                            <option value="1" selected="selected">Tickets per day</option>
                            <option value="2">Tickets per month</option>
                            <option value="3">Tickets per user</option>
                            <option value="4">Tickets per category</option>
                        </select>
                        <!-- END TYPE -->

                    </td>
                </tr>
                </tbody></table>

            <td>
                <?php echo  $this->html->link('Add Reports',
                    ['action'=>'add'],
                    ['class'=>'btn btn-primary']);?>

            </td>

        </form>

        <!-- ** END REPORTS FORM ** -->

    </div>

</div>
<!-- TABS -->

<p>&nbsp;</p>



<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Report'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="reports index large-9 medium-8 columns content">
    <h3><?= __('Reports') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Newtickes') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Open') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Resolved') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($reports as $report): ?>
            <tr>
                <td><?= $this->Number->format($report->id) ?></td>
                <td><?= h($report->Date) ?></td>
                <td><?= $this->Number->format($report->Newtickes) ?></td>
                <td><?= $this->Number->format($report->Open) ?></td>
                <td><?= $this->Number->format($report->Resolved) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $report->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $report->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $report->id], ['confirm' => __('Are you sure you want to delete # {0}?', $report->id)]) ?>
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
