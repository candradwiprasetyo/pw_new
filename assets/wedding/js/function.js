$(document).ready(function(){

    $('#section-1-yes').click(function(e) {  
      $('#section-2').show();
      $('#section-1').hide();
    });

    $('#section-1-no').click(function(e) {  
      $('#section-invitation').show();
      $('#section-ballon').hide();
      $('#section-invitation-mask-3').show();
      $('#section-invitation-mask-1').hide();
      $('#section-invitation-mask-2').hide();
    });

    $('#section-2-yes').click(function(e) {  
      $('#section-invitation').show();
      $('#section-ballon').hide();
      $('#section-invitation-mask-1').show();
      $('#section-invitation-mask-2').hide();
      $('#section-invitation-mask-3').hide();
    });

    $('#section-2-no').click(function(e) {  
      $('#section-invitation').show();
      $('#section-ballon').hide();
      $('#section-invitation-mask-2').show();
      $('#section-invitation-mask-1').hide();
      $('#section-invitation-mask-3').hide();
    });

});