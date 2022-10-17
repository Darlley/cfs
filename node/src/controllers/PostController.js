const edit = (request, response) => {
    return response.send(request.params.id)
}

module.exports = {
    edit
}