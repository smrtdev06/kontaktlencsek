  <table width="100%" cellspacing="0" cellpadding="0" class="transport-table">
            <tr class="transport-table-grey" >
              <td colspan="2" align="center" height="50" bgcolor="#FFFFFF"></td>
             
           
              
              <!-- {if $szallmod == $sz_item.szall_id}checked="checked"{/if} --> 
              <!-- {if $fizmod == $fiz_item.fiz_id}checked="checked"{/if}    --> 
              
    {foreach from=$szallitasok item=sz_item}
              
              {literal} 
              <script language="javascript">
                  szalmod={/literal}{$sz_item.szall_id}{literal};
              </script> 
              {/literal}
              
              <td align="center" valign="middle"><input type="radio" name="szallmod" id="szallmod" value="{$sz_item.szall_id}" onclick="javascript:szalmod={$sz_item.szall_id};dinamikusar(fizmod,szalmod);" />
                {$sz_item.szallnev} <a href="javascript:void(0);" onmouseover="return overlib('{$sz_item.segitseg}',WIDTH, 400, OFFSETX, 15, OFFSETY,-15,HAUTO,VAUTO,CAPTION,'{$sz_item.szallnev}');" onmouseout="return nd();"><img src="css/icons/kerdojel.png" border="0"></a> {if $sz_item.szall_id == 3}
                <div id="pickpackbox" style="display:none;" align="left"> <br />
                
                  <select name="p_megye" size="1" onchange="hely_feltoltes(this.form,this,'p_varos')" class="kicsi-select">
                    <option value="0">Válassz megyét</option>
                    {foreach from=$megyek item=megye}
                                <option value="{$megye.hely_id}">{$megye.hely_nev}</option>
                    {/foreach}
                  </select>
                  <br />
                  
                  <select name="p_varos" size="1"  onchange="hely_feltoltes(this.form,this,'p_hely')" class="kicsi-select">
                    <option value="0">Válassz várost/kerületet</option>
                  </select>
                  <br />
                  
                  <select name="p_hely" size="1" onchange="nyitvatartas(this)" class="kicsi-select">
                    <option value="0">Válassz átvételi pontot</option>
                  </select>
                  <br />
                  
                  <br />
                  <font size="-2"> <span id="nyitvatart"> </span> </font> <br />
                </div>
                {/if} </td>
              {/foreach} </tr>
            <tr>
              <td rowspan="{$fizszam}" > {if empty($sz_hiba) }
                {$ford.fizetes}:*
                {else} <span class="">{$ford.fizetes}:*</span> {/if} </td>
                

                
    {foreach from=$fizetesek item=fiz_item}
              
              {literal} 
              <script language="javascript">
                  fizmod={/literal}{$fiz_item.fiz_id}{literal};
              </script> 
              {/literal}
              
              <td valign="middle" height="50" class="transport-table-grey" ><input type="radio" name="fizetesmod" id="fizetesmod" value="{$fiz_item.fiz_id}" onclick="fizmod={$fiz_item.fiz_id};dinamikusar(fizmod,szalmod);" />
                {$fiz_item.fiznev} <a href="javascript:void(0);" onmouseover="return overlib('{$fiz_item.segitseg}',WIDTH, 400, OFFSETX, 15, OFFSETY,-15,HAUTO,VAUTO,CAPTION,'{$fiz_item.fiznev}');" onmouseout="return nd();"><img src="css/icons/kerdojel.png" border="0"></a></td>
              {foreach from=$szallitasok item=sz_item}
              <td align="center"><span class="transport-table-price">{szallarformat ar=$szall_tomb[$fiz_item.fiz_id][$sz_item.szall_id].ar ingyen=$szall_tomb[$fiz_item.fiz_id][$sz_item.szall_id].ingyen}</span></td>
              {/foreach} </tr>
            {if $fizszam != $fiz_item.fiz_id}
            <tr>{/if}
    {/foreach}
    
</table>  