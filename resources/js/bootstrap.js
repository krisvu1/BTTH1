import axios from 'axios';
window.axios = axios;

try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');

    require('bootstrap');
} catch (e) {}

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';