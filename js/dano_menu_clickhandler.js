// MASTER CLICK HANDLER

// When there is a click do the following:
jQuery(document).on("click", function(e) {

    // If the user clicked on the hamburger icon, fade menu in
    if (jQuery(e.target).is('.ut_hamburger_menu_hamburger, .ut_hamburger_menu_hamburger *')) {
        jQuery( '.ut_hamburger_menu_menu' ).fadeIn(200);
        return;
    }

    // If the user clicked on the close button, fade menu out
    if (jQuery(e.target).is('.ut_hamburger_menu_menu__close_button, .ut_hamburger_menu_menu__close_button *')) {
        jQuery( '.ut_hamburger_menu_menu' ).fadeOut(200);
    }

});