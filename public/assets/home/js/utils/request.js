const request = async (url, data = null, method = "POST") => {
    try {
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        const options = {
            method: method,
            headers: {
                'X-CSRF-TOKEN': csrfToken,
                "Accept": "application/json, text/html",
            },
            body: data || null
        }

        if (method === "POST") {
            options.body = data
        }
        const resp = await fetch(url, options);
        return await resp.json();
    } catch (error) {
        console.error(error);
    }
}

export const requestGet = (url, data) => request(url, data, "GET")
export const requestPost = (url, data) => request(url, data)

