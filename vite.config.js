import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/js/app.js'], // Only one entry point now
            refresh: true,
        }),
    ],
    server: {
        watch: {
            usePolling: false,
        },
    },
});