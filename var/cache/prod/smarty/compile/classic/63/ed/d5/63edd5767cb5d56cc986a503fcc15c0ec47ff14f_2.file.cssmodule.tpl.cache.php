<?php
/* Smarty version 3.1.43, created on 2022-10-15 00:48:28
  from '/home/forge/aryova.com/modules/cssmodule/cssmodule.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6349d92c9f4941_65385172',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63edd5767cb5d56cc986a503fcc15c0ec47ff14f' => 
    array (
      0 => '/home/forge/aryova.com/modules/cssmodule/cssmodule.tpl',
      1 => 1665772815,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6349d92c9f4941_65385172 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '15462608136349d92c9ed195_85591989';
?>
<!-- dh42 CSS Module -->
<?php if ((isset($_smarty_tpl->tpl_vars['cssvalue']->value)) && $_smarty_tpl->tpl_vars['cssvalue']->value) {?>
	<style type="text/css">
		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cssvalue']->value, ENT_QUOTES, 'UTF-8');?>

	</style>
<?php }?>
<!-- /dh42 CSS Module -->

<?php }
}
