<?php
/* Smarty version 3.1.43, created on 2022-10-25 22:25:25
  from '/home/forge/aryova.com/themes/classic/templates/catalog/_partials/category-footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63583825ca1d80_10235197',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0654a8431aae94d02e1429bf7e251fae1a1ac31a' => 
    array (
      0 => '/home/forge/aryova.com/themes/classic/templates/catalog/_partials/category-footer.tpl',
      1 => 1665790389,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63583825ca1d80_10235197 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="js-product-list-footer">
    <?php if ($_smarty_tpl->tpl_vars['category']->value['additional_description'] && $_smarty_tpl->tpl_vars['listing']->value['pagination']['items_shown_from'] == 1) {?>
        <div class="card">
            <div class="card-block category-additional-description">
                <?php echo $_smarty_tpl->tpl_vars['category']->value['additional_description'];?>

            </div>
        </div>
    <?php }?>
</div>
<?php }
}
