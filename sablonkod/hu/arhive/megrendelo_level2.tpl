
	
	<table id="fent" width="700">
	<tr>
		<td width="700" align="center" class="header" style="background:#4A3C31;">
       
        <img src="http://lencsek.hu/version2/css/img/mailheader.gif" />       </td>
	</tr>
	
	<tr>
		<td class="main" align="left" style="font-family:Arial; font-size:12px;">
   	        
			
			<table width="800" bgcolor="#fff" style="background:#fff;font-family:Arial;">
                <tr>
                    <td>
                        <h1 style="font-family:Arial; font-size: 19px">Kedves {$rendadat.rend_rendnev}!</h1>      
                    </td>
                </tr>   
               
			    <tr>
                    <td style="font-family:Arial;">
                            <p style="font-family:Arial; font-size: 14px; color: #3B3B3B;">Köszönjük rendelését !
                          {if $rendadat.fiz_mod == 1} Kérjük, hogy a végösszeget ({$osszkoltseg|mailnumberformat} ) utalja át az OTP Banknál vezetett</p><p align="center" style="color:#749d1b;"><b>11703020 - 20000057 - 00000000</b></p><p style="font-family:Arial; font-size: 14px; color: #3B3B3B;"> sz. számlaszámunkra. Kérjuk, hogy a rendelés számát ({$rend_id}) tüntesse fel az átutaláson. A terméket az összeg megérkezése után tudjuk küldeni.{/if} 
                            </p>        
                    </td>
                </tr>
				
                <tr>
                    <td style="background:#80766E; padding:10px;color:#fff;font-size:15px;font-family:Arial;">
                        {$ford.rendeles_szama}: {$rend_id}
                    </td>
                </tr>
            </table>
			
			
            
             <table width="100%" border="0" cellpadding="3" cellspacing="0" class="o-table" style="font-family:Arial; background-color:#FFFFFF">
             {foreach from=$tartalom item=egy}
                 <tr class="horder-table-header" style="font-family:Arial;font-size:12px;">
                    <td align="left" valign="top" width="220" height="20" style="font-family:Arial;"><h2 style="color:#46B7CB;">{$egy.termek_nev}</h2></td>
                    <td align="left" valign="top" style="font-family:Arial;font-size:12px; color: #3B3B3B;"><strong>{$ford.szem}</strong></td>
                    <td align="left" valign="top" style="font-family:Arial;font-size:12px; color: #3B3B3B;"><strong>{$ford.szallitas}</strong></td>
					<td align="left" valign="top" style="padding-left:10px;font-family:Arial;font-size:12px; color: #3B3B3B;"><strong>{$ford.mennyiseg}:</strong></td>
                    <td align="left" valign="top" style="padding-left:10px;font-family:Arial;font-size:12px; color: #3B3B3B;"><strong>{$ford.ar}</strong></td>
                 </tr>
                
				 <tr class="table-arial">
                    <td rowspan="2" align="left" valign="top" >
                        <a href="http://lencsek.hu/version2/{$egy.termek_alnev}" title="{$egy.termek_nev}">
                        <img src="http://lencsek.hu/version2/kepek/termek_kepek/thumb_{$egy.termek_id}.jpg" alt="{$egy_termek.termek_nev}" title="{$egy.termek_nev}" border="0" />
                        </a></td>
                    <td  align="left" valign="top" style="font-family:Arial;font-size:12px;"> {$ford.szemek[$egy.termek_szem]}<br />
                      <p style="font-family:Arial;font-size:12px;">{jellemzoki jell="2" jell_id=$egy.jell2}</p>
                      <p style="font-family:Arial;font-size:12px;">{jellemzoki jell="1" jell_id=$egy.jell1}</p>
                      <p style="font-family:Arial;font-size:12px;">{jellemzoki jell="3" jell_id=$egy.jell3}</p>
                      <p style="font-family:Arial;font-size:12px;">{jellemzoki jell="4" jell_id=$egy.jell4}</p>
                      <p style="font-family:Arial;font-size:12px;">{jellemzoki jell="5" jell_id=$egy.jell5}</p>
                      <p style="font-family:Arial;font-size:12px;">{jellemzoki jell="6" jell_id=$egy.jell6}</p></td>
                    <td align="left" valign="top"  style="font-family:Arial;font-size:12px;">{$ford.szallitas}: {$egy.termek_szallitas}</td>
                    <td align="left" valign="top" style="font-family:Arial;padding-left:10px;font-size:12px;">
                   {$egy.termek_db}</td>
					<td align="left" valign="top" style="font-family:Arial;padding-left:10px;font-size:12px;">{$egy.termek_ar|mailnumberformat}</td>
                 </tr>
               
         </table>
                       
      </td> 
  </tr>
          {/foreach} 
