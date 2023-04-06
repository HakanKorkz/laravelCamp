export const login = () => {
    background()
}
export const register = (requestPost) => {
background()
    const form = document.querySelector("form")
    form.addEventListener("submit", async (evt) => {
        evt.preventDefault()
        evt.stopPropagation()
        const data = new FormData(form)
        const response = await requestPost("register", data)
        console.log(response)
    })
}

const background = () => {
    document.addEventListener("DOMContentLoaded", function() {
        let elements = document.querySelectorAll("[data-background-url]");
        elements.forEach(function(element) {
            let url = element.getAttribute("data-background-url");
            element.style.backgroundImage = "url(" + url + ")";
            element.classList.remove("hidden")

        });
    });

}
