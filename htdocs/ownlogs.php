<?php
/***************************************************************************
 * for license information see LICENSE.md
 ***************************************************************************/

require __DIR__ . '/lib2/web.inc.php';

$tpl->name = 'ownlogs';
$tpl->menuitem = MNU_MYPROFILE_OWNLOGS;

$login->verify();
if ($login->userid == 0) {
    $tpl->redirect('login.php?target=ownlogs.php');
}
$userid = $login->userid;

$tpl->assign('ownlogs', true);

require __DIR__ . '/newlogs.php';
