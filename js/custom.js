(function($) {
"use strict";

/* ==============================================
LOADER -->
=============================================== */

    $(window).load(function() {
        $('#loader').delay(300).fadeOut('slow');
        $('#loader-container').delay(200).fadeOut('slow');
        $('body').delay(300).css({'overflow':'visible'});
    })

/* ==============================================
ANIMATION -->
=============================================== */

    new WOW({
	    boxClass:     'wow',      // default
	    animateClass: 'animated', // default
	    offset:       0,          // default
	    mobile:       true,       // default
	    live:         true        // default
    }).init();

/* ==============================================
MENU HOVER -->
=============================================== */

    jQuery('.hovermenu .dropdown').hover(function() {
        jQuery(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn();
    }, function() {
        jQuery(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut();
    });
    jQuery('.topbar .dropdown').hover(function() {
        jQuery(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn();
    }, function() {
        jQuery(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut();
    });

/* ==============================================
CAROUSEL -->
=============================================== */

    $('#owl-featured').owlCarousel({
        loop:true,
        margin:15,
        nav:true,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:4
            }
        }
    })
    $('#owl-featured-2').owlCarousel({
        loop:true,
        margin:15,
        nav:true,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:4
            }
        }
    })

/* ==============================================
LOGIN AJAX -->
=============================================== */

    $('#login-form-link').click(function(e) {
        $("#login-form").delay(100).fadeIn(100);
        $("#register-form").fadeOut(100);
        $('#register-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });
    $('#register-form-link').click(function(e) {
        $("#register-form").delay(100).fadeIn(100);
        $("#login-form").fadeOut(100);
        $('#login-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });
    var password = document.getElementById("password"),
     confirm_password = document.getElementById("confirm-password");

    function validatePassword(){
      if(password.value != confirm_password.value) {
        confirm_password.setCustomValidity("Passwords Don't Match");
      } else {
        confirm_password.setCustomValidity('');
      }
    }
    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;

    $("#register-form").on("submit",function(e){
        e.preventDefault();            
        var data = $( this ).serialize();
        $.ajax({
            url: 'admin/api/authenticate.php',
            data: data,
            type: "POST",
            success: function(d){
                $("#login-form").delay(100).fadeIn(100);
                $("#register-form").fadeOut(100);
                $('#register-form-link').removeClass('active');
                $('#login-form-link').addClass('active');
            }
        })
    });

    $("#login-form").on("submit",function(e){
            e.preventDefault();            
            var data = $( this ).serialize();
            $.ajax({
                url: 'admin/api/authenticate.php',
                data: data,
                type: "POST",
                success: function(d){
                    var i = jQuery.parseJSON(d);
                    //alert(i);
                    if(i.status == "success"){
                        // similar behavior as an HTTP redirect
                        window.location.replace("admin/index.php?user_id="+i.user_id);
                    }
                    else{                        
                        $("p.error-message").append("Invalid username or password");
                    }
                }
            })
        });

/* ==============================================
ACCORDION -->
=============================================== */

    function toggleChevron(e) {
        $(e.target)
            .prev('.panel-heading')
            .find("i.indicator")
            .toggleClass('fa-minus fa-plus');
    }
    $('#accordion').bind('hidden.bs.collapse', toggleChevron);
    $('#accordion').bind('shown.bs.collapse', toggleChevron);


/* ==============================================
FUN -->
=============================================== */

    function count($this){
        var current = parseInt($this.html(), 10);
        current = current + 10;
        $this.html(++current);
        if(current > $this.data('count')){
        $this.html($this.data('count'));
        } 
        else {    
        setTimeout(function(){count($this)}, 10);
        }
        }        
        $(".stat-count").each(function() {
        $(this).data('count', parseInt($(this).html(), 10));
        $(this).html('0');
        count($(this));
    });

/* ==============================================
AFFIX -->
=============================================== */

    $('.header').affix({
      offset: {
        top: 100,
        bottom: function () {
          return (this.bottom = $('.footer').outerHeight(true))
        }
      }
    })

})(jQuery);