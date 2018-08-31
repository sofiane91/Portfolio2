$(function(){

$('#competences-page').hide();
$('#projets-page').hide();
$('#contact-page').hide();

$('#competences').on('click',function(){
   $('#home-page').slideUp(600);
   $('#competences-page').slideDown(600,function(){
       $('#barre1').progressbar({
            value:70
         })
         $('#barre2').progressbar({
            value:60
         })
          $('#barre3').progressbar({
            value:30
         })
          $('#barre4').progressbar({
            value:50
         })
          $('#barre5').progressbar({
            value:40
         })
          $('#barre6').progressbar({
            value:40
         })
         $(".ui-widget-header").css("background-color", "rgba(61, 46, 46, 0.9)");

   });
});

$('#sous').hide();
$('#titre').on('click', function(){
   $('#sous').slideUp('slide', { direction: 'left' }, 1000);
   $('#sous').slideDown('slide', { direction: 'left' }, 1000); 
});

$('#home').on('click',function(){
   $('#competences-page').slideUp(600);
      $('#home-page').slideDown(600);
});

$('#contact').on('click', function(){
   $('#projets-page').slideUp(600);
   $('#contact-page').slideDown(600);
});

//page4
 $('#projets').on('click',function(){
   $('#competences-page').slideUp(600); 
      $('#projets-page').slideDown(600);
});

 $('#competences').on('click',function(){
   $('#projets-page').slideUp(600);
   $('#competences-page').slideDown(600);
 });
 $('#projet').on('click',function(){
   $('#contact-page').slideUp(600);
   $('#projets-page').slideDown(600);
 })
//lien vers projets
$("#photo").click(function(){ 
   window.location="http://localhost/mymeetic/meetic.php"; 
});
$("#photo2").click(function(){ 
   window.location="http://localhost/cinema/mycine.php"; 
});
$('#down').on('click',function(){
   alert('voulez-vous telecharger ce fichier?');
})


// ROBIN

// $('.boxe').on('click',function(){

// var clicked = $(this).data('page') // ID DE LA PAGE
// alert(clicked);
// $('.filter').each(function(index, value){

//       if($(value).is(':visible')) {
//          $(value).slideUp(100);
//          $('.boxe').data('page').slideDown(100);
//       }

// });

// });


});
