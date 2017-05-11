<?php /* Smarty version Smarty-3.1.19, created on 2017-05-11 22:21:42
         compiled from "/var/app/public/themes/default-bootstrap/modules/referralprogram/views/templates/front/rules.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3189170925914e3f6a82f70-35114524%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0afb635ae09db2b92d03fdb21ed410dcdbb2ce0e' => 
    array (
      0 => '/var/app/public/themes/default-bootstrap/modules/referralprogram/views/templates/front/rules.tpl',
      1 => 1491856402,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3189170925914e3f6a82f70-35114524',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'xml' => 0,
    'paragraph' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5914e3f6b233d2_01793475',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5914e3f6b233d2_01793475')) {function content_5914e3f6b233d2_01793475($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/var/app/public/tools/smarty/plugins/modifier.replace.php';
?>

<h3><?php echo smartyTranslate(array('s'=>'Referral program rules','mod'=>'referralprogram'),$_smarty_tpl);?>
</h3>

<?php if (isset($_smarty_tpl->tpl_vars['xml']->value)) {?>
<div id="referralprogram_rules">
	<?php if (isset($_smarty_tpl->tpl_vars['xml']->value->body->{$_smarty_tpl->tpl_vars['paragraph']->value})) {?><div class="rte"><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['xml']->value->body->{$_smarty_tpl->tpl_vars['paragraph']->value},"\'","'"),'\"','"');?>
</div><?php }?>
</div>
<?php }?>
<?php }} ?>
