/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    important: true,
    theme: {
        extend: {
            colors: {
                smoke: {
                    100: '#F6F4F41A',
                    200: '#F6F4F433',
                    300: '#F6F4F44D',
                    400: '#F6F4F466',
                    500: '#F6F4F480',
                    600: '#F6F4F499',
                    700: '#F6F4F4B3',
                    800: '#F6F4F4CC',
                    900: '#F6F4F4E6',
                    1000: '#F6F4F4'
                },
                "eerie-black": {
                    50: '#1F1F1F0D',
                    100: '#1F1F1F1A',
                    200: '#1F1F1F33',
                    300: '#1F1F1F4D',
                    400: '#1F1F1F66',
                    500: '#1F1F1F80',
                    600: '#1F1F1F99',
                    700: '#1F1F1FB3',
                    800: '#1F1F1FCC',
                    900: '#1F1F1FE6',
                    1000: '#1F1F1F'
                },
                "true-blue": {
                    100: '#4464AD1A',
                    200: '#4464AD33',
                    300: '#4464AD4D',
                    400: '#4464AD66',
                    500: '#4464AD80',
                    600: '#4464AD99',
                    700: '#4464ADB3',
                    800: '#4464ADCC',
                    900: '#4464ADE6',
                    1000: '#4464AD'
                },
                folly: {
                    100: '#FF334E1A',
                    200: '#FF334E33',
                    300: '#FF334E4D',
                    400: '#FF334E66',
                    500: '#FF334E80',
                    600: '#FF334E99',
                    700: '#FF334EB3',
                    800: '#FF334ECC',
                    900: '#FF334EE6',
                    1000: '#FF334E'
                },
                "lapis-lazuli": {
                    100: '#4669951A',
                    200: '#46699533',
                    300: '#4669954D',
                    400: '#46699566',
                    500: '#46699580',
                    600: '#46699599',
                    700: '#466995B3',
                    800: '#466995CC',
                    900: '#466995E6',
                    1000: '#466995'
                }
            },
            fontFamily: {
                poppins: ['Poppins', 'sans-serif']
            }
        }
    },
    plugins: [],
}
