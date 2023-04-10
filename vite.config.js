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
            expose: {
                TomSelect: 'TomSelect',
              },

        }),
    ],
    build: {
        chunkSizeWarningLimit: 1500, // adjust to your desired limit in bytes
        rollupOptions: {
          output: {
            manualChunks: {
              vendor: ['lodash'], // add any vendor libraries you want to manually chunk
            },
          },
        },
      },


});
