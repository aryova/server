<?php
/* Smarty version 3.1.43, created on 2022-10-10 19:09:00
  from 'D:\Programs\Wamp\www\aryovaLive\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63446dccdfca26_65727834',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59df44fd2345f0f4da9cbce9981cafc3bdaffc56' => 
    array (
      0 => 'D:\\Programs\\Wamp\\www\\aryovaLive\\themes\\classic\\templates\\index.tpl',
      1 => 1665428324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63446dccdfca26_65727834 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_78594874463446dccde4b07_50540569', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_145313512463446dccde8057_27368590 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_160871420763446dccdf0362_56767555 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_205417727963446dccded161_23157597 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_160871420763446dccdf0362_56767555', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_78594874463446dccde4b07_50540569 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_78594874463446dccde4b07_50540569',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_145313512463446dccde8057_27368590',
  ),
  'page_content' => 
  array (
    0 => 'Block_205417727963446dccded161_23157597',
  ),
  'hook_home' => 
  array (
    0 => 'Block_160871420763446dccdf0362_56767555',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_145313512463446dccde8057_27368590', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_205417727963446dccded161_23157597', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
