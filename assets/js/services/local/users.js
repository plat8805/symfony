import http from "../http";

const getUser = () => {
    return null;
    // return {};
}

const register = (user) => {
    return http.register(user);
}

export const UsersService = {
    getUser,
    register
};