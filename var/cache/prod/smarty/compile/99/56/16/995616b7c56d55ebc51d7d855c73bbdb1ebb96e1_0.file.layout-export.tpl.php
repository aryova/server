<?php
/* Smarty version 3.1.43, created on 2022-10-10 19:08:56
  from 'D:\Programs\Wamp\www\aryovaLive\admin\themes\default\template\layout-export.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63446dc83fdb78_74010606',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '995616b7c56d55ebc51d7d855c73bbdb1ebb96e1' => 
    array (
      0 => 'D:\\Programs\\Wamp\\www\\aryovaLive\\admin\\themes\\default\\template\\layout-export.tpl',
      1 => 1665428245,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63446dc83fdb78_74010606 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['export_precontent']->value;
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['export_headers']->value, 'header');
$_smarty_tpl->tpl_vars['header']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['header']->value) {
$_smarty_tpl->tpl_vars['header']->do_else = false;
echo $_smarty_tpl->tpl_vars['text_delimiter']->value;
echo $_smarty_tpl->tpl_vars['header']->value;
echo $_smarty_tpl->tpl_vars['text_delimiter']->value;?>
;<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['export_content']->value, 'line');
$_smarty_tpl->tpl_vars['line']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['line']->value) {
$_smarty_tpl->tpl_vars['line']->do_else = false;
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['line']->value, 'content');
$_smarty_tpl->tpl_vars['content']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['content']->value) {
$_smarty_tpl->tpl_vars['content']->do_else = false;
echo $_smarty_tpl->tpl_vars['text_delimiter']->value;
echo $_smarty_tpl->tpl_vars['content']->value;
echo $_smarty_tpl->tpl_vars['text_delimiter']->value;?>
;<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
