import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', 
                'resources/css/landing.css',
                'resources/css/nav_logo.css',
                'resources/css/reg.css',
                'resources/css/student_d.css', 
            
                'resources/js/app.js',
                'resources/js/result.js',
                'resources/js/validate.js'
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
