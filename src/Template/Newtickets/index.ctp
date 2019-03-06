<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Newticket[]|\Cake\Collection\CollectionInterface $newtickets
 */
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>

<?= $this->Html->meta('icon') ?>
<!-- <?= $this->Html->css('base.css') ?>  -->
<?php echo $this->html->css("bootstrap.min.css"); ?>
<?php echo $this->html->css("bootstrap-theme.min.css"); ?>

<?php echo $this->html->css("owl.carousel.css"); ?>

<?php echo $this->html->css("owl.theme.default.min.css"); ?>

<?php echo $this->html->css("style.css"); ?>
<?php echo $this->html->css("https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"); ?>
<!--js attach-->

<?php echo $this->html->script("ie-emulation-modes-warning.js"); ?>
<?php echo $this->html->script("https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"); ?>

<<?php echo $this->html->script("http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"); ?>


<?php echo $this->html->script("bootstrap.min.js"); ?>

<?php echo $this->html->script("owl.carousel.min.js"); ?>

<?php echo $this->html->script("cbpAnimatedHeader.js"); ?>

<?php echo $this->html->script("theme-scripts.js"); ?>

<?php echo $this->html->script("ie10-viewport-bug-workaround.js"); ?>





<?= $this->fetch('meta') ?>
<?= $this->fetch('css') ?>
<?= $this->fetch('script') ?>

</head>
<body>


<tr>
    <td style="width:4px; background-image:url(../img/header_left.png); background-repeat:repeat-y; background-position:left;"></td>
    <td>

        <!-- START MENU LINKS -->

        <table border="0" class="header" cellspacing="0" cellpadding="3">
            <tbody><tr>
                <td align="left">

                    <table border="0" align="left" cellpadding="0" cellspacing="0">
                        <tbody><tr>

                            <td>
                            <?php echo  $this->html->link('Home',
                                ['action'=>'index'],
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
                                <?php echo $this->Html->image('webroot/img.ico_canned.gif'); ?>
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

        <!-- END MENU LINKS -->


        <table class="table table-striped table-hover ">
            <thead>
            <tr>

                <th>Name</th>
                <th>Email</th>
                <th>Priority</th>
                <th>Subject</th>
                <th>Message</th>
            </tr>
            </thead>
            <tbody>
            <?php if(!empty($newtickets)):?>
            <?php foreach ($newtickets as $newticket):?>
            <tr>

                <td><?php echo $newticket->name;?></td>
                <td><?php echo $newticket->email;?></td>
                <td><?php echo $newticket->priority;?></td>
                <td><?php echo $newticket->subject;?></td>
                <td><?php echo $newticket->message;?></td>

                <?php endforeach;?>
                <?php else:?>
                    <td>No Record</td>
                <?php endif;?>



                <table style="width:100%;border:none;border-collapse:collapse;"><tbody><tr>

                        <td style="width:25%;text-align:right">

                            <?php echo  $this->html->link('ADD Ticket',
                                ['action'=>'add'],
                                ['class'=>'btn btn-primary']);?>



                        </td>
                    </tr></tbody></table>
                <td style="width:4px; background-image: url(../img/header_right.png); background-repeat:repeat-y; background-position:right;"></td>
            </tr>

            <tr>
                <td style="width:4px; height:4px"><img src="../img/header_bottom_left.png" width="4" height="4" alt=""></td>
                <td style="background-image:url(../img/header_bottom.png); background-repeat:repeat-x; background-position:bottom; height:4px"></td>
                <td style="width:4px; height:4px"><img src="../img/header_bottom_right.png" width="4" height="4" alt=""></td>
            </tr>

            </tbody></table>
        </div>


    </td>
</tr>






        </td>
        <td class="roundcornersright">&nbsp;</td>
    </tr>
    <tr>
        <td><img src="../img/roundcornerslb.jpg" width="7" height="7" alt=""></td>
        <td class="roundcornersbottom"></td>
        <td width="7" height="7"><img src="../img/roundcornersrb.jpg" width="7" height="7" alt=""></td>
    </tr>
    </tbody></table>





<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Newticket'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="newtickets index large-9 medium-8 columns content">
    <h3><?= __('Newtickets') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('priority') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subject') ?></th>
                <th scope="col"><?= $this->Paginator->sort('message') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>

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




