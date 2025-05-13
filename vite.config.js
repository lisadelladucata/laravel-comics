import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/sass/app.scss", // Questo dovrebbe essere il punto di ingresso
                "resources/js/app.js", // Se hai un file JS, aggiungilo qui
            ],
            refresh: true,
        }),
    ],
});
