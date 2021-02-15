; (function ($, window, document) {

  $(document).ready(function () {

    /**
     * Define vars
     */
    var mobileTrigger = $('.site--menu-trigger'),
      mobileMenu = $('.site--menu__header')
      // mobileTriggerIcon = $(mobileTrigger).find('> .span')

    /**
     * Mobile menu action
     * First check if menu is active
     */

    $(mobileTrigger).on('click', function () {

        /** Switch the class */
        $(this).toggleClass('menu-is-open')
        $(mobileMenu).toggleClass('active')


        if($(mobileMenu).hasClass('active')) {
          $(mobileTrigger).find('> span').removeClass('ion-navicon-round').addClass('ion-close-round')
        } else {
          $(mobileTrigger).find('> span').removeClass('ion-close-round').addClass('ion-navicon-round')
        }
    })

  })

}(window.jQuery, window, document));