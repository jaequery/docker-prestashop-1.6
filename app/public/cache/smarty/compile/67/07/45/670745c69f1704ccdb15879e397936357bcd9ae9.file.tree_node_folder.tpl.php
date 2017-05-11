<?php /* Smarty version Smarty-3.1.19, created on 2017-05-11 22:21:53
         compiled from "/var/app/public/admin/themes/default/template/helpers/tree/tree_node_folder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10119483415914e402017809-87326658%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '670745c69f1704ccdb15879e397936357bcd9ae9' => 
    array (
      0 => '/var/app/public/admin/themes/default/template/helpers/tree/tree_node_folder.tpl',
      1 => 1491856402,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10119483415914e402017809-87326658',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'children' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5914e402020387_85876970',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5914e402020387_85876970')) {function content_5914e402020387_85876970($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/var/app/public/tools/smarty/plugins/modifier.escape.php';
?>
<li class="tree-folder">
	<span class="tree-folder-name">
		<i class="icon-folder-close"></i>
		<label class="tree-toggler"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</label>
	</span>
	<ul class="tree">
		<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['children']->value, 'UTF-8');?>

	</ul>
</li><?php }} ?>
