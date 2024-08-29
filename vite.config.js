import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/about-1.css',
                'resources/js/app.js',
                'resources/js/about.js',
                'resources/js/work.js',
                'resources/js/side-menu.js'
            ],
            refresh: true,
        }),
    ],
    server: {
        hmr: {
            host: 'localhost'
        }
    },
    build: {
        manifest: 'manifest.json',
        rollupOptions: {
            input: {
                app: 'resources/js/app.js',
                appStyles: 'resources/css/app.css',
                about1: 'resources/css/about-1.css',
                side: 'resources/css/side-menu.css',
                sideMenu: 'resources/js/side-menu.js',
                about: 'resources/js/about.js',
                work: 'resources/js/work.js'
            }
        }
    }
});
