import{defineConfig} from 'vite'

export default defineConfig({
  build: {
    outDir: '.',
    rollupOptions: {
      output: {
        entryFileNames: `assets/[name].js`,
        chunkFileNames: `assets/[name].js`,
        assetFileNames: `assets/[name].[ext]`
      },
      input: 'main.js'
    }
  }
    })

