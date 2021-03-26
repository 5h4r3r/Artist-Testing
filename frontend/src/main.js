import Vue from 'vue'
import App from './App.vue'
import axios from 'axios'
import VueAxios from 'vue-axios'
import Vuelidate from 'vuelidate'

var VueScrollTo = require('vue-scrollto');
 
Vue.use(VueAxios, axios)
Vue.use(VueScrollTo)
/Vue.use(Vuelidate)
//[
//  [VueAxios, axios],
//  [VueScrollTo],
// [Vuelidate]
//].forEach(args => Vue.use(...args));

Vue.config.productionTip = false

new Vue({
  render: h => h(App),
}).$mount('#app')
