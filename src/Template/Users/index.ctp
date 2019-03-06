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
                            <?php echo  $this->html->link('Knowledgebase',
                                ['action'=>'../knowledgebase/index'],
                                ['class'=>'btn btn-primary']);?>

                        </td>
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
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users index large-9 medium-8 columns content">
    <h3><?= __('Users') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
        <tr>
            <th class="admin_white" style="text-align:left scope="col"><?= $this->Paginator->sort('id') ?></th>
            <th class="admin_white" style="text-align:left scope="col"><?= $this->Paginator->sort('name') ?></th>
            <th class="admin_white" style="text-align:left scope="col"><?= $this->Paginator->sort('email') ?></th>
            <th class="admin_white" style="text-align:left scope="col"><?= $this->Paginator->sort('username') ?></th>
            <th class="admin_white" style="text-align:center;white-space:nowrap;width:1px;scope="col"><?= $this->Paginator->sort('Adminstrator') ?></th>
            <th scope="col"><?= $this->Paginator->sort('rating') ?></th>
            <th scope="col"><?= $this->Paginator->sort('options') ?></th>

        </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->id) ?></td>
                <td><?= h($user->name) ?></td>
                <td><?= h($user->email) ?></td>
                <td><?= h($user->username) ?></td>
                <td><?= h($user->Adminstrator) ?></td>
                <td><?= h($user->rating) ?></td>
                <td><?= h($user->options) ?>

                    <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>

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



    <div class="container">
        <h3>Add new user</h3>



        <ul class="nav nav-pills">

            <li><a data-toggle="pill" href="#menu1">Profile Information</a></li>
            <li><a data-toggle="pill" href="#menu2">Permissions</a></li>
            <li><a data-toggle="pill" href="#menu3">Signature</a></li>
            <li><a data-toggle="pill" href="#menu4">Preferences</a></li>
            <li><a data-toggle="pill" href="#menu5">Notifications</a></li>
        </ul>

        <div class="tab-content">

            <?php echo $this->html->css("https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"); ?>


            <?php echo $this->html->script("https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"); ?>

            <?php echo $this->html->script("https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"); ?>



        </div>
        <div>
            <div id="menu1" class="tab-pane fade in active">

                <td style="width:25%;">

                    <?php echo  $this->html->link('Click here to give information',
                        ['action'=>'add'],
                        ['class'=>'btn btn-primary']);?>



                </td>


                <div class="tabbertab  " title="">


                </div>



            </div>
            <div id="menu2" class="tab-pane fade">


                <h2>Permissions</h2>
                <div class="tabbertab tabbertabhide" title="">
                    &nbsp;<br>

                    <table border="0" width="100%">
                        <tbody><tr>
                            <td valign="top" width="200" style="text-align:right">Account type:</td>
                            <td valign="top">

                                <label><input type="radio" name="isadmin" value="1" onchange="Javascript:hesk_toggleLayerDisplay('options')" checked="checked"> <b>Administrator</b> (access to all features and categories)</label><br>
                                <label><input type="radio" name="isadmin" value="0" onchange="Javascript:hesk_toggleLayerDisplay('options')"> <b>Staff</b> (you can limit features and categories)</label>

                            </td>
                        </tr>
                        </tbody></table>

                    &nbsp;<br>

                    <div id="options" style="display: none;">

                        <table border="0" width="100%">
                            <tbody><tr>
                                <td valign="top" width="200" style="text-align:right">Categories: <font class="important">*</font></td>
                                <td valign="top">
                                    <label><input type="checkbox" name="categories[]" value="1" checked="checked">General</label><br> 		&nbsp;
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">&nbsp;</td>
                            </tr>

                            <tr>
                                <td valign="top" width="200" style="text-align:right">Features: <font class="important">*</font></td>
                                <td valign="top">
                                    <label><input type="checkbox" id="can_view_tickets" name="features[]" value="can_view_tickets" checked="checked">View tickets</label><br> <label><input type="checkbox" id="can_reply_tickets" name="features[]" value="can_reply_tickets" checked="checked">Reply to tickets</label><br> <label><input type="checkbox" id="can_del_tickets" name="features[]" value="can_del_tickets">Delete tickets</label><br> <label><input type="checkbox" id="can_edit_tickets" name="features[]" value="can_edit_tickets">Edit ticket replies</label><br> <label><input type="checkbox" id="can_merge_tickets" name="features[]" value="can_merge_tickets">Merge tickets</label><br> <label><input type="checkbox" id="can_resolve" name="features[]" value="can_resolve" checked="checked">Can resolve tickets</label><br> <label><input type="checkbox" id="can_submit_any_cat" name="features[]" value="can_submit_any_cat" checked="checked">Can submit tickets to any category</label><br> <label><input type="checkbox" id="can_del_notes" name="features[]" value="can_del_notes">Delete any ticket notes</label><br> <label><input type="checkbox" id="can_change_cat" name="features[]" value="can_change_cat" checked="checked">Change ticket category (to any)</label><br> <label><input type="checkbox" id="can_change_own_cat" name="features[]" value="can_change_own_cat">Change ticket category (to allowed)</label><br> <label><input type="checkbox" id="can_man_kb" name="features[]" value="can_man_kb">Manage knowledgebase</label><br> <label><input type="checkbox" id="can_man_users" name="features[]" value="can_man_users">Manage users</label><br> <label><input type="checkbox" id="can_man_cat" name="features[]" value="can_man_cat">Manage categories</label><br> <label><input type="checkbox" id="can_man_canned" name="features[]" value="can_man_canned">Manage canned responses</label><br> <label><input type="checkbox" id="can_man_ticket_tpl" name="features[]" value="can_man_ticket_tpl">Manage ticket templates</label><br> <label><input type="checkbox" id="can_man_settings" name="features[]" value="can_man_settings">Manage help desk settings</label><br> <label><input type="checkbox" id="can_add_archive" name="features[]" value="can_add_archive">Can tag tickets</label><br> <label><input type="checkbox" id="can_assign_self" name="features[]" value="can_assign_self" checked="checked">Can assign tickets to self</label><br> <label><input type="checkbox" id="can_assign_others" name="features[]" value="can_assign_others">Can assign tickets to others</label><br> <label><input type="checkbox" id="can_view_unassigned" name="features[]" value="can_view_unassigned" checked="checked">Can view unassigned tickets</label><br> <label><input type="checkbox" id="can_view_ass_others" name="features[]" value="can_view_ass_others">Can view tickets assigned to others</label><br> <label><input type="checkbox" id="can_view_ass_by" name="features[]" value="can_view_ass_by">Can view tickets he/she assigned to others</label><br> <label><input type="checkbox" id="can_run_reports" name="features[]" value="can_run_reports">Can run reports (own)</label><br> <label><input type="checkbox" id="can_run_reports_full" name="features[]" value="can_run_reports_full">Can run reports (all)</label><br> <label><input type="checkbox" id="can_export" name="features[]" value="can_export">Can export tickets</label><br> <label><input type="checkbox" id="can_view_online" name="features[]" value="can_view_online" checked="checked">Can view online staff members</label><br> <label><input type="checkbox" id="can_ban_emails" name="features[]" value="can_ban_emails">Can ban emails</label><br> <label><input type="checkbox" id="can_unban_emails" name="features[]" value="can_unban_emails">Can unban emails (enables Can ban emails)</label><br> <label><input type="checkbox" id="can_ban_ips" name="features[]" value="can_ban_ips">Can ban ips</label><br> <label><input type="checkbox" id="can_unban_ips" name="features[]" value="can_unban_ips">Can unban ips (enables Can ban ips)</label><br> <label><input type="checkbox" id="can_privacy" name="features[]" value="can_privacy">Can anonymize tickets</label><br> <label><input type="checkbox" id="can_service_msg" name="features[]" value="can_service_msg">Edit service messages</label><br> <label><input type="checkbox" id="can_email_tpl" name="features[]" value="can_email_tpl">Edit email templates</label><br> 		&nbsp;
                                </td>
                            </tr>
                            </tbody></table>

                    </div>

                    &nbsp;<br>&nbsp;

                </div>

            </div>


            <div id="menu3" class="tab-pane fade">
                <div class="tabbertab tabbertabhide" title="">
                    <h2>Signature</h2>

                    &nbsp;<br>

                    <table border="0" width="100%">
                        <tbody><tr>
                            <td valign="top" width="200" style="text-align:right">&nbsp;</td>
                            <td>Signature (max 1000 chars):<br>&nbsp;<br><textarea name="signature" rows="10" cols="60"></textarea><br>
                                HTML code is not allowed. Links will be clickable.</td>
                        </tr>
                        </tbody></table>

                    &nbsp;<br>&nbsp;

                </div>
            </div>

            <div id="menu4" class="tab-pane fade">
                <div class="tabbertab tabbertabhide" title="">
                    <h2>Preferences</h2>

                    &nbsp;<br>

                    <table border="0" width="100%">
                        <tbody><tr>
                            <td style="text-align:right" valign="top" width="200">After replying to a ticket:</td>
                            <td>
                                <label><input type="radio" name="afterreply" value="0" checked="checked"> Show the ticket I just replied to</label><br>
                                <label><input type="radio" name="afterreply" value="1"> Return to main administration page</label><br>
                                <label><input type="radio" name="afterreply" value="2"> Open next ticket that needs my reply</label><br>
                            </td>
                        </tr>
                        <tr>
                            <td cellspan="2">&nbsp;</td>
                        </tr>
                        <tr>
                            <td style="text-align:right" valign="top" width="200">Defaults:</td>
                            <td>
                                <label><input type="checkbox" name="autostart" value="1" checked="checked"> Automatically start timer when I open a ticket</label><br>
                                <label><input type="checkbox" name="notify_customer_new" value="1" checked="checked"> Select notify customer option in the new ticket form</label><br>
                                <label><input type="checkbox" name="notify_customer_reply" value="1" checked="checked"> Select notify customer option in the ticket reply form</label><br>
                                <label><input type="checkbox" name="show_suggested" value="1" checked="checked"> Show what knowledgebase articles were suggested to customers</label><br>
                                <label><input type="checkbox" name="autoreload" value="1"> Automatically reload page with ticket list every:</label>
                                <input type="text" name="reload_time" value="30" size="5" maxlength="5" onkeyup="this.value=this.value.replace(/[^\d]+/,'')">
                                <select name="secmin">
                                    <option value="sec" selected="selected">seconds</option>
                                    <option value="min">minutes</option>
                                </select><br>
                            </td>
                        </tr>
                        </tbody></table>

                    &nbsp;<br>&nbsp;

                </div>
                </form>
            </div>
            <div id="menu5" class="tab-pane fade">
                <div class="tabbertab tabbertabhide" title="">
                    <h2>Notifications</h2>

                    <p>The help desk will send an email notification when:</p>

                    <table border="0" width="100%">
                        <tbody><tr>
                            <td>
                                <label><input type="checkbox" name="notify_new_unassigned" value="1" checked="checked"> A new ticket is submitted with owner: Unassigned</label><br>
                                <label><input type="checkbox" name="notify_new_my" value="1" checked="checked"> A new ticket is submitted with owner: Assigned to me</label><br>
                                <hr>
                                <label><input type="checkbox" name="notify_reply_unassigned" value="1" checked="checked"> Client responds to a ticket with owner: Unassigned</label><br>
                                <label><input type="checkbox" name="notify_reply_my" value="1" checked="checked"> Client responds to a ticket with owner: Assigned to me</label><br>
                                <hr>
                                <label><input type="checkbox" name="notify_assigned" value="1" checked="checked"> A ticket is assigned to me</label><br>
                                <label><input type="checkbox" name="notify_note" value="1" checked="checked"> Someone adds a note to a ticket assigned to me</label><br>
                                <label><input type="checkbox" name="notify_pm" value="1" checked="checked"> A private message is sent to me</label><br>
                            </td>
                        </tr>
                        </tbody></table>

                    &nbsp;<br>&nbsp;

                </div>
            </div>
        </div>

        <div>
            <td style="width:25%;text-align:right">

                <?php echo  $this->html->link('Create User',
                    ['action'=>'add'],
                    ['class'=>'btn btn-primary']);?>



            </td>
        </div>

    </div>




</body>

</html>




