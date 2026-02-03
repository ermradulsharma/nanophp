import { defineConfig } from 'vite';
import react from '@vitejs/plugin-react';
import path from 'path';

export default defineConfig({
    plugins: [
        react()
    ],
    build: {
        outDir: 'public/build',
        manifest: true,
        rollupOptions: {
            input: [
                'resources/css/app.css',
                'resources/js/app.jsx'
            ],
        },
    },
    server: {
        strictPort: true,
        port: 5173,
    },
});
