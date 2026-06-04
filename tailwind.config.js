/** @type {import('tailwindcss').Config} */
export default {
  darkMode: 'selector', // Tambahkan baris ini
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}
