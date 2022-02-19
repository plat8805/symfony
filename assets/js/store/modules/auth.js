// "@/store/modules/auth";
import {UsersService} from "@/services/local/users";
import {AuthAction} from "@/store/types.actions";

const state = {
    isRegistering: false,
};

const mutations = {
    'IS_REGISTERING'(state, boolean) {
        state.isRegistering = boolean;
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

};


const getters = {

};

export const auth = {
    namespaced: true,
    state,
    mutations,
    actions,
    getters
};
