module.exports = {
  purge: [
    'source/**/*.blade.php',
    'source/**/*.md',
    'source/**/*.html',
  ],
  theme: {
    extend: {
      fontFamily: {
          primary: ['Open Sans'],
          secondary: ['Montserrat']
      },
      screens: {
        'desktop': '1200px',
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
};
