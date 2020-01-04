/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import { Form, HasError, AlertError } from 'vform'

window.Form = Form;
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)

import VueRouter from 'vue-router'
Vue.use(VueRouter)

import VueProgressBar from 'vue-progressbar'

Vue.use(VueProgressBar, {
  color: 'rgb(143, 255, 199)',
  failedColor: 'red',
  height: '7px'
})

import Swal from 'sweetalert2'
window.Swal = Swal;

const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  onOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})

window.Toast = Toast;

window.Fire = new Vue();

let routes = [
    { path: '/dashboard', component: require('./components/Dashboard.vue').default},
    { path: '/role', component: require('./components/UserRoles.vue').default },
    { path: '/user', component: require('./components/Users.vue').default},
    { path: '/profile', component: require('./components/Profile.vue').default },
    { path: '/organisationGroup', component: require('./components/OrganisationGroup.vue').default},
    { path: '/organisationLevel', component: require('./components/OrganisationLevel.vue').default},
    { path: '/organisationUnit', component: require('./components/OrganisationUnit.vue').default},
    { path: '/financialYear', component: require('./components/FinancialYear.vue').default},
    { path: '/quarter', component: require('./components/Quarter.vue').default},
    { path: '/groupDetails', component: require('./components/GroupDetails.vue').default},
    { path: '/previewMember', component: require('./components/PreviewMember.vue').default},
    { path: '/fundReceivable', component: require('./components/FundReceivable.vue').default},
    { path: '/loans', component: require('./components/Loans.vue').default},
    { path: '/fundSource', component: require('./components/FundSourceList.vue').default},
  ]

const router = new VueRouter({
    mode: 'history',
    routes // short for `routes: routes`
  })

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router
});
