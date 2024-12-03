import 'bootstrap';
import imagesLoaded from 'imagesloaded';


$(document).ready(function() {
    var grid = document.querySelector('.grid');
    var msnry = new Masonry(grid, {
        itemSelector: '.grid-item',
        horizontalOrder: true,
    });

    // Ensure layout is correctly reflowed after images load
    imagesLoaded(grid, function() {

        msnry.layout();
    });
});
