/**
 * @file File template for a javascript behavior
 *
 */

(function ($, Drupal) {
  Drupal.behaviors.menuToggle = {
    attach: function (context) {
      var $menuToggle = $('.js-menuToggle', context).once('menuToggle');
      if ($menuToggle.length > 0) {
        $('.js-menuToggle').on('click', function() {
          $(this).toggleClass('is-active');
          $(this).find('.js-hamburger').toggleClass('is-active');
          $(this).next('.js-menuContainer').slideToggle();
        });

        var debouncedResizeHandler = Drupal.debounce(
            Drupal.behaviors.menuToggle.resizeMenu,
            100
        );

        debouncedResizeHandler();
        $(window).resize(debouncedResizeHandler);
      }
    },

    resizeMenu: function() {
        var windowWidth = $(window).width();

        if (windowWidth >= 992) {
            $('.js-menuContainer').removeAttr('style');
        }
    }
  };

})(jQuery, Drupal);
