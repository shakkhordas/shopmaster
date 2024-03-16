/** @type {import('tailwindcss').Config} */
export default {
    content: [
      "./resources/views/**/*.blade.php",
      "./resources/js/**/*.js",
    ],
    theme: {
      extend: {
          fontFamily: {
              roboto: 'Roboto',
              guerilla: 'Protest Guerrilla'
          }
      },
    },
    plugins: [],
  }
  