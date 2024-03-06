jQuery(document).ready(function ($) {
    const $body = $(document.body);
    const $header = $('.header-view');
    $('.menu-toggle').on('click', function () {
        if ($header.hasClass('menu-visible')) {
            $header.removeClass('menu-visible');
            $body.removeClass('overflow-hidden')
        } else {
            $header.addClass('menu-visible')
            $body.addClass('overflow-hidden')
        }
    })

    $('.menu-item').click(function () {
        const $menuItem = $(this);
        const $subMenu = $menuItem.find('.sub-menu');

        if ($menuItem.hasClass('open')) {
            $menuItem.removeClass('open');
            $subMenu.slideUp(200);
        } else {
            $menuItem.addClass('open');
            $subMenu.slideDown(200);
        }
    });
});
