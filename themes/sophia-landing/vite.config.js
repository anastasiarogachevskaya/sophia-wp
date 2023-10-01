// vite.config.js
export default {
  build: {
    rollupOptions: {
      input: './assets/main.js', // Replace with the correct path
      output: {
        entryFileNames: `[name].js`,
        chunkFileNames: `[name].js`,
        assetFileNames: `[name].[ext]`
      },
    },
    cssCodeSplit: true, // enable CSS code-splitting
  }
}
