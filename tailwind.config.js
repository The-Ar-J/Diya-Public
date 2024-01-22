/** @type {import('tailwindcss').Config} */
module.exports = {
  daisyui: {
    themes: ["light", "dark", "cupcake"],
  },
  content: [
    './**/**/*.{html,js,php}',
  ],
  theme: {
    extend: {},
  },
  plugins: [require("daisyui")],
}