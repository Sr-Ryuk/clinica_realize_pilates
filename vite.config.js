import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/app.js',      // JS global
                'resources/css/app.css',    // CSS global (login, welcome, etc)
                'resources/css/admin.css',  // CSS do painel administrativo
            ],
            refresh: true,
        }),
    ],
});
