const PagesControl = (page) => {
    const baseUrl = location.href
    const url = new URL(baseUrl)
    let pageBoolean
    switch (url.pathname) {
        case page:
            pageBoolean = true
            break
        default:
            pageBoolean = false
    }
    return pageBoolean
}

export default PagesControl
