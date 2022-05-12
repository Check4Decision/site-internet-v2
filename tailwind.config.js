const colors = require("tailwindcss/colors");

module.exports = {
    purge: ["source/**/*.blade.php", "source/**/*.md", "source/**/*.html"],
    theme: {
        colors: {
            transparent: "transparent",
            current: "currentColor",
            white: colors.white,
            black: colors.black,
            gray: colors.gray,
            sky: colors.sky,
            cyan: colors.cyan,
        },
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
