<?php
/* Smarty version 4.3.0, created on 2023-01-27 13:30:45
  from '/var/www/vhosts/kontaktlencsek.hu/httpdocs/sablonkod/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63d3d205a6ebe6_71232244',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e05aaee4ae2809deeedde5b8f5f7e5c32d2260f' => 
    array (
      0 => '/var/www/vhosts/kontaktlencsek.hu/httpdocs/sablonkod/footer.tpl',
      1 => 1612271899,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d3d205a6ebe6_71232244 (Smarty_Internal_Template $_smarty_tpl) {
?><footer>
  <div class="">
    <div class="row">
      <div class="col-md-4 col-sm-6 ">
        <ul>
          <h3><?php echo $_smarty_tpl->tpl_vars['ford']->value['informaciok'];?>
</h3>
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['alnev']->value['szallitas_es_fizetes'];?>
"><?php echo $_smarty_tpl->tpl_vars['ford']->value['szallitas_es_fizetes'];?>
</a></li>
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['alnev']->value['aszf'];?>
"><?php echo $_smarty_tpl->tpl_vars['ford']->value['aszf'];?>
</a></li>
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['alnev']->value['adatvedelmi'];?>
"><?php echo $_smarty_tpl->tpl_vars['ford']->value['adatvedelmi'];?>
</a></li>
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['alnev']->value['impresszum'];?>
"><?php echo $_smarty_tpl->tpl_vars['ford']->value['impresszum'];?>
</a></li>
          
        </ul>
      </div>
      <div class="col-md-4 col-sm-6 ">
        <ul>
          <h3>Kapcsolat</h3>
          <li> Telefon: 06 20 296 7871</li>
          <li> E-mail: <?php echo '<script'; ?>
 TYPE="text/javascript">
                emailA='kontaktlencsek.hu';
                emailA=('iroda' + '@' + emailA);
                document.write('<a href="mailto:' + emailA + '">' + emailA + '</a>');
            <?php echo '</script'; ?>
></li>
          <li>Web:<a href="<?php echo $_smarty_tpl->tpl_vars['sitenev']->value;?>
"> kontaktlencsek.hu</a></li>
          
        </ul>
      </div>
      <div class="col-md-4 col-sm-12 ">
        <ul>
          <h3>Hírlevélre felíratkozás </h3>
          <div class="row">
            <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['sitenev']->value;
echo $_smarty_tpl->tpl_vars['alnev']->value['hirlevel'];?>
" class="navbar-form navbar-left email-subscription">
              <div class="form-group">
                <input type="text" name="tag_email" class="form-control" placeholder="E-mail cím">
              </div>
              <button type="submit" class="btn btn-default">OK</button>
            </form>
          </div>
        </ul>
      </div>
    </div>
  </div>
</footer>

<section class="outer_footer">
  <div class="container">
    <ul>
      <li>Minden Jog Fenntartva</li>
      <li><?php echo date('Y');?>
</li>
      <li><a href="<?php echo $_smarty_tpl->tpl_vars['sitenev']->value;?>
">kontaktlencsek.hu</a></li>
    </ul>
  </div>
</section>

<?php echo '<script'; ?>
 src="js/jquery.min.js"><?php echo '</script'; ?>
> 

<?php echo '<script'; ?>
>
  $(function() {
  $('#ChangeToggle').click(function() {
    $('#navbar-hamburger').toggleClass('hidden');
    $('#navbar-close').toggleClass('hidden');  
  });
});    
<?php echo '</script'; ?>
>
<?php }
}
