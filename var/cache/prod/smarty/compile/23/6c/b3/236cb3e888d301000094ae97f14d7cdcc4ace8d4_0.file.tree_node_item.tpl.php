<?php
/* Smarty version 3.1.43, created on 2022-10-10 19:08:55
  from 'D:\Programs\Wamp\www\aryovaLive\admin\themes\default\template\helpers\tree\tree_node_item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63446dc7a323b0_16279039',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '236cb3e888d301000094ae97f14d7cdcc4ace8d4' => 
    array (
      0 => 'D:\\Programs\\Wamp\\www\\aryovaLive\\admin\\themes\\default\\template\\helpers\\tree\\tree_node_item.tpl',
      1 => 1665428255,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63446dc7a323b0_16279039 (Smarty_Internal_Template $_smarty_tpl) {
?>
<li class="tree-item">
	<span class="tree-item-name">
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li>
<?php }
}
