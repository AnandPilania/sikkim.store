const colors = require('tailwindcss/colors')
const defaultTheme = require('tailwindcss/defaultTheme')
module.exports = {
    purge: [
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.jsx',
        './resources/**/*.ts',
        './resources/**/*.tsx',
        './resources/**/*.vue',
    ],
    darkMode: 'media', // or 'media' or 'class'
    theme: {
        extend: {
            fontFamily: {
                sans: ['Poppins', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                teal: colors.teal,
                lime: colors.lime,
                cyan: colors.cyan,
                rose: colors.rose,
                amber: colors.amber,
                fuchsia: colors.fuchsia,
                emerald: colors.emerald,
                orange: colors.orange,
                'light-blue': colors.lightBlue,
            },
            spacing: {
                '100': '25rem',
                '104': '26rem',
                '108': '27rem',
                '112': '28rem',
            },
        },
        truncate: {
            lines: {
                1: '1',
                2: '2',
                3: '3',
                4: "4",
                5: '5',
            }
        },
    },
    variants: {
        extend: {
            ringColor: ['hover'],
            opacity: ['disabled'],
            scale: ['active'],
            textColor: ['disabled']
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('tailwindcss-truncate-multiline')(),
        require("kutty"),
        require('@tailwindcss/line-clamp')
    ],
}
