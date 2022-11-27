<?php
/* Smarty version 3.1.43, created on 2022-11-24 18:23:30
  from '/home/forge/aryova.com/modules/ps_facebook/views/templates/hook/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_637f9a82c4bba3_64605441',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4bcadb1db41a0964610a8d2d40f11ab7feaff1d6' => 
    array (
      0 => '/home/forge/aryova.com/modules/ps_facebook/views/templates/hook/header.tpl',
      1 => 1666705384,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./fbTrack.tpl' => 1,
  ),
),false)) {
function content_637f9a82c4bba3_64605441 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Facebook Pixel Code -->

<?php echo '<script'; ?>
>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod? n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';n.agent='plprestashop-download'; // n.agent to keep because of partnership
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script', 'https://connect.facebook.net/en_US/fbevents.js');

    // Allow third-party modules to disable Pixel
    fbq('consent', !!window.doNotConsentToPixel ? 'revoke' : 'grant');

<?php if ((isset($_smarty_tpl->tpl_vars['userInfos']->value))) {?>
            fbq('init', '<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_pixel']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
', <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['userInfos']->value ));?>
);
        <?php } else { ?>
            fbq('init', '<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_pixel']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
');
        <?php }?>

    fbq('track', 'PageView');
    var pixel_fc = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pixel_fc']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
";
<?php echo '</script'; ?>
>

<noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_pixel']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
&ev=PageView&noscript=1"/>
</noscript>

<!-- End Facebook Pixel Code -->

<!-- Set Facebook Pixel Product Export -->
<?php if ((isset($_smarty_tpl->tpl_vars['page']->value))) {?>
  <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {?>
      <meta property="og:type" content="product">
      <meta property="og:url" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
">
      <meta property="og:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');?>
">
      <meta property="og:site_name" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
      <meta property="og:description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');?>
">
      <meta property="og:image" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
">
      <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
          <meta property="product:pretax_price:amount" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_tax_exc'], ENT_QUOTES, 'UTF-8');?>
">
          <meta property="product:pretax_price:currency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
          <meta property="product:price:amount" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_amount'], ENT_QUOTES, 'UTF-8');?>
">
          <meta property="product:price:currency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
      <?php }?>
      <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['weight'])) && ($_smarty_tpl->tpl_vars['product']->value['weight'] != 0)) {?>
          <meta property="product:weight:value" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['weight'], ENT_QUOTES, 'UTF-8');?>
">
          <meta property="product:weight:units" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['weight_unit'], ENT_QUOTES, 'UTF-8');?>
">
      <?php }?>
      <?php if ((isset($_smarty_tpl->tpl_vars['product_manufacturer']->value->id))) {?>
        <meta property="product:brand" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_manufacturer']->value->name, ENT_QUOTES, 'UTF-8');?>
">
      <?php }?>
      <meta property="product:availability" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_availability']->value, ENT_QUOTES, 'UTF-8');?>
">
      <meta property="product:condition" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['embedded_attributes']['condition'], ENT_QUOTES, 'UTF-8');?>
">
      <meta property="product:retailer_item_id" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['retailer_item_id']->value, ENT_QUOTES, 'UTF-8');?>
">
      <meta property="product:item_group_id" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
">
      <meta property="product:category" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_group_id']->value, ENT_QUOTES, 'UTF-8');?>
"/>
  <?php }
}?>
<!-- END OF Set Facebook Pixel Product Export -->

<?php $_smarty_tpl->_subTemplateRender("file:./fbTrack.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
