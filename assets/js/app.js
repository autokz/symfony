/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you require will output into a single css file (app.css in this case)
require('../css/app.css');

// Need jQuery? Install it with "yarn add jquery", then uncomment to require it.

require('../js/dist/mk/core/jquery.min');
global.Popper=require('../js/dist/mk/core/popper.min');

require('../js/dist/mk/core/bootstrap-material-design.min');
//Plugins add
require('../js/dist/mk/plugins/bootstrap-tagsinput');
require('../js/dist/mk/plugins/jquery.flexisel');
require('../js/dist/mk/plugins/bootstrap-selectpicker');
require('../js/dist/mk/plugins/nouislider.min');
require('../js/dist/mk/plugins/jasny-bootstrap.min');
require('../js/dist/mk/plugins/jquery.sharrre');
//use npm module moment for bootstrap-datetimepicker
require('moment');
require('../js/dist/mk/plugins/bootstrap-datetimepicker');
require('../js/dist/mk/material-kit');
require('../js/dist/extends');

//console.log('Hello Webpack Encore! Edit me in assets/js/app.js');
