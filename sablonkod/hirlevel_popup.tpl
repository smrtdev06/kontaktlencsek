<style>
    div#users-contain { width: 350px; margin: 20px 0; }
    div#users-contain table { margin: 1em 0; border-collapse: collapse; width: 100%; }
    div#users-contain table td, div#users-contain table th { border: 1px solid #eee; padding: .6em 10px; text-align: left; }
    .ui-dialog .ui-state-error { padding: .3em; }
    .validateTips { border: 1px solid transparent; padding: 0.3em; }
    .ui-dialog-titlebar { background: #1D2E39; }
    .ui-widget-header { background: #1D2E39; }
</style>
  
<script type="text/javascript" src="css/newsletter.js"></script>

<div id="dialog-form" style="background:#FE6513; color:#ffffff;">
  <p align="center" style="font-size:20px; font-weight:bold;">
  <br />Iratkozzon fel hírlevelünkre és<br /><br />
  5%-OS KUPONT ADUNK AJÁNDÉKBA,<br />
  Szemüvegek.hu weboldalunkhoz !<br /></p>
  <br /> <br />
  <table width="500" align="center"> 
 <tr><td valign="middle" align="center" width="250" style="font-size:16px;border:2px dashed #cdcdcd;"><b>Szemüvegek.hu<br />
 <br />
 Kupon 5%</b></td> 
 <td style="padding:14px;" align="center">
 
  <form>
    <fieldset>
      
      <input type="text" name="name" id="name" value="Név" class="text ui-widget-content ui-corner-all" onclick="this.value = ''" tabindex="3"><br />
      <br />
      <input type="text" name="email" id="email" value="E-mail cím" class="text ui-widget-content ui-corner-all" onfocus="this.value = ''" tabindex="4"><br />
      <br />
      <input id="kuld" name="kuld" type="submit" value="Kérem a kedvezményt!" class="ui-widget-content ui-corner-all" tabindex="2">
    </fieldset>
  </form>
 
 </td></tr>
 </table>
</div>

<div id="valasz-dialog" style="background:#FE6513; color:#ffffff;">
  <p align="center" style="font-size:20px; font-weight:bold;"><br />
    <br />Köszönjük, hogy feliratkozott!<br />
  <br />A megadott e-mail címre<br /><br />
  elküldtük az 5%-os Szemüvegek.hu KUPONT!</p><br />
  <center><input id="bezarom" type="button" value="Bezárom"></center>
</div>
