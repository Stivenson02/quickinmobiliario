
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
var Dropzone = require('../../../node_modules/dropzone');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

//Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app',
    methods: {
      deleteProperty: function(event){
        var x = confirm('Está seguro de borrar el inmueble?');
        if(x){
          $(event.currentTarget).children('form').submit();
        }
      }
    }
});



Dropzone.autoDiscover = false;

$(function(){
  new Dropzone("#my-awesome-dropzone", {
    addRemoveLinks: true,
    maxFiles: 10,
    dictRemoveFile: "X",
    dictDefaultMessage: 'Arrastra las imágenes parar cargarlas'
  });
})
