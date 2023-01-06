/** @type {import('tailwindcss').Config} */
module.exports = {
  important: true,
  content: ["../**.php",
"../**/**.php",],
  theme: {
    extend: {
      fontFamily: {
        'sailec': ['"Sailec-Regular"', 'sanas-serif'],
        'sailec-bold': ['"Sailec-Bold"', 'sanas-serif'],
        'sailec-light': ['"Sailec-Light"', 'sanas-serif'],
      },
      colors : {
        cyan: '#46e9c9',
        blue: '#36a6ff',
        purple: '#8A4FFF',
        charcoal: '#413E65',
      },
    },
  },
  plugins: [],
}


