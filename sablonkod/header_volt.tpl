<section class="header">
 <a class="dropdown-toggle cart-btn" href="{$sitenev}{$alnev.kosar}"><i class="fa fa-opencart" aria-hidden="true"></i> <span class="no-text-mobile"> ({$kosar.db} db)</span> </a>
<!-- data-toggle="dropdown" -->
 
 <nav class="navbar">
    <div class="navbar-header">
        <button type="button"  class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false"> <span class="sr-only">{$ford.navigacio}</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="{$sitenev}"><img src="kepek/klencsek_logo.png" alt="Kontaktlencsek.hu" class="img-responsive" /></a>
         </div>
    <div class="">
    <ul class="nav navbar-nav navbar-right nav-top">

      <li class="dropdown search">

      <form class="searchbox" action="{$alnev.kereses}">
        <input type="search" placeholder="{$ford.kereses}..." name="keres" class="searchbox-input" onkeyup="buttonUp();" required>
        <input type="submit" class="searchbox-submit" value="Keres">
        <span class="searchbox-icon"><i class="glyphicon glyphicon-search"></i></span>
    </form>
          
        </li>
        <li class="mobn"><a href="{$alnev.szallitas_es_fizetes}"><span>{$ford.szallitas_es_fizetes}</span></a></li>
        <!--<li class="mobn"><a href="{$alnev.szallitas_es_fizetes}"><span>{$ford.segitseg}</span></a></li>-->
        <li> <a href="{$alnev.kapcsolat}" class="contact-btn"><span class="no-text-mobile">{$ford.kapcsolat}</span> <i class="fa fa-phone" aria-hidden="true"></i></a></li>
		<li></li>
    </ul>
    </div>
 
</nav> 

  <nav class="navbar navbar-default">
    
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button id="ChangeToggle" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <div  id="navbar-hamburger">
          <span class="sr-only">{$ford.navigacio}</span>
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
        
          <li><a href="{$sitenev}">{$ford.kontaktlencsek}</a></li>
          <li><a href="{$alnev.kiegeszitok}">Kiegészítők</a></li>
       
          <!--<li><a href="{$alnev.napszemuvegek}">{$ford.napszemuvegek}</a></li>-->
          <!--<li><a href="{$alnev.szallitas_es_fizetes}">Szállítás és Fizetés</a></li>-->
          <!--<li><a href="{$sitenev}">Főoldal</a></li>
          <li><a href="{$alnev.szallitas_fizetes}">{$ford.szallitas_es_fizetes}</a></li>-->
          <li><a href="{$alnev.altalanos_tudnivalok}">{$ford.altalanos_tudnivalok}</a></li>
        </ul>

      </div> 
      
  </nav>
  <div class="clearfix"></div>
</section>