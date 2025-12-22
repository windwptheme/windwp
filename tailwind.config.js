/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./*.php",
    "./inc/**/*.php",
    "./templates/**/*.html",
    "./parts/**/*.html",
    "./patterns/**/*.php",
    "./woocommerce/**/*.php",
    "./src/**/*.js",
  ],
  darkMode: 'class',
  theme: {
    container: {
      center: true,
      padding: '1rem',
    },
    extend: {
      colors: {
        primary: {
          DEFAULT: '#00D1B2',
          dark: '#009E87',
          light: '#00E6C7',
        },
        brand: {
          dark: '#0f172a',
        },
        slate: {
          950: '#020617',
          900: '#0f172a',
          800: '#1e293b',
          700: '#334155',
          600: '#475569',
          500: '#64748b',
          400: '#94a3b8',
          300: '#cbd5e1',
          200: '#e2e8f0',
          100: '#f1f5f9',
          50: '#f8fafc',
        }
      },
      fontFamily: {
        sans: ['Inter', 'system-ui', 'sans-serif'],
      },
      boxShadow: {
        'primary': '0 10px 40px -10px rgba(0, 209, 178, 0.4)',
        'primary-lg': '0 20px 60px -15px rgba(0, 209, 178, 0.5)',
      },
      animation: {
        'fade-in': 'fadeIn 0.3s ease-out',
        'slide-in': 'slideIn 0.3s ease-out',
      },
      keyframes: {
        fadeIn: {
          '0%': { opacity: '0' },
          '100%': { opacity: '1' },
        },
        slideIn: {
          '0%': { transform: 'translateX(100%)' },
          '100%': { transform: 'translateX(0)' },
        },
      },
    },
  },
  plugins: [],
};
