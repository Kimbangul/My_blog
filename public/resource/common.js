// JavaScript Document

$(document).ready(function () {

            function mobileBtnEvent() {
                var $btn = $('.btn-toggle-mobile-side-bar');
                var $mobileSideBar = $('.mobile-side-bar');
                var $mobileSideBarBg = $('.mobile-side-bar-bg');


                function mobileSideBar(e) {
                    e.preventDefault();

                    if ($btn.hasClass('active')) {
                        // 모바일 사이드바 끄기
                            $btn.removeClass('active');
                            $mobileSideBar.removeClass('active');
                            $mobileSideBarBg.removeClass('active');
                            $('html , body').removeClass('mobile-side-bar-actived');
                        } else {
                            // 모바일 사이드바 켜기
                            $btn.addClass('active');
                            $mobileSideBar.addClass('active');
                            $mobileSideBarBg.addClass('active');
                            $('html , body').addClass('mobile-side-bar-actived');
                        }


                    }

                    function mobileSubmenu(e) {
                        if ($(this).hasClass('active')) {
                            $(this).removeClass('active');
                        } else {
                            $(this).addClass('active');
                        }
                        e.stopPropagation();
                    }

                    $('.btn-toggle-mobile-side-bar, .mobile-side-bar-bg').click(mobileSideBar);


                    $('.mobile-side-bar .menu-box-1  ul > li').click(mobileSubmenu);
                }

                mobileBtnEvent();

            });