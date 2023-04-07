import {login,register} from "./modules/Auth.js";
import PagesControl from "./utils/PagesControl.js";
import {pageLoading} from "./utils/Loading.js";
pageLoading();
if (PagesControl("/login")) {
    login()
}

if (PagesControl("/register")) {
    register()
}

