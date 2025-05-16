jQuery(document).ready(function($) {
	$('body').attr('data-has-js', true);
	$mobileMenuToggle = $('[data-trigger="mobile-nav"]');
	$mobileMenu = $('.menu-main-menu-container');

	$mobileMenuToggle.on('click', function(e) {
		e.preventDefault();
		if ($(this).attr('aria-expanded') === 'false') {
			$(this).addClass('active');
			$(this).attr('aria-expanded', 'true');
			$mobileMenu.addClass('visible');
		} else {
			$(this).removeClass('active');
			$(this).attr('aria-expanded', 'false');
			$mobileMenu.removeClass('visible');
		}
	});
});
