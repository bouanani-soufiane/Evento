import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [

        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                body: ['"Open Sans"', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [
        forms,
    ],
};

// module.exports = {
//     // ...
//     plugins: [
//         // ...
//         require('@tailwindcss/forms'),
//     ],
// };
