<div class="form-group">
    {!! Form::label('name', 'Nombre del producto') !!}
    {!! Form::text('name',null, ['class' => 'form-control'] ) !!}
</div>

<div class="form-group">
    {!! Form::label('email', 'Email') !!}
    {!! Form::text('email',null, ['class' => 'form-control'] ) !!}
</div>

<div class="form-group">
    {!! Form::label('password', 'Contraseña') !!}
    {!! Form::text('password',null, ['class' => 'form-control'] ) !!}
</div>

<div class="form-group">
    {!! Form::submit('Enviar', ['class' => 'btn btn-primary'] ) !!}
</div>


