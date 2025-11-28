jQuery(document).ready(function($) {
	/***
	 * Mobile Menu
	***/
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

	/***
	 * Scorecard filters
	***/
	const $filterSelect      = $('[data-behavior="sortby"');
	const $scorecards        = $('.scorecard-list');
	const $scorecardChildren = $scorecards.children();

	if ($filterSelect.length && $scorecardChildren.length) {
		console.log($scorecards.children());
		$filterSelect.on('change', function() {
			const filterVal = $(this).val();
			let $newOrder;
			switch (filterVal) {
				case 'stance-neg':
					$newOrder = $scorecardChildren.sort(function(a, b) {
						const stanceMap = ['opposes', 'supports', 'none'];
						const stanceA = stanceMap.indexOf($(a).data('stance'));
						const stanceB = stanceMap.indexOf($(b).data('stance'));
						return (stanceA < stanceB) ? -1 : (stanceA > stanceB) ? 1 : 0;
					});
					break;
				case 'stance-pos':
					$newOrder = $scorecardChildren.sort(function(a, b) {
						const stanceMap = ['supports', 'opposes', 'none'];
						const stanceA = stanceMap.indexOf($(a).data('stance'));
						const stanceB = stanceMap.indexOf($(b).data('stance'));
						return (stanceA < stanceB) ? -1 : (stanceA > stanceB) ? 1 : 0;
					});
					break;
				case 'name-asc':
					$newOrder = $scorecardChildren.sort(function(a, b) {
						var nameA = $(a).data('name').trim().split(' ');
						var nameB = $(b).data('name').trim().split(' ');
						var lastNameA = nameA[nameA.length - 1];
						var lastNameB = nameB[nameB.length - 1];
						return (lastNameA < lastNameB) ? -1 : (lastNameA > lastNameB) ? 1 : 0;
					});
					break;
				case 'name-desc':
					$newOrder = $scorecardChildren.sort(function(a, b) {
						var nameA = $(a).data('name').trim().split(' ');
						var nameB = $(b).data('name').trim().split(' ');
						var lastNameA = nameA[nameA.length - 1];
						var lastNameB = nameB[nameB.length - 1];
						return (lastNameA > lastNameB) ? -1 : (lastNameA < lastNameB) ? 1 : 0;
					});
					break;
			}
			$scorecards.html($newOrder);

		});
	}
});
