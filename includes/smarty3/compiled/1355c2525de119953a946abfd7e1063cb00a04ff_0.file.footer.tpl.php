<?php
/* Smarty version 3.1.30, created on 2018-05-17 11:39:25
  from "C:\xampp\htdocs\lencsek\sablonkod\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5afd4dcd59d141_56455292',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1355c2525de119953a946abfd7e1063cb00a04ff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lencsek\\sablonkod\\footer.tpl',
      1 => 1526546644,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5afd4dcd59d141_56455292 (Smarty_Internal_Template $_smarty_tpl) {
?>
<footer>
  <div class="">
    <div class="row">
      <div class="col-md-4 col-sm-6 ">
        <ul>
          <h3><?php echo $_smarty_tpl->tpl_vars['ford']->value['informaciok'];?>
</h3>
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['alnev']->value['szallitas_es_fizetes'];?>
"><?php echo $_smarty_tpl->tpl_vars['ford']->value['szallitas_es_fizetes'];?>
</a></li>
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['alnev']->value['segitseg'];?>
"><?php echo $_smarty_tpl->tpl_vars['ford']->value['segitseg'];?>
</a></li>
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['alnev']->value['aszf'];?>
"><?php echo $_smarty_tpl->tpl_vars['ford']->value['aszf'];?>
</a></li>
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['alnev']->value['titoktartasi'];?>
"><?php echo $_smarty_tpl->tpl_vars['ford']->value['titoktartasi_nyilatkozat'];?>
</a></li>
          
        </ul>
      </div>
      <div class="col-md-4 col-sm-6 ">
        <ul>
          <h3>Kapcsolat</h3>
          <li> Telefon: <a href="#">06 20 288 4444</a></li>
          <li> E-mail: <?php echo '<script'; ?>
 TYPE="text/javascript">
                emailA='lencsek.hu';
                emailA=('office' + '@' + emailA);
                document.write('<a href="mailto:' + emailA + '">' + emailA + '</a>');
            <?php echo '</script'; ?>
></li>
          <li>Web:<a href="<?php echo $_smarty_tpl->tpl_vars['sitenev']->value;?>
"> www.lencsek.hu</a></li>
          <li class="mt40"><a href="#"><img src="images/fb.jpg"></a></li>
        </ul>
      </div>
      <div class="col-md-4 col-sm-12 ">
        <ul>
          <h3>hírlevélre Felíratkozás </h3>
          <div class="row">
            <form class="navbar-form navbar-left email-subscription">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="E-mail Cim">
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
      <li>2018</li>
      <li><a href="<?php echo $_smarty_tpl->tpl_vars['sitenev']->value;?>
">lencsek.hu</a></li>
    </ul>
    <img src="images/rayban.jpg" class="rayban"> </div>
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
><?php }
}
