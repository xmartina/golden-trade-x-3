<?php /* Smarty version 3.1.27, created on 2023-10-08 00:45:15
         compiled from "my:rates_bottom" */ ?>
<?php
/*%%SmartyHeaderCode:21190172186521fb9bc69cf4_04511915%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd00238fa58650c64a3075c5be273de7e32db5e8d' => 
    array (
      0 => 'my:rates_bottom',
      1 => 1696725915,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '21190172186521fb9bc69cf4_04511915',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_6521fb9bc72264_23272208',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_6521fb9bc72264_23272208')) {
function content_6521fb9bc72264_23272208 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '21190172186521fb9bc69cf4_04511915';
?>
 </td><td align=right> <form method=get> <input type=hidden name=a value="holidays"> <input type=submit value="Holidays" class=sbmt size=15> </form> </td> </tr> </table> <br> <?php echo $_smarty_tpl->getSubTemplate ("my:start_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 Investment packages:<br> You can create unlimited sets of investment packages with any settings and payout options. Also you can change status of any package. <li> Active package. All active users will receive earnings every pay period if made a deposit</li> <li> Inactive package. Users will not receive any earnings</li> <br><br> Here you can view, edit and delete your packages and plans. <?php echo $_smarty_tpl->getSubTemplate ("my:end_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>