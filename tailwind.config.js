const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['sans-serif'],
                quicksand: ['Quicksand', 'sans-serif'],
                
            },
            colors: {
                yellow: {
                  custom: '#fdf3e6'
                },
                green: {
                  custom: '#4da890'
                },
                gray: {
                  custom: '#343a40'
                },
                blue: {
                  custom: '#4267b2'
                },
                red: {
                    custom: '#c23321'
                },
                white_light: {
                  custom: '#f8f9fa'
                },
                banner_tranparent: {
                  custom: '#00000038'
                },
            }
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    }
};
