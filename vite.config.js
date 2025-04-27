import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            $: 'jquery', // Alias for jQuery
            jQuery: 'jquery',
        },
    },
    build: {
        rollupOptions: {
            external: ['jquery', 'metismenu'], // Exclude libraries from bundling
            output: {
                globals: {
                    jquery: '$', // Use $ as the global alias for jQuery
                    metismenu: 'MetisMenu',
                },
            },
        },
    },
});
