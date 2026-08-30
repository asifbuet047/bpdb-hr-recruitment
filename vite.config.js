import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import react from "@vitejs/plugin-react";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/js/app.jsx"],
            refresh: true,
        }),
        react(),
    ],

    server: {
        host: "0.0.0.0",
        port: 5173,
        strictPort: true,
        cors: true,

        // URL exposed to the browser
        // origin: "http://localhost:5174",

        // hmr: {
        //     host: "localhost",
        //     port: 5174,
        // },
    },
});
