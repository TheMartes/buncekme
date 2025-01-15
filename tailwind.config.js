import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Dongle', ...defaultTheme.fontFamily.sans],
                serif: ['Gentium Book Basic', ...defaultTheme.fontFamily.serif],
            },
            typography: (theme) => ({
                DEFAULT: {
                    css: {
                        '--tw-prose-body': {
                            fontFamily: ['Gentium Book Basic', ...defaultTheme.fontFamily.serif],
                        },
                        '--tw-prose-headings': {
                            fontFamily: ['Dongle', ...defaultTheme.fontFamily.sans],
                        },
                    }
                },
            }),
        },
    },
    plugins: [
        require('@tailwindcss/typography'),
    ],
};
