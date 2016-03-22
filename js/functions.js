jQuery(document).ready(function($){


	if($('.tablesorter').length ){
		$('.tablesorter').tablesorter();
	}
  $('#toggle-function-id').click(function() {
      $('.change-function').each(function() {
          cur = $(this).text();
          $(this).text(cur == $(this).data('name1') ? $(this).data('name2') : $(this).data('name1'));
      });
  });
  $('#toggle-key-id').click(function() {
      $('.change-keys').each(function() {
          cur = $(this).text();
          $(this).text(cur == $(this).data('name1') ? $(this).data('name2') : $(this).data('name1'));
      });
  });
  $('#toggle-instructions-id').click(function() {
      $('.toggle-instructions').each(function() {
          $(this).toggleClass('hide');
      });
  });     
 
  $('#toggle-type-id').click(function() {
      $('.toggle-type').each(function() {
          $(this).toggleClass('hide');
      });
  });     
  $('#toggle-example-id').click(function() {
      $('.toggle-example').each(function() {
          $(this).toggleClass('hide');
      });  
  });

});

