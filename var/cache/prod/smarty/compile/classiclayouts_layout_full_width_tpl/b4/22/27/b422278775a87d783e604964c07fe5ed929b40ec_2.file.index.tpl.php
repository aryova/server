<?php
/* Smarty version 3.1.43, created on 2022-10-27 12:38:53
  from '/home/forge/aryova.com/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_635a51ad4311c0_12921229',
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
function content_635a51ad4311c0_12921229 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_214847698635a51ad42e538_73109080', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_2127512761635a51ad42eb88_40806142 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_382935900635a51ad42f865_64170615 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_1421874759635a51ad42f4a5_94303528 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_382935900635a51ad42f865_64170615', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_214847698635a51ad42e538_73109080 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_214847698635a51ad42e538_73109080',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_2127512761635a51ad42eb88_40806142',
  ),
  'page_content' => 
  array (
    0 => 'Block_1421874759635a51ad42f4a5_94303528',
  ),
  'hook_home' => 
  array (
    0 => 'Block_382935900635a51ad42f865_64170615',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2127512761635a51ad42eb88_40806142', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1421874759635a51ad42f4a5_94303528', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
