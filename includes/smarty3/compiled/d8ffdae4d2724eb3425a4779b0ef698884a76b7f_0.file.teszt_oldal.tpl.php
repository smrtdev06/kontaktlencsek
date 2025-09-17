<?php
/* Smarty version 3.1.30, created on 2021-02-08 12:22:13
  from "/var/www/vhosts/kontaktlencsek.hu/ujdesign/sablonkod/teszt_oldal/teszt_oldal.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60212cf53af254_51149389',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8ffdae4d2724eb3425a4779b0ef698884a76b7f' => 
    array (
      0 => '/var/www/vhosts/kontaktlencsek.hu/ujdesign/sablonkod/teszt_oldal/teszt_oldal.tpl',
      1 => 1612785994,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60212cf53af254_51149389 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="felso_lec">CÉGBEMUTATÓ</div>

<div class="container">

      <div>
        <!--<h1>Bootstrap starter template</h1>-->
        <p>Use this document as a way to quickly start any new project.<br>
        All you get is this text and a mostly barebones HTML document.
        </p>
        
        
        <?php echo '<script'; ?>
 type="text/javascript" src="/js/highslide/highslide.js"><?php echo '</script'; ?>
>
        <link rel="stylesheet" type="text/css" href="/js/highslide/highslide.css" />


        <?php echo '<script'; ?>
 type="text/javascript">
            hs.graphicsDir = '/js/highslide/graphics/';
            hs.wrapperClassName = 'wide-border';
        <?php echo '</script'; ?>
>



<div>
<!--
    3) This is how you mark up the thumbnail image with an anchor tag around it.
    The anchor's href attribute defines the URL of the full-size image.
-->
<a href="js/images/full-image.jpg" class="highslide" onclick="return hs.expand(this)">
    <img src="js/images/thumbnail.jpg" alt="Highslide JS"
        title="Click to enlarge" height="120" width="107" /></a>

<!--
    4 (optional). This is how you mark up the caption. The caption must be directly after the anchor above..
-->

<div class="highslide-caption">
    This caption can be styled using CSS.
</div>

</div>
        
        
        
        
            

        
            <div>
                <a href="/kepek/lencsek/23309.jpg"
                    onclick="return hs.expand (this, {wrapperClassName: 'wide-border'})">
                    <img class="kiskep" src="https://kontaktlencsek.hu/kepek/lencsek/23309.jpg" style="width:100px;" border="0" alt="<?php echo $_smarty_tpl->tpl_vars['egy_termek']->value['termek_nev'];?>
" />
                </a>
            </div>
      </div>

</div><?php }
}
