<div class="form-group">
    {!! Form::label('id', 'Id Boutique') !!}
    {!! Form::text('id',null, ['class' => 'form-control'] ) !!}
</div>

<div class="form-group">
    {!! Form::label('nombre', 'Nombre') !!}
    {!! Form::text('nombre',null, ['class' => 'form-control'] ) !!}
</div>

<div class="form-group">
    {!! Form::label('direccion', 'Direccion') !!}
    {!! Form::text('direccion',null, ['class' => 'form-control'] ) !!}
</div>
<div class="form-group">
    {!! Form::label('email', 'Email') !!}
    {!! Form::text('email',null, ['class' => 'form-control'] ) !!}
</div>
<div class="form-group">
    {!! Form::label('telefono', 'Telefono') !!}
    {!! Form::text('telefono',null, ['class' => 'form-control'] ) !!}
</div>

<div class="form-group">
    {!! Form::submit('Enviar', ['class' => 'btn btn-primary'] ) !!}
</div>


