module.exports = {
    purge: ["source/**/*.blade.php", "source/**/*.md", "source/**/*.html"],
    theme: {
        extend: {
            fontFamily: {
                inter: ["Inter", "sans-serif"],
                oxygen: ["Oxygen", "sans-serif"],
            },
            spacing: {
                160: "40rem",
                240: "60rem",
            },
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
};
