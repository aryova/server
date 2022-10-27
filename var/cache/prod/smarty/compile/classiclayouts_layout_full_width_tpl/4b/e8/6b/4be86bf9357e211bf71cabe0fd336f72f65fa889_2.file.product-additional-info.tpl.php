<?php
/* Smarty version 3.1.43, created on 2022-10-26 23:59:42
  from '/home/forge/aryova.com/themes/classic/templates/catalog/_partials/product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63599fbe39bd59_45439446',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4be86bf9357e211bf71cabe0fd336f72f65fa889' => 
    array (
      0 => '/home/forge/aryova.com/themes/classic/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1665786221,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63599fbe39bd59_45439446 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info js-product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
