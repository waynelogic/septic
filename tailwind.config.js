/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                'sans': ['Mont'],
            },
            colors: {
                'silver' : {
                    'DEFAULT' : '#999'
                },
                'secondary' : {
                    'DEFAULT' : '#00787a'
                },
                'primary': {
                    '300' : '#10e272',
                    'DEFAULT': '#00b349',
                },
            },
            boxShadow: {
                'in': '0 0 0 1px #ebecec',
                'out' : '0 5px 25px 0 #1219261a',
                'card' : '0 0 20px rgba(146,145,145,.4)',
                'round' : '0px 5px 20px 0px rgba(0, 0, 0, 0.10)'
            },
            brightness: {
                25: '.25',
                'full': '200',
            },
            transitionDuration: {
                DEFAULT: '250ms'
            },
        },
        container: {
            padding: {
                DEFAULT: '1rem',
                sm: '2rem',
                lg: '4rem',
                xl: '5rem',
                '2xl': '6rem',
            },
        },
    },
    plugins: [],
}
