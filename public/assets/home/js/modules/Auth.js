import {Loading} from "../utils/Loading.js";
import {requestPost} from "../utils/request.js";
import notifications from "../utils/Notifications.js";

export const login = () => {
    background()
}
export const register = () => {
    background()
    const form = document.querySelector("form")
    form.addEventListener("submit", (evt) => {
        evt.preventDefault()
        evt.stopPropagation()
        Loading(true)
        const data = new FormData(form)
        requestPost("register", data).then(response => {
            let message
            let tittle
            let option
            let types
            if (response.errors) {
                message = errorMessage([response.errors])
                tittle = "İşlem başarısız"
                option = "report"
                types = "error"
            } else {
                option = "notify"
                message = "İşlem başarılı"
                tittle = ""
                types = "success"
            }

            notifications("notiflix", types, message, option, tittle)
            Loading(false)
        })
    })
}

const background = () => {
    document.addEventListener("DOMContentLoaded", function() {
        let elements = document.querySelectorAll("[data-background-url]");
        elements.forEach(element=> {
            let url = element.getAttribute("data-background-url");
            element.style.backgroundImage = "url(" + url + ")";
            element.classList.remove("hidden")

        });
    });

}

const errorMessage = (errors) => {
let message=""
    errors.forEach(error => {
        error.email && error?.email.forEach(e => {
            message += `${e}`
        })
        error.name && error?.name.forEach(n => {
            message += `${n} <br>`
        })
        error.password && error?.password.forEach(p => {
            message += `${p} <br>`
        })
    })

    return message

}
