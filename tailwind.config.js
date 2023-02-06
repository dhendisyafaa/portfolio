/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        primary: '#18181b',
        potter: '#ea580c',
        gryffindor: '#d60b0b',
        hufflepuff: '#cf9d02',
        ravenclaw: '#2563eb',
        slytherin: '#15803d',
      },
    },
  },
  plugins: [],
}
