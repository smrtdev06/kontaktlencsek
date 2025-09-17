<?php
/* Smarty version 3.1.30, created on 2018-05-17 14:31:14
  from "C:\xampp\htdocs\lencsek\sablonkod\fooldal_new.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5afd76125673f8_00424072',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd52d049d35e5cf4cde6f11996d4d7f35ad272030' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lencsek\\sablonkod\\fooldal_new.tpl',
      1 => 1526559761,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:brand_alul_kek.tpl' => 1,
    'file:egpenztarak.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5afd76125673f8_00424072 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
  <meta http-equiv="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
  <meta http-equiv="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="owl-js/owl.theme.css" rel="stylesheet">
  <link href="owl-js/owl.carousel.css" rel="stylesheet">
  <link href="owl-js/owl.transitions.css" rel="stylesheet">
  <link href="css/lencsek.css" rel="stylesheet">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
      <![endif]-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand:400,500,700">
  </head>
  
  <body onscroll="myFunction()">

  <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


  
  <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tartalom']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>





<div class="clearfix"></div>

<?php if ($_smarty_tpl->tpl_vars['oldal']->value != 'egy_termek') {?>
    <?php $_smarty_tpl->_subTemplateRender("file:brand_alul_kek.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:egpenztarak.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


  <?php echo '<script'; ?>
 src="js/jquery.min.js"><?php echo '</script'; ?>
> 
  <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
> 
  <?php echo '<script'; ?>
 src="owl-js/owl.carousel.js"><?php echo '</script'; ?>
> 
  <?php echo '<script'; ?>
 type="text/javascript">
  
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

           
<?php echo '</script'; ?>
>

</body>
</html><?php }
}
