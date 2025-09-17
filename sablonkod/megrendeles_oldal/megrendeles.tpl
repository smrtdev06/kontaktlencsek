{include 'kosar_oldal/rendeles_menete.tpl'}

<div class="felso_lec">{$ford.vasarlas_befejezes}</div>

<div class="container">

      <div>
        <!--<h1>Bootstrap starter template</h1>-->
        <p>
        <br />
        {$valasz}
        
{$megbizhato}
 <br /><br />
{literal}
 <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/hu_HU/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
{/literal}

{*
    <br style="clear:both;">
    <div>
    <a href="https://facebook.com/Lencsek.hu" target="_blank"><img src="images/lencsek_hu_fac.png" width="350"></a>
    <br>
      <div class="fb-like" data-href="https://www.facebook.com/Lencsek.hu" data-width="350" data-layout="standard" data-action="like" data-show-faces="false" data-share="false">
      </div>
    </div>
*}  
          
        
        </p>
      </div>

</div>

        
