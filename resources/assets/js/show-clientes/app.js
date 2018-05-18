window.Vue = require('vue')

import Vuex from 'vuex';
import axios from 'axios';

Vue.use(Vuex);

const url = '/api/clientes/';

const store = new Vuex.Store({
    state: {
        cliente: ''
    },
    mutations: {
        FETCH(state, data) {
            state.cliente = data
        }
    },
    actions: {
        fetchCliente({ commit }, payload) {
            return axios.get(url + payload.id)
                .then(response => commit('FETCH', response.data))
                .catch();
        },
        deleteAnimal({ dispatch }, payload) {
            return axios.delete(url + payload.id)
                .then(response => dispatch('fetchCliente', {id: payload.cliente_id}))
                .catch();
        },
        addAnimal({ dispatch }, payload) {
            return axios.post(url, {form: payload.form, cliente_id: payload.cliente_id})
                .then(response => dispatch('fetchCliente', {id: payload.cliente_id}))
                .catch();
        }
    }
});

Vue.component('Container', require('./components/Container.vue'));

new Vue({
    el:'#app',
    store
});