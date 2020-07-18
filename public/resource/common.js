// JavaScript Document

$(document).ready(function () {

    function mobileBtnEvent() {
        var $btn = $('.btn-toggle-mobile-side-bar');

        function mobileSideBar(e) {
            e.preventDefault();
            $btn.toggleClass('active');
            $('.mobile-side-bar').toggleClass('active');
        }
        $btn.click(mobileSideBar);

    }

    mobileBtnEvent();

});