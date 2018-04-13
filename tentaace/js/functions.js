;(function($) {
	var init = function() {

		function pageTop() {
			var $btn = $('#pageTopBtn');
			$btn.hide();

			$(window).on('load scroll', function() {
				var scrl_top = $(this).scrollTop();
				// ページトップを表示させるスクロール量
				var offset = 500;

				if (scrl_top > offset) {
					$btn.fadeIn();
				} else {
					$btn.fadeOut();
				}
			});
			$('a[href^=#]').on('click', function() {
				var speed = 400;
				var href = $(this).attr('href');
				var target = $(href === '#' || href === '' ? 'html' : href);
				var position = target.offset().top;

				$('body,html').animate({scrollTop: position}, speed);
				return false;
			});
		}
		pageTop();

		$('.js-button').on({
			'mousedown': function() {
				$(this).addClass('is-pushed');
				$(this).parent().removeClass('is-hover');
			},
			'mouseup mouseleave': function() {
				$(this).removeClass('is-pushed');
			},
			'mouseenter': function() {
				$(this).parent().addClass('is-hover');
			},
			'mouseleave': function() {
				$(this).parent().removeClass('is-hover');
			}
		});
	};

	$(init);
})(jQuery);
