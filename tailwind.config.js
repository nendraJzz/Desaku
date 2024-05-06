/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'abuu': '#5F5F5F',
        'red': '#CA4040',
        'yelow': '#FAFF00',
        'gren': '#A2E36F',
        'abu2': '#3E4F4B'
      }
    },
  },
  plugins: [require("daisyui")],
}

