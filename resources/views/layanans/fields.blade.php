<!-- Nama Layanan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_layanan', 'Nama Layanan:') !!}
    {!! Form::text('nama_layanan', null, ['class' => 'form-control']) !!}
</div>

<!-- Keterangan Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('keterangan', 'Keterangan:') !!}
    {!! Form::textarea('keterangan', null, ['class' => 'form-control']) !!}
</div>

<!-- Foto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('foto', 'Foto:') !!}
    <div class="input-group">
        <div class="custom-file">
            {!! Form::file('foto', ['class' => 'custom-file-input']) !!}
            {!! Form::label('foto', 'Choose file', ['class' => 'custom-file-label']) !!}
        </div>
    </div>
</div>
<div class="clearfix"></div>
