jQuery(document).ready(function ($) {
    

    $('.main-navigation').on('keydown', function (e) {
        if ($('.main-navigation').hasClass('toggled')) {
            var focusableEls = $(' .main-navigation .menu-toggle, .main-navigation a[href]:not([disabled]), .main-navigation li');
            var firstFocusableEl = focusableEls[0];
            var lastFocusableEl = focusableEls[focusableEls.length - 1];
            var KEYCODE_TAB = 9;
            if (e.key === 'Tab' || e.keyCode === KEYCODE_TAB) {
                if (e.shiftKey) /* shift + tab */ {
                    if (document.activeElement === firstFocusableEl) {
                        lastFocusableEl.focus();
                        e.preventDefault();
                    }
                } else /* tab */ {
                    if (document.activeElement === lastFocusableEl) {
                        firstFocusableEl.focus();
                        e.preventDefault();
                    }
                }
            }
        }
    });


});