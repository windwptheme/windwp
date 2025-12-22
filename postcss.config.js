import tailwind from 'tailwindcss';
import tailwindNesting from 'tailwindcss/nesting/index.js';
import autoprefixer from 'autoprefixer';
import postcssImport from 'postcss-import';

export default {
  plugins: [
    postcssImport(),
    tailwindNesting(),
    tailwind(),
    autoprefixer(),
  ],
};
