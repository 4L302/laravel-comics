import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel([
            'resources/scss/app.scss',
            'resources/js/app.js',
        ]),
    ],
    /* Aggiungere un alias per la certella resources */
    resolve:{
        alias: {
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
            'resources': '/resources/'
        }
    }
});
