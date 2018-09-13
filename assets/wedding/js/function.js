$(document).ready(function(){

    $('#section-1-yes').click(function(e) {  
      $('#section-2').show();
      $('#section-1').hide();
    });

    $('#section-1-no').click(function(e) {  
      $('#section-invitation').show();
      $('#section-ballon').hide();
      $('#section-invitation-title').html('It\'s okay. <br>If you change your mind, <br>please save the date <span class="ballon-green-text">13.10.18</span>');
    });

    $('#section-2-yes').click(function(e) {  
      $('#section-invitation').show();
      $('#section-ballon').hide();
      var items = [
      	'AWESOME!<BR>Let there be <span class="ballon-green-text">cake</span>. <br> and <span class="ballon-green-text">drink</span>', 
      	'come for the <span class="ballon-green-text">sake</span>, stay for the <span class="ballon-green-text">vows</span>',
      	'<span class="ballon-green-text">Free drinks</span><br>... And we\'re also getting married.',
      	'<span class="ballon-green-text">CTRL+S</span> the date<br>for my wedding celebration',
      	'<span class="ballon-green-text">SHIT</span> just got real',
      ];
      var random = items[Math.floor(Math.random()*items.length)];
      $('#section-invitation-title').html(random);

    });

    $('#section-2-no').click(function(e) {  
      $('#section-invitation').show();
      $('#section-ballon').hide();
      $('#section-invitation-title').html('it doesn\'t matter <br>if you are a <span class="ballon-green-text">human</span> or a <span class="ballon-red-text">robot</span>. <br> Let\'s celebrate!');
    });

});