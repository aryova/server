<?php
/* Smarty version 3.1.43, created on 2022-10-10 22:53:41
  from '/home/forge/aryova.com/themes/classic/templates/catalog/_partials/product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63447845ce20d2_90610737',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4be86bf9357e211bf71cabe0fd336f72f65fa889' => 
    array (
      0 => '/home/forge/aryova.com/themes/classic/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1665430658,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63447845ce20d2_90610737 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info js-product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
