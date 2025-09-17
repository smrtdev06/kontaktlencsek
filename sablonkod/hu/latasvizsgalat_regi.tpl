<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>

<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>



<style>
div#dialog-form label, input { display:block; }
div#dialog-form input.text { margin-bottom:12px; width:95%; padding: .4em; }
div#dialog-form fieldset { padding:0; border:0; margin-top:25px; }
div#users-contain { width: 350px; margin: 20px 0; }
div#users-contain table { margin: 1em 0; border-collapse: collapse; width: 100%; }
div#users-contain table td, div#users-contain table th { border: 1px solid #eee; padding: .6em 10px; text-align: left; }

.ui-dialog .ui-state-error { padding: .3em; }
.validateTips { border: 1px solid transparent; padding: 0.3em; }

.feher_text {
     font-size:14px;
     color:#fff;
}
     
.modosit {
    
}

</style>

{literal}

<script>
$(function() {

var nap = 0;
var ipont = 0;

var optomet = $( "#optom" );

var name = $( "#name" ),
email = $( "#email" ),
telefon = $( "#telefon" ),
allFields = $( [] ).add( name ).add( email ).add( telefon ),
tips = $( ".validateTips" );


function updateTips( t ) {
    tips
    .text( t )
    .addClass( "ui-state-highlight" );
    setTimeout(function() {
    tips.removeClass( "ui-state-highlight", 1500 );
    }, 500 );
}






function checkLength( o, n, min, max ) {
if ( o.val().length > max || o.val().length < min ) {
o.addClass( "ui-state-error" );
updateTips( "Length of " + n + " must be between " +
min + " and " + max + "." );
return false;
} else {
return true;
}
}
function checkRegexp( o, regexp, n ) {
    if ( !( regexp.test( o.val() ) ) ) {
        o.addClass( "ui-state-error" );
        updateTips( n );
        return false;
    } else {
        return true;
    }
}



$( "#dialog-form" ).dialog({
autoOpen: false,
height: 340,
width: 300,
modal: true,
buttons: {

"Foglalás": function() {

var bValid = true;
allFields.removeClass( "ui-state-error" );
bValid = bValid && checkLength( name, "username", 3, 30 );
bValid = bValid && checkLength( telefon, "telefon", 5, 16 );

// From jquery.validate.js (by joern), contributed by Scott Gonzalez: http://projects.scottsplayground.com/email_address_validation/




if ( bValid ) {
    
$.ajax({
type: "POST",
url: "vizsgalatmentes.php",
data: { name: $("#name").val(), telefon: $("#telefon").val(), email: $("#email").val(), megj: $("#megj").val(),
nap2: nap, ipont2: ipont }
}).done(function( msg ) {
alert( "Adatokat rögzítettük: " + msg );
location.reload();
});

$( this ).dialog( "close" );
}
},
"Mégsem": function() {
    $( this ).dialog( "close" );
}
},
close: function() {
allFields.val( "" ).removeClass( "ui-state-error" );
}
});

$( "#create-user" )
.button()
.click(function() {
$( "#dialog-form" ).dialog( "open" );
});

// módosító ikon
$( ".modosit" )
.click(function() {
    $( "#dialog-form" ).dialog( "open" );
    
    szulo = $(this).parent();
    
    info = szulo.find("input").val();
    nap = $(this).find("input").next().val();
    ipont = $(this).find("input").next().next().val();
    
    ugyf_nev = szulo.find("input").next().next().next().val();
    ugyf_tel = szulo.find("input").next().next().next().next().val();
    ugyf_email = szulo.find("input").next().next().next().next().next().val();
    ugyf_megj = szulo.find("input").next().next().next().next().next().next().val();
            
    $( "#name" ).val( ugyf_nev );
    $( "#telefon" ).val( ugyf_tel );
    $( "#email" ).val( ugyf_email );
    $( "#megj" ).text( ugyf_megj );
            
});

$( "#tbl td" )
.click(function() {
    
    info = $(this).find("input").val();
    nap = $(this).find("input").next().val();
    ipont = $(this).find("input").next().next().val();

    
    if( info !='nemfoglalt' && info != 'foglalt' ) {
        //alert(nap);
        //alert(ipont);
        $( "#dialog-form" ).dialog( "open" );
    } 
    {/literal}
    {if $jog_admin}
    {literal}
        else if(info == 'nemfoglalt' && optomet.val() ) {
            //alert('Optometrista : ' + optomet.val() );
            
            $.ajax({
                type: "POST",
                url: "vizsgalatmentes.php",
                data: { optom: optomet.val() , vizsg_nap: nap, vizsg_idopont: ipont }
                }).done(function( msg ) {
                //alert( "Adatokat rögzítettük: " + msg );
                location.href='http://lencsek.hu/latasvizsgalat?h={/literal}{$h}{literal}';
            });
        }
        
        else if( info == 'foglalt' ) {
            //$( "#dialog-form" ).dialog( "open" );
            
            //ugyf_nev = $(this).val();
            
            //$( "#name" ).val( ugyf_nev );
            //$( "#telefon" ).val("06730111");
            //$( "#email" ).val("Teszt email");
            //$( "#megj" ).text("Teszt megj");
            
        }
    {/literal}
    {/if}
    {literal}
    
});

});

