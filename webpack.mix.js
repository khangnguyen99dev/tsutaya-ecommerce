const path = require('path');
const webpack = require('webpack');
const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');


mix.js('resources/js/app.js', 'public/js')
   .sass('resources/css/main.scss', 'public/css')
   .css('resources/css/app.css', 'public/css')
   .copy('resources/images', 'public/images')
   .version()
   .options({
      postCss: [tailwindcss('./tailwind.config.js')],
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