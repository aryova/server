<?php
/* Smarty version 3.1.43, created on 2022-10-26 23:25:41
  from '/home/forge/aryova.com/modules/psxmarketingwithgoogle/views/templates/admin/app.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_635997c5cec0b2_46077542',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e94582069c3c08f6667109d5a94558b1ffe86718' => 
    array (
      0 => '/home/forge/aryova.com/modules/psxmarketingwithgoogle/views/templates/admin/app.tpl',
      1 => 1665786221,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_635997c5cec0b2_46077542 (Smarty_Internal_Template $_smarty_tpl) {
?>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<link href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pathApp']->value,'htmlall','UTF-8' ));?>
" rel=preload as=script>

<div id="psxMktgWithGoogleApp"></div>
<?php echo '<script'; ?>
 src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['chunkVendor']->value,'htmlall','UTF-8' ));?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pathApp']->value,'htmlall','UTF-8' ));?>
"><?php echo '</script'; ?>
>

<style>
  /** Hide native multistore module activation panel, because of visual regressions on non-bootstrap content */
  #content.nobootstrap div.bootstrap.panel {
    display: none;
  }
</style>
<?php }
}
