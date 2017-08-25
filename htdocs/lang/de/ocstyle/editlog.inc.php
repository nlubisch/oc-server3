<?php
/****************************************************************************
 * ./lang/de/ocstyle/editlog.inc.php
 * -------------------
 * begin                : Mon July 5 2004
 *
 * For license information see LICENSE.md
 ****************************************************************************/

/****************************************************************************
 *
 *
 * language vars
 ****************************************************************************/

$submit = _('Save');

$error_wrong_node = _('This log entry has been created on another Opencaching website. The cache can only be edited there.');

$date_message = '<span class="errormsg">' . _('date or time is invalid') . '</span>';
$smiley_link = '<a href="javascript:insertSmiley(\'{smiley_symbol}\',\'{smiley_file}\')">{smiley_image}</a>';

$log_pw_field = '<tr><td colspan="2">' . _('passwort to log:') . ' <input class="input100" type="text" name="log_pw" maxlength="20" value="" /> (' . _('only for found logs') . ')</td></tr>
                    <tr><td class="spacer" colspan="2"></td></tr>';
$log_pw_field_pw_not_ok = '<tr><td colspan="2">' . _('passwort to log:') . ' <input type="text" name="log_pw" maxlength="20" size="20" value=""/><span class="errormsg"> ' . _('Invalid password!') . '</span></td></tr><tr><td class="spacer" colspan="2"></td></tr>';

$teamcomment_field = '&nbsp; <input type="checkbox" name="teamcomment" value="1" class="checkbox" {chk_sel} id="teamcomment" /> <label for="teamcomment">' . _('OC team comment') . "</label>";

$type_edit_disabled = 'disabled class="disabled"';
