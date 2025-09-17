$(function() {
    var dialog, vdialog, form,
    emailRegex = /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/,
    name = $( "#name" ),
    email = $( "#email" ),
    allFields = $( [] ).add( name ).add( email ),
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
    
    $( "#megnyit" ).button().on( "click", function() {
      dialog.dialog( "open" );
    });
    
    $( "#bezarom" ).button().on( "click", function() {
       vdialog.dialog( "close" );
    });
 
    dialog = $( "#dialog-form" ).dialog({
      autoOpen: false,
      height: 360,
      width: 600,
      draggable: false,
      modal: true,
      close: function() {
        document.getElementById("dialog-form").reset();
        allFields.removeClass( "ui-state-error" );
      }
    });
    
    vdialog = $( "#valasz-dialog" ).dialog({
      autoOpen: false,
      height: 360,
      width: 600,
      draggable: false,
      modal: true,
      close: function() {
        
        
      }
    });
    
    function setCookie(cname, cvalue, exdays) {
      var d = new Date();
      d.setTime(d.getTime() + (exdays*24*60*60*1000));
      var expires = "expires="+d.toUTCString();
      document.cookie = cname + "=" + cvalue + "; " + expires;
    }
    
    function getCookie(cname) {
      var name = cname + "=";
      var ca = document.cookie.split(';');
      for(var i=0; i<ca.length; i++) {
          var c = ca[i];
          while (c.charAt(0)==' ') c = c.substring(1);
          if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
      }
      return "";
    } 
    
    function addUser() {
      var valid = true;
      allFields.removeClass( "ui-state-error" );
 
      valid = valid && checkLength( name, "username", 3, 30 );
      valid = valid && checkLength( email, "email", 6, 80 );
      
      valid = valid && checkRegexp( name, /^[a-zA-ZáéiíoóöőuúüűÁÉIÍOÓÖŐUÚÜŰ]([0-9a-zA-ZáéiíoóöőuúüűÁÉIÍOÓÖŐUÚÜŰ_\s])+$/i, "Name may consist of a-z, 0-9, underscores, spaces and must begin with a letter." );
      valid = valid && checkRegexp( email, emailRegex, "eg. office@lencsek.hu" );
      
      if ( valid ) {
          $.ajax({
            type: "POST",
            url: "http://lencsek.hu/hirlevelre.php",
            data: { name: $("#name").val(), email: $("#email").val() }
            }).done(function( msg ) {
              //alert( "Feliratkozott hírlevelünkre : " + msg + "\nKöszönjük !" );
              //location.reload();
            });
                  
            $( "#dialog-form" ).dialog( "close" );
            $( "#valasz-dialog" ).dialog( "open" );
      }
      return valid;
    }
    
    
    // beállítjuk, hogy nyissa meg az ablakot
    if ( getCookie("hirl") != 1 ) {
      setTimeout(function(){ dialog.dialog( "open" ); }, 8000);
      
      setCookie("hirl",1,20);
      
      //ga('send','event','pop up','load','http://lencsek.hu');
    }
 
    form = dialog.find( "form" ).on( "submit", function( event ) {
      event.preventDefault();
      
      addUser();
      //alert('Thank you!');
      //ga('send','event','pop up','feliratkozott','http://lencsek.hu');
    });

    console.log(ga.q);
    
  });