</table>
            
    	<table width="800" cellpadding="0" cellspacing="5">
        <tr>
                    <td>&nbsp;
                    
                    
                    </td>
                    <td style="width:340px; color:#fff; background-color:#8F6199;  margin:15px 0 3px auto; font-size:18px;font-family:Arial;">
                    
                <table width="100%" style="font-size:12px;font-family:Arial;" cellspacing="5">
                    <tr class="price-tr">
                    	<td align="left" style="font-family:Arial;color:#fff;"><b>{$ford.termekek}:</b></td>
                    	<td align="right" style="padding-right:25px;font-family:Arial;color:#fff;">{$rendadat.rend_osszesen|mailnumberformat}</td>
                    </tr>
                    <tr class="price-tr">
                    	<td align="left" height="22" valign="top" style="font-family:Arial;color:#fff;"><b>{$ford.szallitas}:</b></td>
                    	<td align="right" height="22" valign="top" style="padding-right:25px;font-family:Arial;color:#fff;">{$rendadat.rend_szallitasikoltseg|mailnumberformat}</td>
                    </tr>
                    <tr style=" padding-top:5px;" class="price-tr">
                    	<td align="left" valign="bottom" height="22" style="font-size:18px; border-top: 1px dashed; border-color:#FFFFFF; font-family:Arial;color:#fff; "><b>{$ford.szallitas_osszesen}:</b></td>
                    	<td align="right" valign="bottom" style="padding-right:25px; font-size:18px;border-top: 1px dashed; border-color:#FFFFFF;font-family:Arial;color:#fff;"><b>{$osszkoltseg|mailnumberformat}</b></td>
                    </tr>
                </table>
            
                    </td>    
                </tr>
  </table>
            
                <table border="0" width="800" cellspacing="0" cellpadding="3" style="background-color:#FFFFFF;">
                	<tr style="background-color:#f5f4f2; font-size:18px; padding:8px;font-family:Arial;">
                		<td style="padding:5px;font-family:Arial;font-size:14px; color:#404040;">
                        	{if $rendadat.rend_bolt_kod > 0 || $szallmod == 4}
                            {$ford.szemelyes_adatok}:
                            {else}
                            Megrendelését erre a címre küldjük:
                            {/if}
                        </td>
                		<td style="padding:5px;font-family:Arial;font-size:14px; color:#404040;">
                        	{$ford.elado_adatai}:
                        </td>
                	</tr>
                	<tr class="table-arial">
                        <td valign="top" width="50%" align="left">
                            <table width="100%" cellpadding="5" class="table-arial" style="background-color:#FFFFFF">
                                <tr style="font-family:Arial;font-size:12px;">
                                  <td width="50%" style="font-family:Arial;font-size:12px; color: #3B3B3B;"><b>{$ford.nev}:</b></td>
                                  <td style="font-family:Arial;font-size:12px; color: #666666;">{$rendadat.rend_rendnev}</td>
                                </tr>
                                <tr>
                                  <td style="font-family:Arial;font-size:12px; color: #3B3B3B;"><b>{$ford.telefon}:</b></td>
                                  <td style="font-family:Arial;font-size:12px; color: #666666;">{$rendadat.rend_telefon}</td>
                                </tr>
                                <tr>
                                  <td style="font-family:Arial;font-size:12px; color: #3B3B3B"><b>{$ford.email}:</b></td>
                                  <td style="font-family:Arial;font-size:12px; color: #666666;">{$useradat.felh_email}</td>
                                </tr>
                                <tr>
                                  <td style="font-family:Arial;font-size:12px; color: #3B3B3B"><b>{$ford.varos_telepules}:</b></td>
                                  <td style="font-family:Arial;font-size:12px; color: #666666;">{$rendadat.rend_varos}</td>
                                </tr>
                                <tr>
                                  <td style="font-family:Arial;font-size:12px; color: #3B3B3B"><b>{$ford.iranyitoszam}:</b></td>
                                  <td style="font-family:Arial;font-size:12px; color: #666666;">{$rendadat.rend_irsz}</td>
                                </tr>
                                <tr>
                                  <td style="font-family:Arial;font-size:12px; color: #3B3B3B"><b>{$ford.utca_hazszam}:</b></td>
                                  <td style="font-family:Arial;font-size:12px; color: #666666;">{$rendadat.rend_utca}</td>
                                </tr>
                                <tr>
                                  <td style="font-family:Arial;font-size:12px; vertical-align: middle; color: #3B3B3B; color: #3B3B3B"><b>{$ford.szallitas_es_fizetes}:</b></td>
                                  <td style="font-family:Arial;font-size:12px; vertical-align: bottom; color: #666666;">{$szallmod_ki}, {$fizmod_ki}
                       <br /> { $smarty.session.premiumcurrier }
                       <br /> { $smarty.session.smscurrier }
                                  </td>
                                </tr>
                            </table>
                  
                           
                            
                            {if $rendadat.rend_bolt_kod > 0} 
                            <p style="font-family:Arial;font-size:13px; padding-left: 5px; color: #3B3B3B;">
                            	<b>Átvételi hely:</b>
                                </p> <p style="font-family:Arial;font-size:13px; padding-left: 5px; color:#666666; line-height:18px; ">
                                {$boltadat.hely_bolt}<br/>
                                {$boltadat.hely_nev}<br/>
                                {$boltadat.hely_cim}<br/>
                                {$boltadat.hely_irsz}<br/>
                                {$boltadat.hely_leiras}<br/>
                                Hétfő: {$boltadat.ny_h}, Kedd: {$boltadat.ny_k},<br/>
                                Szerda: {$boltadat.ny_sz}, Csütörtök: {$boltadat.ny_cs},<br />
                                Péntek: {$boltadat.ny_p}, Szombat: {$boltadat.ny_sz},<br />
                                Vasárnap: {$boltadat.ny_v}<br />
                            </p>
                            {/if}
                            
                            {if !empty($rendadat.rend_szamlanev) || !empty($rendadat.rend_szaml_utca) } 
                            <b style="font-family:Arial;font-size:12px; color: color: #3B3B3B;">{$ford.szamlazasi_adatok}:</b><br />
                            <table width="100%" cellpadding="5" class="table-arial">
                                <tr>
                                  <td width="50%" style="font-family:Arial;font-size:12px; color: #3B3B3B"><b>{$ford.szamlanev}:</b></td>
                                  <td style="font-family:Arial;font-size:12px; color:#666666">{$rendadat.rend_szamlanev}</td>
                                </tr>
                                <tr>
                                  <td style="font-family:Arial;font-size:12px; color: #3B3B3B"><b>{$ford.varos}:</b></td>
                                  <td style="font-family:Arial;font-size:12px; color:#666666">{$rendadat.rend_szaml_varos}</td>
                                </tr>
                                <tr>
                                  <td style="font-family:Arial;font-size:12px; color: #3B3B3B"><b>{$ford.iranyitoszam}:</b></td>
                                  <td style="font-family:Arial;font-size:12px; color:#666666">{$rendadat.rend_szaml_irsz}</td>
                                </tr>
                                <tr>
                                  <td style="font-family:Arial;font-size:12px; color: #3B3B3B"><b>{$ford.utca}:</b></td>
                                  <td style="font-family:Arial;font-size:12px;  color:#666666">{$rendadat.rend_szaml_utca}</td>
                                </tr>
                               
                            </table>
                            
                            
                            {/if}
                            <p style="font-family:Arial;font-size:12px;">
                            
                            
                            {if $useradat.felh_egpenztar > 0} <br />
                            <br />
                            {if !empty($useradat.felh_tagnev) }<br />
                            <b>{$ford.egeszsegpenztar_tag}:</b> {$useradat.felh_tagnev} {/if}
                            {if !empty($useradat.felh_egazon) }<br />
                            <b>{$ford.egeszsegpenztar_azonosito}:</b> {$useradat.felh_egazon} {/if}
                            {/if}
                            </p>
                            <p style="font-family:Arial; color:#404040;"><b>{$ford.megjegyzes}:</b></p>
							<p style="font-family:Arial; font-size:13px; color:#666666">{$rendadat.rend_megjegyzes}</p>

                		</td>
                        <td valign="top" style="font-family:Arial;font-size:12px; color: #3B3B3B;">
							
                            <b> O3 Optika Kft.</b> <br />
                            
                            <table width="100%" cellpadding="5" class="table-arial" style="font-family:Arial;">
                                <tr style="font-family:Arial;font-size:12px;">
                                  <td width="50%" style="font-family:Arial;font-size:12px; color: #3B3B3B;"><b>{$ford.email}:</b></td>
                                  <td style="font-family:Arial;font-size:12px;"><a href="mailto:office@lencsek.hu" class="body-link">office@lencsek.hu</a></td>
                                </tr>
                                <tr>
                                  <td width="50%" style="font-family:Arial;font-size:12px; color: #3B3B3B;"><b>Ügyfélszolgálat:</b></td>
                                  <td style="font-family:Arial;font-size:12px; color:#666666;">H-P: 8.00-16.30</td>
                                </tr>
                                <tr>
                                  <td style="font-family:Arial;font-size:12px; color: #3B3B3B;"><b>{$ford.telefon}:</b></td>
                                  <td style="font-family:Arial;font-size:12px; color:#666666;">06 20 288 4444</td>
                                </tr>
                                <tr>
                                  <td style="font-family:Arial;font-size:12px; color: #3B3B3B;"><b>Székhely:</b></td>
                                  <td></td>
                                </tr>
                                <tr>
                                  <td style="font-family:Arial;font-size:12px; color: #3B3B3B;"><b>{$ford.varos_telepules}:</b></td>
                                  <td style="font-family:Arial;font-size:12px; color:#666666;">Budapest</td>
                                </tr>
                                <tr>
                                  <td style="font-family:Arial;font-size:12px; color: #3B3B3B;"><b>{$ford.iranyitoszam}:</b></td>
                                  <td style="font-family:Arial;font-size:12px; color:#666666;">1037</td>
                                </tr>
                                <tr>
                                  <td style="font-family:Arial;font-size:12px; color: #3B3B3B;"><b>{$ford.utca_hazszam}:</b></td>
                                  <td style="font-family:Arial;font-size:12px; color:#666666;">Szépvölgyi út 49-61.</td>
                                </tr>
                                <tr>
                                  <td style="font-family:Arial;font-size:12px; color: #3B3B3B;"><b>Adószám:</b></td>
                                  <td style="font-family:Arial;font-size:12px; color:#666666;">13459576-2-41</td>
                                </tr>
                                <tr>
                                  <td style="font-family:Arial;font-size:12px; color: #3B3B3B;"><b>Cégjegyzék szám:</b></td>
                                  <td style="font-family:Arial;font-size:12px; color:#666666;">01-09-736310</td>
                                </tr>
                            </table>

							<p align="center" style="font-family:Arial;font-size:13px; line-height:18px; padding-top: 20px;">
                                "Átvétel optikában" szállítási mód esetén átvételi hely: <br />
                                <strong>Bp, IX.ker. Thaly Kálmán u.40. számnál, Vendel sétányon található optikában. </strong><br />
                                Kérjük várja meg értesítésünket a kiszállításról !
                            </p>
                        </td>
                	</tr>
                </table>
                <table width="800">
                    <tr>
                        <td style="background-color:#f5f4f2;font-size:18px;padding:8px;font-family:Arial; color:#404040;">
                            Felhívjuk figyelmét!        
                        </td>
                    </tr>
                    <tr>
                        <td style="background-color:#FFFFFF">
                              <p style="font-family:Arial;font-size:13px; color:#666666">
                Felhívjuk figyelmét, hogy a szokásosnál több rendelés miatt átmeneti késés előfordulhat a feltűntetett szállítási időhöz képest. Megértését köszönjük.
                <br />
                Amikor átadjuk a csomagot kézbesítésre egy értesítő e-mailt fogunk küldeni.</p>
                <p align="center" style="color:#749d1b;font-family:Arial; font-size:1.6em;"><b>Köszönjük a vásárlást!</b></p>
                <p style="font-size:13px;font-family:Arial; color:#666666; text-align:justify;">
                *Amennyiben több féle terméket rendel: az egyes 
                termékek szállítási ideje eltérhet,&nbsp; a termékeket egyszerre 
                szállítjuk és értelemszerűen az egyes termékek mellett feltüntetett 
                szállítási idők közül kérjük a leghosszabb szállítási időt 
                figyelembe venni.Köszönjük. <br>
                <br>
                Kontaktlencse vásárlás esetén a rendelés leadásávál a vásárló kijelenti, hogy a fenti típusú és paraméterű kontaktlencsét már viselte, azt számára szemorvos írta elő valamint 6 hónapon belül kontroll vizsgálaton részt vett és kontaktlencse viseléssel kapcsolatos panasza nincs.
                A kontaktlencse helytelen megválasztásából, viseléséből adódó panaszokért felelősséget nem vállalunk.
                </p>
                        </td>
                    </tr>
                </table>
                
              
		
		
	</td>
	</tr>
	  <tr>
		<td class="header" align="center" bgcolor="#4A3C31">
        <img src="http://lencsek.hu/version2/css/img/bottom-mail.png" />
        </td>
	</tr>
    
</table>
