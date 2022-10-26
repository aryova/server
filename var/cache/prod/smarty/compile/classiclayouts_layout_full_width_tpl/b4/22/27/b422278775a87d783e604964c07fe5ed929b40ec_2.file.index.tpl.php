<?php
/* Smarty version 3.1.43, created on 2022-10-26 23:25:22
  from '/home/forge/aryova.com/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_635997b2ce8341_91531462',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b422278775a87d783e604964c07fe5ed929b40ec' => 
    array (
      0 => '/home/forge/aryova.com/themes/classic/templates/index.tpl',
      1 => 1665786221,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_635997b2ce8341_91531462 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_256670787635997b2ce6cb2_85022571', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_88568816635997b2ce6ff3_42494865 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_1998252154635997b2ce7744_57845548 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_932361802635997b2ce74f3_26460249 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1998252154635997b2ce7744_57845548', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_256670787635997b2ce6cb2_85022571 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_256670787635997b2ce6cb2_85022571',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_88568816635997b2ce6ff3_42494865',
  ),
  'page_content' => 
  array (
    0 => 'Block_932361802635997b2ce74f3_26460249',
  ),
  'hook_home' => 
  array (
    0 => 'Block_1998252154635997b2ce7744_57845548',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_88568816635997b2ce6ff3_42494865', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_932361802635997b2ce74f3_26460249', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
