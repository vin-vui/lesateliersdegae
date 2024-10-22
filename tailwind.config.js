import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                amita: ['Amita'],
            },
            colors: {
                'zomp': '#3C6C62',
                'caribbean': '#336870',
                'old-lace': '#FFF6E9',
                'eccru': '#C3AC80',
                'wheat': '#E0CDA0',
                'reseda-green': '#737D6C',
            }
        },
    },

    plugins: [forms, typography],
};
