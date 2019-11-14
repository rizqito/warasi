"use strict";

$(document).ready(function() {
    // sidebar navigation
    $('.sidebar').metisMenu();

    setTimeout(function() {
        $('.page-loader-wrapper').fadeOut();
    }, 100);

    $(window).bind("resize", function () {
        console.log($(this).width())
        if ($(this).width() < 1200) {
            $("body").addClass("layout-fullwidth");
        } else {
            $("body").removeClass("layout-fullwidth");
        }
    }).trigger('resize');


    // right side bar
	$('a.rightbar_btn').on('click', function() {
        $('.right_sidebar').toggleClass('open');
    });

	$('.menu_toggle').on('click', function() {
        $('body').toggleClass('toggle_menu_active');
    });

    // Dark bg sidebar
    $(".switch-dark").on('change',function() {
        if(this.checked) {
            $("body").addClass('dark-sidebar');
        }else{
            $("body").removeClass('dark-sidebar');
        }
    });

    // mini sidebar 
    $(".switch-sidebar").on('change',function() {
        if(this.checked) {
            $("body").addClass('toggle_menu_active');
        }else{
            $("body").removeClass('toggle_menu_active');
        }
    });

    // Skin changer
	$('.choose-skin li').on('click', function() {
	    var $body = $('body');
	    var $this = $(this);
  
	    var existTheme = $('.choose-skin li.active').data('theme');
	    $('.choose-skin li').removeClass('active');
	    $body.removeClass('theme-' + existTheme);
	    $this.addClass('active');
	    $body.addClass('theme-' + $this.data('theme'));
    });

    // Main menu
    $('.btn-dashboard').on('click', function() {
        $('.left_sidebar .main_dashboard').addClass('open');
        $('.left_sidebar .ui_element').removeClass('open');
        $('.left_sidebar .ui_auth').removeClass('open');
    });    
    $('.btn-ui-element').on('click', function() {
        $('.left_sidebar .main_dashboard').removeClass('open');
        $('.left_sidebar .ui_element').addClass('open');
        $('.left_sidebar .ui_auth').removeClass('open');
    });
    $('.btn-auth').on('click', function() {
        $('.left_sidebar .main_dashboard').removeClass('open');
        $('.left_sidebar .ui_element').removeClass('open');
        $('.left_sidebar .ui_auth').addClass('open');
    });

    // toggle fullwidth layout
	$('.btn-toggle-fullwidth').on('click', function() {
		if(!$('body').hasClass('layout-fullwidth')) {
			$('body').addClass('layout-fullwidth');
			$(this).find(".fa").toggleClass('fa-arrow-left fa-arrow-right');

		} else {
			$('body').removeClass('layout-fullwidth');
			$(this).find(".fa").toggleClass('fa-arrow-left fa-arrow-right');
		}
	});

	// off-canvas menu toggle
	$('.header-toggler').on('click', function() {
		$('body').toggleClass('offcanvas-active');
	});

	$('#main-content').on('click', function() {
		$('body').removeClass('offcanvas-active');
    });
    
    // inbox
	$('.inbox-side-toggle').on('click', function() {
		$('.mail-side').toggleClass('div-toggle');
    });
        

    $(window).on('load', function() {
		// for shorter main content
		if($('#main-content').height() < $('#left-sidebar').height()) {
			$('#main-content').css('min-height', $('#left-sidebar').innerHeight() - $('footer').innerHeight());
		}
    });
    
    $('.nav_top .navbar-nav .nav-link').click(function() {
        if(!$(this).hasClass('menu_toggle')){
            $('.custom-navbar .navbar-nav .nav-link.active').removeClass('active');
            $(this).addClass("active");
        }
    });
    
    $('.left_sidebar .navbar-nav .nav-link').click(function() {
        if(!$(this).hasClass('menu_toggle')){
            $('.left_sidebar .navbar-nav .nav-link.active').removeClass('active');
            $(this).addClass("active");
        }
    });

    $('#navbar_main .navbar-nav .nav-link').click(function() {
        if(!$(this).hasClass('rightbar_btn')){
            if($(this).hasClass('active')){
                $('#navbar_main .navbar-nav .nav-link.active:not(.rightbar_btn)').removeClass('active');
            } else {
                $('#navbar_main .navbar-nav .nav-link.active:not(.rightbar_btn)').removeClass('active');
                $(this).addClass("active");
            }
        } else {
            
            $(this).toggleClass("active");
        }
    });

    $(document).on("click", function(e) {
            if ($(e.target).is("#navbar_main .navbar-nav .nav-link.active:not(.rightbar_btn)") === false) {
                $('#navbar_main .navbar-nav .nav-link.active:not(.rightbar_btn)').removeClass('active');
            }
    });

});
$(window).on('load resize', function() {
    
    // Background image holder - Static hero with fullscreen autosize
    if ($('.spotlight').length) {
        $('.spotlight').each(function() {
            
            var $this = $(this);
            var holderHeight;

            if ($this.data('spotlight') == 'fullscreen') {
                if ($this.data('spotlight-offset')) {
                    var offsetHeight = $('body').find($this.data('spotlight-offset')).height();
                    holderHeight = $(window).height() - offsetHeight;
                }
                else {
                    holderHeight = $(window).height();
                }
  

                if ($(window).width() > 991) {
                    $this.find('.spotlight-holder').css({
                        'height': holderHeight + 'px'
                    });
                } 
                else {
                    $this.find('.spotlight-holder').css({
                        'height': 'auto'
                    });
                }
            }
        })
    }
}),
$(document).ready(function() {

    // Plugins init
    $(".scrollbar-inner")[0] && $(".scrollbar-inner").scrollbar().scrollLock();
    $('[data-stick-in-parent="true"]')[0] && $('[data-stick-in-parent="true"]').stick_in_parent();
    $('.selectpicker')[0] && $('.selectpicker').selectpicker();
    $('.textarea-autosize')[0] && autosize($('.textarea-autosize'));
    $('[data-toggle="tooltip"]').tooltip();
    $('[data-toggle="popover"]').each(function() {
        var popoverClass = '';
        if($(this).data('color')) {
            popoverClass = 'popover-'+$(this).data('color');
        }
        $(this).popover({
            trigger: 'focus',
            template: '<div class="popover '+ popoverClass +'" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>'
        })
    });
    

    // Floating label
    $('.form-control').on('focus blur', function(e) {
        $(this).parents('.form-group').toggleClass('focused', (e.type === 'focus' || this.value.length > 0));
    }).trigger('blur');
    

    // Custom input file
    $('.custom-input-file').each(function() {
        var $input = $(this),
            $label = $input.next('label'),
            labelVal = $label.html();

        $input.on('change', function(e) {
            var fileName = '';

            if (this.files && this.files.length > 1)
                fileName = (this.getAttribute('data-multiple-caption') || '').replace('{count}', this.files.length);
            else if (e.target.value)
                fileName = e.target.value.split('\\').pop();

            if (fileName)
                $label.find('span').html(fileName);
            else
                $label.html(labelVal);
        });


        // Firefox bug fix
        $input.on('focus', function() {
            $input.addClass('has-focus');
        })
        .on('blur', function() {
            $input.removeClass('has-focus');
        });
    });
    
    
    // NoUI Slider
    if ($(".input-slider-container")[0]) {
        $('.input-slider-container').each(function() {

            var slider = $(this).find('.input-slider');
            var sliderId = slider.attr('id');
            var minValue = slider.data('range-value-min');
            var maxValue = slider.data('range-value-max');

            var sliderValue = $(this).find('.range-slider-value');
            var sliderValueId = sliderValue.attr('id');
            var startValue = sliderValue.data('range-value-low');

            var c = document.getElementById(sliderId),
                d = document.getElementById(sliderValueId);

            noUiSlider.create(c, {
                start: [parseInt(startValue)],
                connect: [true, false],
                //step: 1000,
                range: {
                    'min': [parseInt(minValue)],
                    'max': [parseInt(maxValue)]
                }
            });

            c.noUiSlider.on('update', function(a, b) {
                d.textContent = a[b];
            });
        })

    }

    if ($("#input-slider-range")[0]) {
        var c = document.getElementById("input-slider-range"),
            d = document.getElementById("input-slider-range-value-low"),
            e = document.getElementById("input-slider-range-value-high"),
            f = [d, e];

        noUiSlider.create(c, {
            start: [parseInt(d.getAttribute('data-range-value-low')), parseInt(e.getAttribute('data-range-value-high'))],
            connect: !0,
            range: {
                min: parseInt(c.getAttribute('data-range-value-min')),
                max: parseInt(c.getAttribute('data-range-value-max'))
            }
        }), c.noUiSlider.on("update", function(a, b) {
            f[b].textContent = a[b]
        })
    }

    // Scroll to anchor with animation
    $('.scroll-me, .toc-entry a').on('click', function(event) {
        var hash = $(this).attr('href');
        var offset = $(this).data('scroll-to-offset') ? $(this).data('scroll-to-offset') : 0;

        // Animate scroll to the selected section
        $('html, body').stop(true, true).animate({
            scrollTop: $(hash).offset().top - offset
        }, 600);

        event.preventDefault();
    });

}),
$(document).ready(function() {
    $("body").on("click", "[data-action]", function(e) {

        e.preventDefault();

        var $this = $(this);
        var action = $this.data('action');
        var target = '';

        switch (action) {
            case "offcanvas-open":
                target = $this.data("target"), $(target).addClass("open"), $("body").append('<div class="body-backdrop" data-action="offcanvas-close" data-target=' + target + " />");
            break;
            case "offcanvas-close":
                target = $this.data("target"), $(target).removeClass("open"), $("body").find(".body-backdrop").remove();
            break;

            case 'aside-open':
                target = $this.data('target');
                $this.data('action', 'aside-close');
                $this.addClass('toggled');
                $(target).addClass('toggled');
                $('.content').append('<div class="body-backdrop" data-action="aside-close" data-target='+target+' />');
            break;


            case 'aside-close':
                target = $this.data('target');
                $this.data('action', 'aside-open');
                $('[data-action="aside-open"], '+target).removeClass('toggled');
                $('.content, .header').find('.body-backdrop').remove();
            break;
        }
    })
});

