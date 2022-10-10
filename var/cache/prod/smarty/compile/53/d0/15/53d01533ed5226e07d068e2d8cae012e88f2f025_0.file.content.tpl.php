<?php
/* Smarty version 3.1.43, created on 2022-10-10 22:51:00
  from '/home/forge/aryova.com/admin850vxuo7f/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_634477a4e55498_31851191',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53d01533ed5226e07d068e2d8cae012e88f2f025' => 
    array (
      0 => '/home/forge/aryova.com/admin850vxuo7f/themes/default/template/content.tpl',
      1 => 1665430657,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634477a4e55498_31851191 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
