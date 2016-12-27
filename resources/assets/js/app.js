
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

//Vue Components for Frontend
const app = new Vue({
    el: '#app',
    methods: {
      deleteProperty: function(event){
        var x = confirm('Está seguro de borrar el inmueble?');
        if(x){
          $(event.currentTarget).children('form').submit();
        }
      }
      deleteProject: function(event){
        var x = confirm('Está seguro de eliminar el proyecto?');
        if(x){
          $(event.currentTarget).children('form').submit();
        }
      }
  }
});

//Select para mostrar  esconder divs
var first_name = document.getElementById('first_name');
var business_name = document.getElementById('business_name');
$('#date_legal').children('div').hide();
$('#date_natural').children('div').show();
business_name.removeAttribute("required");
$("#document_type").append('<option value="CC">Cedula Ciudadania</option>');

$('#select').on('change', function () {
    var selectValue = '#' + $(this).val();
    if (selectValue == '#natural') {
        $("#document_type option[value='RUT']").remove();
        $("#document_type option[value='NIT']").remove();
        $("#document_type").append('<option value="CC">Cedula Ciudadania</option>');
        $('#date_legal').children('div').hide();
        $('#date_natural').children('div').show();
        first_name.setAttribute('required');
        business_name.removeAttribute("required");

    }
    if (selectValue == '#legal') {
        $("#document_type option[value='CC']").remove();
        $("#document_type").append('<option value="NIT">NIT</option>');
        $("#document_type").append('<option value="RUT">RUT</option>');
        $('#date_natural').children('div').hide();
        $('#date_legal').children('div').show();
        first_name.removeAttribute("required");
        business_name.setAttribute("required");
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
});
