<?php
/* Smarty version 3.1.43, created on 2022-10-10 19:08:50
  from 'D:\Programs\Wamp\www\aryovaLive\admin\themes\default\template\controllers\shop\helpers\tree\shop_tree_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63446dc2af9175_80030147',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '465cb39bc644a66534f51b32eba3cf31acad5d11' => 
    array (
      0 => 'D:\\Programs\\Wamp\\www\\aryovaLive\\admin\\themes\\default\\template\\controllers\\shop\\helpers\\tree\\shop_tree_header.tpl',
      1 => 1665428247,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63446dc2af9175_80030147 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel-heading">
	<?php if ((isset($_smarty_tpl->tpl_vars['title']->value))) {?><i class="icon-sitemap"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl ) );
}?>
	<div class="pull-right">
		<?php if ((isset($_smarty_tpl->tpl_vars['toolbar']->value))) {
echo $_smarty_tpl->tpl_vars['toolbar']->value;
}?>
	</div>
</div>
<?php }
}
