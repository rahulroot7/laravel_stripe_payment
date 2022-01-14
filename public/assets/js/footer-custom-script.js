
$.expr[":"].icontains = $.expr.createPseudo(function(arg) {
  return function( elem ) {
      return $(elem).text().toUpperCase().indexOf(arg.toUpperCase()) >= 0;
  };
});

// serch for country
$('#search').keyup(function(){
  var query = $(this).val();
  
  $('.list h6:not(:icontains('+ query +'))').slideUp(100);
  $('.list h6:not(:icontains('+ query +'))').next('div').slideUp(100);
  $('.list h6:icontains('+ query +')').slideDown(100);
  $('.list h6:icontains('+ query +')').next('div').slideDown(100);
});
// end country serch

// serch support list

jQuery(document).ready(function($){

$('.live-search-list div').each(function(){
$(this).attr('data-search-term', $(this).text().toLowerCase());
});

$('.live-search-box').on('keyup', function(){

var searchTerm = $(this).val().toLowerCase();

    $('.live-search-list div').each(function(){

        if ($(this).filter('[data-search-term *= ' + searchTerm + ']').length > 0 || searchTerm.length < 1) {
            $(this).show();
        } else {
            $(this).hide();
        }

    });

});

});

// end support

// country check 
$(".answer").hide();
$(document).on("click",".country_check",function() {
  var count = $('.country_check:checked').size();
  $('#check_count').text(count+' countries will be hidden from search results');
  if($(this).is(":checked")) {
      $(".answer").show();
  }
  $("#clear" ).click(function() {
      $('.country_check').attr('checked', false);
      var count = $('.country_check:checked').size();
      $('#check_count').text(count+' countries will be hidden from search results');
});
});

// country check end

// prospecting js
$(".filter_save").hide();
$(document).on("click",".filter_prospecting",function() {
  var count = $('.filter_prospecting:checked').size();
  $('#check_count').text(count+' people selected');
  if($(this).is(":checked")) {
    	$(".filter_save").show();
  }
  $("#clear" ).click(function() {
      $('.filter_prospecting').attr('checked', false);
      var count = $('.filter_prospecting:checked').size();
      $('#check_count').text(count+' people selected');
});
});

// end prospecting js
