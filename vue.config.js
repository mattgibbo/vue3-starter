// vue.config.js
module.exports = {
  devServer: {
    proxy: {
      "^/api/": {
        target: "http://localhost/vue3-starter",
        changeOrigin: true // so CORS doesn't bite us.
      }
    }
  }
};
