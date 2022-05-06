module.exports = {
    purge: ["source/**/*.blade.php", "source/**/*.md", "source/**/*.html"],
    theme: {
        extend: {
            fontFamily: {
                inter: ["Inter", "sans-serif"],
                oxygen: ["Oxygen", "sans-serif"],
            },
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
};
