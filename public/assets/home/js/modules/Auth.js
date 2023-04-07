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
            let message = ""
            let tittle
            if (response.errors) {
               message=errorMessage([response.errors])
                tittle = "İşlem başarısız"
            } else {
                tittle = "İşlem başarılı"
            }

            notifications("notiflix", "error", message, "report", tittle)
            Loading(false)
        })
    })
}

const background = () => {
    document.addEventListener("DOMContentLoaded", function() {
        let elements = document.querySelectorAll("[data-background-url]");
        elements.forEach(function (element) {
            let url = element.getAttribute("data-background-url");
            element.style.backgroundImage = "url(" + url + ")";
            element.classList.remove("hidden")

        });
    });

}

const errorMessage = (errors) => {
let message=""
    errors.forEach(error => {
        console.log(error)
        error.email.forEach(e => {
            message += `${e}`
        })
        error.name.forEach(n => {
            message += `${n} <br>`
        })
        error.password.forEach(p => {
            message += `${p} <br>`
        })
    })

    return message

}
