const store = (request, response) => {
    console.log("Executando...")
    setTimeout(() => {
        return response.redirect('/')
    }, 3000)
}

module.exports = { store } 