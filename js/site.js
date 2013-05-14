(function ($) {

  // Helpers
  $.fn.exists = function() {
    return $(this).length>0;
  };

  //Initiate placeholder polyfill for browsers that don't support it.
  $('input, textarea').placeholder();

})(jQuery);