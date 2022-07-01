const colors = require("tailwindcss/colors");

module.exports = {
    content: ["source/**/*.blade.php", "source/**/*.md", "source/**/*.html"],
    theme: {
        extend: {
            fontFamily: {
                nunito: ["Nunito", "sans-serif"],
                koulen: ["Koulen", "cursive"],
            },
            fontSize: {
                title: "2.8rem",
            },
            spacing: {
                84: "21rem",
                169: "42.25rem",
            },
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
};
