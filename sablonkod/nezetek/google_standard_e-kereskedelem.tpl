{literal}
<script>
window.dataLayer = window.dataLayer || []
dataLayer.push({
   'transactionId': '{/literal}{$rend_id}{literal}',
   'transactionAffiliation': 'Lencsek.hu web',
   'transactionTotal': {/literal}{$osszesen}{literal},
   'transactionTax': 1.27,
   'transactionShipping': {/literal}{$rendadat.szall_mod}{literal},
   'transactionProducts': [{/literal}
   {foreach from=$kosar item=egy}{literal}{
       'sku': '{/literal}{$egy.termek_id}{literal}',
       'name': '{/literal}{$egy.termek_nev}{literal}',
       'category': '{/literal}{$egy.termek_csoport}{literal}',
       'price': {/literal}{$egy.termek_ar}{literal},
       'quantity': {/literal}{$egy.termek_db}{literal}
   },{/literal}{/foreach}{literal}
   ]
});
</script>
{/literal}