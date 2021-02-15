const mix = require('laravel-mix')

mix.autoload({
  jquery: ['$', 'window.jQuery', 'jQuery']
})

mix
  .sass('./src/scss/site.scss', './dist/css/site.css')
  .styles([
    './node_modules/bootstrap/dist/css/bootstrap-reboot.min.css',
    './node_modules/bootstrap/dist/css/bootstrap-grid.min.css'
  ], './dist/css/vendor.css')
  .js('./src/js/site.js', './dist/js/site.js')
  // .js('./src/js/contact.jsx', '/dist/js')
  .sourceMaps(false)
  // .react()
  .extract([
    'jquery',
    // 'react'
  ])
  .copyDirectory('./src/images', './dist/images')
  .options({
    processCssUrls: false
  })
