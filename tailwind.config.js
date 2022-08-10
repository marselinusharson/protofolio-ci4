// tailwind.config.js
module.exports = {
  purge: ["./app/Views/*.php"],
  purge: ["./app/Views/**/*.php"],
  purge: ["./app/Views/**/**/*.php"],
  purge: ["./app/Views/**/**/**/*.php"],
  purge: ["./app/Views/**/**/**/**/*.php"],
  darkMode: "class", // or 'media' or 'class'
  theme: {
    container: {
      center: true,
      padding: "12px",
    },
    extend: {
      colors: {
        primary: "#14b8a6",
        dark: "#0f172a",
        secondary: "#64748b",
      },
      screens: {
        xl: "1024px",
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
};
