$(function(){
// //DESLIZA O MENU
//    $('.main_header_nav a').click(function(){
//     var goto =$('.'+$(this).attr('href').replace('#','')).position().top;
//      $('html,body').animate({scrollTop:goto -$('.main_header').outerHeight()},1000);
//      return false;
//  });

var base = $('link[rel="base"]').attr('href');
   //
   $(".scroll").click(function(event){        
    event.preventDefault();
    $('html,body').animate({scrollTop:$(this.hash).offset().top-145},800);
  });
   
   var nav = $('.main_header');
   $(window).scroll(function () {
    if ($(this).scrollTop() > 80) {
      nav.addClass('main_header_fixed');
      $('.hidden-subtitle').hide();
      $('.main_header_fixed').fadeIn('slow');
    } else {
      nav.removeClass('main_header_fixed');
      $('.hidden-subtitle').show();
    }
  }); 

     //SUSPENDE MENU 
     $(window).scroll(function(){
      if($(this).scrollTop()> $ ('.main_header').outerHeight() + 150){
       $('body').css('padding-top',$('.main_header').outerHeight());
       $('.main_header').addClass('main_header_fixed');
       $('.j_back').fadeIn(500);
     }else{
      $('body').css('padding-top','0');
      $('.main_header').removeClass('main_header_fixed'); 
      $('.j_back').fadeOut(500); 
    }
  });

  //BACK TOPO
  $('.j_back').click(function(){
    $('html,body').animate({scrollTop:0},1000);
  });

//FORM SUBMIT
// $('.j_formsubmit').submit(function(){
 //  $('.j_formsubmit').submit(function(){
 //   var form = $(this);
 //   var data = $(this).serialize();

 //       $.ajax({
 //        url: base + '/js/enviamail.ajax.php',
 //        data:data,
 //        type: "POST",
 //        dataType: "json",
 //        beforeSend:function(){
 //         $('.form_load').fadeIn();
 //       },  
 //       success: function( response ){
 //         if(response.sucesso){
 //            $('#msg_retorno').html(response.sucesso);
 //            $('.form_load').fadeOut();
 //          }else{
 //            $('#msg_retorno').html(response.alerta);
 //            $('.form_load').fadeOut();
 //          }

 //        }

 //      });

 //   return false; 
 // });

// validation contact form
  $('input[name="telefone"]').mask('(99) 9999.9999?9').on('focusout', function(e){
      var target, phone, el;
      target = ( e.currentTarget ) ? e.currentTarget : e.srcElement;
      phone = target.value.replace(/\D/g, '');
      el = $(target);
      el.unmask();
      if (phone.length > 10) {
          el.mask("(99) 99999.999?9");
      }else{
          el.mask("(99) 9999.999?9");
      }
  });


// $('form[name=news]').on('submit', function(e){
//     var form = $(this);
//     var data = $(this).serialize();

//        $.ajax({
//         url: base + '/js/enviamail.ajax.php',
//         data:data,
//         type: "POST",
//         dataType: "json",
//         beforeSend:function(){
//          $('.form_load_data').fadeIn();
//        },  
//        success: function( response ){
//          if(response.sucesso){
//             $('#msg_retorno_news').html(response.sucesso);
//             $('.form_load_data').fadeOut();
//           }else{
//             $('#msg_retorno_news').html(response.alerta);
//             $('.form_load_data').fadeOut();
//           }

//         }

//       });

//     e.preventDefault();
//   });


});

