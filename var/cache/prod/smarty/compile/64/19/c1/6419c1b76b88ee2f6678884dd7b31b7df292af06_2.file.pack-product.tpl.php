<?php
/* Smarty version 3.1.43, created on 2022-10-10 19:08:57
  from 'D:\Programs\Wamp\www\aryovaLive\themes\classic\templates\catalog\_partials\miniatures\pack-product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63446dc96e60d5_80194938',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6419c1b76b88ee2f6678884dd7b31b7df292af06' => 
    array (
      0 => 'D:\\Programs\\Wamp\\www\\aryovaLive\\themes\\classic\\templates\\catalog\\_partials\\miniatures\\pack-product.tpl',
      1 => 1665428324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63446dc96e60d5_80194938 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_61883162063446dc968d841_85978868', 'pack_miniature_item');
?>

<?php }
/* {block 'pack_miniature_item'} */
class Block_61883162063446dc968d841_85978868 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pack_miniature_item' => 
  array (
    0 => 'Block_61883162063446dc968d841_85978868',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <article>
    <div class="card">
      <div class="pack-product-container">
        <div class="thumb-mask">
          <div class="mask">
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
              <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['default_image']['medium'])) {?>
                <img
                        src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['default_image']['medium']['url'], ENT_QUOTES, 'UTF-8');?>
"
                        <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['default_image']['legend'])) {?>
                          alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['default_image']['legend'], ENT_QUOTES, 'UTF-8');?>
"
                          title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['default_image']['legend'], ENT_QUOTES, 'UTF-8');?>
"
                        <?php } else { ?>
                          alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
                        <?php }?>
                        loading="lazy"
                        data-full-size-image-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['default_image']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
                >
              <?php } else { ?>
                <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['medium_default']['url'], ENT_QUOTES, 'UTF-8');?>
" loading="lazy" />
              <?php }?>
            </a>
          </div>
        </div>

        <div class="pack-product-name">
          <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>

          </a>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['showPackProductsPrice']->value) {?>
          <div class="pack-product-price">
            <strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</strong>
          </div>
        <?php }?>

        <div class="pack-product-quantity">
          <span>x <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['pack_quantity'], ENT_QUOTES, 'UTF-8');?>
</span>
        </div>
      </div>
    </div>
  </article>
<?php
}
}
/* {/block 'pack_miniature_item'} */
}
