// assets/js/services/http.js

class HttpService {

    getAll(url) {
        return axios.get(url);
    }

    get(url, id) {
        return axios.get(`${url}/${id}`);
    }

    register(user) {
        return axios.post('/register', user);
    }
}


export default new HttpService();