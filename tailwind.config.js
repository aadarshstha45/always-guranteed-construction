/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./pages/**/*.html", "./includes/**/*.html"],

  theme: {
    screens: {
      sm: "480px",
      md: "768px",
      lg: "1024px",
      xl: "1280px",
      "2xl": "1536px",
    },
    fontFamily: {
      viga: ["Viga", "sans-serif"],
      roboto: ["Roboto", "sans-serif"],
    },
    extend: {
      colors: {
        primary: {
          50: "#e6f0ff",
          100: "#cce0ff",
          200: "#99c2ff",
          300: "#66a3ff",
          400: "#3385ff",
          500: "#005CDC", // Base color
          600: "#004bb3",
          700: "#003b8a",
          800: "#002b61",
          900: "#001c3a",
          950: "#001024",
        },
      },
    },
  },
  plugins: [{ tailwindcss: {}, autoprefixer: {} }],
};
