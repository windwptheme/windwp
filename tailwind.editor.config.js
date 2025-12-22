/** @type {import('tailwindcss').Config} */
import baseConfig from './tailwind.config.js';

export default {
  ...baseConfig,
  corePlugins: {
    ...baseConfig.corePlugins,
    preflight: false, // Disable preflight to avoid breaking WP Admin UI
  },
};
