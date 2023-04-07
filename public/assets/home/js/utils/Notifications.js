const notiflix = (type = "success", messages, options) => {
    const [option] = options
    switch (type) {
        case "success":
            if (option === "notify") {
                return Notiflix.Notify.success(messages);
            }
            break;
            case "error":
            if (option === "notify") {
                return Notiflix.Notify.failure(messages);
            }
            break;
        default:
            return null
    }

}

const notifications = (notification = "notiflix", type = "success", messages, ...options) => {
    switch (notification) {
        case "notiflix":
            return notiflix(type, messages, options)
        default:
            return null
    }
}

export default notifications
