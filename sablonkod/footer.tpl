<footer>
  <div class="">
    <div class="row">
      <div class="col-md-4 col-sm-6 ">
        <ul>
          <h3>{$ford.informaciok}</h3>
          <li><a href="{$alnev.szallitas_es_fizetes}">{$ford.szallitas_es_fizetes}</a></li>
          <li><a href="{$alnev.aszf}">{$ford.aszf}</a></li>
          <li><a href="{$alnev.adatvedelmi}">{$ford.adatvedelmi}</a></li>
          <li><a href="{$alnev.impresszum}">{$ford.impresszum}</a></li>
          
        </ul>
      </div>
      <div class="col-md-4 col-sm-6 ">
        <ul>
          <h3>Kapcsolat</h3>
          <li> Telefon: 06 20 296 7871</li>
          <li> E-mail: <script TYPE="text/javascript">
                emailA='kontaktlencsek.hu';
                emailA=('iroda' + '@' + emailA);
                document.write('<a href="mailto:' + emailA + '">' + emailA + '</a>');
            </script></li>
          <li>Web:<a href="{$sitenev}"> kontaktlencsek.hu</a></li>
          
        </ul>
      </div>
      <div class="col-md-4 col-sm-12 ">
        <ul>
          <h3>Hírlevélre felíratkozás </h3>
          <div class="row">
            <form method="post" action="{$sitenev}{$alnev.hirlevel}" class="navbar-form navbar-left email-subscription">
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
      <li>{date('Y')}</li>
      <li><a href="{$sitenev}">kontaktlencsek.hu</a></li>
    </ul>
  </div>
</section>

<script src="js/jquery.min.js"></script> 
{literal}
<script>
  $(function() {
  $('#ChangeToggle').click(function() {
    $('#navbar-hamburger').toggleClass('hidden');
    $('#navbar-close').toggleClass('hidden');  
  });
});    
</script>
{/literal}