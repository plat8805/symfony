import axios from 'axios';

const state = {
    all: []
};

const getters = {};

const mutations = {
    SET_CATEGORIES (state, categories) {
        state.all = categories;
    }
};

const actions = {
    getCategories (context) {
        axios
            .get('/admin/api/v1/categories')
            .then(response => {
                context.commit('SET_CATEGORIES', response.data.records)
            });
    }
};

export default {
    namespaced: true,
    state,
    getters,
    mutations,
    actions
}