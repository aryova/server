<?php
/* Smarty version 3.1.43, created on 2022-10-27 12:38:59
  from '/home/forge/aryova.com/themes/classic/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_635a51b334bfe5_29102880',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5744d87086a2b57406bf7536e1e7ee2bdc7487d1' => 
    array (
      0 => '/home/forge/aryova.com/themes/classic/templates/_partials/helpers.tpl',
      1 => 1665786221,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_635a51b334bfe5_29102880 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/home/forge/aryova.com/var/cache/prod/smarty/compile/classiclayouts_layout_full_width_tpl/57/44/d8/5744d87086a2b57406bf7536e1e7ee2bdc7487d1_2.file.helpers.tpl.php',
    'uid' => '5744d87086a2b57406bf7536e1e7ee2bdc7487d1',
    'call_name' => 'smarty_template_function_renderLogo_220833096635a51b33497e5_58942152',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_220833096635a51b33497e5_58942152 */
if (!function_exists('smarty_template_function_renderLogo_220833096635a51b33497e5_58942152')) {
function smarty_template_function_renderLogo_220833096635a51b33497e5_58942152(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_220833096635a51b33497e5_58942152 */
}
