import {requestPost} from "./utils/request.js";
import {login,register} from "./modules/Auth.js";
import PagesControl from "./utils/PagesControl.js";
if (PagesControl("/login")) {
    login()
}

if (PagesControl("/register")) {
    register(requestPost)
}

