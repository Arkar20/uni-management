require('./bootstrap');

require('alpinejs');

import Vue from "vue";

window.Vue = require("vue");

Vue.component("search-component", require("./components/SearchComponent.vue").default);

 new Vue({
    el: "#app",
});