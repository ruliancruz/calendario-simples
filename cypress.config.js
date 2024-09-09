const { defineConfig } = require("cypress");

module.exports = defineConfig({
  e2e: {
    baseUrl: 'http://app:80',
    supportFile: false,
    setupNodeEvents(on, config) {},
    defaultCommandTimeout: 3000
  },
});
