<?php /* Smarty version 3.1.27, created on 2023-10-06 21:09:17
         compiled from "/home/multistream6/domains/goldentradex.online/public_html/tmpl/referals.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:8146260636520777da57366_07146936%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1aabd2fb961ae91a2072d0bae4fe53b7e8a6949' => 
    array (
      0 => '/home/multistream6/domains/goldentradex.online/public_html/tmpl/referals.tpl',
      1 => 1692455841,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8146260636520777da57366_07146936',
  'variables' => 
  array (
    'total_ref' => 0,
    'active_ref' => 0,
    'currency_sign' => 0,
    'commissions' => 0,
    'settings' => 0,
    'userinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_6520777da79473_54029329',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_6520777da79473_54029329')) {
function content_6520777da79473_54029329 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/multistream6/domains/goldentradex.online/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '8146260636520777da57366_07146936';
$_smarty_tpl->tpl_vars['pageName'] = new Smarty_Variable("Referral Page", null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


            <div class="row">
                <div class="col-md-12">

                    <h3>Your Referrals:</h3><br>
                    <br>
                    <table width="300" cellspacing="1" cellpadding="1" class="tab">
                        <tbody><tr>
                            <td class="item">Referrals:</td>
                            <td class="item"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['total_ref']->value);?>
</td>
                        </tr><tr>
                            <td class="item">Active referrals:</td>
                            <td class="item"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['active_ref']->value);?>
</td>
                        </tr><tr>
                            <td class="item">Total referral commission:</td>
                            <td class="item"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['commissions']->value);?>
</td>
                        </tr>
                        </tbody></table>
                    <br>


                    <div class="card">
                        <div class="card-body">
                            <p>Your Unique Referral Link: copy and share <a href="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/?ref=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['username']);?>
"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/?ref=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['username']);?>
</a>
                            </p>


                        </div>

                    </div>
                </div>
                <br>


            </div></div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>