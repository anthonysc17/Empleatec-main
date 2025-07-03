import { defineConfig } from "vite";
import react from "@vitejs/plugin-react";

export default defineConfig({
  plugins: [react()],
  resolve: {
    alias: [{ find: "@", replacement: "/src" }],
  },
  server: {
    host: true,
    port: 5173,
    watch: {
      usePolling: true,  // 🔁 Importante para que los cambios en archivos funcionen desde fuera del contenedor
    },
  },
});
