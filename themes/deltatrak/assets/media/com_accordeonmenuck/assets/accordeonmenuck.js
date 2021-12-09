/**
 * @copyright	Copyright (C) 2012 Cedric KEIFLIN alias ced1870
 * https://www.joomlack.fr
 * Module Accordeon CK
 * @license		GNU/GPL
 * */

(function($) {

	//define the defaults for the plugin and how to call it
	var Accordeonmenuck = function (container, options) {
		//set default options
		var defaults = {
			eventtype: 'click',
			fadetransition: false, // pas encore implemente
			transition: 'linear',
			duree: 500,
			imageplus: 'modules/mod_accordeonmenuck/assets/plus.png',
			imageminus: 'modules/mod_accordeonmenuck/assets/minus.png',
			// menuID : 'accordeonck',
			defaultopenedid: '0',
			showactive: true,
			activeeffect: true,
			showcounter: false,
			closeothers: true
		};

		if (!(this instanceof Accordeonmenuck)) return new Accordeonmenuck(container, options);
		var accordeonmenucks = window.accordeonmenucks || [];
		if (accordeonmenucks.indexOf(container) > -1) return;
		accordeonmenucks.push(container);
		window.accordeonmenucks = accordeonmenucks;

		//call in the default otions
		var options = $.extend(defaults, options);
		var menu = $(container);

		//act upon the element that is passed into the design
		return menu.each(function(options) {
			if (! menu.attr('accordeonck_done')) {
				menu.attr('accordeonck_done', '1');
				accordeonmenuInit();
			}
		});

		function accordeonmenuInit() {
			$(".parent > ul", menu).hide();
			if (options.showactive && !options.activeeffect) {
				$(".parent.active > ul", menu).show().parent().addClass("open");
				$(".parent.active > img.toggler", menu).attr('src', options.imageminus);
			} else if (options.showactive && options.activeeffect) {
				togglemenu($(".parent.active > .toggler", menu));
			}
			if (options.defaultopenedid && !$(".active.parent", menu).length) {
				$(".item-"+options.defaultopenedid+" > ul", menu).show().parent().addClass("open");
				$(".item-"+options.defaultopenedid+" > img.toggler", menu).attr('src', options.imageminus);
			}
			if (options.eventtype == 'click') {
				$("li.parent > .toggler", menu).click(function() {
					togglemenu($(this));
				});
			} else {
				$("li.parent > .toggler", menu).mouseenter(function() {
					togglemenu($(this));
				});
			}
			if (options.showcounter == true) {
				if ($('.accordeonck-counter', menu).length) return;
				$('li.accordeonck.parent', menu).each(function() {
					// if ($('li.accordeonck', $(this)).length) {
						var counter = '<span class="badge accordeonck-counter">' + ($('a.accordeonck', $(this)).length - 1) + '</span>';
						$(this).find('> .accordeonck_outer > a.accordeonck').append(counter);
					// }
				});
			}
		}

		function togglemenu(link) {
			ck_content = link.parent();
			if (!link.parent().hasClass("open")) {
				if (options.closeothers != false) {
					$(".parent > ul", ck_content.parent()).slideUp({
						duration: options.duree,
						easing: options.transition,
						complete: function() {
							$(".parent", ck_content.parent()).removeClass("open");
							$(".parent > img.toggler", ck_content.parent()).attr('src', options.imageplus);
							if (link.get(0).tagName.toLowerCase() == 'img')
								link.attr('src', options.imageplus);
						}
					});
				}
				link.nextAll("ul").slideDown({
					duration: options.duree,
					easing: options.transition,
					complete: function() {
						link.parent().addClass("open");
						if (link.get(0).tagName.toLowerCase() == 'img')
							link.attr('src', options.imageminus);
					}
				});
			} else {
				link.nextAll("ul").slideUp({
					duration: options.duree,
					easing: options.transition,
					complete: function() {
						link.parent().removeClass("open");
						if (link.get(0).tagName.toLowerCase() == 'img')
							link.attr('src', options.imageplus);
					}
				});
			}
		}

	};
	window.Accordeonmenuck = Accordeonmenuck;
})(jQuery);