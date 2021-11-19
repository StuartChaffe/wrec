(function () {

    var containerEl = document.querySelector('.filter');
    var inputEl = document.querySelector('#filter-input');
    var initialFilter = 'all';
    var hash = window.location.hash.replace(/^#/g, '');

    if (!containerEl) {
        return false;
    }

    if (hash) {
        initialFilter = '.' + hash;
    }

    var mixer = mixitup(containerEl, {
        animation: {
            duration: 300
        },
        multifilter: {
            enable: true
        },
        pagination: {
            limit: 99
        },
        load: {
            filter: initialFilter
        }
    });

    // Search input
    inputEl.addEventListener('keydown', (event) => {

        setTimeout(function() {
        
            var inputText = inputEl.value.toLowerCase();
            var collection = Array.from(containerEl.querySelectorAll('.mix'));

            if (inputText && inputText.length) {
                // console.log("You have pressed key: ", inputText);

                var filtered = collection.filter(function(target) {
                    return target.getAttribute('data-title').toLowerCase().match(inputText);
                });

                mixer.filter(filtered);

            } else {
                mixer.filter(collection);
            }

        }, 250);
        
    });

}());

// Show filter
jQuery(function ($) {
    $(".btn--filter").click(function(){
        $(".filter__controls").slideToggle(100);
    });
})