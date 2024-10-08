import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/about-1.css',
                'resources/css/start.css',
                'resources/css/side-menu.css',
                'resources/js/app.js',
                'resources/js/start.js',
                'resources/js/battle.js',
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
                start: 'resources/css/start.css',
                battle: 'resources/js/battle.js',
                side: 'resources/css/side-menu.css',
                startMenu: 'resources/js/start.js',
                sideMenu: 'resources/js/side-menu.js',
                about: 'resources/js/about.js',
                work: 'resources/js/work.js'
            }
        }
    }
});
