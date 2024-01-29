/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    screens: {
        sm: "480px",
        md: "768px",
        lg: "976px",
        xl: "1040px",
        xxl: "1440px",
      },
    extend: {
        container: {
            center: true,
        },
        backgroundImage: {

        }
    },
  },
  plugins: [
    require('flowbite/plugin'),

  ],
}
