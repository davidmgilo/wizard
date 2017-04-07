
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

Vue.component('wizard', require('./components/wizard/Wizard.vue'));
Vue.component('wizard-step', require('./components/wizard/WizardStep.vue'));
Vue.component('enrollment-form-user', require('./components/enrollment/FormUser.vue'));
Vue.component('enrollment-form-person', require('./components/enrollment/FormPerson.vue'));
Vue.component('enrollment-form-test', require('./components/enrollment/FormTest.vue'));

const app = new Vue({
    el: '#app'
});
