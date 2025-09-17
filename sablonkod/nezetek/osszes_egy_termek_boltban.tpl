<div class="product-one-of-all" >
    <h2><!--{$site}{$egy_termek.termek_alnev}--><a href="" class="body-link">{$egy_termek.termek_nev}</a></h2>
    <p align="left" class="product-one-of-all-man">{$egy_termek.termek_gyarto}</p>
   		{if $eznemteljesul && $egy_termek.termek_akcios_ar > 0 }<p align="center"><div class="prod-akcio"><div class="prod-akcio-text">{$ford.uj_ar}</div></div>{/if}
        
   		<a href="" title="{$egy_termek.termek_nev}">
        <img src="{if $egy_termek.termek_csoport==3}{$kepsrc2}{else}{$kepsrc}{/if}{$egy_termek.termek_kep}" alt="{$egy_termek.termek_nev}" title="{$egy_termek.termek_nev}" border="0"{if $egy_termek.termek_csoport==3}style="max-width:200px;"{/if} /></a>
    </p>
    
    <div class="product-one-of-all-price">
     {if $eznemteljesul }
     	<table border="0" cellpadding="3"><tr><td align="center"><span class="old_price">{$ford.regi_ar}:<br /><s>{$egy_termek.termek_ar|arformat}</s></span></td>
     
            <td><table width="126" class="product-one-of-all-np">
                <tr>
                    <td align="center" class="prod-title" height="25"><span style="font-size:14px; font-family:Georgia, "Times New Roman";">{$ford.ar}</span></td>
                </tr>
                
                <tr>
                    <td align="center" height="25">
                        <span style="font-size:20px; border-top: 1px dashed; border-color:#FFFFFF;"><b>{$egy_termek.termek_akcios_ar|arformat}</b></span>
                    </td>
                </tr>
            </table>
            </td></tr>
        </table>
        {else}
        <table width="126" class="product-one-of-all-np">
        	<tr>
            	<td align="center" class="prod-title" height="25"><span style="font-size:14px; font-family:Georgia, "Times New Roman";">{$ford.ar}</span></td>
            </tr>
            <tr>
            	<td align="center" height="25">
                	<span style="font-size:20px; border-top: 1px dashed; border-color:#FFFFFF;"><b>{$egy_termek.termek_ar_bolt|arformat}</b></span>
                </td>
            </tr>
        </table>
       {/if}
    </div>

</div>



