
const index = (request, response) => {
    return response.render("Home", {
        layout: MASTER_DIR,
        title: "Home 2"
    })
}

module.exports = {
    index
}