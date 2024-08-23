import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                "bg-battle-green":"rgb(208,240,208)",
                "bg-field-green":"rgb(153,225,152)",
                "field-border":"rgb(222,225,154)",
                "bg-menu":"rgb(33,89,95)",
                "menu-border":"rgb(72,72,104)",
                "bg-about-title":"rgb(220,186,156)",
                "about-dot":"rgb(8,88,161)",
                "bg-about-dot":"rgb(98,173,193)",
                "bg-about-command":"rgb(11,115,144)",
                "about-border":"rgb(89,116,144)",
                "bg-about-blue":"rgb(81,168,178)",
                "bg-about-main":"rgb(227,136,129)",
                "about-key":"rgb(100,100,144)",
            }
        },
    },

    plugins: [forms],
};
