import axios from 'axios';
import {config} from "@fortawesome/fontawesome-svg-core";

const instance = axios.create({
    baseURL: 'http://127.0.0.1/api',
    headers: {
        'Content-Type': 'application/json',
    }
});

instance.interceptors.request.use(config => {
    config.headers.authorization = `Bearer ${JSON.parse(sessionStorage.getItem('token'))}`
    return config;
}, function (error){
    return Promise.reject(error);
});
export default instance;