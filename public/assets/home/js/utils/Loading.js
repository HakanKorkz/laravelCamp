export const pageLoading = () => {
    window.addEventListener('DOMContentLoaded', function () {
        Notiflix.Loading.dots('Yükleniyor...');
    });

// sayfa tamamen yüklendikten sonra loading ekranını kaldır
    window.addEventListener('load', function () {
        Notiflix.Loading.remove();
    });
}


export const Loading = (status) => {
    if (status) {
        Notiflix.Loading.dots('Yükleniyor...');
    }

    if (!status) {
        Notiflix.Loading.remove();
    }
}
