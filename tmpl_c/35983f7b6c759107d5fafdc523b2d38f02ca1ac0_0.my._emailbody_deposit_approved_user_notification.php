<?php /* Smarty version 3.1.27, created on 2023-10-06 21:21:59
         compiled from "my:_emailbody_deposit_approved_user_notification" */ ?>
<?php
/*%%SmartyHeaderCode:135915636165207a776d9471_93516801%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35983f7b6c759107d5fafdc523b2d38f02ca1ac0' => 
    array (
      0 => 'my:_emailbody_deposit_approved_user_notification',
      1 => 1696627319,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '135915636165207a776d9471_93516801',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_65207a776e5db2_65453874',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_65207a776e5db2_65453874')) {
function content_65207a776e5db2_65453874 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '135915636165207a776d9471_93516801';
?>
Dear #name#

Your deposit has been approved:

Amount: $#amount# of #currency#
Plan: #plan#
#fields#<?php }
}
?>