import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/bootstrap.scss',
                'resources/css/style.css',
                'resources/css/font-awesome_6.4.2_css_all.min.css',
                'resources/css/owl.carousel.min.css',
                'resources/css/owl.theme.default.css',
                'resources/css/client-dashboard.css',
                'resources/css/filepond.css',
                'resources/css/choices.css',
                'resources/css/app.css',
                'resources/css/components.css',
                'resources/css/auth.css',
                'resources/js/app.js',
                'resources/js/owl.carousel.min.js',
                'resources/js/filepond.js',
                'resources/js/choices.min.js',
            ],
            refresh: [
                'resources/routes/**',
                'routes/**',
                'resources/views/**',
            ],
        }),
    ],
});
