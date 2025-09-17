<?php
/* Smarty version 3.1.30, created on 2018-12-05 16:06:33
  from "/var/www/vhosts/kontaktlencsek.hu/ujdesign/sablonkod/header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c07e9791e74e5_96987863',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b807b6a4c3e5184b7ad6d2a43fa0c0339396a74b' => 
    array (
      0 => '/var/www/vhosts/kontaktlencsek.hu/ujdesign/sablonkod/header.tpl',
      1 => 1544022342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c07e9791e74e5_96987863 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="header">
 <a class="dropdown-toggle cart-btn" href="<?php echo $_smarty_tpl->tpl_vars['sitenev']->value;
echo $_smarty_tpl->tpl_vars['alnev']->value['kosar'];?>
"><i class="fa fa-opencart" aria-hidden="true"></i> <?php if ($_smarty_tpl->tpl_vars['kosar']->value['db'] > 0) {?><span class="no-text-mobile"> (<?php echo $_smarty_tpl->tpl_vars['kosar']->value['db'];?>
 db)</span><?php }?> </a>
<!-- data-toggle="dropdown" -->
 
 <nav class="navbar">
    <div class="navbar-header">
        <button type="button"  class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false"> <span class="sr-only"><?php echo $_smarty_tpl->tpl_vars['ford']->value['navigacio'];?>
</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        
        <a href="<?php echo $_smarty_tpl->tpl_vars['sitenev']->value;?>
" class="navbar-brand"><img src="kepek/klencsek_logo.png" alt="Kontaktlencsek.hu" class="img-responsive" /></a>
    </div>
         
    
    <div class="">
        <ul class="nav navbar-nav navbar-right nav-top">
          <li class="dropdown search">
              <form class="searchbox" action="<?php echo $_smarty_tpl->tpl_vars['alnev']->value['kereses'];?>
">
                <input type="search" placeholder="<?php echo $_smarty_tpl->tpl_vars['ford']->value['kereses'];?>
..." name="keres" class="searchbox-input" onkeyup="buttonUp();" required>
                <input type="submit" class="searchbox-submit" value="Keres">
                <span id="search_icon" class="searchbox-icon"><i class="glyphicon glyphicon-search"></i></span>
              </form>
          </li>
          
          <li id="szall_fent" class="mobn"><a href="<?php echo $_smarty_tpl->tpl_vars['alnev']->value['szallitas_es_fizetes'];?>
"><span><?php echo $_smarty_tpl->tpl_vars['ford']->value['szallitas_es_fizetes'];?>
</span></a></li>
          
          <li id="kapcs_fent"><a href="<?php echo $_smarty_tpl->tpl_vars['alnev']->value['kapcsolat'];?>
" class="contact-btn"><span class="no-text-mobile"><?php echo $_smarty_tpl->tpl_vars['ford']->value['kapcsolat'];?>
</span> <i class="fa fa-phone" aria-hidden="true"></i></a></li>
          
          <?php if ($_smarty_tpl->tpl_vars['user']->value > 0) {?>
          <li id="belep_fent"><a href="<?php echo $_smarty_tpl->tpl_vars['alnev']->value['rendelesek'];?>
" class="contact-btn"><span class="no-text-mobile">Rendelések</span> <i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i></a></li>
          <?php } else { ?>
          <li id="belep_fent"><a href="<?php echo $_smarty_tpl->tpl_vars['alnev']->value['belepes'];?>
" class="contact-btn"><span class="no-text-mobile"><?php echo $_smarty_tpl->tpl_vars['ford']->value['belepes'];?>
</span> <i class="glyphicon glyphicon-user" aria-hidden="true"></i></a></li>
          <?php }?>
          
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
        
          <li><a href="/kontaktlencsek"><?php echo $_smarty_tpl->tpl_vars['ford']->value['kontaktlencsek'];?>
</a></li>
          <li><a href="/kiegeszitok">Kiegészítők</a></li>
       
          <!--<li><a href="<?php echo $_smarty_tpl->tpl_vars['alnev']->value['napszemuvegek'];?>
"><?php echo $_smarty_tpl->tpl_vars['ford']->value['napszemuvegek'];?>
</a></li>-->
          <!--<li><a href="<?php echo $_smarty_tpl->tpl_vars['alnev']->value['szallitas_es_fizetes'];?>
">Szállítás és Fizetés</a></li>-->
          <!--<li><a href="<?php echo $_smarty_tpl->tpl_vars['sitenev']->value;?>
">Főoldal</a></li>
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['alnev']->value['szallitas_fizetes'];?>
"><?php echo $_smarty_tpl->tpl_vars['ford']->value['szallitas_es_fizetes'];?>
</a></li>-->
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['alnev']->value['altalanos_tudnivalok'];?>
"><?php echo $_smarty_tpl->tpl_vars['ford']->value['altalanos_tudnivalok'];?>
</a></li>
        </ul>

      </div> 
      
  </nav>
  <div class="clearfix"></div>
</section><?php }
}
