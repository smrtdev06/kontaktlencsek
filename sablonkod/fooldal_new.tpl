  <!DOCTYPE html>
  <html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>{$title}</title>
  <meta http-equiv="keywords" content="{$keywords}" />
  <meta http-equiv="description" content="{$description}" />
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="owl-js/owl.theme.css" rel="stylesheet">
  <link href="owl-js/owl.carousel.css" rel="stylesheet">
  <link href="owl-js/owl.transitions.css" rel="stylesheet">
  <link href="css/lencsek.css" rel="stylesheet">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand:400,500,700">
  </head>
  
  <body onscroll="myFunction()">
    {include 'header.tpl'}
    
    
    
{include file="$tartalom"}


<div class="clearfix"></div>

{if $oldal!='egy_termek'}
    {include 'brand_alul_kek.tpl'}
{/if}

{include 'egpenztarak.tpl'}











{include 'footer.tpl'}

  <script src="js/jquery.min.js"></script> 
  <script src="js/bootstrap.min.js"></script> 
  <script src="owl-js/owl.carousel.js"></script> 
  <script type="text/javascript">
  {literal}
          /*********** Replace all SVG images with inline SVG ***********/
          jQuery('img.svg').each(function(){
              var $img = jQuery(this);
              var imgID = $img.attr('id');
              var imgClass = $img.attr('class');
              var imgURL = $img.attr('src');

              jQuery.get(imgURL, function(data) {
                  // Get the SVG tag, ignore the rest
                  var $svg = jQuery(data).find('svg');

                  // Add replaced image's ID to the new SVG
                  if(typeof imgID !== 'undefined') {
                      $svg = $svg.attr('id', imgID);
                  }
                  // Add replaced image's classes to the new SVG
                  if(typeof imgClass !== 'undefined') {
                      $svg = $svg.attr('class', imgClass+' replaced-svg');
                  }

                  // Remove any invalid XML tags as per http://validator.w3.org
                  $svg = $svg.removeAttr('xmlns:a');

                  // Replace image with new SVG
                  $img.replaceWith($svg);

              }, 'xml');
          });
          
          
          /**********OWL HOME SLIDER**********/
          var owl = $("#home-slide");             
            owl.owlCarousel({
              navigation : true,
              singleItem : true,
              transitionStyle : "fadeUp",
     autoPlay : true,
              
            });
            
            //************Scroll Down Btn************//
              $(".scroll-btn").on("click", function(){
                  var section = $(this).attr("data-section-id");
                  $('html, body').animate({scrollTop:$('#' + section).offset().top-0}, 750);    
                  return false;
              });
              
              
              
              $(document).ready(function() {
                var owl = $('.owl-carousel2');
                owl.owlCarousel({
                  margin: 10,
                  nav: true,
                  loop: true,
                  autoPlay : true,
                  itemsMobile: [479, 2],
                  responsive: {
                    0: {
                      items: 2
                    },
                    600: {
                      items: 3
                    },
                    1000: {
                      items: 5
                    }
                  }
                })
              })
              
              
              
              
              $(document).ready(function() {
                var owl = $('.owl-carousel1');
                owl.owlCarousel({
                  margin: 10,
                  nav: true,
                  loop: true,
                  itemsMobile: [479, 5],
                  responsive: {
                    0: {
                      items: 5
                    },
                    600: {
                      items: 3
                    },
                    1000: {
                      items: 5
                    }
                  }
                })
              })
              
              
  // Tooltips
  $('.tip').each(function () {
      $(this).tooltip(
      {
          html: true,
          
          title: $('#' + $(this).data('tip')).html(),
          
      });
  });

// dropdown on hover

  $('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(500);
});



  /************LEFT FILTER MOBILE TOGGLE************/
    $( document ).ready( function () {
      $( '.left-section' ).height( $( window ).height() );
      $( '.blackBgMobile' ).height( $( window ).height() );
      $( window ).resize( function () {
        var bodyheight = $( window ).height();
        $( ".left-section" ).height( bodyheight );
        $( ".blackBgMobile" ).height( bodyheight );
      } );


      $( "#showFilter" ).click( function () {
        $( ".left-section" ).stop().animate( {
          "left": "0px"
        } );
        $( ".blackBgMobile" ).css( "opacity", "0.4" );
        $( "body" ).css( "overflow", "hidden" );
        $( ".blackBgMobile" ).css( "display", "block" );
      } );

      $( "#closeFilter, .blackBgMobile" ).click( function () {
        $( ".left-section" ).stop().animate( {
          "left": "-100%"
        } );
        $( "body" ).css( "overflow", "auto" );
        $( ".blackBgMobile" ).css( "display", "none" );
      } );

    } );



    /*** tabs on hover ***/

    $(document).on('mouseenter', '[data-toggle="tab"]', function () {
  $(this).tab('show');
});

/**** expand search***/

$(document).ready(function(){
            var submitIcon = $('.searchbox-icon');
            var inputBox = $('.searchbox-input');
            var searchBox = $('.searchbox');
            var isOpen = false;
            submitIcon.click(function(){
                if(isOpen == false){
                    searchBox.addClass('searchbox-open');
                    inputBox.focus();
                    isOpen = true;
                } else {
                    searchBox.removeClass('searchbox-open');
                    inputBox.focusout();
                    isOpen = false;
                }
            });  
             submitIcon.mouseup(function(){
                    return false;
                });
            searchBox.mouseup(function(){
                    return false;
                });
            $(document).mouseup(function(){
                    if(isOpen == true){
                        $('.searchbox-icon').css('display','block');
                        submitIcon.click();
                    }
                });
        });
            function buttonUp(){
                var inputVal = $('.searchbox-input').val();
                inputVal = $.trim(inputVal).length;
                if( inputVal !== 0){
                    $('.searchbox-icon').css('display','none');
                } else {
                    $('.searchbox-input').val('');
                    $('.searchbox-icon').css('display','block');
                }
            }
{/literal}           
</script>



<div id="dbg" style="display:none;background-color:#ECD893;width:700px;height:400px;position:fixed;right:0px;bottom:0px;overflow:scroll;padding:4px;">
<table>
<tr><td bgcolor="#8080FF">Page: </td><td>&nbsp; {$oldal} </td></tr>
<!--
<tr><td colspan="2" bgcolor="#8080FF">Kosar : </td></tr>
<tr><td colspan="2">{$smarty.session.kosar|print_r}   </td></tr>
-->
</table>
<pre>
includes: {$inc_files|@tomb_fileba}
-------------------------
SESSION: {$smarty.session|@tomb_fileba}
-------------------------
{$smarty.template}

POST:
{$smarty.post|@tomb_fileba}
REQUEST:
{$smarty.request|@tomb_fileba}
GET:
{$smarty.get|@tomb_fileba}

</pre>
<img src="images/close.ico" width="20" border="0" style="float:right;" onclick="document.getElementById('dbg').style.display='none';document.getElementById('dbg2').style.display='block';">
</div>
<div id="dbg2" style="position:fixed;right:0px;bottom:0px;">
<button onclick="document.getElementById('dbg').style.display='block';document.getElementById('dbg2').style.display='none';">Mutasd</button>
</div>

</body>
</html>