module.exports = {
    purge: ["source/**/*.blade.php", "source/**/*.md", "source/**/*.html"],
    theme: {
        extend: {
            fontFamily: {
                inter: ["Inter", "sans-serif"],
                oxygen: ["Oxygen", "sans-serif"],
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
