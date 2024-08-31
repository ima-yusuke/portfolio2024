import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    safelist: [
        'bg-ability-bg',
        'bg-ability-img-bg',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            screens: {
                '2xl': '1536px',
                '3xl': '1920px',
            },
            colors: {
                "battle-bg":"rgb(208,240,208)",
                "battle-field-bg":"rgb(153,225,152)",
                "battle-field-border":"rgb(222,225,154)",
                "battle-menu-bg":"rgb(33,89,95)",
                "battle-menu-border":"rgb(72,72,104)",
                "about-title-bg-brown":"rgb(220,186,156)",
                "about-title-bg-light-blue":"rgb(98,173,193)",
                "about-title-bg-command":"rgb(11,115,144)",
                "about-title-dot":"rgb(8,88,161)",
                "about-border":"rgb(89,116,144)",
                "info-bg":"rgb(227,136,129)",
                "info-img-bg":"rgb(81,168,178)",
                "info-key-bg":"rgb(100,100,144)",
                "ability-bg":"rgb(247,226,112)",
                "ability-img-bg":"rgb(200,168,232)",
                "ability-key-bg":"rgb(119,128,144)",
                "ability-value-bg":"rgb(248,248,216)",
                "work-bg":"rgb(70,147,186)",
                "work-border-r-container":"rgb(41,88,121)",
                "work-dark-yellow":"rgb(253,195,89)",
                "work-light-yellow":"rgb(252,227,169)",
                "work-command-bg":"rgb(105,92,162)",
            }
        },
    },

    plugins: [forms],
};
