
$(document).ready(function() {
    var szall_osszeg = 0;
    var premium_futar_osszeg = parseInt($("#premium_futar").attr("value"));
    var sms_ertesites_osszeg = 0;
    var tel_ertesites_osszeg = 0;
    var aznapi_atvetel_osszeg = 0;
    var kedvezmeny = parseInt($("#kedvezmeny").attr("value"));
    
    // ez nem kell de lehet belőle tanulni
    //function jq( myid ) {
    //    return "#" + myid.replace( /(:|\.|\[|\]|,)/g, "\\$1" );
    //}
    //$( jq( "w|5|3|0" ) ).addClass("selectedPrize");
    
    
    // átvételi pont kezdete
    $("#atv1").click( function () {
        if( $("#atv1").attr("checked") == true ) {
            document.getElementById('foxpostbox').style.display="block";
            document.getElementById('pickpackbox').style.display="none";
            document.getElementById('postabox').style.display="none";
            
            document.getElementById('foxarak').style.display="block";
            document.getElementById('pickpackarak').style.display="none";
            document.getElementById('postaarak').style.display="none";
            $("#szallmod").attr("value", 5 );
            //$("#fizetesmod").attr("value", 0 );
            
            // ki volt jelölve valami, akkor beállítjuk, de a végén 0 van most az változhat sajnos
            if( $(".payment").hasClass("selectedPrize") ) {
                //$(".selectedPrize").addClass("jelolve_volt");
                
                // ez állítja be, ha elötte is be volt, de a végén 0 van most az változhat sajnos
                $(".payment").removeClass("selectedPrize");
                $("#w\\|5\\|"+ $("#fizetesmod").val() +"\\|0").addClass("selectedPrize");
            }
            
            //$(".payment").removeClass("selectedPrize");
            document.getElementById('optikabox').style.display="none";
        } 
    });
    
    $("#atv2").click( function () {
        if( $("#atv2").attr("checked") == true ) {
            document.getElementById('foxpostbox').style.display="none";
            document.getElementById('postabox').style.display="none";
            document.getElementById('pickpackbox').style.display="block";
            
            document.getElementById('foxarak').style.display="none";
            document.getElementById('pickpackarak').style.display="block";
            document.getElementById('postaarak').style.display="none";
            $("#szallmod").attr("value", 3 );
            //$("#fizetesmod").attr("value", 0 );
            
            // ki volt jelölve valami, akkor beállítjuk, de a végén 0 van most az változhat sajnos
            if( $(".payment").hasClass("selectedPrize") ) {
                // ez állítja be, ha elötte is be volt, de a végén 0 van most az változhat sajnos
                $(".payment").removeClass("selectedPrize");
                $("#w\\|3\\|"+ $("#fizetesmod").val() +"\\|490").addClass("selectedPrize");
            }
            
            //$(".payment").removeClass("selectedPrize");
            document.getElementById('optikabox').style.display="none";
        } 
    });
    
    $("#atv3").click( function () {
        if( $("#atv3").attr("checked") == true ) {
            document.getElementById('foxpostbox').style.display="none";
            document.getElementById('pickpackbox').style.display="none";
            document.getElementById('postabox').style.display="block";
            
            document.getElementById('foxarak').style.display="none";
            document.getElementById('pickpackarak').style.display="none";
            document.getElementById('postaarak').style.display="block";
            
            $("#szallmod").attr("value", 6 );
            //$("#fizetesmod").attr("value", 0 );
            
            // ki volt jelölve valami, akkor beállítjuk, de a végén 0 van most az változhat sajnos
            if( $(".payment").hasClass("selectedPrize") ) {
                // ez állítja be, ha elötte is be volt, de a végén 0 van most az változhat sajnos
                $(".payment").removeClass("selectedPrize");
                $("#w\\|6\\|"+ $("#fizetesmod").val() +"\\|490").addClass("selectedPrize");
            }
            
            //$(".payment").removeClass("selectedPrize");
            document.getElementById('optikabox').style.display="none";
        } 
    });
    // átvételi pont vége
    
    
    // fizetes/szallitas
    $(".payment").click(function () { 
        var s = this.id;
        var idArr =  s.split("|");
        
        
        szalmod = idArr[1];
        fizmod  = idArr[2];
        
        $("#szallmod").attr("value", idArr[1] );
        $("#fizetesmod").attr("value", idArr[2] );
        
        // pick-pack pont eltüntetés-mutatás
        if( szalmod == 3 ) {
            document.getElementById('pickpackbox').style.display="block";
            document.getElementById('foxpostbox').style.display="none";
            document.getElementById('postabox').style.display="none";
            $("#atv2").attr("checked", true);
        } else if( szalmod == 5 ) {
            document.getElementById('foxpostbox').style.display="block";
            document.getElementById('pickpackbox').style.display="none";
            document.getElementById('postabox').style.display="none";
            $("#atv1").attr("checked", true);
        } else if( szalmod == 6 ) {
            document.getElementById('postabox').style.display="block";
            document.getElementById('foxpostbox').style.display="none";
            document.getElementById('pickpackbox').style.display="none";
            $("#atv3").attr("checked", true);
        } else {
            document.getElementById('foxpostbox').style.display="none";
            document.getElementById('pickpackbox').style.display="none";
            document.getElementById('postabox').style.display="none";
        }
        
        // optikaválasztó eltüntetés-mutatás
        if( szalmod == 4 ) {
            document.getElementById('optikabox').style.display="block";
        } else {
            document.getElementById('optikabox').style.display="none";
        } 
        
        // futár
        if( szalmod == 2) {
            document.getElementById('extrabox').style.display="block";
        } else {
            document.getElementById('extrabox').style.display="none";
        }
        
        // bolti átvétel
        if( szalmod == 4 ) { // && fizmod != 1
            document.getElementById('bolti_extra').style.display="block";
        } else {
            document.getElementById('bolti_extra').style.display="none";
        }
        
        if( fizmod == 1 ) {
            alert( ford_utalas_utan );
            
        }
        
        if( fizmod == 3 && szalmod == 5 ) {
            alert( ford_foxpost_bankkartya );
        }
        
        if( fizmod == 3 && szalmod == 2 ) {
            alert( ford_futarceggel_keszpenz );
        }
        
        $("#premium_futar").attr("checked", false);
        $("#sms_ertesites").attr("checked", false);
        $("#sms_ertesites").attr("disabled","disabled");
        $("#tel_ertesites").attr("checked", false);
        $("#tel_ertesites").attr("disabled","disabled");
        $("#aznapi_atvetel").attr("checked", false);
        //$("#aznapi_atvetel").attr("disabled","disabled");
        
        //dinamikusar(fizmod,szalmod);
        
        //itt vizsgalatok sora
        //ha van value, akkor megnezzuk, benne van-e a probes szoveg
        //var values = $("#paymentMode").attr("value");
        //var valuetmb = values.split("|");
        
        //ha nincs benne, a tomb elso eleme w idArr[0]
        $("#paymentMode").attr("value", s);

        // árak változtatása
        
        szall_osszeg = parseInt(idArr[3]);
        $("#szall_ar").attr("innerHTML", accounting.formatMoney( szall_osszeg, "Ft", 0, " ",".","%v %s") );
        
        var osszesen = accounting.formatMoney( ossz_ar - kedvezmeny + szall_osszeg, "Ft", 0, " ",".","%v %s");
        $("#osszesen").attr("innerHTML", osszesen );
        
        
        
        $(".payment").removeClass("selectedPrize");
        
        $(this).addClass("selectedPrize");
        return false;
    }); // payment vége
    
    
    // premium_futar kezdete
    $("#premium_futar").click( function () {
    
        if( $("#premium_futar").attr("checked") == true ) {
            $("#sms_ertesites").removeAttr("disabled");
            $("#tel_ertesites").removeAttr("disabled");
            $("#szall_ar").attr("innerHTML", accounting.formatMoney( szall_osszeg + premium_futar_osszeg, "Ft", 0, " ",".","%v %s") );
            
            $("#osszesen").attr("innerHTML", accounting.formatMoney( ossz_ar - kedvezmeny + szall_osszeg + premium_futar_osszeg, "Ft", 0, " ",".","%v %s") );
        } else {
            $("#szall_ar").attr("innerHTML", accounting.formatMoney( szall_osszeg, "Ft", 0, " ",".","%v %s") ); // visszaállítjuk az eredeti árat
            $("#osszesen").attr("innerHTML", accounting.formatMoney( ossz_ar - kedvezmeny + szall_osszeg, "Ft", 0, " ",".","%v %s") );
            $("#sms_ertesites").attr("checked", false);
            $("#sms_ertesites").attr("disabled","disabled");
            $("#tel_ertesites").attr("checked", false);
            $("#tel_ertesites").attr("disabled","disabled");
        } 
    
    }); // premium_futar vége
    
    
    // sms_ertesites kezdete
    $("#sms_ertesites").click( function () {
        
        if( $("#sms_ertesites").attr("checked") == true ) {
            sms_ertesites_osszeg = parseInt($("#sms_ertesites").attr("value"));
            
            $("#szall_ar").attr("innerHTML", accounting.formatMoney( szall_osszeg + premium_futar_osszeg + sms_ertesites_osszeg + tel_ertesites_osszeg, "Ft", 0, " ",".","%v %s") );
            $("#osszesen").attr("innerHTML", accounting.formatMoney( ossz_ar - kedvezmeny + szall_osszeg + premium_futar_osszeg + sms_ertesites_osszeg + tel_ertesites_osszeg, "Ft", 0, " ",".","%v %s") );
        } else {
            sms_ertesites_osszeg = 0;
            $("#szall_ar").attr("innerHTML", accounting.formatMoney( szall_osszeg + premium_futar_osszeg + tel_ertesites_osszeg, "Ft", 0, " ",".","%v %s") ); // visszaállítjuk az eredeti árat
            $("#osszesen").attr("innerHTML", accounting.formatMoney( ossz_ar - kedvezmeny + szall_osszeg + premium_futar_osszeg + tel_ertesites_osszeg, "Ft", 0, " ",".","%v %s") );
            
        } 
    
    }); // sms_ertesites vége
    
    
    
    // tel_ertesites kezdete
    $("#tel_ertesites").click( function () {
        
        if( $("#tel_ertesites").attr("checked") == true ) {
            tel_ertesites_osszeg = parseInt($("#tel_ertesites").attr("value"));
            
            $("#szall_ar").attr("innerHTML", accounting.formatMoney( szall_osszeg + premium_futar_osszeg + sms_ertesites_osszeg + tel_ertesites_osszeg, "Ft", 0, " ",".","%v %s") );
            $("#osszesen").attr("innerHTML", accounting.formatMoney( ossz_ar - kedvezmeny + szall_osszeg + premium_futar_osszeg + sms_ertesites_osszeg + tel_ertesites_osszeg, "Ft", 0, " ",".","%v %s") );
        } else {
            tel_ertesites_osszeg = 0;
            $("#szall_ar").attr("innerHTML", accounting.formatMoney( szall_osszeg + premium_futar_osszeg + sms_ertesites_osszeg, "Ft", 0, " ",".","%v %s") ); // visszaállítjuk az eredeti árat
            $("#osszesen").attr("innerHTML", accounting.formatMoney( ossz_ar - kedvezmeny + szall_osszeg + premium_futar_osszeg + sms_ertesites_osszeg, "Ft", 0, " ",".","%v %s") );
        } 
    
    }); // tel_ertesites vége
    
    // aznapi_atvetel kezdete
    $("#aznapi_atvetel").click( function () {
        
        if( $("#aznapi_atvetel").attr("checked") == true ) {
            aznapi_atvetel_osszeg = parseInt($("#aznapi_atvetel").attr("value"));
            
            $("#szall_ar").attr("innerHTML", accounting.formatMoney( szall_osszeg + aznapi_atvetel_osszeg, "Ft", 0, " ",".","%v %s") );
            $("#osszesen").attr("innerHTML", accounting.formatMoney( ossz_ar - kedvezmeny + szall_osszeg + aznapi_atvetel_osszeg, "Ft", 0, " ",".","%v %s") );
        } else {
            aznapi_atvetel_osszeg = 0;
            $("#szall_ar").attr("innerHTML", accounting.formatMoney( szall_osszeg + aznapi_atvetel_osszeg, "Ft", 0, " ",".","%v %s") ); // visszaállítjuk az eredeti árat
            $("#osszesen").attr("innerHTML", accounting.formatMoney( ossz_ar - kedvezmeny + szall_osszeg + aznapi_atvetel_osszeg, "Ft", 0, " ",".","%v %s") );
        } 
    
    }); // aznapi_atvetel vége
    
    
    // optika választás
    $("#optika_id").change( function () {
        
        if( szalmod == 2 && fizmod != 1 ) {
            //document.getElementById('aznapi_atvetel').disabled = false;
        } else {
            aznapi_atvetel_osszeg = 0;
            $("#szall_ar").attr("innerHTML", accounting.formatMoney( szall_osszeg + aznapi_atvetel_osszeg, "Ft", 0, " ",".","%v %s") ); // visszaállítjuk az eredeti árat
            $("#osszesen").attr("innerHTML", accounting.formatMoney( ossz_ar - kedvezmeny + szall_osszeg + aznapi_atvetel_osszeg, "Ft", 0, " ",".","%v %s") );
            
            //document.getElementById('aznapi_atvetel').disabled = true;
            //document.getElementById('aznapi_atvetel').checked = false;
        }
    });
    
    
 });