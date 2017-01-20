@if (isset($project))

<div class="form-group">
  <label for="name">Nombre del Proyecto</label>
  <input type="text" id="name" name="name" class="form-control" value="{{ old('name',$project->name) }}">
</div>

<div class="form-group">
  <label for="address">Dirección</label>
  <input type="text" id="address" name="address" class="form-control" value="{{ old('address', $project->address )}}">
</div>

<div class="form-group">
  <label for="phone">Teléfono</label>
  <input type="tel" id="phone" name="phone" class="form-control" value="{{ old('phone', $project->phone) }}">
</div>

<div class="form-group">
  <label for="description">Descripción</label>
  <textarea name="description" id="description" rows="8" cols="80" class="form-control" placeholder="Descripción del inmueble">{{ old('description', $project->description) }}</textarea>
</div>

<div class="form-group">
  <label for="built_area">Área construida</label>
  <div class="input-group">
    <input type="text" id="built_area" name="built_area" class="form-control" value="{{ old('built_area', $project->built_area) }}">
    <div class="input-group-addon">m<sup>2</sup></div>
  </div>
</div>

<div class="form-group">
  <label for="unit_quantity">Número de Unidades Totales<i>(inmuebles),</i> un valor de 1 a 1000</label>
  <div class="input-group">
    <input type="text" id="unit_quantity" name="unit_quantity" class="form-control" value="{{ old('unit_quantity', $project->unit_quantity) }}">
  </div>
</div>

<div class="form-group">
  <label for="left_units">Número de Unidades Restantes<i>(inmuebles),</i> un valor de 1 a 1000</label>
  <div class="input-group">
    <input type="text" id="left_units" name="left_units" class="form-control" value="{{ old('left_units', $project->left_units) }}">
  </div>
</div>

<div class="form-group">
  <label for="full_area">Área lote</label>
  <div class="input-group">
    <input type="text" id="full_area" name="full_area" class="form-control" value="{{ old('full_area', $project->full_area) }}">
    <div class="input-group-addon">m<sup>2</sup></div>
  </div>
</div>

<div class="form-group">
    <label for="properties">Añada Propiedes a su proyecto</label>
    <select class="form-control" name="property_id">
      <option value="-1">No aplica</option>
      @foreach ($properties as $property)
        <option value="{{ $property->id }}">{{ $property->name }}</option>
      @endforeach
    </select>
  </div>

<div class="form-group">
  <label for="zone">Zona</label>
  <select class="form-control" name="zone" id="zone">
    <option value="Norte" @if ($project->zone == 'Norte') selected @endif>Norte</option>
    <option value="Sur" @if ($project->zone == 'Sur') selected @endif>Sur</option>
    <option value="Occidente" @if ($project->zone == 'Occidente') selected @endif>Occidente</option>
    <option value="Centro" @if ($project->zone == 'Centro') selected @endif>Centro</option>
  </select>
</div>

<div class="form-group">
  <label for="city">Ciudad</label>
  <select class="form-control" name="city" id="city">
    <option value="Bogotá" selected>@if ($project->city == 'Bogotá') selected @endif>Bogotá</option>
    <option value="Chocontá">@if ($project->city == 'Chocontá') selected @endif>Chocontá</option>
    <option value="Machetá">@if ($project->city == 'Machetá') selected @endif>Machetá</option>
    <option value="Manta">@if ($project->city == 'Manta') selected @endif>Manta</option>
    <option value="Sesquilé">@if ($project->city == 'Sesquilé') selected @endif>Sesquilé</option>
    <option value="Suesca">@if ($project->city == 'Suesca') selected @endif>Suesca</option>
    <option value="Tibirita">@if ($project->city == 'Tibirita') selected @endif>Tibirita</option>
    <option value="Villapinzón">@if ($project->city =='Villapinzón') selected @endif>Villapinzón</option>
  </select>
</div>

<div class="form-group">
  <label for="neighborhood">Barrio</label>
  <input type="text" id="neighborhood" name="neighborhood" class="form-control" value="{{ old('neighborhood', $project->neighborhood) }}">
</div>

<h2> Incluir datos </h2>

<div class="form-group">
  <label for="property_type">Tipo de Proyecto</label>
  <select class="form-control" name="property_type_id">
    @foreach ($property_types as $type)
    @if ($type->id == $project->property_type_id)
    <option value="{{ $type->id }}" selected>{{ $type->name }}</option>
    @else
    <option value="{{ $type->id }}">{{ $type->name }}</option>
    @endif
    @endforeach
  </select>
</div>

<div class="form-group">
  <label for="use_type">Tipo de uso</label>
  <select class="form-control" name="use_type_id">
    @foreach ($use_types as $type)
    @if ($type->id == $project->use_type_id)
    <option value="{{ $type->id }}" selected>{{ $type->name }}</option>
    @else
    <option value="{{ $type->id }}">{{ $type->name }}</option>
    @endif
    @endforeach
  </select>
</div>

<div class="form-group">
  <label for="business_type">Tipo de negocio</label>
  <select class="form-control" name="business_type_id">
    @foreach ($business_types as $type)
    @if ($type->id == $project->business_type_id)
    <option value="{{ $type->id }}" selected>{{ $type->name }}</option>
    @else
    <option value="{{ $type->id }}">{{ $type->name }}</option>
    @endif
    @endforeach
  </select>
</div>

@if (!empty($project->project_images))
@foreach ($project->project_images as $image)
<input type="hidden" name="images[]" data-source="{{ route('get_project_image_path', $image->path) }}" id="{{ preg_replace('/(.png|.jpg|.jpeg|.gif)/', '', $image->path) }}" value="{{ $image->path }}">
@endforeach
@endif