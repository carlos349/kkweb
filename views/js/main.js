 AOS.init({
 	duration: 800,
 	easing: 'slide'
 });
 

(function($) {

	"use strict";

	$(window).stellar({
    responsive: true,
    parallaxBackgrounds: true,
    parallaxElements: true,
    horizontalScrolling: false,
    hideDistantElements: false,
    scrollProperty: 'scroll',
    horizontalOffset: 0,
	  verticalOffset: 0
  });

  // Scrollax
  $.Scrollax();

  	

	var fullHeight = function() {

		$('.js-fullheight').css('height', $(window).height());
		$(window).resize(function(){
			$('.js-fullheight').css('height', $(window).height());
		});

	};
	fullHeight();

	// loader
	var loader = function() {
		setTimeout(function() { 
			if($('#ftco-loader').length > 0) {
				$('#ftco-loader').removeClass('show');
			}
		}, 1);
	};
	loader();

	// Scrollax
   $.Scrollax();

	var carousel = function() {
		$('.carousel-testimony').owlCarousel({
			center: true,
			loop: true,
			items:1,
			margin: 30,
			stagePadding: 0,
			nav: false,
			navText: ['<span class="ion-ios-arrow-back">', '<span class="ion-ios-arrow-forward">'],
			responsive:{
				0:{
					items: 1
				},
				600:{
					items: 3
				},
				1000:{
					items: 3
				}
			}
		});

	};
	carousel();

	$('nav .dropdown').hover(function(){
		var $this = $(this);
		// 	 timer;
		// clearTimeout(timer);
		$this.addClass('show');
		$this.find('> a').attr('aria-expanded', true);
		// $this.find('.dropdown-menu').addClass('animated-fast fadeInUp show');
		$this.find('.dropdown-menu').addClass('show');
	}, function(){
		var $this = $(this);
			// timer;
		// timer = setTimeout(function(){
			$this.removeClass('show');
			$this.find('> a').attr('aria-expanded', false);
			// $this.find('.dropdown-menu').removeClass('animated-fast fadeInUp show');
			$this.find('.dropdown-menu').removeClass('show');
		// }, 100);
	});


	$('#dropdown04').on('show.bs.dropdown', function () {
	  console.log('show');
	});

	// scroll
	var scrollWindow = function() {
		$(window).scroll(function(){
			var $w = $(this),
					st = $w.scrollTop(),
					navbar = $('.ftco_navbar'),
					sd = $('.js-scroll-wrap');

			if (st > 150) {
				if ( !navbar.hasClass('scrolled') ) {
					navbar.addClass('scrolled');	
				}
			} 
			if (st < 150) {
				if ( navbar.hasClass('scrolled') ) {
					navbar.removeClass('scrolled sleep');
				}
			} 
			if ( st > 350 ) {
				if ( !navbar.hasClass('awake') ) {
					navbar.addClass('awake');	
				}
				
				if(sd.length > 0) {
					sd.addClass('sleep');
				}
			}
			if ( st < 350 ) {
				if ( navbar.hasClass('awake') ) {
					navbar.removeClass('awake');
					navbar.addClass('sleep');
				}
				if(sd.length > 0) {
					sd.removeClass('sleep');
				}
			}
		});
	};
	scrollWindow();

	
	var counter = function() {
		
		$('#section-counter').waypoint( function( direction ) {

			if( direction === 'down' && !$(this.element).hasClass('ftco-animated') ) {

				var comma_separator_number_step = $.animateNumber.numberStepFactories.separator(',')
				$('.number').each(function(){
					var $this = $(this),
						num = $this.data('number');
						console.log(num);
					$this.animateNumber(
					  {
					    number: num,
					    numberStep: comma_separator_number_step
					  }, 2500
					);
				});
				
			}

		} , { offset: '95%' } );

	}
	counter();

	var contentWayPoint = function() {
		var i = 0;
		$('.ftco-animate').waypoint( function( direction ) {

			if( direction === 'down' && !$(this.element).hasClass('ftco-animated') ) {
				
				i++;

				$(this.element).addClass('item-animate');
				setTimeout(function(){

					$('body .ftco-animate.item-animate').each(function(k){
						var el = $(this);
						setTimeout( function () {
							var effect = el.data('animate-effect');
							if ( effect === 'fadeIn') {
								el.addClass('fadeIn ftco-animated');
							} else if ( effect === 'fadeInLeft') {
								el.addClass('fadeInLeft ftco-animated');
							} else if ( effect === 'fadeInRight') {
								el.addClass('fadeInRight ftco-animated');
							} else {
								el.addClass('fadeInUp ftco-animated');
							}
							el.removeClass('item-animate');
						},  k * 50, 'easeInOutExpo' );
					});
					
				}, 100);
				
			}

		} , { offset: '95%' } );
	};
	contentWayPoint();


	// navigation
	var OnePageNav = function() {
		$(".smoothscroll[href^='#'], #ftco-nav ul li a[href^='#']").on('click', function(e) {
		 	e.preventDefault();

		 	var hash = this.hash,
		 			navToggler = $('.navbar-toggler');
		 	$('html, body').animate({
		    scrollTop: $(hash).offset().top
		  }, 700, 'easeInOutExpo', function(){
		    window.location.hash = hash;
		  });


		  if ( navToggler.is(':visible') ) {
		  	navToggler.click();
		  }
		});
		$('body').on('activate.bs.scrollspy', function () {
		  console.log('nice');
		})
	};
	OnePageNav();


	// magnific popup
	$('.image-popup').magnificPopup({
    type: 'image',
    closeOnContentClick: true,
    closeBtnInside: true,
    fixedContentPos: true,
    mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
     gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0,1] // Will preload 0 - before current, and 1 after the current image
    },
    image: {
      verticalFit: true
    },
    zoom: {
      enabled: true,
      duration: 300 // don't foget to change the duration also in CSS
    }
  });

  $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
    disableOn: 700,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,

    fixedContentPos: false
  });


  	$('.appointment_date').datepicker({
	  'format': 'm/d/yyyy',
	  'autoclose': true
	});

	$('.appointment_time').timepicker();

	$(".accLog").click(function(){
	  
		$(".registerL").toggle('fast');
		$(".hH").toggle('fast');
		$(".hH2").toggle('fast');
		$(".loggingL").toggle('fast')
	  });


	  $(".eye").on("click", function() {
		  $(".blockear").prop('disabled' , true )
        $(this).siblings().removeClass("activePanel");
        $(this).addClass("activePanel");
		$(".dashboard").siblings().removeClass("showPanel").addClass("hidePanel");
		$(".dashboard").removeClass("hidePanel");
        $(".dashboard").addClass("showPanel");
    });
    $(".comments").on("click", function() {
		$(".blockear").prop('disabled' , true )
        $(this).siblings().removeClass("activePanel");
        $(this).addClass("activePanel");
		$(".comments-c").siblings().removeClass("showPanel").addClass("hidePanel");
		$(".comments-c").removeClass("hidePanel");
        $(".comments-c").addClass("showPanel");
    });

    $(".bell").on("click", function() {
		$(".blockear").prop('disabled' , true )
        $(this).siblings().removeClass("activePanel");
        $(this).addClass("activePanel");
		$(".notification").siblings().removeClass("showPanel").addClass("hidePanel");
		$(".notification").removeClass("hidePanel");
        $(".notification").addClass("showPanel");
    });
    $(".cog").on("click", function() {
		$(".blockear").prop('disabled' , false )
        $(this).siblings().removeClass("activePanel");
        $(this).addClass("activePanel");
		$(".settings").siblings().removeClass("showPanel").addClass("hidePanel");
		$(".settings").removeClass("hidePanel");
        $(".settings").addClass("showPanel");
	});
	
	$("#contactosss").click(function () {
		Swal.fire('Any fool can use a computer')
	})
	
	$(".showPass").on('click', function() {
		if ($(".passHide").attr('type') == "password") {
			$(".passHide").attr('type' , 'text')
			$(".showPass").addClass('showPassActive')
		}
		else if ($(".passHide").attr('type') == 'text') {
			$(".showPass").removeClass('showPassActive')
			$(".passHide").attr('type' , 'password')
		}
	})

	$(".botonChangePass").on('click', function() {
		if ($(".passValid").val().length >= 8) {
			if ($(".passValid").val() == $(".passRepeat").val()) {
				$(".chagePassForm").submit()
			}
			else {
				Swal.fire({
					icon: "error",
					title: "Error",
					text: "¡Las contraseñas no coinciden inténtalo de nuevo!",
					showClass: {
						popup: "animate__animated animate__fadeInDown"
					  },
					  hideClass: {
						popup: "animate__animated animate__fadeOutUp"
					  }
					})
			}
		}
		
		else {
			Swal.fire({
				icon: "error",
				title: "Error",
				text: "¡La contraseña debe tener más de 8 caracteres!",
				showClass: {
					popup: "animate__animated animate__fadeInDown"
				  },
				  hideClass: {
					popup: "animate__animated animate__fadeOutUp"
				  }
				})
		}
	})

	$(".rescuePassC").on('click', function() {
		if ($(".passValid2").val() == $(".passRepeat2").val()) {
			if ($(".passValid2").val().length >= 8) {
				$(".rescuePorsia").submit()
			}
			else{
				Swal.fire({
					icon: "error",
					title: "Error",
					text: "¡La contraseña debe ser mayor a 8 digitos!",
					showClass: {
						popup: "animate__animated animate__fadeInDown"
					  },
					  hideClass: {
						popup: "animate__animated animate__fadeOutUp"
					  }
					})
					.then((result) => {
						location.reload()
					  })
			}
		}
		else {
			Swal.fire({
				icon: "error",
				title: "Error",
				text: "¡Las contraseñas no coinciden inténtalo de nuevo!",
				showClass: {
					popup: "animate__animated animate__fadeInDown"
				  },
				  hideClass: {
					popup: "animate__animated animate__fadeOutUp"
				  }
				})
				.then((result) => {
					location.reload()
				  })
		}
	})
	
	$(".hid").eq($("#cardValidatorWindow").val()).show()
	$(".articuloGift").val($(".hid").eq($("#cardValidatorWindow").val()).children().prev().text())
	$(".totalGift").val("$"+ $(".hid").eq($("#cardValidatorWindow").val()).children().next().text())

	$(".giftPrice").text("$"+$(".hid").eq($("#cardValidatorWindow").val()).children().next().text())
	$(".acc").click(function(){
		console.log("hola")
		$(".register").toggle('fast');
		$(".hH").toggle('fast');
		$(".logging").toggle('fast')
	  });
	  $("#closeGiftWin").on('click', function(){
		window.location.href= "inicio"
	  })
	  $('.modG').click(function () {
		$(".hH").show()
		$(".hH2").hide()
		$(".registerL").show()
		$(".loggingL").hide()
		var este = $(this).val() - 1
		$(".hid").hide()
		$(".giftPrice").text("$ "+$(this).parent().prev().text())
		$(".articuloGift").val($(this).parent().prev().prev().text())
		$(".totalGift").val("$ "+$(this).parent().prev().text())
		$(".cardValidator").val(este)
		$(".cardValidatorF").val(este)
		
		$(".0"+$(this).val()).show()
	  })
	  $("#giftModalForm").modal("show")
	$('.phone').on('input', function() {
		var number = $(this).val().replace(/[^\d]/g, '')
		if (number.length == 9) {
		  number = number.replace(/(\d{1})(\d{4})/, "$1-$2-");
		} else if (number.length == 10) {
		  number = number.replace(/(\d{3})(\d{3})(\d{4})/, "($1) $2-$3");
		}
		$(this).val(number)
	  });

	  $(".forgot").on('click', function () {
		Swal.fire({
			icon: "",
			title: "Recuperar contraseña",
			showConfirmButton: false,
			html:
			`<form  class="rescue p-4" method="post">
				
			<div class="contact-form">
				<div class="form-group">
					<input type="text" class="form-control Mail-login" name="correoRescue" placeholder="Introduce tu correo">
				</div>
				
				<div class="form-group align-items-rigth" style="display: inline-block" >
					<input type="submit" value="Recuperar" class="btn btn-primary py-2 px-4 system-login">
					
				</div>
			</div>
		  </form> `,
			showClass: {
				popup: "animate__animated animate__fadeInDown"
			  },
			  hideClass: {
				popup: "animate__animated animate__fadeOutUp"
			  }
			})
			.then((result) => {
				if (window.history.replaceState) { // verificamos disponibilidad
					window.history.replaceState(null, null, window.location.href);
				}
				location.reload()
			  })
	  })

	  $("#nacimientoS").on("input",function(){
		if($(this).val().length>0){
		$(this).addClass("full");
		}
		else{
		$(this).removeClass("full");
		}
		});

		$( ".flip" ).mouseenter(
			function() {
			  setTimeout(() => {
				  $(".modG").show()
			  }, 500);
			}
		  );

		  $( ".flip" ).mouseleave(
			function() {
				
					$(".modG").hide()
				
			}
		  ); 
		   
	
})(jQuery);

var canvas = document.getElementById('beerCanvas');
var ctx = canvas.getContext('2d');
var particles = [];
var particleCount = 280;

for (var i = 0; i < particleCount; i++) {
  particles.push(new particle());
}

function particle() {
  this.x = Math.random() * canvas.width;
  this.y = canvas.height + Math.random() * 300;
  this.speed = 1 + Math.random();
  this.radius = Math.random() * 3;
  this.opacity = (Math.random() * 100) / 1000;
}

function loop() {
  requestAnimationFrame(loop);
  draw();
}

function draw() {
  ctx.clearRect(0, 0, canvas.width, canvas.height);
  ctx.globalCompositeOperation = 'lighter';
  for (var i = 0; i < particles.length; i++) {
    var p = particles[i];
    ctx.beginPath();
    ctx.fillStyle = 'rgba(255,255,255,' + p.opacity + ')';
    ctx.arc(p.x, p.y, p.radius, 0, Math.PI * 2, false);
    ctx.fill();
    p.y -= p.speed;
    if (p.y <= -10)
      particles[i] = new particle();
  }
}
loop();



