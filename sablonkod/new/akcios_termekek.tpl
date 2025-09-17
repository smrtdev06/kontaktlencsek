<section class="frames_section also-like">
  <h2 class="heading">Akciós termékeink</h2>
  <div class="owl-carousel2 owl-theme">
  
    {foreach from=$akcios_termekek item=egy_termek}
        <div class="item">
         <!--<img class="brand-logo" src="images/versace.jpg"/>-->
         <a href="{$egy_termek.termek_alnev_hu}"> <center><img src="kepek/lencsek/{$egy_termek.termek_kep}" class="img-responsive"></center>
          <h4>{$egy_termek.termek_nev_hu}<br>
            <small>{$egy_termek.termek_akcios_ar|arformat}<span class="old-price">{$egy_termek.termek_ar|arformat}</span></small></h4>
          </a>
        </div>
    {/foreach}
    
  </div>
</section>
