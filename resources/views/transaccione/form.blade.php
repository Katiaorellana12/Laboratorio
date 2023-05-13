<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('institucion_destino') }}
            {{ Form::text('institucion_destino', $transaccione->institucion_destino, ['class' => 'form-control' . ($errors->has('institucion_destino') ? ' is-invalid' : ''), 'placeholder' => 'Institucion Destino']) }}
            {!! $errors->first('institucion_destino', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numero_de_cuenta') }}
            {{ Form::text('numero_de_cuenta', $transaccione->numero_de_cuenta, ['class' => 'form-control' . ($errors->has('numero_de_cuenta') ? ' is-invalid' : ''), 'placeholder' => 'Numero De Cuenta']) }}
            {!! $errors->first('numero_de_cuenta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('monto') }}
            {{ Form::text('monto', $transaccione->monto, ['class' => 'form-control' . ($errors->has('monto') ? ' is-invalid' : ''), 'placeholder' => 'Monto']) }}
            {!! $errors->first('monto', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>