var containerEl = document.querySelector('.filter');
var inputEl = document.querySelector('#filter-input');

var mixer = mixitup(containerEl, {
    animation: {
        duration: 300
    },
    multifilter: {
        enable: true
    },
    pagination: {
        limit: 3
    }
});

// Search input
inputEl.addEventListener('keypress', (event) => {

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
