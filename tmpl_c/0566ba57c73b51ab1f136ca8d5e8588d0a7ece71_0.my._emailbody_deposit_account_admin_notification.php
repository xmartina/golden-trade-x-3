<?php /* Smarty version 3.1.27, created on 2023-10-05 19:59:07
         compiled from "my:_emailbody_deposit_account_admin_notification" */ ?>
<?php
/*%%SmartyHeaderCode:1816140046651f158b299518_87889448%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0566ba57c73b51ab1f136ca8d5e8588d0a7ece71' => 
    array (
      0 => 'my:_emailbody_deposit_account_admin_notification',
      1 => 1696535947,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '1816140046651f158b299518_87889448',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_651f158b334838_51228414',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_651f158b334838_51228414')) {
function content_651f158b334838_51228414 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1816140046651f158b299518_87889448';
?>
User #username# deposit $#amount# #currency# from account balance to #plan#.

Account: #account#
Batch: #batch#
Compound: #compound#%.
Referrers fee: $#ref_sum#<?php }
}
?>