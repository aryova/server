<?php
/* Smarty version 3.1.43, created on 2022-11-26 01:28:12
  from 'module:psimagesliderviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63814f8c082203_41102977',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c2108a17c7103b6e203f4f0621d4645b56b0114' => 
    array (
      0 => 'module:psimagesliderviewstemplat',
      1 => 1665786221,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_63814f8c082203_41102977 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <div id="carousel" data-ride="carousel" class="carousel slide" data-interval="5000" data-wrap="true" data-pause="hover" data-touch="true">
    <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
          </ol>
    <ul class="carousel-inner" role="listbox" aria-label="Carousel container">
              <li class="carousel-item active" role="option" aria-hidden="false">
          <a href="https://aryova.com/en/new-products">
            <figure>
              <img src="https://aryova.com/modules/ps_imageslider/images/0c7f4f476a350fa53c9747255b4fd72596452c8e_5621255.png" alt="" loading="lazy" width="1110" height="340">
                          </figure>
          </a>
        </li>
          </ul>
    <div class="direction" aria-label="أزرار دائرية">
      <a class="left carousel-control" href="#carousel" role="button" data-slide="prev" aria-label="السابق">
        <span class="icon-prev hidden-xs" aria-hidden="true">
          <i class="material-icons">&#xE5CB;</i>
        </span>
      </a>
      <a class="right carousel-control" href="#carousel" role="button" data-slide="next" aria-label="التالي">
        <span class="icon-next" aria-hidden="true">
          <i class="material-icons">&#xE5CC;</i>
        </span>
      </a>
    </div>
  </div>
<?php }
}
