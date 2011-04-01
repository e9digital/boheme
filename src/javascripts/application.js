;jQuery(function($) {

    var checkboxes = $('input[type=checkbox]');

    checkboxes.each(function(){

      var label = $('label[for='+ $(this).attr('id') +']');
      label.mouseover(function(){
        $(this).addClass('hover');
        if( $(this).is('.checked') ){
          $(this).addClass('checkedHover');
        }
      });
      label.mouseout(function(){
        $(this).removeClass('hover checkedHover');
      });

      $(this).add('label').wrap('<div class="custom-checkbox"></div>');

      checkboxes.bind('updateState', function(){
        var label = $('label[for='+ $(this).attr('id') +']');
        if ( $(this).is(':checked') ){
          label.addClass('checked');
        } else {
          label.removeClass('checked checkedHover checkedFocus');
        }
      });

      checkboxes.trigger('updateState');

      checkboxes.click(function(){
        $(this).trigger('updateState');
      });

      checkboxes.focus(function(){
        var label = $('label[for='+ $(this).attr('id') +']');
        label.addClass('focus');
        if( $(this).is(':checked') ){
          $(this).addClass('checkedFocus');
        }
      });

      checkboxes.blur(function() {
        var label = $('label[for='+ $(this).attr('id') +']');
        label.removeClass('focus checkedFocus');
      });
    });
 
		

	
  $(".combobox").selectmenu();
	
      
 
  $('a[rel=external]').click(function() {
    window.open(this.href);
    return false;
  });

  console.log('The page has loaded');

});
