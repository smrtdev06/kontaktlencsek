<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
{
literal
}
body {
	margin: 0;
	padding: 0;
	border: none;
	background-color:#4a3c31;
	color:#4a423f;
	font-family:Arial, Verdana, Helvetica, sans-serif;
	font-size:12px;
}
h1{
	font-size:14px;	
}
.header {
	background-color:#4a3c31;
	height:70px;
}
.main {
	background-color:#FFFFFF;
}
.footer {
	background-color:#4a3c31;
	height:70px;
}
#header {
	width:700px;
	height:70px;
	margin:0 auto 0 auto;
	background: url("http://www.lencsek.hu/css/img/logo.png") no-repeat scroll left 10px transparent;
	
}
#main {
	width:700px;
	margin:0 auto 0 auto;
	text-align:left;
}
#footer {
	width:700px;
	height:50px;
	margin:0 auto 0 auto;
	background: url("http://www.lencsek.hu/css/img/logo-footer2.png") no-repeat scroll 0 10px transparent;
}
.contact {
	height:50px;
	margin:0 0 0 26px;
	float:right;
	color:#FFFFFF;
	font-size:11px;
	padding-top:25px;
}
.contact a{
	color:#FFFFFF;
}
.cont1{
	color:#c7c4bf;
	margin-right:10px;
}
.order-number{
	width:680px;
 	background-color:#80766e;	
	color:#FFFFFF;
	font-size:18px;
	padding:10px;
	margin:20px 0 20px 0;
}
.order-price{
	background-color:#8f6199;
	width:276px;	
	color:#FFFFFF;
	font-size:16px;
	padding:10px;
	height:15px;
}
.order-page h1{
	font-family:Georgia, "Times New Roman", Times, serif;
	color:#80766e;
}
.order-page h2{
	font-family:Georgia, "Times New Roman", Times, serif;
}
.order-price-table{
	width:340px;
	background-color:#8f6199;
	color:#FFFFFF;
	padding:15px 5px 15px 5px;
	font-size:14px;
	margin-right:0;
	margin-left:auto;
	position:relative;
	
}
.order-price-table table{
	font-size:12px;
	color:#FFFFFF;
}
.order-page h2{
	font-size:18px;
	font-family:Arial, Verdana, Helvetica, sans-serif;
	color:#46b7cb;
	font-weight:normal;
	margin:0;
}
.order-table-header{
	font-size:14px;
	font-weight:normal;
}
.order-table-header h2{
	color:#46b6cc;
	font-size:14px;	
}
.order-datas{
	color:#80766e;
	width:700px;
	margin-top:20px;
	font-size:12px;
}
order-datas table{
	font-size:12px;
}
.felhivjuk{
	background-color:#f5f4f2;
	color:#83766d;
	padding:8px;
}
.bev{
	font-family:Georgia, "Times New Roman", Times, serif;
	font-size:12px;
}
.o-table{
	font-size:11px;
}
.price-tr{
	color:#FFF;
}
.table-arial{
	font-size:12px;
}




/**/

{
/literal
}
</style>
</head>

