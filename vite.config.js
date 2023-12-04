import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/bootstrap.scss',
                'resources/css/style.css',
                'resources/css/owl.carousel.min.css',
                'resources/css/owl.theme.default.css',
                'resources/css/client-dashboard.css',
                'resources/css/expert-custom.css',
                'resources/css/experthire.css',
                'resources/css/left-sidebar.css',
                'resources/default/css/aboutUs.css',
                'resources/default/css/card.css',
                'resources/default/css/consultantreg.css',
                'resources/default/css/custom.css',
                'resources/default/css/expert-dashboard.css',
                'resources/default/css/expert-header.css',
                'resources/default/css/expert-profile.css',
                'resources/default/css/header.css',
                'resources/default/css/home.css',
                'resources/default/css/project-listing.css',
                'resources/default/css/services-listing.css',
                'resources/default/css/single-profile.css',
                'resources/default/css/status.css',
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
