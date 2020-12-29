module.exports = {
    purge: [
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    darkMode: 'media', // or 'media' or 'class'
    theme: {
        extend: {
            fontFamily: {
                'poppins': ['Poppins', 'sans-serif'],
            },
            spacing: {
                '100' : '25rem',
                '104' : '26rem',
                '108' : '27rem',
                '112' : '28rem',
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
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('tailwindcss-truncate-multiline')(),
    ],
}
