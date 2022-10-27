<?php
/* Smarty version 3.1.43, created on 2022-10-27 06:53:25
  from '/home/forge/aryova.com/modules/cssmodule/cssmodule.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_635a00b542d4c7_78884567',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63edd5767cb5d56cc986a503fcc15c0ec47ff14f' => 
    array (
      0 => '/home/forge/aryova.com/modules/cssmodule/cssmodule.tpl',
      1 => 1665786220,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_635a00b542d4c7_78884567 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- dh42 CSS Module -->
	<style type="text/css">
		/*.product-miniature .highlighted-informations{*/
/*    position:static !important;*/
/*    min-height:40px !important;*/
/*}*/

.product-miniature .thumbnail-container{
    margin-bottom:5px;
}
.product-miniature .product-title a{
   white-space: nowrap;
    overflow: hidden;
    display: block;
    text-overflow: ellipsis;
   font-size: .8rem;
    font-weight: 400;
    color: #2F4858;
    text-align:left;
    text-decoration: none;
}

@media (max-width: 767px)
{
    #header .top-logo img {
    width: auto;
    max-height: 3rem !Important;
}
}

.product-miniature .highlighted-informations{
    padding:0 !important;
    top:unset;
    bottom:0;
    background:unset;
}
.product-miniature .thumbnail-container:hover .product-description::after, .product-miniature .thumbnail-container:focus .product-description::after{
    display:none !important;
}
.product-miniature .variant-links{
    top:unset !important;
    padding-top:4px !important;
    background:transparent;
}
.highlighted-informations .variant-links a.color{
    width:2rem !important;
    display:inline-block;
}
.quick-view.js-quick-view{
    display:none !important;
}
.product-flags li.product-flag.discount-percentage, .product-flags li.product-flag.discount-amount, .product-flags li.product-flag.discount{
    background:#F98E71;
}
.row.product-container.js-product-container h1{
    margin-top:30px;
}
.product-flag.new{
    background:#00C181 !important;
}
#header .header-nav .cart-preview.acctive,#header .header-nav .cart-preview.active{
    background:#2F4858 !important;
}
.has-discount.product-price, .has-discount p, .has-discount .page-content.page-cms ul, .page-content.page-cms .has-discount ul,.product-price.h5  {
    color: #00B243 !important;
    font-size: 30px;
}
.has-discount .discount{
    background:#FFF80A !important;
    color:#2F4858 !important;
    padding:10px 5px;
}
.product-flags li.product-flag.on-sale{
        background: #FFF80A !important;
        color:#2F4858 !Important;
}
/*end product*/
span.color{
    width:3rem !important;
    height:4rem !important;
}
/*buttons*/
.btn-primary{
    background:#2F4858 !important;
}
#header,#header-top{
    background:#FFF80A !important;
    box-shadow:none !important;
    color:#2F4858 !important;
}
#header .header-nav{
    border-bottom:none !important;
}
#header .header-top {
    padding: 0.5rem 0;
}
#header .header-top a{
    color:#2F4858 !important;
    
}
#search_widget form input{
    background:white !important;
}


#search_widget {
  margin-bottom: .625rem;
  overflow: auto;
}
#search_widget form {
  position: relative;
}
#search_widget form i {
  position: absolute;
  padding: .5rem;
}
#search_widget form i.clear {
  right: 15px;
  display: none;
}
#search_widget form input {
  width: 100%;
  padding: 10px 20px 10px 40px;
  outline: none;
  background-color: #f1f1f1;
  border: none;
  border-radius: 5px;
}

.ui-autocomplete.searchbar-autocomplete {
  width: 100%;
  min-height: 100%;
  border: none;
}

.ui-autocomplete.searchbar-autocomplete li a, .ui-autocomplete.searchbar-autocomplete li a.ui-state-focus {
  padding: 8px 15px;
  overflow: auto;
  border: none;
  background: none;
  margin: auto;
  border-radius: 0;
}

.ui-autocomplete.searchbar-autocomplete li a:hover {
  background-color: #f1f1f1;
  cursor: pointer;
}

.ui-autocomplete.searchbar-autocomplete li a .autocomplete-thumbnail {
  float: left;
  width: 50px;
  height: auto;
  margin-right: 8px;
}

@media only screen and (min-width: 768px) {
  #search_widget {
    float: right;
    margin-bottom: 0;
  }

  .ui-autocomplete.searchbar-autocomplete {
    width: 400px;
    min-height: auto;
    left: auto;
  }
}

@media only screen and (min-width: 992px) {
  #search_widget {
    min-width: 16.5rem;
  }
}

.container {
    width: 100%;
    max-width: 1440px;
    padding: 0 20px;
    margin: auto;
  

}
@media(max-width:600px){
    .container{
        padding: 0 2.5px;
    }
}
        .row {
    margin-right: 2.5px;
    margin-left: 2.5px;
}
.col-xs, .col-xs-1, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9, .col-xs-10, .col-xs-11, .col-xs-12, .col-sm, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-md, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-lg, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-xl, .col-xl-1, .col-xl-2, .col-xl-4, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12 {
    position: relative;
    min-height: 1px;
    padding-right: 2.5px;
    padding-left: 2.5px;
}
#wrapper .breadcrumb{
    padding: 0 5px;
}
.img-fluid, .carousel-inner&amp;gt;.carousel-item&amp;gt;img, .carousel-inner&amp;gt;.carousel-item&amp;gt;a&amp;gt;img{
    width:100%;
}
	</style>
<!-- /dh42 CSS Module -->

<?php }
}
