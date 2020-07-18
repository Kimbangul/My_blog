// JavaScript Document

$(document).ready(function () {

    function mobileBtnEvent() {
        var $btn = $('.btn-toggle-mobile-side-bar');
        var $mobileSideBar = $('.mobile-side-bar');
        var $mobileSideBarBg = $('.mobile-side-bar-bg');

        function mobileSideBar(e) {
            e.preventDefault();
            $btn.toggleClass('active');
            $mobileSideBar.toggleClass('active');
            $mobileSideBarBg.toggleClass('active');
            $('html , body').toggleClass('active');
        }
        $('.btn-toggle-mobile-side-bar, .mobile-side-bar-bg').click(mobileSideBar);

    }

    mobileBtnEvent();

});