<div id="header">
      <!--<a href="{$sitenev}"><div id="toplogo"></div></a>-->
      <!--<div><img src="http://kepek.lencsek.hu/kepek/tojasok2.jpg"></div>-->
      
      <!--
      <div id="lang_sel">
      
      <a onmouseover="Tip('Lencsék.hu oldalunkat elhagyja és átlép a szemüvegekkel foglalkozó Szemüvegek.hu oldalunkra.')" onmouseout="UnTip()" href="http://szemuvegek.hu" target="_blank">Szemüvegek.hu</a>
      
      &nbsp;&nbsp;|&nbsp;&nbsp;
      <a onmouseover="Tip('Lencsék.hu oldalunkat elhagyja és átlép a drogériai termékekkel foglalkozó Szépülj.hu oldalunkra.')" onmouseout="UnTip()" href="http://szepulj.hu" target="_blank">Szépülj.hu</a>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href=""></a> <span class="separator">|</span> {$ford.nyelv} : {$nyelvki}
      
      <br />      
      <a href="{$sitenev}akcios_keretek" target="_blank"><img src="images/10_mini.jpg" border="0" style="margin-left:10px;"></a>
      </div>
      -->
      
      
      <!--
      <div id="basket">
        <p id="basket-text"><span>{$kosar.db} db</span> {$ford.termek2} <span>{$kosar.osszesen} Ft</span> {$ford.ertekben}</p> <a href="{$sitenev}{$alnev.kosar}" class="body-link"><img src="css/img/basket.png" alt="{$ford.kosar}" title="{$ford.kosar}" /></a> 
      </div>
      -->
      
      <!--
      <div id="topmenu">
        <ul>
          <li {if $oldal==""}class="active"{/if}><a href="{$sitenev}">{$ford.fooldal}</a></li>
          <li {if $oldal==$alnev.osszes_termek}class="active"{/if}><a href="{$sitenev}{$alnev.osszes_termek}">{$ford.osszes_termek}</a></li>
          <li {if $oldal==$alnev.szallitas_es_fizetes}class="active"{/if}><a href="{$sitenev}{$alnev.szallitas_es_fizetes}">{$ford.szallitas_es_fizetes}</a></li>
          <li {if $oldal==$alnev.altalanos_tudnivalok}class="active"{/if}><a href="{$sitenev}{$alnev.altalanos_tudnivalok}">{$ford.altalanos_tudnivalok}</a></li>
          {if $user}
          <li><a href="{$sitenev}{$alnev.kilepes}">{$ford.kilepes}</a></li>
          {/if}
        </ul>
      </div>
      -->
      
      <!--
      <div id="topsearch">
        <form name="lencsek" id="lencsek" method="get" action="{$sitenev}">
          <label>{$ford.termekek} :&nbsp;
            <select name="q" class="prod-sel" onchange="document.lencsek.submit()">
              <option value="osszes_termek">{$ford.valassz_termeket}</option>
              {foreach from=$termek_nevek item=egytermek}
              <option value="{$egytermek.termek_alnev}" >{$egytermek.termek_nev|truncate:50}</option>
              {/foreach}
  
            </select>
          </label>
        </form>
      </div>
      -->
      <!-- {if $q == $egytermek.termek_alnev}selected="selected"{/if} -->
      
    </div>