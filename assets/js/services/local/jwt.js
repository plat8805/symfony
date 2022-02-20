import {SessionStorageService} from '@/services/local/session-storage';

const USER_KEY = 'user';
const USER_TOKEN = 'token';

export class JwtService {
    static getToken() {
        const token = SessionStorageService.get('token');
        return token ? token : null;
    }

    static saveToken(token){
        SessionStorageService.set(USER_TOKEN, JSON.stringify(token));
    }
    static getUser() {
        return JSON.parse(SessionStorageService.get(USER_KEY));
    }

    static saveUser(user){
        SessionStorageService.set(USER_KEY, JSON.stringify(user));
    }

    static clearSession(){
        SessionStorageService.clear(USER_KEY);
        SessionStorageService.clear(USER_TOKEN);
    }

    static isAuthenticated(){
        return this.getUser() != null;
    }
    static isNotAuthenticated(){
        return !this.isAuthenticated();
    }
}