var options = {
    valueNames: [ 'name', 'born' ]
};

var userList = new List('chat_list', options);
var userList = new List('search_page', options);
var userList = new List('Contact', options);


window.ArrOwlite= {
	colors: {
	    'blue': '#46b6fe',
	    'blue-darkest': '#0b4eb1',
	    'blue-darker': '#3da8ec',
	    'blue-dark': '#3866a6',
	    'blue-light': '#5ebcf9',
	    'blue-lighter': '#6fc6ff',
        'blue-lightest': '#9bd8ff',
        
	    'azure': '#45aaf2',
	    'azure-darkest': '#0e2230',
	    'azure-darker': '#1c4461',
	    'azure-dark': '#3788c2',
	    'azure-light': '#7dc4f6',
	    'azure-lighter': '#c7e6fb',
        'azure-lightest': '#ecf7fe',
        
	    'indigo': '#4d3096',
	    'indigo-darkest': '#141729',
	    'indigo-darker': '#282e52',
	    'indigo-dark': '#515da4',
	    'indigo-light': '#939edc',
	    'indigo-lighter': '#d1d5f0',
        'indigo-lightest': '#f0f1fa',
        
	    'purple': '#b588ff',
	    'purple-darkest': '#21132f',
	    'purple-darker': '#42265e',
	    'purple-dark': '#844bbb',
	    'purple-light': '#c08ef0',
	    'purple-lighter': '#e4cff9',
        'purple-lightest': '#f6effd',
        
	    'pink': '#ff4dab',
	    'pink-darkest': '#31161f',
	    'pink-darker': '#622c3e',
	    'pink-dark': '#c5577c',
	    'pink-light': '#f999b9',
	    'pink-lighter': '#fcd3e1',
        'pink-lightest': '#fef0f5',
        
	    'red': '#ee2558',
	    'red-darkest': '#2e0f0c',
	    'red-darker': '#5c1e18',
	    'red-dark': '#b93d30',
	    'red-light': '#ee8277',
	    'red-lighter': '#f8c9c5',
        'red-lightest': '#fdedec',
        
	    'orange': '#FF9948',
	    'orange-darkest': '#331e0e',
	    'orange-darker': '#653c1b',
	    'orange-dark': '#ca7836',
	    'orange-light': '#feb67c',
	    'orange-lighter': '#fee0c7',
        'orange-lightest': '#fff5ec',
        
	    'yellow': '#fdd932',
	    'yellow-darkest': '#302703',
	    'yellow-darker': '#604e06',
	    'yellow-dark': '#c19d0c',
	    'yellow-light': '#f5d657',
	    'yellow-lighter': '#fbedb7',
        'yellow-lightest': '#fef9e7',
        
	    'lime': '#82c885',
	    'lime-darkest': '#192a0b',
	    'lime-darker': '#315415',
	    'lime-dark': '#62a82a',
	    'lime-light': '#a3e072',
	    'lime-lighter': '#d7f2c2',
        'lime-lightest': '#f2fbeb',
        
	    'green': '#04BE5B',
	    'green-darkest': '#132500',
	    'green-darker': '#264a00',
	    'green-dark': '#4b9500',
	    'green-light': '#8ecf4d',
	    'green-lighter': '#cfeab3',
        'green-lightest': '#eff8e6',
        
	    'teal': '#2bcbba',
	    'teal-darkest': '#092925',
	    'teal-darker': '#11514a',
	    'teal-dark': '#22a295',
	    'teal-light': '#6bdbcf',
	    'teal-lighter': '#bfefea',
        'teal-lightest': '#eafaf8',
        
	    'cyan': '#5CC5CD',
	    'cyan-darkest': '#052025',
	    'cyan-darker': '#09414a',
	    'cyan-dark': '#128293',
	    'cyan-light': '#5dbecd',
	    'cyan-lighter': '#b9e3ea',
        'cyan-lightest': '#e8f6f8',
        
	    'gray': '#868e96',
	    'gray-darkest': '#1b1c1e',
	    'gray-darker': '#36393c',
	    'gray-dark': '#6b7278',
	    'gray-light': '#aab0b6',
	    'gray-lighter': '#dbdde0',
	    'gray-lightest': '#f3f4f5',
	    'gray-dark': '#343a40',
	    'gray-dark-darkest': '#0a0c0d',
	    'gray-dark-darker': '#15171a',
	    'gray-dark-dark': '#2a2e33',
	    'gray-dark-light': '#717579',
	    'gray-dark-lighter': '#c2c4c6',
        'gray-dark-lightest': '#ebebec',
        
        'gray-100': '#f8f9fa',
        'gray-200': '#E8E9E9',
        'gray-300': '#D1D3D4',
        'gray-400': '#BABDBF',
        'gray-500': '#808488',
        'gray-600': '#666A6D',
        'gray-700': '#4D5052;',
        'gray-800': '#333537;',
        'gray-900': '#1C1D1E;',
        'black': '#000000',
	}
};



// ThemeMakker Live chat support script please do not add in your project
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/59f5afbbbb0c3f433d4c5c4c/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
})();

