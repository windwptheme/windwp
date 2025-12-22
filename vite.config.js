import { defineConfig } from 'vite';
import { resolve } from 'path';

/**
 * Vite configuration for WindWP
 * 
 * Optimized for WordPress Full Site Editing (FSE).
 * Compiles Tailwind CSS into the root style.css for WordPress to recognize.
 */
export default defineConfig(({ mode }) => ({
    build: {
        outDir: '.', // Build in the theme root
        emptyOutDir: false,
        manifest: true, // Enable manifest generation
        rollupOptions: {
            input: {
                main: resolve(__dirname, 'src/main.js'),
                editor: resolve(__dirname, 'src/editor.js'),
                'editor-style': resolve(__dirname, 'src/editor-style.css'),
            },
            external: ['@wordpress/interactivity'],
            output: {
                globals: {
                    '@wordpress/interactivity': 'wp.interactivity',
                },
                entryFileNames: 'assets/[name].js',
                chunkFileNames: 'assets/[name].js',
                assetFileNames: (assetInfo) => {
                    // Ensure Tailwind main output goes to style.css in the root
                    if (assetInfo.name === 'main.css' || assetInfo.name === 'style.css') {
                        return 'style.css';
                    }
                    // Ensure Editor CSS goes to assets/editor-style.css
                    if (assetInfo.name === 'editor-style.css') {
                        return 'assets/editor-style.css';
                    }
                    return 'assets/[name].[ext]';
                },
            },
        },
    },
    server: {
        cors: true,
        strictPort: true,
        port: 5173,
        hmr: {
            host: 'localhost',
        },
    },
}));
