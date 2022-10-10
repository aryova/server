<?php
/* Smarty version 3.1.43, created on 2022-10-10 19:09:01
  from 'D:\Programs\Wamp\www\aryovaLive\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63446dcd76b769_08990647',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b73cc0e5f56b07ceefc7b9f4177cb41a82d37aff' => 
    array (
      0 => 'D:\\Programs\\Wamp\\www\\aryovaLive\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1665428325,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63446dcd76b769_08990647 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'D:\\Programs\\Wamp\\www\\aryovaLive\\var\\cache\\prod\\smarty\\compile\\b7\\3c\\c0\\b73cc0e5f56b07ceefc7b9f4177cb41a82d37aff_2.file.helpers.tpl.php',
    'uid' => 'b73cc0e5f56b07ceefc7b9f4177cb41a82d37aff',
    'call_name' => 'smarty_template_function_renderLogo_188358309363446dcd639577_39520803',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_188358309363446dcd639577_39520803 */
if (!function_exists('smarty_template_function_renderLogo_188358309363446dcd639577_39520803')) {
function smarty_template_function_renderLogo_188358309363446dcd639577_39520803(Smarty_Internal_Template $_smarty_tpl,$params) {
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
/*/ smarty_template_function_renderLogo_188358309363446dcd639577_39520803 */
}
