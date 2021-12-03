module.exports = {
  purge: [
    './resources/**/*.blade.php',

    './resources/**/*.js',

    './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    fontFamily: {
      'poppins': ['Poppins']
    },
    extend: {},
  },
  variants: {
    extend: {
      ringWidth: ['hover'],
    },
  },
  plugins: [],
}
