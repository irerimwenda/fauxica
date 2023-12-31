import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                poppins: ['Poppins', 'sans-serif'],
                playfair: ['Playfair Display', 'sans-serif'],
            },
            container: {
                center: true,
                screens: {
                    sm: '540px',
                    md: '720px',
                    lg: '960px',
                    xl: '1140px',
                    '2xl': '1320px',
                },
                padding: {
                    DEFAULT: '1.25rem',
                },
            },
            colors: {
                'white': '#ffffff',
                'black': '#000000',
                primary: {
                    100: '#F1E2D1',
                    200: '#F3D9BB17'
                }
            },
            backgroundImage: {
                'sport-shoe': "url('/images/sport_shoe.png')",
                socks: "url('/images/socks.png')",
                handbag: "url('/images/handbag.png')",
                'auth-banner': "url('/images/auth_banner.jpg')",
            }
        },
    },

    plugins: [forms],
};
