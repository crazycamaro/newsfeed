$(document).ready(function(){

  $('.input').blur(function(event){
      if( $(this).val() ) {
          //if($(event.target).is($('#form :input')))
         // {
              $('#form').submit();
         // }

      }
  });

});
