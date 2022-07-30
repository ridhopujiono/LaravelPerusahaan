<div class="table-responsive">
    <table class="table" id="layanans-table">
        <thead>
            <tr>
                <th>Nama Layanan</th>
                <th>Keterangan</th>
                <th>Foto</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($layanans as $layanan)
                <tr>
                    <td>{{ $layanan->nama_layanan }}</td>
                    <td>{{ $layanan->keterangan }}</td>
                    <td><img src="{{ asset($layanan->foto) }}" alt="" width="100px"></td>
                    <td width="120">
                        {!! Form::open(['route' => ['layanans.destroy', $layanan->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('layanans.show', [$layanan->id]) }}" class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('layanans.edit', [$layanan->id]) }}" class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', [
                                'type' => 'submit',
                                'class' => 'btn btn-danger btn-xs',
                                'onclick' => "return confirm('Are you sure?')",
                            ]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
