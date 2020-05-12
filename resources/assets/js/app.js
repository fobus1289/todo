import Vue from 'vue'
import Axios from 'axios'
import {store} from './store'
import Todo from './components/Todo.vue'

window.axios = Axios
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
const token = document.head.querySelector('meta[name="csrf-token"]');
window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;

Vue.component('todo',Todo)

const app = new Vue({
    el: '#app',
    store
});
