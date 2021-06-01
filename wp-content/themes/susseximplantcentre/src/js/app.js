try {
    window.jQuery = window.$ = require('jquery');
    require('./custom');
    require('./sliders');
    require('lazysizes');
    require('slick-carousel');
    require('lazysizes/plugins/unveilhooks/ls.unveilhooks');
}
catch (e) {
    console.log(' JS error =)')
}
