module.exports = {
    // content: ["source/**/*.blade.php", "source/**/*.md", "source/**/*.html"],
    content: [
        "./source/index.blade.php",
        "./source/publications.blade.php",
        "./source/_axes/*.md",
        "./source/_components/*.blade.php",
        "./source/_layouts/*.blade.php",
        "./source/_partials/*.blade.php",
        "./source/_publications/*.md",
        "./source/_responsables/*.md",
        "./source/_stagiaires/*.md",
    ],
    theme: {
        extend: {
            fontFamily: {
                montserrat: ["Montserrat", "sans-serif"],
            },
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
};
