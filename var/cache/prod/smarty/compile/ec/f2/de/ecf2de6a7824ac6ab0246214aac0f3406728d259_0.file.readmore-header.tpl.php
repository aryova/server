<?php
/* Smarty version 3.1.43, created on 2022-10-10 19:08:49
  from 'D:\Programs\Wamp\www\aryovaLive\admin\themes\default\template\controllers\modules\readmore-header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63446dc17bb055_61688276',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ecf2de6a7824ac6ab0246214aac0f3406728d259' => 
    array (
      0 => 'D:\\Programs\\Wamp\\www\\aryovaLive\\admin\\themes\\default\\template\\controllers\\modules\\readmore-header.tpl',
      1 => 1665428252,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63446dc17bb055_61688276 (Smarty_Internal_Template $_smarty_tpl) {
?><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
<h3 class="modal-title">
	<div class="module_name">
		<a href="#" class="icon icon-chevron-left" onclick="openModulesList()"></a>
			<?php echo $_smarty_tpl->tpl_vars['displayName']->value;?>

			<small class="text-muted"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'v'),$_smarty_tpl ) );
echo $_smarty_tpl->tpl_vars['version']->value;?>
 - <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'by'),$_smarty_tpl ) );?>
 <?php echo $_smarty_tpl->tpl_vars['author']->value;?>
</small>
	</div>
</h3>
<?php }
}
