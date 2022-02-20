import http from "../http";
import {JwtService} from "./jwt";

const getUser = () => {
    return JwtService.getUser();
}
const login = (loginForm) => {
    return http.login(loginForm);
}
const register = (user) => {
    return http.register(user);
}
export const UsersService = {
    getUser,
    register,
    login
};