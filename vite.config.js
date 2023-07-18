import{defineConfig} from 'vite'
<<<<<<< HEAD

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
=======
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
>>>>>>> 73e197d5e8bc226b2076977c798640e71c423506
