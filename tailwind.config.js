module.exports = {
  content: [
    "./storage/framework/views/*.php",
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  darkMode: "class",
  theme: {
    extend: {
      colors: {
        primary: "#0284c7",
        dark: "#0f172a",
        secondary: "#64748b",
      },
      screen: {
        "2xl": "1320px",
      },
    },
  },
  plugins: [require("./plugin")],
};
