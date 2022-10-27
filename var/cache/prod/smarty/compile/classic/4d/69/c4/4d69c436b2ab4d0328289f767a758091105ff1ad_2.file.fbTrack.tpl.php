<?php
/* Smarty version 3.1.43, created on 2022-10-27 13:35:33
  from '/home/forge/aryova.com/modules/ps_facebook/views/templates/hook/fbTrack.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_635a5ef57e2768_80080901',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d69c436b2ab4d0328289f767a758091105ff1ad' => 
    array (
      0 => '/home/forge/aryova.com/modules/ps_facebook/views/templates/hook/fbTrack.tpl',
      1 => 1666705384,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_635a5ef57e2768_80080901 (Smarty_Internal_Template $_smarty_tpl) {
if (!empty($_smarty_tpl->tpl_vars['type']->value)) {?>
    
        <?php echo '<script'; ?>
>
            fbq(
                '<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['track']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
',
                '<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['type']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
',
                <?php echo $_smarty_tpl->tpl_vars['content']->value;?>
,
                <?php echo $_smarty_tpl->tpl_vars['eventData']->value;?>

            );
        <?php echo '</script'; ?>
>
    
<?php }
}
}
