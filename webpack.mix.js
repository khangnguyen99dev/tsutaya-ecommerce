const path = require('path');
const webpack = require('webpack');
const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/css/app.scss', 'public/css')
   .copy('resources/images', 'public/images')
   .version()
   .options({
      processCssUrls: false
   })
   .autoload({
      jquery: ['$', 'window.jQuery', 'jQuery']
   })
   .webpackConfig({
      plugins: [
         new webpack.ProvidePlugin({
            $: 'jquery',
            jQuery: 'jquery',
            'window.jQuery': 'jquery'
         })
      ],
      resolve: {
         modules: ['node_modules'],
         alias: {
            'jquery': __dirname + '/node_modules/jquery/dist/jquery.js'
         }
      },
      externals: {
         jquery: 'jQuery'
      }
   });