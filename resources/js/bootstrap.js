import Vue from 'vue'
import axios from 'axios'
import VueRouter from 'vue-router'
import feather from 'feather-icons'
import Form from './utilities/Form'

window.Vue = Vue
Vue.use(VueRouter);
window.axios = axios
window.feather = feather;
window.Form = Form;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest'

feather.replace();
