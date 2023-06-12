const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
        screens: {
            'sm': '374px',
            // => @media (min-width: 374px) { ... }

            'md': '960px',
            // => @media (min-width: 960px) { ... }

            'lg': '1440px',
            // => @media (min-width: 1440px) { ... }
        },
    },

    plugins: [require('@tailwindcss/forms')],


};
