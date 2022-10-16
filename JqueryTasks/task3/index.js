$(document).ready(function($){

  $('body').on('click', '.submit', function(e){
      e.preventDefault();

      var value = $('.input').val();
      if(value !== '') {
          $('.error').text('');
          $('.todoList').append('<li><input type="checkbox" class="checkbox">'+value+'<span class="lnr lnr-trash trash" title="Delete">Delete</span></li>');
          $('.input').val('');
      } else {
          $('.error').text('Enter A Task');
      }
  });

  $('body').on('click', '.trash', function(){
      $(this).parent().remove();
  });

  $('body').on('click', '.checkbox', function(){
      $(this).parent().toggleClass('strike');
  });

});