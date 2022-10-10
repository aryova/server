<?php
/* Smarty version 3.1.43, created on 2022-10-10 22:50:35
  from '/home/forge/aryova.com/themes/classic/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6344778b902d55_56736434',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5744d87086a2b57406bf7536e1e7ee2bdc7487d1' => 
    array (
      0 => '/home/forge/aryova.com/themes/classic/templates/_partials/helpers.tpl',
      1 => 1665430658,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6344778b902d55_56736434 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/home/forge/aryova.com/var/cache/prod/smarty/compile/classiclayouts_layout_full_width_tpl/57/44/d8/5744d87086a2b57406bf7536e1e7ee2bdc7487d1_2.file.helpers.tpl.php',
    'uid' => '5744d87086a2b57406bf7536e1e7ee2bdc7487d1',
    'call_name' => 'smarty_template_function_renderLogo_8762989646344778b900130_51495900',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_8762989646344778b900130_51495900 */
if (!function_exists('smarty_template_function_renderLogo_8762989646344778b900130_51495900')) {
function smarty_template_function_renderLogo_8762989646344778b900130_51495900(Smarty_Internal_Template $_smarty_tpl,$params) {
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
/*/ smarty_template_function_renderLogo_8762989646344778b900130_51495900 */
}
