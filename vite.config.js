
import{defineConfig} from 'vite'
export default defineConfig(({ command, mode, ssrBuild }) => {
  return {

    build: {
      rollupOptions: {
        output: {
          entryFileNames: `assets/[name].js`,
          chunkFileNames: `assets/[name].js`,
          assetFileNames: `assets/[name].[ext]`
        }
      }
    }
  }
})