module.exports = {
    proxy: "http://localhost/meuSite", // URL do seu projeto PHP
    files: ["**/*.php", "**/*.css", "**/*.js"], // arquivos que BrowserSync vai monitorar
    open: true,
    notify: false
};
