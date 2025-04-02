import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/client/app.css', 
                'resources/css/client/main.scss', 
                'resources/js/client/app.js',

                'resources/css/admin/app.css', 
                'resources/css/admin/main.scss', 
                'resources/js/admin/app.js'
            ],
            refresh: true,
        }),
        tailwindcss()
    ],
});
