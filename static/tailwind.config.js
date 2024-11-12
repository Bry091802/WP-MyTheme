/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./dist/**/*.{html,js}"],
  theme: {
    container: {
      center: true,
      padding: "2rem",
    },
    extend: { 
      colors: {
        primary: "#36BCAB",
        secondary: "#666666",
      },
      fontFamily: {
        primary: "Poppins",
        secondary: "Oswald",
      } },
  },
  plugins: [],
};