function optom_valtas(optom,nap,ipont) {
    //alert('Módosítod az optometristát:' + optom.value + " " + nap + " " + ipont);
    window.location.href = "http://lencsek.hu/latasvizsgalat&h={/literal}{$h}{literal}&ujopt=1&nap="+nap+"&ipont="+ipont+"&optom="+optom.value;
}


</script>
{/literal}

















<span style="font-size:14px;">Látásvizsgálat időpontfoglalás</span><br />
<br />
<table width="100%" border="0">
<tr>
    <td align="left" width="80">{if !($mai_nap<=$pentek && $mai_nap>=$hetfo) || $jog_admin}<a href="latasvizsgalat&h={$elozo_het}">Előző hét</a>{/if}&nbsp;</td>
    <td align="center"> <span style="font-size:16px;">{$hetfo|date_format:"%Y.%m.%d"} - {$pentek|date_format:"%Y.%m.%d"}</span> </td>
    <td align="right" width="80">{if ($kov_het <= $max_kov_het) || $jog_admin}<a href="latasvizsgalat&h={$kov_het}">Következő hét</a>{/if}&nbsp;</td>
</tr>

</table>
<br />
{if $jog_admin}
<form name="napbeall" method="get" action="/latasvizsgalat">
    <input type="hidden" name="h" value="{$h}">
    <input name="ipontrogzit" type="hidden" value="1">
    <select id="optom" name="optom" size="1">
        <option value="Ági">Ági</option>
        <option value="Tamara">Tamara</option>
        <option value="Nem">Nem foglalható</option>
    </select>
    
    <select id="nap1" name="nap1" size="1">
        {foreach from=$napok item=egynap}
            <option value="{$egynap.datum}">{$egynap.nev}</option>
        {/foreach}
    </select>
    
    <select id="ipont1" name="ipont1" size="1">
        {foreach from=$idopontok item=egyidopont}
            <option value="{$egyidopont}">{$egyidopont}</option>
        {/foreach}
    </select>
    
    <select id="ipont2" name="ipont2" size="1">
        {foreach from=$idopontok item=egyidopont}
            <option value="{$egyidopont}" {if $egyidopont=='17:30'}selected{/if}>{$egyidopont}</option>
        {/foreach}
    </select>
    <input type="submit" value="Mentés">
</form>
<br />
<table>
<tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
</tr>


</table>
{/if}

<table id="tbl" width="100%" border="1">
<tr height="30" bgcolor="#47B7CB" >
    <td width="70" align="center">
        <input type="hidden" name="info" value="nemfoglalt">
        <span style="font-size:14px;color:#fff;">Időpont</span>
    </td>
    
    {foreach from=$napok item=nap}
    <td align="center" width="18%">
    <input type="hidden" name="info" value="nemfoglalt">
    <span style="font-size:14px; color:#fff;">{$nap.nev}<br />
    {$nap.datum|date_format:"%Y.%m.%d"}</span>
    </td>
    {/foreach}
    
</tr>
{assign var="db" value=1}
{foreach from=$idopontok key=ikulcs item=ipont}
<tr height="30">
<td align="center" bgcolor="#47B7CB">
    <input type="hidden" name="info" value="nemfoglalt">
    <span style="color:#fff;">{$ipont}</span>
