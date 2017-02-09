			
			$(document).ready(function(){

				$('body').append('<div id="blackout"></div>');
				var boxWidth = 600;

				function cenBox(){
					var winWidth = $(window).width();
					var winHeight = $(document).height();
					var scrollPos = $(window).scrollTop();

					var disWidth = (winWidth - boxWidth) / 2;
					var disHeight = scrollPos + 200;

					$('.popup').css({'width' : boxWidth+'px', 'left' : disWidth+'px', 'top' : disHeight+'px'});
					$('#blackout').css({'width' : winWidth+ 'px', 'height' : winHeight+'px'});

					return false;
				}

				$(window).resize(cenBox);
				$(window).scroll(cenBox);
				cenBox();

				$('[class*=link]').click(function(e) {
					e.preventDefault();
					e.stopPropagation();

					var name = $(this).attr('class');
					var id = name[name.length - 1];
					var scrollPos = $(window).scrollTop();

					$('#box-'+id).show();
					$('#blackout').show();
					$("html,body").css("overflow", "hidden");
					$('html').scrollTop(scrollPos);
				});

				$('[class*=popup]').click(function(e){
					e.stopPropagation();
				});

				$('html').click(function(){
					var scrollPos = $(window).scrollTop();

					$('[id^=box-]').hide();
					$('#blackout').hide();
					$("html,body").css("overflow", "auto");
					$('html').scrollTop(scrollPos);
				});

				$('.close').click(function(){
					var scrollPos = $(window).scrollTop();

					$('[id^=box-]').hide();
					$('#blackout').hide();
					$("html,body").css("overflow", "auto");
					$('html').scrollTop(scrollPos);
				});

				$('.next').click(function(){
					var scrollPos = $(window).scrollTop();

					$('[id^=box-]').hide();
					$('#blackout').hide();
					$("html,body").css("overflow", "auto");
					$('html').scrollTop(scrollPos);
				});

			});	