// JavaScript Document

$(document).ready(function () {

    function mobileBtnEvent() {

        function mobileSideBar(e) {
            e.preventDefault();
            $(this).toggleClass('active');
        }
        $('.btn-toggle-mobile-side-bar').click(mobileSideBar);

    }

    mobileBtnEvent();

});