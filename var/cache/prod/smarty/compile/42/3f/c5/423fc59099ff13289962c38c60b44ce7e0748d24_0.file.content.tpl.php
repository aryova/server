<?php
/* Smarty version 3.1.43, created on 2022-11-24 19:07:45
  from '/home/forge/aryova.com/admin4410s3hge/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_637fa4e1651201_65491864',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '423fc59099ff13289962c38c60b44ce7e0748d24' => 
    array (
      0 => '/home/forge/aryova.com/admin4410s3hge/themes/default/template/content.tpl',
      1 => 1665786218,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_637fa4e1651201_65491864 (Smarty_Internal_Template $_smarty_tpl) {
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
