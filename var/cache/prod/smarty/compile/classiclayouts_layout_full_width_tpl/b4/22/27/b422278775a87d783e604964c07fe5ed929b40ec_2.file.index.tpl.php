<?php
/* Smarty version 3.1.43, created on 2022-10-15 01:23:49
  from '/home/forge/aryova.com/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6349e1758954c6_58953182',
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
function content_6349e1758954c6_58953182 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2956710366349e175892d94_80109582', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_16513234726349e1758932e8_56729657 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_8889394066349e175893f50_60865147 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_861377016349e175893af3_74251897 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8889394066349e175893f50_60865147', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_2956710366349e175892d94_80109582 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_2956710366349e175892d94_80109582',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_16513234726349e1758932e8_56729657',
  ),
  'page_content' => 
  array (
    0 => 'Block_861377016349e175893af3_74251897',
  ),
  'hook_home' => 
  array (
    0 => 'Block_8889394066349e175893f50_60865147',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16513234726349e1758932e8_56729657', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_861377016349e175893af3_74251897', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
