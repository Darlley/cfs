const PostController = require("../controllers/PostController")
const express = require('express');

const router = express.Router();

router.get("/edit/:id", PostController.edit)

module.exports = router;