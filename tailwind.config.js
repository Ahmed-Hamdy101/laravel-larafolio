import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/**/*.js',
        './resources/**/*.css',
        './resources/views/**/*.blade.php',
        './resources/views/**/*.php',
        './resources/images/**/*.{jpg,jpeg,png,svg,gif}',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            keyframes: {
                hide: {
                    '0%, 80%': { opacity: '1', transform: 'scale(1)' },
                    '100%': { opacity: '0', transform: 'scale(0.95)' },
                },
            },
            animation: {
                hide: 'hide 4s ease-in-out forwards', // 4s total, fades at the end
            },
        },
    },

    plugins: [forms],
};
