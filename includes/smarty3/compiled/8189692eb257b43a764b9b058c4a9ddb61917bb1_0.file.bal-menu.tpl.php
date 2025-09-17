<?php
/* Smarty version 3.1.30, created on 2018-05-17 11:37:34
  from "C:\xampp\htdocs\uj_lencsek\ujsablonkod\bal-menu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5afd4d5eb7d4f4_30321377',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8189692eb257b43a764b9b058c4a9ddb61917bb1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\uj_lencsek\\ujsablonkod\\bal-menu.tpl',
      1 => 1526474476,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5afd4d5eb7d4f4_30321377 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <div class="filterContainer">
          <div class="filterTopHeadMobile">Szűrés <a href="#" id="closeFilter"><i class="fa fa-times" aria-hidden="true"></i></a>
          </div>
          
          
          
          
          
          <div class="filter_gen">
            <div class="gender_">
              <div class="checkbox">
                <input type="checkbox" value="female" name="Raktáron" id="Raktáron">
                <label for="Raktáron">Raktáron</label>
                <p class="pull-right"><a href="#" class="tip" data-tip="tip-first4" data-placement="left"><i class="fa fa-question-circle pull-right"></i></a>
                </p>

                <div id="tip-first4" class="tip-content hidden">
                  <p>Lorem Ipsum is simply dummy </p>
                </div>
              </div>
            </div>
          </div>
          <div class="search-filter-sec">
            <h1 class="main-cat">Szűrés Termékek Szerint</h1>



            <div class="clearfix mt10"></div>
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            
              
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                  <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><?php echo $_smarty_tpl->tpl_vars['ford']->value['kontaktlencse_gyartok'];?>
</a> </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                  <div class="panel-body">
                    
                    <ul>
                     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gyartok']->value, 'egy_gyarto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['egy_gyarto']->value) {
?>
                        <li>
                        <div class="gender_">
                          <div class="checkbox">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['egy_gyarto']->value['gyarto_alnev'];?>
"><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['egy_gyarto']->value['gyarto_nev'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['egy_gyarto']->value['gyarto_nev'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['egy_gyarto']->value['gyarto_id'];?>
">
                            <label for="<?php echo $_smarty_tpl->tpl_vars['egy_gyarto']->value['gyarto_nev'];?>
"><?php echo $_smarty_tpl->tpl_vars['egy_gyarto']->value['gyarto_nev'];?>
 (<?php echo $_smarty_tpl->tpl_vars['egy_gyarto']->value['gyarto_db'];?>
)</label></a>
                          </div>
                        </div>
                        </li>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </ul>

                  </div>
                </div>
              </div>



              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                  <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo"><?php echo $_smarty_tpl->tpl_vars['ford']->value['kontaktlencse_tipusok'];?>
</a> </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
                  <div class="panel-body">
                    <ul>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['kontaktlencsek']->value, 'egy_kat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['egy_kat']->value) {
?>
                      <li>
                        <div class="gender_">
                          <div class="checkbox">
                            <input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['egy_kat']->value['kat_alnev'];?>
" name="1.000" id="1.000">
                            <label for="1.000"><?php echo $_smarty_tpl->tpl_vars['egy_kat']->value['kat_nev'];?>
</label>
                          </div>
                        </div>
                      </li>
                     <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                     <!--<a href="<?php echo $_smarty_tpl->tpl_vars['egy_kat']->value['kat_alnev'];?>
" <?php if ($_smarty_tpl->tpl_vars['q']->value == $_smarty_tpl->tpl_vars['egy_kat']->value['kat_alnev']) {?>class="item_active"<?php }?>></a>-->
                    </ul>
                  </div>
                </div>
              </div>
              
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                  <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree"><?php echo $_smarty_tpl->tpl_vars['ford']->value['kiegeszitok'];?>
</a> </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingThree">
                  <div class="panel-body">
                    <ul>
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['kiegeszitok']->value, 'egy_kat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['egy_kat']->value) {
?>
                      <li>
                        <div class="gender_">
                          <div class="checkbox">
                            <input type="checkbox" value="Férfi" name="Férfi" id="Férfi">
                            <label for="Férfi"><?php echo $_smarty_tpl->tpl_vars['egy_kat']->value['kat_nev'];?>
</label>
                          </div>
                        </div>
                      </li>
                      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </ul>
                  </div>
                </div>
              </div>

<div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingFour">
                  <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour"><?php echo $_smarty_tpl->tpl_vars['ford']->value['napszemuvegek'];?>
</a> </h4>
                </div>
                <div id="collapseFour" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingFour">
                  <div class="panel-body">
                    <ul>
                      <li >
                        <div class="gender_" onclick="return false;">
                          <div class="checkbox inactive" >
                            <input type="checkbox" value="female" name="adidas" id="adidas" disable >
                            <label for="adidas">Bausch & Lomb</label>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="gender_">
                          <div class="checkbox">
                            <input type="checkbox" value="female" name="Boss" id="Boss">
                            <label for="Boss">Alcon (Ciba Vision)</label>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="gender_">
                          <div class="checkbox">
                            <input type="checkbox" value="female" name="BOrange" id="BOrange">
                            <label for="BOrange">Coopervision</label>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="gender_">
                          <div class="checkbox">
                            <input type="checkbox" value="female" name="Bvlgari" id="Bvlgari">
                            <label for="Bvlgari">Johnson & Johnson</label>
                          </div>
                        </div>
                      </li>
                      
                    </ul>
                    

                    <div id="mindenMarka" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                      <div class="panel-body">
                        <ul>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gyartok2']->value, 'egy_gyarto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['egy_gyarto']->value) {
?>
                            <li>
                            <div class="gender_">
                              <div class="checkbox">
                                <input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['egy_gyarto']->value['gyarto_nev'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['egy_gyarto']->value['gyarto_nev'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['egy_gyarto']->value['gyarto_id'];?>
">
                                <label for="<?php echo $_smarty_tpl->tpl_vars['egy_gyarto']->value['gyarto_nev'];?>
"><?php echo $_smarty_tpl->tpl_vars['egy_gyarto']->value['gyarto_nev'];?>
</label>
                              </div>
                            </div>
                            </li>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </ul>
                      </div>
                    </div>
                    <a class="search-blackBtn" role="button" data-toggle="collapse" data-parent="#mindenMarka" href="#mindenMarka" aria-expanded="true" aria-controls="mindenMarka">Minden márka</a>

                  </div>
                </div>
              </div>  
              
            </div>

            <!-- panel-group -->

          </div>
        </div>
</div><?php }
}
