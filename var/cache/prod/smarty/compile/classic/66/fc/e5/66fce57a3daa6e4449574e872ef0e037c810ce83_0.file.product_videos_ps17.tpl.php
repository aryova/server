<?php
/* Smarty version 3.1.43, created on 2022-11-24 18:54:37
  from '/home/forge/aryova.com/modules/magiczoomplus/views/templates/admin/product_videos_ps17.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_637fa1cd422007_26675532',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66fce57a3daa6e4449574e872ef0e037c810ce83' => 
    array (
      0 => '/home/forge/aryova.com/modules/magiczoomplus/views/templates/admin/product_videos_ps17.tpl',
      1 => 1665790457,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_637fa1cd422007_26675532 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-md-12">
    <div class="row">
        <div class="col-md-9">
            <fieldset class="form-group">
                <label class="form-control-label">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product Videos','mod'=>'magiczoomplus'),$_smarty_tpl ) );?>

                    <span class="help-box" data-toggle="popover" data-content="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Provide links to video separated by a space or new line.','mod'=>'magiczoomplus'),$_smarty_tpl ) );?>
" ></span>
                </label>
                <?php if ((isset($_smarty_tpl->tpl_vars['magiczoomplus_invalid_urls']->value))) {?>
                <div class="row">
                    <div class="col-md-9">
                        <div class="alert alert-warning" role="alert">
                            <i class="material-icons">help</i>
                            <p class="alert-text">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'"Product Videos" value contains incorrect urls:','mod'=>'magiczoomplus'),$_smarty_tpl ) );?>
<br><br>
                                <ul>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['magiczoomplus_invalid_urls']->value, 'url');
$_smarty_tpl->tpl_vars['url']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['url']->value) {
$_smarty_tpl->tpl_vars['url']->do_else = false;
?>
                                        <li><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['url']->value,'html','UTF-8' ));?>
</li>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>
                <?php }?>
                <div class="translations tabbable" id="form_stepX_product_videos">
                    <div class="tab-content">
                        <div class="tab-pane active">
                            <textarea name="magiczoomplus_video" placeholder="" class="form-control" rows="10" cols="45"><?php if ((isset($_smarty_tpl->tpl_vars['magiczoomplus_textarea']->value))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['magiczoomplus_textarea']->value,'html','UTF-8' ));
}?></textarea>
                        </div>
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
</div>
<?php }
}
