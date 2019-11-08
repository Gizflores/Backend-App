<div class="form-group">
    {!! Form::label('id', 'Id_categoria') !!}
    {!! Form::text('id',null, ['class' => 'form-control'] ) !!}
</div>

<div class="form-group">
    {!! Form::label('nombre', 'Nombre') !!}
    {!! Form::text('nombre',null, ['class' => 'form-control'] ) !!}
</div>


<div class="form-group">
    {!! Form::submit('Enviar', ['class' => 'btn btn-primary'] ) !!}
</div>


