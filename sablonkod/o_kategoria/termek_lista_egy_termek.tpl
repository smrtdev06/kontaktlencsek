<div class="product-tile col-md-3 col-sm-4 col-xs-6">
      <a href="{$site}{$egy_termek.termek_alnev|escape:'url'}" title="{$egy_termek.termek_nev}" class="woocommerce-LoopProduct-link">
          <img class="brand-logo" src="images/johnsons.jpg">
            <figure class="ws-product-bg">
                <img src="{$kepsrc}{$egy_termek.termek_kep}" style="height: 150px;">
            </figure>
            <h3>{$egy_termek.termek_nev}</h3>
            <span class="price">
                <span class="woocommerce-Price-amount amount">{if $egy_termek.termek_akcios_ar>0}{$egy_termek.termek_akcios_ar|arformat}{else}{$egy_termek.termek_ar|arformat}{/if}
                {*if $egy_termek.termek_akcios_ar>0}<small>{$egy_termek.termek_ar|arformat}</small>{/if*}
                </span>
            </span> 
      </a>
</div>
