<?php /* Smarty version 3.1.27, created on 2023-10-06 21:27:45
         compiled from "my:_emailbody_bonus" */ ?>
<?php
/*%%SmartyHeaderCode:72250763265207bd19c2351_40544505%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9facfb8e5558ba6af2671420f60cc1513da744b' => 
    array (
      0 => 'my:_emailbody_bonus',
      1 => 1696627665,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '72250763265207bd19c2351_40544505',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_65207bd19cef58_97471613',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_65207bd19cef58_97471613')) {
function content_65207bd19cef58_97471613 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '72250763265207bd19c2351_40544505';
?>
Hello #name#,

You received a bonus: $#amount#
You can check your statistics here:
#site_url#

Good luck.<?php }
}
?>