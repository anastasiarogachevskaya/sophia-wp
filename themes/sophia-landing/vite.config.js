// vite.config.js
import ViteSass from 'vite-plugin-sass';

export default {
  plugins: [ViteSass()],
  build: {
    rollupOptions: {
      input: './assets/main.js', // Replace with the correct path
    }
  }
}
