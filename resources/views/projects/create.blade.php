@extends('layouts.app')

@section('content')

<!-- BREADCRUMBS AREA START -->
  <div class="breadcrumbs-area bread-bg-1 bg-opacity-black-70">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="breadcrumbs">
            <h2 class="breadcrumbs-title">{{ $section_text }} Proyectos</h2>
            <ul class="breadcrumbs-list">
              <li><a href="{{ url('/') }}">Inicio</a></li>
              <li><a href="{{ route('proyectos_path') }}">Proyectos</a></li>
              <li>{{ $section_text }} Proyectos</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- BREADCRUMBS AREA END -->

 <!-- Start page content -->
  <section id="page-content" class="page-wrapper">

    <!-- PROPERTIES DETAILS AREA START -->
    <div class="properties-details-area pt-50 pb-60">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="contact-messge edition bg-gray">
              <div class="leave-review form-edition">
                @include('errors._validation_errors')
		<form id="form-create-project" class="form" action="{{ route('projects_create_path') }}" method="POST">
			{{ csrf_field() }}
			@include('partials._project_form')
		</form>
                
                <div class="form-group">
                  <button type="button" class="submit-btn-1" v-on:click="createProject">
                    Guardar Cambios.
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
@stop
