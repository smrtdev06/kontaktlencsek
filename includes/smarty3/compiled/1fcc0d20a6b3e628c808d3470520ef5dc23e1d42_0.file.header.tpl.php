<?php
/* Smarty version 3.1.30, created on 2018-05-11 14:27:29
  from "/var/www/vhosts/lencsek.hu/uj.lencsek.hu/ujsablonkod/header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5af58c31909743_14574911',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1fcc0d20a6b3e628c808d3470520ef5dc23e1d42' => 
    array (
      0 => '/var/www/vhosts/lencsek.hu/uj.lencsek.hu/ujsablonkod/header.tpl',
      1 => 1526041647,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5af58c31909743_14574911 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="header">

 <a class="dropdown-toggle cart-btn" data-toggle="dropdown" href="#"><i class="fa fa-opencart" aria-hidden="true"></i> <span class="no-text-mobile"><?php echo $_smarty_tpl->tpl_vars['ford']->value['kosar'];?>
 (0)</span> </a>

 <nav class="navbar">
    <div class="navbar-header">
        <button type="button"  class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false"> <span class="sr-only"><?php echo $_smarty_tpl->tpl_vars['ford']->value['navigacio'];?>
</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="#"><img src="images/logo.png" alt="" class="img-responsive" /></a>
         </div>
    <div class="">
    <ul class="nav navbar-nav navbar-right nav-top">

      <li class="dropdown search">

      <form class="searchbox">
        <input type="search" placeholder="<?php echo $_smarty_tpl->tpl_vars['ford']->value['kereses'];?>
..." name="search" class="searchbox-input" onkeyup="buttonUp();" required>
        <input type="submit" class="searchbox-submit" value="GO">
        <span class="searchbox-icon"><i class="glyphicon glyphicon-search"></i></span>
    </form>
          
        </li>
        <li class="mobn"><a href="<?php echo $_smarty_tpl->tpl_vars['alnev']->value['szallitas_es_fizetes'];?>
"><span><?php echo $_smarty_tpl->tpl_vars['ford']->value['szallitas_es_fizetes'];?>
</span></a></li>
        <li class="mobn"><a href="<?php echo $_smarty_tpl->tpl_vars['alnev']->value['szallitas_es_fizetes'];?>
"><span><?php echo $_smarty_tpl->tpl_vars['ford']->value['segitseg'];?>
</span></a></li>
        <li> <a href="<?php echo $_smarty_tpl->tpl_vars['alnev']->value['kapcsolat'];?>
" class="contact-btn"><span class="no-text-mobile"><?php echo $_smarty_tpl->tpl_vars['ford']->value['kapcsolat'];?>
</span> <i class="fa fa-phone" aria-hidden="true"></i></a></li>
    </ul>
    </div>
 
</nav> 

  <nav class="navbar navbar-default">
    
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button id="ChangeToggle" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <div  id="navbar-hamburger">
          <span class="sr-only"><?php echo $_smarty_tpl->tpl_vars['ford']->value['navigacio'];?>
</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </div>
          <div id="navbar-close" class="hidden">
          <span class="glyphicon glyphicon-remove"></span>
        </div>
        </button>
         </div>
        
       <div  id="bs-example-navbar-collapse-1" class="navbar-collapse collapse" aria-expanded="true" style="">
        <ul class="nav navbar-nav">
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['alnev']->value['kontaktlencsek'];?>
"><?php echo $_smarty_tpl->tpl_vars['ford']->value['kontaktlencse'];?>
</a></li>
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['alnev']->value['kiegeszitok'];?>
">Kontaktlencse kiegészítők</a></li>
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['alnev']->value['napszemuvegek'];?>
"><?php echo $_smarty_tpl->tpl_vars['ford']->value['napszemuvegek'];?>
</a></li>
          <!--<li><a href="#">Optikai képkockák</a></li>-->
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['alnev']->value['altalanos_tudnivalok'];?>
"><?php echo $_smarty_tpl->tpl_vars['ford']->value['altalanos_tudnivalok'];?>
</a></li>
        </ul>

      </div> 
      
  </nav>
  <div class="clearfix"></div>
</section><?php }
}
