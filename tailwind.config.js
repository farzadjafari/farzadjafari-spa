module.exports = {
    purge: [
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],
    theme: {
        container: {
            center: true,
            padding: '1rem'
        },
        extend: {},
        fontFamily: {
            sans: ['Nunito', 'sans-serif']
        }
    },
    variants: {},
    plugins: [],
    darkMode: 'class'
}
