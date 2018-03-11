<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipoproduccion Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TipoProduccion_id', 'Tipoproduccion:') !!}
    {!! Form::select('TipoProduccion_id',$tipoproduccion, null, ['class' => 'form-control']) !!}
</div>

<!-- Tipounidad Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TipoUnidad_id', 'Tipounidad:') !!}
    {!! Form::select('TipoUnidad_id',$tipounidad, null, ['class' => 'form-control']) !!}
</div>

<!-- Destino Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Destino_id', 'Destino:') !!}
    {!! Form::select('Destino_id',$destino, null, ['class' => 'form-control']) !!}
  </div>
</div>

<!-- Precuaria Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Precuaria_id', 'Precuaria:') !!}
      {!! Form::select('Precuaria_id',$precuaria, null, ['class' => 'form-control']) !!}
  </div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('tipoAnimales.index') !!}" class="btn btn-default">Cancel</a>
</div>
