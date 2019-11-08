<div class="form-group">
    {!! Form::label('id', 'Id Galeria') !!}
    {!! Form::text('id',null, ['class' => 'form-control'] ) !!}
</div>

<div class="form-group">
    {!! Form::label('id_product', 'Id Producto') !!}
    {!! Form::text('id_product',null, ['class' => 'form-control'] ) !!}
</div>

<div class="form-group">
    {!! Form::label('url', 'URL') !!}
    {!! Form::text('url',null, ['class' => 'form-control'] ) !!}
</div>

<div class="form-group">
    {!! Form::submit('Enviar', ['class' => 'btn btn-primary'] ) !!}
</div>


