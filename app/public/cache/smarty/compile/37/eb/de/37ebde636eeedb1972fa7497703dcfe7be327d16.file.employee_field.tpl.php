<?php /* Smarty version Smarty-3.1.19, created on 2017-05-11 22:21:24
         compiled from "/var/app/public/admin/themes/default/template/controllers/logs/employee_field.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9283920675914e3e435da90-03570567%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37ebde636eeedb1972fa7497703dcfe7be327d16' => 
    array (
      0 => '/var/app/public/admin/themes/default/template/controllers/logs/employee_field.tpl',
      1 => 1491856402,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9283920675914e3e435da90-03570567',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'employee_image' => 0,
    'employee_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5914e3e437d274_83341952',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5914e3e437d274_83341952')) {function content_5914e3e437d274_83341952($_smarty_tpl) {?>
<span class="employee_avatar_small">
	<img class="imgm img-thumbnail" alt="" src="<?php echo $_smarty_tpl->tpl_vars['employee_image']->value;?>
" width="32" height="32" />
</span>
<?php echo $_smarty_tpl->tpl_vars['employee_name']->value;?>
<?php }} ?>
