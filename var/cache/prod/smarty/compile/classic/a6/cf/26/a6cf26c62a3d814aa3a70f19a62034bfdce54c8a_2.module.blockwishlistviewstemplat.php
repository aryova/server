<?php
/* Smarty version 3.1.43, created on 2022-10-27 13:35:34
  from 'module:blockwishlistviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_635a5ef6a7d2e7_72426977',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6cf26c62a3d814aa3a70f19a62034bfdce54c8a' => 
    array (
      0 => 'module:blockwishlistviewstemplat',
      1 => 1665786220,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_635a5ef6a7d2e7_72426977 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div
    class="wishlist-toast"
    data-rename-wishlist-text="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wishlist name modified!','d'=>'Modules.Blockwishlist.Shop'),$_smarty_tpl ) );?>
"
    data-added-wishlist-text="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product added to wishlist!','d'=>'Modules.Blockwishlist.Shop'),$_smarty_tpl ) );?>
"
    data-create-wishlist-text="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wishlist created!','d'=>'Modules.Blockwishlist.Shop'),$_smarty_tpl ) );?>
"
    data-delete-wishlist-text="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wishlist deleted!','d'=>'Modules.Blockwishlist.Shop'),$_smarty_tpl ) );?>
"
    data-copy-text="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Share link copied!','d'=>'Modules.Blockwishlist.Shop'),$_smarty_tpl ) );?>
"
    data-delete-product-text="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product deleted!','d'=>'Modules.Blockwishlist.Shop'),$_smarty_tpl ) );?>
"
  ></div>
<?php }
}
