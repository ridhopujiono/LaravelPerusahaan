<!-- Nama Layanan Field -->
<div class="col-sm-12">
    {!! Form::label('nama_layanan', 'Nama Layanan:') !!}
    <p>{{ $layanan->nama_layanan }}</p>
</div>

<!-- Keterangan Field -->
<div class="col-sm-12">
    {!! Form::label('keterangan', 'Keterangan:') !!}
    <p>{{ $layanan->keterangan }}</p>
</div>

<!-- Foto Field -->
<div class="col-sm-12">
    {!! Form::label('foto', 'Foto:') !!}
    <p><img src="{{ asset($layanan->foto) }}" alt="" width="200px"></p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $layanan->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $layanan->updated_at }}</p>
</div>
