<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>

<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

{literal}
<script>

//alert( $.fn.jquery );


$(function() {

var nap = 0;
var ipont = 0;

var optomet = $( "#optom" );

var name = $( "#name" ),
email = $( "#email" ),
telefon = $( "#telefon" ),
mire = $( "#mire" ),
ellenorzes = $( "#ellenorzes" ),

allFields = $( [] ).add( name ).add( email ).add( telefon ).add( mire ).add( ellenorzes ),
tips = $( ".validateTips" );


function updateTips( t ) {
    tips
    .text( t )
    .addClass( "ui-state-highlight" );
    
    setTimeout(function() {
        tips.removeClass( "ui-state-highlight", 1500 );
    }, 500 );
}

$( "#mire" ).change(function() {

    if( $(this).val() == 1 ) {
        $("#mire_text").html("{/literal}{$mire_text[1]}{literal}");
        $(this).removeClass( "ui-state-error" );
    }
    
    if( $(this).val() == 2 ) {
        $("#mire_text").html('{/literal}{$mire_text[2]}{literal}');
        $(this).removeClass( "ui-state-error" );
    }
    
    if( $(this).val() == 3 ) {
        $("#mire_text").html('{/literal}{$mire_text[3]}{literal}');
        $(this).removeClass( "ui-state-error" );
    }
    
    if( $(this).val() == 4 ) {
        $("#mire_text").html('{/literal}{$mire_text[4]}{literal}');
        $(this).removeClass( "ui-state-error" );
    }
    
    if( $(this).val() == 0 ) {
        $(this).addClass( "ui-state-error" );
    }
    
});


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

function ellenorzo_kod( o ) {
    if( ellenorzes.val() == {/literal}{$ell_kod}{literal} ) {
        return true;
    } else {
        o.addClass( "ui-state-error" );
        return false;
    }
    

}

function kivalasztva( m ) {
    if( m.val() != 0 ) {
        return true;
    } else {
        m.addClass( "ui-state-error" );  
        
        return false;
    }
}

$( "#dialog-form" ).dialog({
autoOpen: false,
height: 800,
width: 600,
modal: true,
buttons: {

"Foglalás": function() {

var bValid = true;
allFields.removeClass( "ui-state-error" );

bValid = bValid && checkLength( name, "username", 3, 30 );
bValid = bValid && checkLength( telefon, "telefon", 5, 16 );
bValid = bValid && checkLength( email, "email", 6, 30 );
bValid = bValid && kivalasztva( mire );
bValid = bValid && checkLength( ellenorzes, "ellenorzes", 5, 8 );
bValid = bValid && ( ellenorzo_kod(ellenorzes) );



// From jquery.validate.js (by joern), contributed by Scott Gonzalez: http://projects.scottsplayground.com/email_address_validation/




if ( bValid ) {
    
$.ajax({
type: "POST",
url: "vizsgalatmentes.php",
data: { name: $("#name").val(), telefon: $("#telefon").val(), email: $("#email").val(), megj: $("#megj").val(),
nap2: nap, ipont2: ipont, bolt_id: {/literal}{$akt_bolt}{literal}, mire: $("#mire").val() }
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


$( "#tbl td" )
.click(function() {
    
    //alert('Teszt!');
    
    info = $(this).find("input").val();
    nap = $(this).find("input").next().val();
    ipont = $(this).find("input").next().next().val();
    bolt = {/literal}{$akt_bolt}{literal};
    // mire = $(this).parent().find("input").next().next().next().next().next().next().next().val();
    
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
                data: { optom: optomet.val() , vizsg_nap: nap, vizsg_idopont: ipont, bolt_id: bolt, mire: mire }
                }).done(function( msg ) {
                //alert( "Adatokat rögzítettük: " + msg );
                location.href='http://szemuvegek.hu/latasvizsgalat?h={/literal}{$h}{literal}';
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