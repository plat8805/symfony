// "@/store/modules/auth";
import {UsersService} from "@/services/local/users";
import {AuthAction} from "@/store/types.actions";
import {JwtService} from "@/services/local/jwt";

const state = {
    isRegistering: false,
    user: {},
    isLoggedIn: false,
    token: null
};

const mutations = {
    'IS_REGISTERING'(state, boolean) {
        state.isRegistering = boolean;
    },
    'SET_USER'(state, user){
        JwtService.saveUser(user);
        state.user = user;
        state.isLoggedIn = true
    },
    'SET_TOKEN'(state, token){
        JwtService.saveToken(token);
        state.token = token;
    },
    [AuthAction.local.IS_LOGGED_IN](state, boolean){
        state.isLoggedIn = boolean
    },
    [AuthAction.local.LOGOUT](state){
        JwtService.clearSession();
        state.user = {};
        state.isLoggedIn = false;
    },
};

const actions = {
    [AuthAction.remote.REGISTER](context, formData) {
        return new Promise((resolve, reject) => {
            context.commit(AuthAction.local.IS_REGISTERING, true);
            UsersService.register(formData)
                .then((response) => {
                    if (response.data.success) {
                        context.commit(AuthAction.local.IS_REGISTERING, false);
                    }
                    resolve(response.data);
                })
                .catch(({response}) => { reject(response); });
        });
    },

    async attempt({commit, state}, token){
        if(token){
            commit(AuthAction.local.IS_LOGGED_IN, true);
            commit(AuthAction.local.SET_TOKEN, token);
        }
        if(!state.token){
            return;
        }
        try {
            let response = await axios.get('/profile');
            commit(AuthAction.local.SET_USER, JSON.parse(response.data));
        }catch (e) {
            commit(AuthAction.local.SET_USER, null);
            commit(AuthAction.local.IS_LOGGED_IN, false);
        }
    },

    async [AuthAction.remote.LOGIN]({dispatch}, loginForm) {
        let response = await UsersService.login(loginForm)
            .catch(error => {
                console.log(error);
            });
        return dispatch('attempt', response.data.token);
    },
    [AuthAction.local.LOGOUT](content){
        return new Promise((resolve, reject) => {
            content.commit(AuthAction.local.LOGOUT);
            resolve({success: true});
        });
    }

};

const getters = {
    isLoggedIn: (state) => {
        return state.isLoggedIn;
    },
    currentUser: (state) => {
        if (state.user){
            return state.user;
        }else{
            return {};
        }
    }
};

export const auth = {
    namespaced: true,
    state,
    mutations,
    actions,
    getters
};
