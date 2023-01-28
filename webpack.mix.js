const mix = require('laravel-mix');
let WebpackRTLPlugin = require('webpack-rtl-plugin');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
  .sass('resources/sass/app.scss', 'public/css')
  .sourceMaps(true, 'source-map')
  .webpackConfig({
    plugins: [
      new WebpackRTLPlugin()
    ]
  })
  .browserSync({
    proxy: '127.0.0.1:8000',
    port: 3100,
    ghostMode: false,
    notify: false
  })



  /*
  |--------------------------------------------------------------------------
  | Copy 3rd party plugin files to public folder
  |--------------------------------------------------------------------------
  */

  // Feather icons
  .copyDirectory('node_modules/feather-icons/dist', 'public/assets/plugins/feather-icons')

  // Flag icons
  .copyDirectory('node_modules/flag-icon-css', 'public/assets/plugins/flag-icon-css')
  
  // Mdi icons
  .copyDirectory('node_modules/@mdi/font', 'public/assets/plugins/@mdi')

  // Perfect scrollbar
  .copyDirectory(['node_modules/perfect-scrollbar/dist', 'node_modules/perfect-scrollbar/css'] , 
    'public/assets/plugins/perfect-scrollbar')

  // PrimsJs
  .copyDirectory(['node_modules/prismjs/prism.js', 'node_modules/prismjs/plugins/normalize-whitespace/prism-normalize-whitespace.min.js', 'node_modules/prismjs/themes/prism.css'] , 
    'public/assets/plugins/prismjs')

  // Clipboard
  .copyDirectory('node_modules/clipboard/dist/clipboard.min.js', 'public/assets/plugins/clipboard/clipboard.min.js')

  // Cropper
  .copyDirectory(['node_modules/cropperjs/dist/cropper.min.js', 'node_modules/cropperjs/dist/cropper.min.css'] , 
    'public/assets/plugins/cropperjs')

  // Owl carousel
  .copyDirectory('node_modules/owl.carousel/dist', 'public/assets/plugins/owl-carousel')

  // Jquery mousewheel
  .copyDirectory('node_modules/jquery-mousewheel/jquery.mousewheel.js', 'public/assets/plugins/jquery-mousewheel/jquery.mousewheel.js')

  // Animate.css
  .copyDirectory('node_modules/animate.css/animate.min.css', 'public/assets/plugins/animate-css/animate.min.css')

  // SortableJs
  .copyDirectory('node_modules/sortablejs/Sortable.min.js', 'public/assets/plugins/sortablejs/Sortable.min.js')

  // SweetAlert2
  .copyDirectory(['node_modules/sweetalert2/dist/sweetalert2.min.js', 'node_modules/sweetalert2/dist/sweetalert2.min.css'] , 
    'public/assets/plugins/sweetalert2')

  // ChartJs
  .copyDirectory('node_modules/chart.js/dist/chart.min.js', 'public/assets/plugins/chartjs/chart.min.js')

  // Jquery flot
  .copyDirectory('node_modules/jquery.flot', 'public/assets/plugins/jquery.flot')
  
  // Apexcharts
  .copyDirectory('node_modules/apexcharts/dist/apexcharts.min.js', 'public/assets/plugins/apexcharts/apexcharts.min.js')

  // Morris.js
  .copyDirectory(['node_modules/morris.js/morris.min.js', 'node_modules/morris.js/morris.css'] , 
    'public/assets/plugins/morrisjs')

  // Rahael (required for Morris.js)
  .copyDirectory('node_modules/raphael/raphael.min.js', 'public/assets/plugins/raphael/raphael.min.js')

  // Peity
  .copyDirectory('node_modules/peity/jquery.peity.min.js', 'public/assets/plugins/peity/jquery.peity.min.js')

  // Jquery sparkline
  .copyDirectory('node_modules/jquery-sparkline/jquery.sparkline.min.js', 'public/assets/plugins/jquery-sparkline/jquery.sparkline.min.js')

  // datatables
  .copyDirectory('node_modules/datatables.net/js/jquery.dataTables.js', 'public/assets/plugins/datatables-net/jquery.dataTables.js')

  // Datatables.net-bs5
  .copyDirectory(['node_modules/datatables.net-bs5/js/dataTables.bootstrap5.js', 'node_modules/datatables.net-bs5/css/dataTables.bootstrap5.css'], 'public/assets/plugins/datatables-net-bs5')

  // Bootstrap datepicker
  .copyDirectory('node_modules/bootstrap-datepicker/dist', 'public/assets/plugins/bootstrap-datepicker')

  // Select2
  // .copyDirectory('node_modules/select2/dist', 'public/assets/plugins/select2')
  .copyDirectory(['node_modules/select2/dist/js/select2.min.js', 'node_modules/select2/dist/css/select2.min.css'] , 
    'public/assets/plugins/select2')

  // Simplemde
  .copyDirectory(['node_modules/simplemde/dist/simplemde.min.js', 'node_modules/simplemde/dist/simplemde.min.css'] , 
    'public/assets/plugins/simplemde')

  // Jquery tags input
  .copyDirectory('node_modules/jquery-tags-input/dist', 'public/assets/plugins/jquery-tags-input')

  // Dropzone
  .copyDirectory(['node_modules/dropzone/dist/min/dropzone.min.js', 'node_modules/dropzone/dist/min/dropzone.min.css'] , 
    'public/assets/plugins/dropzone')

  // Dropify
  .copyDirectory('node_modules/dropify/dist', 'public/assets/plugins/dropify')

  // Bootstrap color picker
  .copyDirectory(['node_modules/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js', 'node_modules/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css'] , 
    'public/assets/plugins/bootstrap-colorpicker')

  // Bootstrap date picker
  .copyDirectory(['node_modules/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js', 'node_modules/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css'] , 
    'public/assets/plugins/bootstrap-datepicker')

  // Tempusdominus bootstrap-4 datetime picker
  .copyDirectory(['node_modules/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.js', 'node_modules/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css'] , 
    'public/assets/plugins/tempusdominus-bootstrap-4')

  // Jquery validation
  .copyDirectory('node_modules/jquery-validation/dist/jquery.validate.min.js', 'public/assets/plugins/jquery-validation/jquery.validate.min.js')

  // Bootstrap maxlength
  .copyDirectory('node_modules/bootstrap-maxlength/dist/bootstrap-maxlength.min.js', 'public/assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js')

  // Inputmask
  .copyDirectory('node_modules/inputmask/dist/jquery.inputmask.min.js', 'public/assets/plugins/inputmask/jquery.inputmask.bundle.min.js')

  // Typeahead.js
  .copyDirectory('node_modules/typeahead.js/dist/typeahead.bundle.min.js', 'public/assets/plugins/typeahead-js/typeahead.bundle.min.js')

  // Tinymce
  .copyDirectory('node_modules/tinymce', 'public/assets/plugins/tinymce')

  // Ace editor
  .copyDirectory('node_modules/ace-builds/src-min', 'public/assets/plugins/ace-builds')

  // Jquery steps
  .copyDirectory(['node_modules/jquery-steps/build/jquery.steps.min.js', 'node_modules/jquery-steps/demo/css/jquery.steps.css'] , 
    'public/assets/plugins/jquery-steps')

  // Font awesome
  .copyDirectory('node_modules/font-awesome', 'public/assets/plugins/font-awesome')

  // Fullcalendar
  .copyDirectory(['node_modules/fullcalendar/main.min.js', 'node_modules/fullcalendar/main.min.css'] , 
    'public/assets/plugins/fullcalendar')

  // Moment
  .copyDirectory('node_modules/moment/min/moment.min.js', 'public/assets/plugins/moment/moment.min.js')
