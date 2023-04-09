/**
 * @param type
 * @param messages
 * @param options
 * @returns {null|void}
 *
 * notiflix fonksiyonu, type, messages ve opsiyonel olarak options parametreleri alır. type parametresi, "success" veya "error" değerlerini alabilir. messages parametresi ise bildirim mesajını içerir.
 *
 * options parametresi, bir dizi olarak verilir ve içinde en fazla 2 eleman bulunabilir. İlk eleman, bildirim tipini belirlemek için "notify" veya "report" olabilir. İkinci eleman ise bildirim başlığıdır ve yalnızca "report" türü için gereklidir.
 *
 * Fonksiyon, switch-case bloğu kullanarak type ve options parametrelerine göre farklı işlemler yapar. Eğer type "success" ise ve option "notify" ise Notiflix.Notify.success fonksiyonunu çağırır ve bildirimi görüntüler. Eğer option "report" ise title değerini kontrol eder ve başlık verilmişse Notiflix.Report.success fonksiyonunu çağırarak bildirimi görüntüler.
 *
 * type "error" ise, option ve title değerlerine göre Notiflix.Notify.failure veya Notiflix.Report.failure fonksiyonlarını çağırarak hata bildirimi görüntüler.
 *
 * notifications fonksiyonu ise, notification, type, messages ve opsiyonel olarak options parametrelerini alır. Bu fonksiyon, notification parametresi "notiflix" olduğunda notiflix fonksiyonunu çağırır ve bildirim görüntüler. Diğer durumlarda ise null değeri döndürür.
 *
 * notifications("notiflix", "success", "Başarılı işlem!", "notify");
 * notifications("notiflix", "success", "Başarılı işlem!", "report", "Bildirim Başlığı");
 * notifications("notiflix", "error", "Hata oluştu!", "notify");
 * notifications("notiflix", "error", "Hata oluştu!", "report", "Bildirim Başlığı");
 */
const notiflix = (type = "success", messages, options = []) => {
    const [option,title] = options;
    switch (type) {
        case "success":
            if (option === "notify") {
                console.log(messages)
                return Notiflix.Notify.success(messages);
            } else if (option === "report") {
                return Notiflix.Report.success(title || "", messages, "Kapat");
            } else {
                return null;
            }
        case "error":
            if (option === "notify") {
                return Notiflix.Notify.failure(messages);
            } else if (option === "report") {
                return Notiflix.Report.failure(title || "", messages, "Kapat");
            } else {
                return null;
            }
        default:
            return null;
    }
};


/**
 *
 * @param notification
 * @param type
 * @param messages
 * @param options
 * @returns {null|void}
 *
 * Bu kod bloğu, Notiflix adlı bir JavaScript kütüphanesi kullanarak basit bir bildirim sistemi oluşturmak için kullanılabilir. Bu kod bloğu, notifications adlı bir fonksiyon içinde yer alır ve üç argüman alır:
 * notification (isteğe bağlı): Kullanılacak bildirim sisteminin adını belirtir. Bu argüman belirtilmezse, varsayılan olarak "notiflix" kullanılır.
 * type (isteğe bağlı): Bildirimin türünü belirtir - "success" (başarı) veya "error" (hata). Bu argüman belirtilmezse, varsayılan olarak "success" kullanılır.
 * messages: Bildirimde gösterilecek metni belirtir.
 * ...options (isteğe bağlı): Bildirim seçeneklerini belirtir. Bu argüman boş olarak bırakılabilir veya isteğe bağlı olarak iki öğe alabilir: bir başlık (string) ve bir bildirim seçeneği (string).
 *
 * notifications("notiflix", "success", "İşlem başarılı", "Başlık", "notify");
 */
const notifications = (notification = "notiflix", type = "success", messages, ...options) => {
    switch (notification) {
        case "notiflix":
            return notiflix(type, messages, options)
        default:
            return null
    }
}

export default notifications
