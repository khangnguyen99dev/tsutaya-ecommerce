import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';
import { fileURLToPath } from 'url';
import { dirname } from 'path';

const __filename = fileURLToPath(import.meta.url);
const __dirname = dirname(__filename);

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.scss',
                'resources/js/app.js'
            ],
            refresh: true,
        }),
    ],
    css: {
        preprocessorOptions: {
            scss: {
                additionalData: `@use 'sass:math';`,
            },
        },
    },
    resolve: {
        alias: {
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
            '~select2': path.resolve(__dirname, 'node_modules/select2'),
            '~slick-carousel': path.resolve(__dirname, 'node_modules/slick-carousel'),
            '~jquery-ui': path.resolve(__dirname, 'node_modules/jquery-ui'),
            '~wowjs': path.resolve(__dirname, 'node_modules/wowjs'),
            '~aos': path.resolve(__dirname, 'node_modules/aos'),
            '~jquery.marquee': path.resolve(__dirname, 'node_modules/jquery.marquee'),
            '~vanilla-tilt': path.resolve(__dirname, 'node_modules/vanilla-tilt'),
            '~': '/node_modules/'
        }
    },
    optimizeDeps: {
        exclude: ['jsdom']
    }
});
