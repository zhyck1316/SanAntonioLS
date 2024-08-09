/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./index.html", "./src/**/*.{html,js}", "./node_modules/flowbite/**/*.js"],
  theme: {
    extend: {
      colors:{
        'DBlue': '#00205b',
        'DBred': '#BF0D3E',
      },
      fontSize:{
        '2xs': '0.5rem'
      }
    },
  },
  plugins: [
    require('flowbite/plugin'),
  ],
}

