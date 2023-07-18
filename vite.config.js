import{defineConfig} from 'vite'

export default defineConfig({
  build: {
    rolluppOptions: {
      output: {
        entryFileNames: `assets/[name].js`,
        chunkFileNames: `assets/[name].js`,
        assetFileNames: `assets/[name].[ext]`
      }
    }
  }
    })