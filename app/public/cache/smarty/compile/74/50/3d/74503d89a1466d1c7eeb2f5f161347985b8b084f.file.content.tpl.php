<?php /* Smarty version Smarty-3.1.19, created on 2017-05-11 22:21:15
         compiled from "/var/app/public/admin/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11199716745914e3dbdd9180-18890185%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74503d89a1466d1c7eeb2f5f161347985b8b084f' => 
    array (
      0 => '/var/app/public/admin/themes/default/template/content.tpl',
      1 => 1491856402,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11199716745914e3dbdd9180-18890185',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5914e3dbecb233_25682397',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5914e3dbecb233_25682397')) {function content_5914e3dbecb233_25682397($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
