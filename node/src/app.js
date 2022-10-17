require("dotenv").config()
const express = require('express');
const HomeController = require("./controllers/HomeController")

const app = express()

const {init: initHandlebars } = require("./helpers/handlebar")
initHandlebars(app)

app.use('/', require("./routes/site"));
app.use('/post', require("./routes/post"));

app.listen(process.env['APP_PORT'] || 3000)