const notiflix = (type = "success", messages, options) => {
    const [option] = options
    switch (type) {
        case "success":
            if (option === "notify") {
                return Notiflix.Notify.success(messages);
            } else if (option==="report") {
                const [,tittle]=option
              return   Notiflix.Report.success(
                    tittle,
                    messages,
                    'Kapat',
                );
            } else {
                return null
            }
            case "error":
            if (option === "notify") {
                return Notiflix.Notify.failure(messages);
            } else if (option==="report") {
                const [,tittle]=options
                return   Notiflix.Report.failure(
                    tittle,
                    messages,
                    'Kapat',
                );
            } else {
                return null
            }
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
