module.exports = {
    theme: {
        extend: {
            colors: {
                dark: '#2B3B4A'
            },
            height: {
                17: '4.25',
                18: '4.5rem',
                19: '4.75rem'
            },
            fontFamily: {
                poppins: ['Poppins', 'sans-serif'],
            },
            fontSize: {
                small: '13px',
                xxs: '0.65rem',
                xxxs: '0.55rem',
            },
            spacing: {
                7: '1.75rem',
            },
            borderRadius: {
                xl: '12px',
                '2xl': '16px',
                '3xl': '24px',
            },
            rotate: {
                '-6': '-6deg',
            },
            opacity: {
                '10': '0.1',
                '20': '0.2',
                '30': '0.3',
                '40': '0.4',
                '60': '0.6',
                '70': '0.7',
                '80': '0.8',
                '85': '0.85',
                '90': '0.9',
                '95': '0.95',
                '98': '0.98',
                '99': '0.99',
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
    variants: {},
    purge: {
        content: [
            './app/**/*.php',
            './resources/**/*.html',
            './resources/**/*.js',
            './resources/**/*.jsx',
            './resources/**/*.ts',
            './resources/**/*.tsx',
            './resources/**/*.php',
            './resources/**/*.vue',
            './resources/**/*.twig',
        ],
        options: {
            defaultExtractor: (content) => content.match(/[\w-/.:]+(?<!:)/g) || [],
            whitelistPatterns: [/-active$/, /-enter$/, /-leave-to$/, /show$/],
        },
    },
    plugins: [
        require('@tailwindcss/ui'),
        require('tailwindcss/defaultTheme'),
        require('@tailwindcss/typography'),
        require('@tailwindcss/custom-forms'),
        require('tailwindcss-truncate-multiline')(),
    ],
};
