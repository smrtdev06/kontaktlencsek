<?php
/* Smarty version 3.1.30, created on 2018-09-21 09:41:58
  from "/var/www/vhosts/lencsek.hu/uj.lencsek.hu/sablonkod/hu/szallitas_es_fizetes.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ba4a0c604a803_07562812',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61f361e4cc249c9ed4bdd5e10f735d73e57fedc8' => 
    array (
      0 => '/var/www/vhosts/lencsek.hu/uj.lencsek.hu/sablonkod/hu/szallitas_es_fizetes.tpl',
      1 => 1537515714,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ba4a0c604a803_07562812 (Smarty_Internal_Template $_smarty_tpl) {
?>
<br>
<div width="100%">
<h1 align="center"><b><?php echo $_smarty_tpl->tpl_vars['ford']->value['szallitas'];?>
</b></h1><br>
<div style="border: 1px dashed #bdbcbc; padding:24px; ">
<p align="justify">Az egyes termékek szállítási idejét azok adatlapján 
  tűntetjük fel, ezek általában termékenként különböznek.&nbsp; A szállítás költsége függ a fizetés és 
  a szállítás módjától, bizonyos rendelési érték felett ingyenes. 
  A rendszer a költséget automatikusan számítja és a 
  rendelési folyamat végén kijelzi. A szállítási&nbsp; 
  költségeket az oldal alján található táblázatokban 
  láthatja.<br>
  <br>
  Szállítási/átvételi módok:<br><br>
  <!--
<h2 align="justify"><span class="arial-12-bold">Postai szállítás </span> </h2>
<p align="justify">Olcsóbb lehet a könnyebb csomagok 
  esetében, de kevésbé megbízható, mint a másik 2 
  szállítási/átvételi mód. <br>
  Kérjük, hogy olyan szállítási címet adjon meg, ahol 
  hétköznap 8-17 óra között át tudják venni a csomagot, a 
  posta csak ebben az időpontban kézbesít. A postás 
  csak egyszer kísérli meg a kézbesítést, amennyiben ez 
  sikertelen, úgy a helyi postahivatalban vehető át a 
  csomag. Szállítási idő: a csomag feladást követő 
  ÁLTALÁBAN 1-2. munkanap.<br>
  -->
<div style="background-color:#f5f4f2;padding:14px;">
<h2>Átvételi pontok</h2>  
<br>

<a id="foxpost">Foxpost automaták</a> </h2>
<table cellpadding="4">
<tr>
    <td valign="top" width="160"><a href="http://foxpost.hu" target="_blank"><img src="images/foxpost_kicsi.jpg" border="0" align="top" vspace="15" hspace="15"></a></td>
    <td valign="top">A FOXPOST csomagautomaták segítségével egyszerűen, időtakarékosan és kényelmesen vehetsz át online rendelt termékeket a kiszállítástól számított 3 munkanapig, összekötve a napi bevásárlást a csomagátvétellel. <br />Mindezt ott, ahol neked épp útba esik!<br />
Ami pedig még ennél is szebb: nemcsak időt takarítasz meg, de a környezetet is kíméled, mert nem kell a futárnak házhoz mennie.<br />
<br />Plázákban, hipermarketekben és egyéb forgalmas területen elhelyezett automatikus csomagterminál.<br /><br />
    <ul style="line-height:24px;">
        <li><u>Helyszínen csak bankkártyás fizetés lehetséges !</u></li>
        <li>Szállítási idő: A legtöbb kontaktlencsét, ápolószert másnap átveheted! </li>
        <li>A kiszállítástól számított 3 munkanapig tárolják a terméket.</li>
    </ul>
    </td>
</tr>
</table>


<span class="arial-12-bold"><a name="pickpack">Pick-pack pontok</a></span>
<table>
<tr>
<td width="160"><img SRC="kepek/pickpack.jpg"> </td>
<td> <p align="justify">Amennyiben nem tud megadni olyan átvételi helyet, ahol 
  hétköznap 8-17 óra között át tudják venni csomagot, úgy 
  lehetősége van az ország több mint 600 Pick-pack pontján 
  átvenni azt. 
  A Pick Pack Pontok olyan <img SRC="kepek/relay.jpg"> , <img SRC="kepek/inmedio.jpg"> hírlapüzletek, valamint <img SRC="kepek/omv_logo.jpg"> és <img SRC="kepek/avanti_logo.jpg" width="84"> töltőállomások melyek frekventált helyeken találhatóak meg.
  
  Többségükben bankkártyával is fizethet és hétvégén is 
  nyitva vannak. Szállítási idő: a csomag feladást követő 
  GARANTÁLT 2. munkanap</p>
 </td>
</tr>
</table>

</div>
<br /><br />
<div style="background-color:#f5f4f2;padding:14px;">

<h2 align="justify"><span class="arial-12-bold">Futárcéges szállítás </span></h2><br />
<p align="justify">A futárral való szállí­tás előnyt jelenthet, ha sürgős a 
  szállí­tás, mivel a kézbesí­tés nagyobb biztonságú és 
  sikertelen kézbesí­tés esetén telefonon egyeztetnek az újabb szállí­tási időpontról. 
  Kérjük, hogy olyan szállí­tási cí­met adjon meg, ahol 
  hétköznap 8-17 óra között át tudják venni a csomagot, a 
  futár csak ebben az időpontban kézbesít ! Felhívjuk 
  figyelmét, hogy napon belül nem tudjuk meghatározott 
  időre küldeni a csomagot ! Amennyiben ez probléma Önnek, kérjük, hogy válasszon egy Pick-pack 
  pontot az átvétel helyének ! Szállítási idő: a csomag feladást 
  követő GARANTÁLT Budapesten 1., vidékre általában 1., 
  maximum 2. munkanap.
</div>
<br /><br />
<div style="background-color:#f5f4f2;padding:14px;">

<h2 align="justify"> <span class="arial-12-bold"><a name="pickpack">Személyes átvétel boltjainkban</a></span> </h2><br />
<p align="justify">
Lehetősége van személyesen is átvenni a rendelését :
<ul style="list-style-type:circle; padding-left: 30px; line-height:24px;">
<li>Budapest, 1088 József krt. 11. sz-nál</li>
<li>Budapest, 1065 Bajcsy Zs. út 55. sz-nál</li>
<li>Budapest, 1095 Soroksári út 16/D. sz-nál</li>
<li>Budapest, 1114 Bartók Béla 64. sz-nál</li>
</ul>
található exkluziv optikáinkban.<br />
Ez esetben összeghatártól függetlenül 0 Ft a szállítás díja !<br />
Boltunkban fizethet bankkártyával is ! Az egészségkártyák elfogadásával kapcsolatban alább találhat információt.
<br>
</div>
</div>

<br />
  
<h1 align="center"><b><?php echo $_smarty_tpl->tpl_vars['ford']->value['fizetes'];?>
</b></h1><br />
<div style="border: 1px dashed #bdbcbc; padding:24px; ">

<div style="background-color:#f5f4f2;padding:14px;">
<h2 align="justify"><span class="arial-12-bold">Előre utalás</span></h2>
<p>Amennyiben ezt fizetési módot választja, kérjük a 
  megrendelt termékek értékét utalja át a visszaigazoló 
  e-mailben szereplő OTP bankszámlaszámunkra a rendelési 
  kód feltüntetésével. Az összeg megérkezése után küldjük 
  rendelését. Ha bankfiókban fizeti be, akkor 250 Ft-tal fizessen többet.</p>
</div>
<br />

<div style="background-color:#f5f4f2;padding:14px;">
<h2><span class="arial-12-bold">Fizetés utánvéttel </span></h2>
<p>A csomag átvételekor készpénzben kell fizetni.</p>
</div>
<br />
<div style="background-color:#f5f4f2;padding:14px;">

<h2>Fizetés interneten, bankkártyával</h2>
<p> A következő tí­pusú bankkártyákkal tud fizetni interneten keresztül:  <br>
<img border="0" src="kepek/bankkartyak.jpg" vspace="15" hspace="15"><br/>
A mi rendszerünkhöz nem jut el bankkártyájának adata, a fizetési folyamat közben átirányitjuk az OTP bank weboldalára, webáruházunk csak egy értesí­tést kap a bankttól, hogy sikerült-e 
            a tranzakció vagy sem. Bővebb információt <a href="kepek/otp.pdf">itt</a> talál PDF formátumban.</p>
</div>
<br />
<div style="background-color:#f5f4f2;padding:14px;">
<h2>MasterPass</h2>
<table border="0" cellpadding="4">
<tr>
<td><img src="images/masterpass_logo.jpg" border="0" align="top" vspace="15" hspace="15"></td>
<td valign="top" align="justify">Fedezze fel az online vásárlás kényelmesebb módját: fizessen az ingyenes MasterPass™ digitális tárcával! Valamennyi bank által kibocsátott, online vásárlásra alkalmas MasterCard, Maestro, Visa, American Express kártyával használhatja. További információkat az MasterPass szolgáltatásról <a href="http://www.mastercard.com/hu/consumer/masterpass.html" target="_blank">ezen az oldalon</a> talál.</td>
</tr>
</table>
</div>
<br />
<div style="background-color:#f5f4f2;padding:14px;">
<h2>OTPAY</h2>
<table border="0" cellpadding="4">
<tr>
<td><img src="kepek/otpay_mini.jpg" border="0" align="top" vspace="15" hspace="15"></td>
<td valign="top" align="justify">Fizessen egyszerűen és biztonságosan okostelefonja segítségével az OTPAY alkalmazáson keresztül. Töltse le az OTPAY alkalmazást regisztrálja bankkártyáját, és a jövőben fizetéshez már csak a telefonszámát kell megadnia. További információkat az OTPAY szolgáltatásról <a href="https://www.otpbank.hu/otpay/" target="_blank">ezen az oldalon</a> talál.</td>
</tr>
</table>
</div>
<!--
<br />
<div style="background-color:#f5f4f2;padding:4px;">
<h2><a id="mastercard">Mastercard Mobile</a></h2>
<p align="justify"><img src="kepek/mcm-logo.jpg" border="0"><br />
Fizessen egyszerűen és biztonságosan okostelefonja segítségével a MasterCard Mobile alkalmazáson keresztül. Töltse le a MasterCard Mobile alkalmazást  regisztrálja bankkártyáját, és a jövőben fizetéshez már csak a telefonszámát kell megadnia. További információkat a MasterCard Mobile szolgáltatásról <a href="https://www.paymentgateway.hu/static/help/mpp2/index.html">ezen az oldalon</a> talál.</p>          
</div>
-->
</div>
<br />
            
<h1 align="center"><b>Egészségpénztárak</b></h1><br />
<div style="border: 1px dashed #bdbcbc; padding:24px; ">
<p align="justify"> 
Az ország összes egészségpénztárával kapcsolatban állunk, a dioptriás szemüvegek, kontaktlencsék, ápolószerek, szemcseppek teljes mértékben elszámolhatóak. A számlázási adatoknál kérjük, hogy válassza ki egészségpénztárát és adja meg az igénybevevő nevét, pénztári azonosí­tóját. A számla eredeti példányát juttassa vissza pénztárának, az összeg átutalásra fog kerülni az igénybevevő bankszámlájára, melyet az egészségpénztári egyenlegéből levonnak.
<br /><br />
A József krt-i üzletünkben jelenleg a következő egészségpénztárak kártyáival tud fizetni:
<br /><br />
Allianz Egészségpénztár <br />
Medicina Egészségpénztár <br />
Izys Egészségpénztár <br />
MKB Egészségpénztár <br />
Patika Egészségpénztár <br />
Tempo Egészségpénztár <br />
Vasutas Egészségpénztár <br />
Vitamin Egészségpénztár <br />
<br />
Természetesen a többi szolgáltatónál is (OTP, Prémium, stb) lehetősége van elszámolni termékeinket, ha számlánkat visszajutatja nekik.
<br /><br />
A Bajcsy Zs. úti és Soroksári úti üzletünben a Vitamin, Vasutas, Tempo, MKB Egészségpénztár elfogadott, a fent felsorolt szolgáltatókkal szerződés kötés folyamatban van, de egyelőre nem lehet egészségkártyával fizetni.<br />
<br />
Móricz Zsigmond körúti üzletünkben Allianz, MKB, Vasutas, Tempo, Patika, Medicina Egészségpénztár elfogadott.
</p>
</div>
<!--
  <img border="0" src="images/premium_logo.jpg" /><img border="0" src="kepek/otp.jpg" width="202" height="43" /> <img border="0" src="kepek/kh.jpg" width="52" height="48" />&nbsp;&nbsp;&nbsp; <img border="0" src="kepek/mkb.jpg" width="49" height="47" />&nbsp;<br />
  termékeink teljeskör&ucirc;en elszámolhatóak. <br>
  -->
<p align="justify">
<!--
<table border="1" cellpadding="3" cellspacing="0" bordercolor="#C0C0C0" id="AutoNumber" width="100%">
  <tr>
    <td width="561" align="left" valign="middle" bgcolor="#F4F4F4" colspan="4"><p align="center">&nbsp;Szállítási költség postai szállí­tás esetén</td>
  </tr>
  <tr>
    <td width="169" align="left" valign="middle" bgcolor="#F4F4F4"> Fizetési mód</td>
    <td width="120" align="right" valign="middle" bgcolor="#F4F4F4"> Súlyhatár(g)</td>
    <td width="120" align="right" valign="middle" bgcolor="#F4F4F4"><p align="right"> Szállí­tási költség</p></td>
    <td width="272" align="right" valign="middle" bgcolor="#F4F4F4"><p align="right"> Értékhatár, mely felett ingyenes a szállítás</p></td>
  </tr>
  <tr>
    <td align="left" valign="top" rowspan="4">Előre utalás</td>
    <td align="right" valign="top">80</td>
    <td align="right" valign="top">490 Ft</td>
    <td align="right" valign="top" rowspan="4">15 000 Ft</td>
  </tr>
  <tr>
    <td align="right" valign="top">230</td>
    <td align="right" valign="top"> 590 Ft</td>
  </tr>
  <tr>
    <td align="right" valign="top">480</td>
    <td align="right" valign="top">750 Ft</td>
  </tr>
  <tr>
    <td align="right" valign="top">480 g fölött</td>
    <td align="right" valign="top">990 Ft</td>
  </tr>
  <tr>
    <td align="left" valign="top" rowspan="3"> Utánvét<br>
      (átmenetileg nem választható postai szállí­tás esetén )</td>
    <td align="right" valign="top">80</td>
    <td align="right" valign="top">690 Ft</td>
    <td align="right" valign="top" rowspan="3">20 000 Ft</td>
  </tr>
  <tr>
    <td align="right" valign="top">230</td>
    <td align="right" valign="top">890 Ft</td>
  </tr>
  <tr>
    <td align="right" valign="top">230 g fölött</td>
    <td align="right" valign="top">990 Ft</td>
  </tr>
  <tr>
    <td align="left" valign="top" rowspan="5"> Paypal</td>
    <td align="right" valign="top">80</td>
    <td align="right" valign="top">590 Ft</td>
    <td align="right" valign="top" rowspan="5">25 000 Ft</td>
  </tr>
  <tr>
    <td align="right" valign="top">230</td>
    <td align="right" valign="top">790 Ft</td>
  </tr>
  <tr>
    <td align="right" valign="top">480</td>
    <td align="right" valign="top">890 Ft</td>
  </tr>
  <tr>
    <td align="right" valign="top">730</td>
    <td align="right" valign="top">990 Ft</td>
  </tr>
  <tr>
    <td align="right" valign="top">730 g fölött</td>
    <td align="right" valign="top">1090 Ft</td>
  </tr>
</table>
Tájékoztatásul: egy 6db-os kiszerelésű kontaktlencse 
dobozostul kb. 30g súlyú.<br>
-->
<br />
<table border="1" cellpadding="3" cellspacing="0" bordercolor="#C0C0C0" id="AutoNumber"   width="80%"  align="center">
  <tr>
    <td width="561" align="left" valign="middle" bgcolor="#F4F4F4" colspan="3"><p align="center">&nbsp;Szállítási költség futárral való szállítás esetén</td>
  </tr>
  <tr>
    <td width="169" align="left" valign="middle" bgcolor="#F4F4F4"> Fizetési mód</td>
    <td width="120" align="right" valign="middle" bgcolor="#F4F4F4"><p align="right"> Szállítási költség</p></td>
    <td width="272" align="right" valign="middle" bgcolor="#F4F4F4"><p align="right"> Értékhatár, mely felett ingyenes a szállítás</p></td>
  </tr>
  <tr>
    <td align="left" valign="top">Előre utalás</td>
    <td align="right" valign="top">590 Ft</td>
    <td align="right" valign="top">15 000 Ft</td>
  </tr>
  <tr>
    <td align="left" valign="top">Utánvét</td>
    <td align="right" valign="top">790 Ft</td>
    <td align="right" valign="top">15 000 Ft</td>
  </tr>
  <tr>
    <td align="left" valign="top">Internetes bankkártya / MasterPass</td>
    <td align="right" valign="top">990 Ft</td>
    <td align="right" valign="top">25 000 Ft</td>
  </tr>
</table>
<p align="justify"> &nbsp;
<table border="1" cellpadding="3" cellspacing="0" bordercolor="#C0C0C0" id="AutoNumber4"   width="80%"  align="center">
  <tr>
    <td width="561" align="left" valign="middle" bgcolor="#F4F4F4" colspan="3"><p align="center">&nbsp;Szállítási költség Pick-pack ponton való átvétel 
        esetén</td>
  </tr>
  <tr>
    <td width="169" align="left" valign="middle" bgcolor="#F4F4F4"> Fizetési mód</td>
    <td width="120" align="right" valign="middle" bgcolor="#F4F4F4"><p align="right"> Szállítási költség</p></td>
    <td width="272" align="right" valign="middle" bgcolor="#F4F4F4"><p align="right"> Értékhatár, mely felett ingyenes a szállítás</p></td>
  </tr>
  <tr>
    <td align="left" valign="top">Előre utalás</td>
    <td align="right" valign="top">490 Ft</td>
    <td align="right" valign="top">10 000 Ft</td>
  </tr>
  <tr>
    <td align="left" valign="top">Utánvét</td>
    <td align="right" valign="top">490 Ft</td>
    <td align="right" valign="top">10 000 Ft</td>
  </tr>
  <tr>
    <td align="left" valign="top">Internetes bankkártya / MasterPass</td>
    <td align="right" valign="top">490 Ft</td>
    <td align="right" valign="top">25 000 Ft</td>
  </tr>
</table>
</p>
<p>
<br />
<table border="1" cellpadding="3" cellspacing="0" bordercolor="#C0C0C0" id="AutoNumber4"   width="80%"  align="center">
  <tr>
    <td width="561" align="left" valign="middle" bgcolor="#F4F4F4" colspan="3"><p align="center">&nbsp;Szállítási költség Foxpost ponton való átvétel esetén</td>
  </tr>
  <tr>
    <td width="169" align="left" valign="middle" bgcolor="#F4F4F4"> Fizetési mód</td>
    <td width="120" align="right" valign="middle" bgcolor="#F4F4F4"><p align="right"> Szállítási költség</p></td>
    <td width="272" align="right" valign="middle" bgcolor="#F4F4F4"><p align="right"> Értékhatár, mely felett ingyenes a szállítás</p></td>
  </tr>
  <tr>
    <td align="left" valign="top">Előre utalás</td>
    <td align="right" valign="top">590 Ft</td>
    <td align="right" valign="top">12 000 Ft</td>
  </tr>
  <tr>
    <td align="left" valign="top">Utánvét</td>
    <td align="right" valign="top">590 Ft</td>
    <td align="right" valign="top">12 000 Ft</td>
  </tr>
  <tr>
    <td align="left" valign="top">Internetes bankkártya / MasterPass</td>
    <td align="right" valign="top">590 Ft</td>
    <td align="right" valign="top">12 000 Ft</td>
  </tr>
</table>
<!--
<table border="1" cellpadding="3" cellspacing="0" bordercolor="#C0C0C0" id="AutoNumber3"  width="100%">
  <tr>
    <td width="561" align="left" valign="middle" bgcolor="#F4F4F4" colspan="3"><p align="center">&nbsp;Szállítási költség személyes átvétel 
        esetén</td>
  </tr>
  <tr>
    <td width="169" align="left" valign="middle" bgcolor="#F4F4F4"> Fizetési mód</td>
    <td width="120" align="right" valign="middle" bgcolor="#F4F4F4"><p align="right"> Szállítási költség</p></td>
    <td width="272" align="right" valign="middle" bgcolor="#F4F4F4"><p align="right"> Értékhatár, mely felett ingyenes a szállítás</p></td>
  </tr>
  <tr>
    <td align="left" valign="top">Előre utalás</td>
    <td align="right" valign="top">0 Ft</td>
    <td align="right" valign="top">0 Ft</td>
  </tr>
  <tr>
    <td align="left" valign="top">Utánvét</td>
    <td align="right" valign="top">0 Ft</td>
    <td align="right" valign="top">0 Ft</td>
  </tr>
  <tr>
    <td align="left" valign="top">Internetes bankkártya / Mastercard Mobile</td>
    <td align="right" valign="top">0 Ft</td>
    <td align="right" valign="top">0 Ft</td>
  </tr>
</table>-->
<br />
</p>
</div><?php }
}
