// GALLERY 1
jQuery('#gallery1 a').on('click', function (e) {
    "use strict";
    e.preventDefault();
    jQuery(this).lightGallery({
        // Settings
        dynamic: true,
        zoom: true,
        mode: 'lg-zoom-out-in',
        fullScreen: true,
        autoplay: false,
        thumbnail: true,
        download: true,
        counter: true,
        hash: false,
        pager: false,
        // Images
        dynamicEl: [{
            'src': 'images/photos/gallery-big1.jpg',
            'thumb': 'images/photos/gallery-thumb1.jpg',
            'subHtml': 'Lorem ipsum dolor'
        }, {
            'src': 'images/photos/gallery-big2.jpg',
            'thumb': 'images/photos/gallery-thumb2.jpg',
            'subHtml': "Ullamco ubi mandaremus"
        }, {
            'src': 'images/photos/gallery-big3.jpg',
            'thumb': 'images/photos/gallery-thumb3.jpg',
            'subHtml': "Quae expetendis"
        }, {
            'src': 'images/photos/gallery-big4.jpg',
            'thumb': 'images/photos/gallery-thumb4.jpg',
            'subHtml': "Non nulla"
        }, {
            'src': 'images/photos/gallery-big5.jpg',
            'thumb': 'images/photos/gallery-thumb5.jpg',
            'subHtml': "Voluptate illum dolore"
        }, {
            'src': 'images/photos/gallery-big6.jpg',
            'thumb': 'images/photos/gallery-thumb6.jpg',
            'subHtml': "Tempor varias possumus"
        }]
    });
});

// GALLERY 2
jQuery('#gallery2').on('click', function (e) {
    "use strict";
    e.preventDefault();
    jQuery(this).lightGallery({
        youtubePlayerParams: {
            modestbranding: 1,
            showinfo: 0,
            rel: 0,
            controls: 1
        },
        vimeoPlayerParams: {
            byline : 0,
            portrait : 1,
            color : 'f5245f'     
        },
        // Settings
        dynamic: true,
        zoom: false,
        fullScreen: false,
        autoplayControls: false,
        thumbnail: false,
        download: true,
        counter: true,
        // Videos
        dynamicEl: [
            { // You Tube videos work only on a server.
                "poster": 'images/photos/gallery-video1.jpg',
                "src": "http://www.youtube.com/embed/_gGYFFW3Ga0",
                "subHtml": "You Tube"
            },
            {
                "poster": 'images/photos/gallery-video2.jpg',
                "src": "http://vimeo.com/17203320",
                "subHtml": "Vimeo"
            },
            { // You Tube videos work only on a server.
                "poster": 'images/photos/gallery-video3.jpg',
                "src": "http://www.youtube.com/embed/feOScd2HdiU",
                "subHtml": "You Tube"
            }
        ]
    });
});

// GALLERY 3
jQuery('#gallery3 a').on('click', function (e) {
    "use strict";
    e.preventDefault();
    jQuery(this).lightGallery({
        // Settings
        dynamic: true,
        zoom: true,
        mode: 'lg-zoom-out-in',
        fullScreen: true,
        autoplay: true,
        pause: 5000,
        thumbnail: true,
        download: true,
        counter: true,
        hash: false,
        pager: false,
        // Images
        dynamicEl: [{
            'src': 'images/photos/gallery-big2.jpg',
            'thumb': 'images/photos/gallery-thumb2.jpg',
            'subHtml': 'Lorem ipsum dolor'
        }, {
            'src': 'images/photos/gallery-big1.jpg',
            'thumb': 'images/photos/gallery-thumb1.jpg',
            'subHtml': "Ullamco ubi mandaremus"
        }, {
            'src': 'images/photos/gallery-big5.jpg',
            'thumb': 'images/photos/gallery-thumb5.jpg',
            'subHtml': "Quae expetendis"
        }, {
            'src': 'images/photos/gallery-big4.jpg',
            'thumb': 'images/photos/gallery-thumb4.jpg',
            'subHtml': "Non nulla"
        }, {
            'src': 'images/photos/gallery-big3.jpg',
            'thumb': 'images/photos/gallery-thumb3.jpg',
            'subHtml': "Voluptate illum dolore"
        }]
    });
});

// GALLERY 4
jQuery('#gallery4 a').on('click', function (e) {
    "use strict";
    e.preventDefault();
    jQuery(this).lightGallery({
        // Settings
        dynamic: true,
        zoom: true,
        mode: 'lg-zoom-out-in',
        fullScreen: true,
        autoplay: false,
        thumbnail: false,
        download: true,
        counter: true,
        hash: false,
        pager: false,
        // Images
        dynamicEl: [{
            'src': 'images/photos/gallery-big2.jpg',
            'subHtml': 'Lorem ipsum dolor'
        }, {
            'src': 'images/photos/gallery-big1.jpg',
            'subHtml': "Ullamco ubi mandaremus"
        }, {
            'src': 'images/photos/gallery-big5.jpg',
            'subHtml': "Quae expetendis"
        }, {
            'src': 'images/photos/gallery-big4.jpg',
            'subHtml': "Non nulla"
        }, {
            'src': 'images/photos/gallery-big3.jpg',
            'subHtml': "Voluptate illum dolore"
        }]
    });
});

// GALLERY 5
jQuery('#gallery5 a').on('click', function (e) {
    "use strict";
    e.preventDefault();
    jQuery(this).lightGallery({
        // Settings
        dynamic: true,
        zoom: false,
        mode: 'lg-zoom-out-in',
        fullScreen: false,
        autoplay: false,
        autoplayControls: false,
        thumbnail: false,
        download: false,
        counter: true,
        hash: false,
        pager: false,
        // Images
        dynamicEl: [{
            'src': 'images/photos/gallery-big2.jpg'
        }, {
            'src': 'images/photos/gallery-big1.jpg'
        }, {
            'src': 'images/photos/gallery-big5.jpg'
        }, {
            'src': 'images/photos/gallery-big4.jpg'
        }, {
            'src': 'images/photos/gallery-big3.jpg'
        }]
    });
});