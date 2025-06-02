import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', 
                'resources/css/auth.css',
                'resources/css/batch_view.css',
                'resources/css/nav_logo.css',
                'resources/css/landing.css',
                'resources/css/reg.css',
                'resources/css/student_d.css',
                'resources/css/app.css',
                'resources/css/niit/index.css',
                'resources/css/niit/diploma.css',
            
            
            
                // js files starts here
                'resources/js/liveSearch.js',
                'resources/js/validate.js',
                'resources/js/result.js',
                'resources/js/bootstrap.js',
            
            ],
            refresh: true,
        }),
    ],
});
