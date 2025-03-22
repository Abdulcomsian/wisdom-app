import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/assets/sass/app.scss', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    server: {
        watch: {
            usePolling: false, // Reduce CPU usage
        },
    },
});
