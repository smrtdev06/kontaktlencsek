<?php
/* Smarty version 3.1.30, created on 2018-10-19 15:28:59
  from "/var/www/vhosts/kontaktlencsek.hu/ujdesign/sablonkod/new/kezdo_termekek.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bc9dc1b6b8446_82547426',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd61241593cb885564d21d8f543e260070af3dce0' => 
    array (
      0 => '/var/www/vhosts/kontaktlencsek.hu/ujdesign/sablonkod/new/kezdo_termekek.tpl',
      1 => 1526551123,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:new/termek_lista_egy_termek.tpl' => 1,
  ),
),false)) {
function content_5bc9dc1b6b8446_82547426 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
    <div class="col-md-12">
        <a href="#" class="btn btn-filter" id="showFilter"><i class="fa fa-filter" aria-hidden="true"></i> Szűrők </a>
    </div>

    <div class="clearfix"></div>
        
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nepszeru_termekek']->value, 'egy_termek');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['egy_termek']->value) {
?>
        <?php $_smarty_tpl->_subTemplateRender("file:new/termek_lista_egy_termek.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 
        
    <div class="clearfix"></div>

    
    <div id="stickyheader">
        <div class="filterByValue">
            <div class="col-md-12">
              <!--select class="form-control select-block">
                <option selected="" disabled="" value="">Sort By</option>
                <option value="oakleyeuRelevanceSort">Relevance</option>
                <option selected="" value="oakleyeuName-ascSort">Name (ascending) rhherihu</option>
                <option value="oakleyeuName-descSort">Name (descending)</option>
                <option value="oakleyeuPriceValue-ascSort">Price (lowest first)</option>
                <option value="oakleyeuPriceValue-descSort">Price (highest first)</option>
                <option value="oakleyeuNewest-descSort">Newest</option>
                <option value="oakleyeuBestSellers-booleanSort">Best Sellers</option>


              </select-->

              <!--
              <ul class="pagination pull-right">
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
              </ul>
              -->
              <div class="clearfix"></div>
            </div>
            
            <div class="clearfix"></div>
        </div>
    </div>
</div><?php }
}
