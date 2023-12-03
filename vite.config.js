import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/bootstrap.scss',
                'resources/css/app.css',
                'resources/css/components.css',
                'resources/css/auth.css',
                'resources/js/app.js'
            ],
            refresh: [
                'resources/routes/**',
                'routes/**',
                'resources/views/**',
            ],
        }),
    ],
});
