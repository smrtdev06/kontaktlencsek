
$(document).ready(function() {
    
    var szall_osszeg = 0;
    var premium_futar_osszeg = parseInt($("#premium_futar").attr("value"));
    var sms_ertesites_osszeg = 0;
    var tel_ertesites_osszeg = 0;
    var aznapi_atvetel_osszeg = 0;
    var kedvezmeny = 0; // parseInt($("#kedvezmeny").attr("value"))
    
    // ez nem kell de lehet belőle tanulni
    //function jq( myid ) {
    //    return "#" + myid.replace( /(:|\.|\[|\]|,)/g, "\\$1" );
    //}
    //$( jq( "w|5|3|0" ) ).addClass("selectedPrize");
   
   // form küldés ellenőrzés
   $("#form2").submit(function(event) {
       
       if( $("#szallmod").val() == 4 && $("#optika_id").val() == 0) {
           alert( ford_valassz_optikat );
           $("#optika_id").focus();
           return false;
       }
       
       if( $("#szallmod").val() == 3 ) {  
           if( $("#p_megye").val() == 0 ) {
               alert( ford_valassz_atveteli_pontot );
               $("#p_megye").focus();
               return false;
           } else if( $("#p_varos").val() == 0 ) {
               alert( ford_valassz_varost );
               $("#p_varos").focus();
               return false;
           } else if( $("#p_hely").val() == 0 ) {
               alert( ford_valassz_atveteli_pontot );
               $("#p_hely").focus();
               return false;
           }
       }
       
       if( $("#szallmod").val() == 5 ) {  
           if( $("#f_megye").val() == 0 ) {
               alert( ford_valassz_atveteli_pontot );
               $("#f_megye").focus();
               return false;
           } else if( $("#f_varos").val() == 0 ) {
               alert( ford_valassz_varost );
               $("#f_varos").focus();
               return false;
           } else if( $("#f_hely").val() == 0 ) {
               alert( ford_valassz_atveteli_pontot );
               $("#f_hely").focus();
               return false;
           }
       }
   });
   
   
    // fizetes/szallitas
    $(".payment").click(function() { 
        var s = this.id;
        var idArr =  s.split("|");
        
        szalmod = idArr[1];
        fizmod  = idArr[2];
        
        //alert('Info:'+szalmod+','+fizmod);
        $("#szallmod").attr("value", idArr[1] );
        $("#fizetesmod").attr("value", idArr[2] );
        
        
        
        // pick-pack pont eltüntetés-mutatás
        if( szalmod == 3 ) {
            $("#pickpackbox").show();
            $("#foxpostbox").hide();
            
        } else if( szalmod == 5 ) {
            $("#foxpostbox").show();
            $("#pickpackbox").hide();
            
        } else {
            $("#foxpostbox").hide();
            $("#pickpackbox").hide();
        }
        
        // optikaválasztó eltüntetés-mutatás
        // bolti átvétel
        if( szalmod == 4 ) {
            $("#optikabox").show();
            //$("#optika_id").attr("value", 0 );
            
            $("#aznapi_sor").show();
            $("#gls_sor").hide();
            $("#sms_sor").hide();
            $("#tel_sor").hide();
            //document.getElementById('bolti_extra').style.display="block";
        } else {
            $("#optikabox").hide();
            $("#aznapi_sor").hide();
            //document.getElementById('bolti_extra').style.display="none";
        } 
        
        // futár
        if( szalmod == 2) {
            $("#premium_futar").removeAttr("disabled");
            $("#gls_sor").show();
            $("#sms_sor").show();
            $("#tel_sor").show();
        } else {
            $("#premium_futar").attr("disabled","disabled");
        }
        
        if( szalmod == 2 || szalmod == 4) {
            $("#extrabox").show();
        } else {
            $("#extrabox").hide();
        }
        
        
        
        // felbukkanó figyelmeztetések
        if( fizmod == 1 ) {
            //alert( ford_utalas_utan );
        }
        
        if( fizmod == 3 && szalmod == 5 ) {
            //alert( ford_foxpost_bankkartya );
        }
        
        if( fizmod == 3 && szalmod == 2 ) {
            //alert( ford_futarceggel_keszpenz );
        }
               
        //dinamikusar(fizmod,szalmod);
        
        //itt vizsgalatok sora
        //ha van value, akkor megnezzuk, benne van-e a probes szoveg
        //var values = $("#paymentMode").attr("value");
        //var valuetmb = values.split("|");
        
        //ha nincs benne, a tomb elso eleme w idArr[0]
        
        $("#paymentMode").attr("value", s);
        
        $(".payment").removeClass("oh_hover_active");
        $(this).addClass("oh_hover_active");
        
        // árak változtatása
        szall_osszeg = parseInt(idArr[3]);
        $("#szall_ar").html( accounting.formatMoney( szall_osszeg, "Ft", 0, " ",".","%v %s") );
        
        var osszesen = accounting.formatMoney( ossz_ar - kedvezmeny + szall_osszeg, "Ft", 0, " ",".","%v %s");
        $("#osszesen").html( osszesen );
        
        return false;
    }); // payment vége
    
    
    // premium_futar kezdete
    $("#premium_futar").click( function () {
        
        
        if( $("#premium_futar").prop("checked") == true ) {
            $("#sms_ertesites").removeAttr("disabled");
            $("#tel_ertesites").removeAttr("disabled");
            $("#szall_ar").prop("innerHTML", accounting.formatMoney( szall_osszeg + premium_futar_osszeg, "Ft", 0, " ",".","%v %s") );
            
            $("#osszesen").prop("innerHTML", accounting.formatMoney( ossz_ar - kedvezmeny + szall_osszeg + premium_futar_osszeg, "Ft", 0, " ",".","%v %s") );
        } else {
            $("#szall_ar").prop("innerHTML", accounting.formatMoney( szall_osszeg, "Ft", 0, " ",".","%v %s") ); // visszaállítjuk az eredeti árat
            $("#osszesen").prop("innerHTML", accounting.formatMoney( ossz_ar - kedvezmeny + szall_osszeg, "Ft", 0, " ",".","%v %s") );
            $("#sms_ertesites").prop("checked", false);
            $("#sms_ertesites").prop("disabled","disabled");
            $("#tel_ertesites").prop("checked", false);
            $("#tel_ertesites").prop("disabled","disabled");
        } 
        
    
    }); // premium_futar vége
    
    
    // sms_ertesites kezdete
    $("#sms_ertesites").click( function () {
        
        if( $("#sms_ertesites").prop("checked") == true ) {
            sms_ertesites_osszeg = parseInt($("#sms_ertesites").attr("value"));
            
            $("#szall_ar").prop("innerHTML", accounting.formatMoney( szall_osszeg + premium_futar_osszeg + sms_ertesites_osszeg + tel_ertesites_osszeg, "Ft", 0, " ",".","%v %s") );
            $("#osszesen").prop("innerHTML", accounting.formatMoney( ossz_ar - kedvezmeny + szall_osszeg + premium_futar_osszeg + sms_ertesites_osszeg + tel_ertesites_osszeg, "Ft", 0, " ",".","%v %s") );
        } else {
            sms_ertesites_osszeg = 0;
            $("#szall_ar").prop("innerHTML", accounting.formatMoney( szall_osszeg + premium_futar_osszeg + tel_ertesites_osszeg, "Ft", 0, " ",".","%v %s") ); // visszaállítjuk az eredeti árat
            $("#osszesen").prop("innerHTML", accounting.formatMoney( ossz_ar - kedvezmeny + szall_osszeg + premium_futar_osszeg + tel_ertesites_osszeg, "Ft", 0, " ",".","%v %s") );
            
        } 
    
    }); // sms_ertesites vége
    
    
    
    // tel_ertesites kezdete
    $("#tel_ertesites").click( function () {
        
        if( $("#tel_ertesites").prop("checked") == true ) {
            tel_ertesites_osszeg = parseInt($("#tel_ertesites").attr("value"));
            
            $("#szall_ar").prop("innerHTML", accounting.formatMoney( szall_osszeg + premium_futar_osszeg + sms_ertesites_osszeg + tel_ertesites_osszeg, "Ft", 0, " ",".","%v %s") );
            $("#osszesen").prop("innerHTML", accounting.formatMoney( ossz_ar - kedvezmeny + szall_osszeg + premium_futar_osszeg + sms_ertesites_osszeg + tel_ertesites_osszeg, "Ft", 0, " ",".","%v %s") );
        } else {
            tel_ertesites_osszeg = 0;
            $("#szall_ar").prop("innerHTML", accounting.formatMoney( szall_osszeg + premium_futar_osszeg + sms_ertesites_osszeg, "Ft", 0, " ",".","%v %s") ); // visszaállítjuk az eredeti árat
            $("#osszesen").prop("innerHTML", accounting.formatMoney( ossz_ar - kedvezmeny + szall_osszeg + premium_futar_osszeg + sms_ertesites_osszeg, "Ft", 0, " ",".","%v %s") );
        } 
    
    }); // tel_ertesites vége
       
    // optika választás
    $("#optika_id").change( function () {
        
        if( szalmod == 2 ) { // && fizmod != 1
            //document.getElementById('aznapi_atvetel').disabled = true;
        } else {
            aznapi_atvetel_osszeg = 0;
            $("#szall_ar").attr("innerHTML", accounting.formatMoney( szall_osszeg + aznapi_atvetel_osszeg, "Ft", 0, " ",".","%v %s") ); // visszaállítjuk az eredeti árat
            $("#osszesen").attr("innerHTML", accounting.formatMoney( ossz_ar - kedvezmeny + szall_osszeg + aznapi_atvetel_osszeg, "Ft", 0, " ",".","%v %s") );
            
            //document.getElementById('aznapi_atvetel').disabled = true;
            //document.getElementById('aznapi_atvetel').checked = false;
        }
    });
    
    
 });