</td>



    {foreach from=$napok key=nkulcs item=nap}
    
        {assign var=n value=$nap.datum|date_format:"%m%d"}
        {assign var=i value=$ipont|date_format:"%H%M"}
        
        {if $smarty.now < elmult($nap.datum,$ipont) || $jog_admin}
        
        {if $heti_adat.$n.$i.foglalva==1}
        <!-- Foglalva van az időpont -->
        <td align="center" bgcolor="#FF8080">
            <input type="hidden" name="info" value="foglalt">
            {if !$jog_admin}
                Foglalt 
            {else}
                <input type="hidden" name="nap" value="{$nap.datum}">
                <input type="hidden" name="ipont" value="{$ipont}">

                <input type="hidden" id="ugyf_nev{$db}" name="ugyf_nev{$db}" value="{$heti_adat.$n.$i.ugyf_nev}">
                <input type="hidden" id="ugyf_tel{$db}" name="ugyf_tel{$db}" value="{$heti_adat.$n.$i.ugyf_tel}">
                <input type="hidden" id="ugyf_email{$db}" name="ugyf_email{$db}" value="{$heti_adat.$n.$i.ugyf_email}">
                <input type="hidden" id="ugyf_megj{$db}" name="ugyf_megj{$db}" value="{$heti_adat.$n.$i.vizsg_megjegyzes}">
                
                
                <select id="optom1" name="optom1" size="1" onchange="javascript:optom_valtas(this,'{$nap.datum}','{$ipont}')">
                    <option value="Ági" {if $heti_adat.$n.$i.vizsg_optom == 'Ági'}selected{/if}>Ági</option>
                    <option value="Tamara" {if $heti_adat.$n.$i.vizsg_optom == 'Tamara'}selected{/if}>Tamara</option>
                   
                </select>
                
                <!-- [{$heti_adat.$n.$i.vizsg_optom}]--> <br />
                <img src="kepek/edit-ico.png" border="0" alt="Módosítás" class="modosit">
                
                <a href="javascript:void(0);" onmouseout="UnTip()" onmouseover="Tip('{$heti_adat.$n.$i.vizsg_megjegyzes}<br />{$heti_adat.$n.$i.ugyf_email}<br />{$heti_adat.$n.$i.ugyf_tel}')">{$heti_adat.$n.$i.ugyf_nev}</a> <a href="latasvizsgalat?h={$h}&torles_nap={$nap.datum}&ipont={$ipont}&ugyfel_torles=1" alt="Törlés"><img src="kepek/delete.png" border="0"></a>
                <br />
            {/if}
            
            
        {elseif $heti_adat.$n.$i.vizsg_optom =='Nem' }    
        <td align="center" bgcolor="#ECF29F">
            <input type="hidden" name="info" value="nemfoglalt">
            <input type="hidden" name="nap" value="{$nap.datum}">
            <input type="hidden" name="ipont" value="{$ipont}">
            
            nem foglalható
            
            {if $jog_admin}
                <a href="latasvizsgalat?h={$h}&torles_nap={$nap.datum}&ipont={$ipont}" alt="Törlés"><img src="kepek/delete.png" border="0"></a>
            {/if}
            
            
        {elseif $heti_adat.$n.$i.vizsg_optom !='' }
        <!-- Nincs foglalva időpont, de van optometrista -->
        <td align="center" bgcolor="#97DD8C" style="cursor:pointer;">
            <input type="hidden" name="info" value="foglalhato">
            <input type="hidden" name="nap" value="{$nap.datum}">
            <input type="hidden" name="ipont" value="{$ipont}">
            <!--<a href="http://lencsek.hu/latasvizsgalat&h={$h}&foglal={$nap.datum}&ipont={$ipont}">Foglalható</a>-->
            Foglalható
            
            {if $jog_admin}
            <a href="latasvizsgalat?h={$h}&torles_nap={$nap.datum}&ipont={$ipont}" alt="Törlés"><img src="kepek/delete.png" border="0"></a> <br />
            <!-- <select id="optom1" name="optom1" size="1">
                    <option value="Ági" {if $heti_adat.$n.$i.vizsg_optom == 'Ági'}selected{/if}>Ági</option>
                    <option value="Tamara" {if $heti_adat.$n.$i.vizsg_optom == 'Tamara'}selected{/if}>Tamara</option>
                    <option value="Nem" {if $heti_adat.$n.$i.vizsg_optom == 'Nem'}selected{/if}>Nem foglalható</option>
                </select>
                -->
                
            [{$heti_adat.$n.$i.vizsg_optom}]
             
            <!--
            <table border="0" width="100%" align="center">
             <tr align="center"><td><a href="" alt="Foglalás"><img src="kepek/reserve.png" border="0"></a></td>
            <td><a href="" alt="Hozzáadás"><img src="kepek/adduser.png" border="0"></a></td> 
            <td align="right"><a href="" alt="Törlés"><img src="kepek/delete.png" border="0"></a></td></tr>
            </table>
            -->
            {/if}        
        
        {else}
        <!-- Nem foglalható -->
        <td align="center">
            <input type="hidden" name="info" value="nemfoglalt">
            <input type="hidden" name="nap" value="{$nap.datum}">
            <input type="hidden" name="ipont" value="{$ipont}">
            
            <!-- Most nem foglalható -->
            
            még nem foglalható
        
        {/if}
        
        {else}
        <td bgcolor="#ffffff">
            <input type="hidden" name="info" value="nemfoglalt">
        <!-- Múltban vagyunk --> 
        
        &nbsp;
        {/if}
        
        
        
        
        
        </td>
        {assign var="db" value=$db+1}
    {/foreach}
</tr>
{/foreach}


</table>

{if $jog_admin}
    <br />
    Info: {$jog_admin}<br />
    Hiba:<br /> {$hib}
{/if}




<div id="dialog-form" title="Időpont foglalás">
<!--
<p class="validateTips">All form fields are required.</p>
-->
<form>
<fieldset>
<label for="name">Név*</label><br />
<input type="text" name="name" id="name" size="30" class="text ui-widget-content ui-corner-all" /><br /><br />
<label for="telefon">Telefon*</label><br />
<input type="text" name="telefon" id="telefon" value="" class="text ui-widget-content ui-corner-all" /><br /><br />
<label for="email">Email</label><br />
<input type="text" name="email" id="email" size="30" value="" class="text ui-widget-content ui-corner-all" /><br /><br />
<label for="megj">Megjegyzés</label><br />
<textarea id="megj" cols="30" rows="2" name="megj">
</textarea>

</fieldset>
</form>
</div>







<!--
<br />
Info: {$heti_adat|print_r}


Működik:
{$ipont|date_format:"%H%M"}

Teszt:
{$heti_adat.$napok.datum|date_format:"%m%d".1000|print_r}
-->