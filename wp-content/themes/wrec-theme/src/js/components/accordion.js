// FAQ
// jQuery(function ($) {
//     $('.accordion .accordion__title').click(function() {
//         $('.accordion .accordion__title').removeClass('active');
//         $('.accordion .accordion__content').slideUp('normal');
//         if($(this).next().is(':hidden') == true) {
//             $(this).addClass('active');
//             $(this).next().slideDown('normal');
//         }
//         return false;
//     });
//     $('.accordion .accordion__content').hide();
//  })


 document.addEventListener("DOMContentLoaded", function() {

	var accordion = document.querySelectorAll('.accordion__handle');
	if (accordion) {
		accordion.forEach(function(item) {
			item.addEventListener('click', function() {
				var expanded = this.getAttribute('aria-expanded'),
				did = this.getAttribute('aria-controls'),
				target = document.getElementById(did);

				if (target) {
					target.classList.toggle('is-open');
				}

				expanded = expanded == 'true' ? 'false' : 'true';

				this.setAttribute("aria-expanded", expanded);
				this.classList.toggle('is-active');
			});
		});
	}

	var showAll = document.getElementById('toggleAll');
	var accordionBtns = document.querySelectorAll('.accordion__handle');
	var accordionItems = document.querySelectorAll('.accordion__body');

	if(showAll) {
		showAll.addEventListener('click', function(e) {
			e.preventDefault();
			for (var i = 0; i < accordionItems.length; i++) {
				accordionItems[i].classList.add('is-open');
			}
			for (var x = 0; x < accordionBtns.length; x++) {
				accordionBtns[i].setAttribute("aria-expanded", "true");
				accordionBtns[i].classList.add('is-active');
			}
		});
	}

	var getAccordion = window.location.hash.substring(1),
	accordionEntry = false;

	if (getAccordion.length > 0) {
		try {
			accordionEntry = document.getElementById(getAccordion);
		} catch(e) { }
	}

	if (accordionEntry) {
		var did = accordionEntry.getAttribute('aria-controls'),
		target = document.getElementById(did);

		if (target) {
			target.classList.toggle('is-open');
		}
	}

});