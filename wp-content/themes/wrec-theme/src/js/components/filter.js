var containerEl = document.querySelector('.filter');

var mixer = mixitup(containerEl, {
    animation: {
        duration: 300
    },
    multifilter: {
        enable: true
    },
    pagination: {
        limit: 6
    }
});