<body>
<table width="100%" style="margin:0;">
	<tr>
		<td class="header" align="center"><div id="header"></div></td>
	</tr>
	<tr>
		<td class="main" align="center">
   	  <div id="main">
            <div class="bev">
              <h1>Dear {$rendadat.rend_rendnev}!</h1>
                <p>Thank you for your order!
              {if $rendadat.fiz_mod == 1} Please transfer the order value ({$osszkoltseg|arformat} ) to our bank account at OTP Bank no.</p><p align="center" style="color:#749d1b;"><b>11703020 - 20000057 - 00000000</b></p><p>Please indicate order number ({$rend_id}) at the remark field. 
				We dispatch the package after we receive the money.{/if}</p>
            </div>
            <div class="order-number"> {$ford.rendeles_szama}: {$rend_id}</div>
             <table width="100%" border="0" cellpadding="3" cellspacing="1" class="o-table">
             {foreach from=$tartalom item=egy}
                 <tr class="order-table-header">
                    <td align="left" valign="top" width="220" height="20"><h2>{$egy.termek_nev}</h2></td>
                    <td align="left" valign="top"><strong>{$ford.szem}</strong></td>
                    <td align="left" valign="top"><strong>{$ford.szallitas}</strong></td>
                    <td align="left" valign="top"><strong>{$ford.ar}</strong></td>
                 </tr>
                 <tr class="table-arial">
                    <td rowspan="2" align="left" valign="top"><a href="{$site}{$egy.termek_alnev}" title="{$egy.termek_nev}"><img src="http://www.lencsek.hu/kepek/termek_kepek/{$egy.termek_kep}" alt="{$egy_termek.termek_nev}" title="{$egy.termek_nev}" border="0" /></a></td>
                    <td rowspan="2" align="left" valign="top"> {$ford.szemek[$egy.termek_szem]}<br />
                      <div>{jellemzoki jell="2" jell_id=$egy.jell2}</div>
                      <div>{jellemzoki jell="1" jell_id=$egy.jell1}</div>
                      <div>{jellemzoki jell="3" jell_id=$egy.jell3}</div>
                      <div>{jellemzoki jell="4" jell_id=$egy.jell4}</div>
                      <div>{jellemzoki jell="5" jell_id=$egy.jell5}</div>
                      <div>{jellemzoki jell="6" jell_id=$egy.jell6}</div></td>
                    <td align="left" valign="top">{$ford.szallitas}: {$egy.termek_szallitas}</td>
                    <td align="left" valign="top" style="padding-right:10px;">{$egy.termek_ar|arformat}</td>
                 </tr>
                 <tr>
                    <td colspan="2" align="right" valign="bottom"><div class="order-price">
                        <div style="float:left;">{$ford.mennyiseg}: {$egy.termek_db} {$ford.db}</div>
                        <div style="float:right;">{$ford.ar}: <b>{$egy.termek_ar*$egy.termek_db|arformat}</b></div>
                      </div></td>
                 </tr>
              {/foreach}
            </table>
            
    		<div style="width:340px; background-color:#f5f4f2; padding:5px 0 5px 40px; margin:15px 0 3px auto; font-size:18px;">{$ford.ar}</div>
            <div class="order-price-table">
                <table width="100%" style="font-size:12px;">
                    <tr class="price-tr">
                    	<td align="left"><b>{$ford.termekek}:</b></td>
                    	<td align="right" style="padding-right:25px;">{$rendadat.rend_osszesen|arformat}</td>
                    </tr>
                    <tr class="price-tr">
                    	<td align="left" height="22" valign="top"><b>{$ford.szallitas}:</b></td>
                    	<td align="right" height="22" valign="top" style="padding-right:25px;">{$rendadat.rend_szallitasikoltseg|arformat}</td>
                    </tr>
                    <tr style="border-top: 1px dashed; border-color:#FFFFFF;" class="price-tr">
                    	<td align="left" valign="bottom" height="22"><b>{$ford.osszesen}:</b></td>
                    	<td align="right" valign="bottom" style="padding-right:25px; font-size:18px;"><b>{$osszkoltseg|arformat}</b></td>
                    </tr>
                </table>
            </div>
            <div class="order-datas">
                <table border="0" width="100%" cellspacing="0" cellpadding="3">
                	<tr style="background-color:#f5f4f2; font-size:18px; padding:8px;">
                		<td style="padding:5px;">
                        	{if $rendadat.rend_bolt_kod > 0 || $szallmod == 4}
                            {$ford.szemelyes_adatok}
                            {else}
                            We send the package to this address
                            {/if}
                      </td>
                		<td style="padding:5px;">
                        	{$ford.elado_adatai}
                        </td>
                	</tr>
                	<tr class="table-arial">
                        <td valign="top" width="50%" align="left">
                            <table width="100%" cellpadding="5" class="table-arial">
                                <tr>
                                  <td width="50%"><b>{$ford.nev}:</b></td>
                                  <td>{$rendadat.rend_rendnev}</td>
                                </tr>
                                <tr>
                                  <td><b>{$ford.telefon}:</b></td>
                                  <td>{$rendadat.rend_telefon}</td>
                                </tr>
                                <tr>
                                  <td><b>{$ford.email}:</b></td>
                                  <td>{$useradat.felh_email}</td>
                                </tr>
                                <tr>
                                  <td><b>{$ford.varos_telepules}:</b></td>
                                  <td>{$rendadat.rend_varos}</td>
                                </tr>
                                <tr>
                                  <td><b>{$ford.iranyitoszam}:</b></td>
                                  <td>{$rendadat.rend_irsz}</td>
                                </tr>
                                <tr>
                                  <td><b>{$ford.utca_hazszam}:</b></td>
                                  <td>{$rendadat.rend_utca}</td>
                                </tr>
                                <tr>
                                  <td><b>{$ford.szallitas_es_fizetes}:</b></td>
                                  <td>{$szallmod_ki}, {$fizmod_ki}</td>
                                </tr>
                            </table>
                  
                            
                            
                            {if $rendadat.rend_bolt_kod > 0} 
                            <p>
                            	<b>Delivery at:</b><br />
                                <br />
                                {$boltadat.hely_bolt}<br/>
                                {$boltadat.hely_nev}<br/>
                                {$boltadat.hely_cim}<br/>
                                {$boltadat.hely_irsz}<br/>
                                {$boltadat.hely_leiras}<br/>
                                Monday: {$boltadat.ny_h}, Tuesday: {$boltadat.ny_k},<br/>
                                Wednesday: {$boltadat.ny_sz}, Thursday: {$boltadat.ny_cs},<br />
                                Friday: {$boltadat.ny_p}, Saturday: {$boltadat.ny_sz},<br />
                                Sunday: {$boltadat.ny_v}<br />
                            </p>
                            {/if}
                            
                            {if !empty($rendadat.rend_szamlanev) || !empty($rendadat.rend_szaml_utca) } 
                             <b>{$ford.szamlazasi_adatok}:</b><br />
                            <table width="100%" cellpadding="5" class="table-arial">
                                <tr>
                                  <td width="50%"><b>{$ford.szamlanev}:</b></td>
                                  <td>{$rendadat.rend_szamlanev}</td>
                                </tr>
                                <tr>
                                  <td><b>{$ford.varos}:</b></td>
                                  <td>{$rendadat.rend_szaml_varos}</td>
                                </tr>
                                <tr>
                                  <td><b>{$ford.iranyitoszam}:</b></td>
                                  <td>{$rendadat.rend_szaml_irsz}</td>
                                </tr>
                                <tr>
                                  <td><b>{$ford.utca}:</b></td>
                                  <td>{$rendadat.rend_szaml_utca}</td>
                                </tr>
                               
                            </table>
                            {/if}
                            
                            {if $useradat.felh_egpenztar > 0} <br />
                            <br />
                            {if !empty($useradat.felh_tagnev) }<br />
                            <b>{$ford.egeszsegpenztar_tag}:</b> {$useradat.felh_tagnev} {/if}
                            {if !empty($useradat.felh_egazon) }<br />
                            <b>{$ford.egeszsegpenztar_azonosito}:</b> {$useradat.felh_egazon} {/if}
                            {/if}
                            
                            <p><b>{$ford.megjegyzes}:</b></p>
							<p>{$rendadat.rend_megjegyzes}</p>

                		</td>
                        <td valign="top">
							
                            <b> O3 Optika Kft.</b> <br />
                            
                            <table width="100%" cellpadding="5" class="table-arial">
                                <tr>
                                  <td width="50%"><b>{$ford.email}:</b></td>
                                  <td><a href="mailto:office@lencsek.hu" class="body-link">office@lencsek.hu</a></td>
                                </tr>
                                
                              <tr>
                                  <td><b>{$ford.telefon}:</b></td>
                                  <td>06 20 288 4444</td>
                                </tr>
                                <tr>
                                  <td><b>Székhely:</b></td>
                                  <td></td>
                                </tr>
                                <tr>
                                  <td><b>{$ford.varos_telepules}:</b></td>
                                  <td>Budapest</td>
                                </tr>
                                <tr>
                                  <td><b>{$ford.iranyitoszam}:</b></td>
                                  <td>1037</td>
                                </tr>
                                <tr>
                                  <td><b>{$ford.utca_hazszam}:</b></td>
                                  <td>Szépvölgyi út 49-61.</td>
                                </tr>
                                <tr>
                                  <td><b>Tax number:</b></td>
                                  <td>13459576-2-41</td>
                                </tr>
                                <tr>
                                  <td><b>Company registration no.:</b></td>
                                  <td>01-09-736310</td>
                                </tr>
                            </table>

							<p align="center">&nbsp;</p>
                        </td>
                	</tr>
                </table>
                
                
                <p>
                
                 We will send an e-mail to you when we pass the package to the delivery company.</p>
                <p align="center" style="color:#749d1b; font-size:1.6em;"><b>Thank you for your order!</b></p>
                <p style="font-size:0.8em;">
                *If you order different products: We send you order in one package so please expect the longest delivery time indicated belove the producte. </p>
			</div>
		</div><!--main end-->
	</td>
	</tr>
	<tr>
		<td classs="footer" align="center">
            <div id="footer">
                <div class="contact"><span class="cont1">{$ford.web}:</span> <a href="http://www.lencsek.hu">www.lencsek.hu</a></div>
                <div class="contact"><span class="cont1">{$ford.email}:</span> <a href="mailto:office@lencsek.hu">office@lencsek.hu</a></div>
                <div class="contact"><span class="cont1">{$ford.telefon}:</span> +36 20 288 4444</div>
            </div>
		</td>
	</tr>
</table>


</body>
</html>