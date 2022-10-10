<?php
/* Smarty version 3.1.43, created on 2022-10-10 19:08:50
  from 'D:\Programs\Wamp\www\aryovaLive\admin\themes\default\template\controllers\shop_url\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63446dc2deedc0_69129589',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dfebcc67762fd1c3ca974b527d4e1b6311591ac2' => 
    array (
      0 => 'D:\\Programs\\Wamp\\www\\aryovaLive\\admin\\themes\\default\\template\\controllers\\shop_url\\helpers\\form\\form.tpl',
      1 => 1665428251,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63446dc2deedc0_69129589 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_37273737463446dc2ddf759_37481093', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block 'script'} */
class Block_37273737463446dc2ddf759_37481093 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_37273737463446dc2ddf759_37481093',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	$(document).ready(function(){
		fillShopUrl();
		checkMainUrlInfo();
		$('#domain, #physical_uri, #virtual_uri').keyup(fillShopUrl);

		var change_domain_value = false;
		$('#domain').keydown(function()
		{
			if (!$('#domain_ssl').val() || $('#domain_ssl').val() == $('#domain').val())
				change_domain_value = true;
		});

		$('#domain_ssl').keydown(function()
		{
			change_domain_value = false;
		});

		$('#domain').blur(function()
		{
			if (change_domain_value)
			{
				change_domain_value = false;
				$('#domain_ssl').val($(this).val().replace(/ /g, '-'));
			}
		});

		$('#domain, #domain_ssl, #physical_uri, #virtual_uri').blur(function()
		{
			$(this).val($.trim($(this).val().replace(/ /g, '-')));
		});

	});

	var shopUrl = <?php echo $_smarty_tpl->tpl_vars['js_shop_url']->value;?>
;

	function fillShopUrl()
	{
		var domain = $('#domain').val();
		var physical = $('#physical_uri').val();
		var virtual = $('#virtual_uri').val();
		url = ((domain) ? domain : '???');
		if (physical)
		url += '/'+physical;
		if (virtual)
			url += '/'+virtual+'/';
		url = url.replace(/\/+/g, "/");
		$('#final_url').val('http://' + url.replace(/ /g, '-'));
	};

	function checkMainUrlInfo(shopID)
	{
		if (!shopID)
			if ($('#shop_id').length)
				shopID = $('#shop_id').val();
			else
				shopID = $('#id_shop').val();

		if (!shopUrl[shopID])
		{
			$('#main_off').attr('disabled', true);
			$('#main_on').attr('checked', true);
			$('#mainUrlInfo').css('display', 'block');
			$('#mainUrlInfoExplain').css('display', 'none');
		}
		else
		{
			$('#main_off').attr('disabled', false);
			$('#mainUrlInfo').css('display', 'none');
			$('#mainUrlInfoExplain').css('display', 'block');
		}
	}
<?php
}
}
/* {/block 'script'} */
}
