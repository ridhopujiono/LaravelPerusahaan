<div class="table-responsive">
    <table class="table" id="partners-table">
        <thead>
            <tr>
                <th>Foto</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($partners as $partner)
                <tr>
                    <td><img src="{{ asset($partner->foto) }}" alt="" width="100px"></td>
                    <td width="120">
                        {!! Form::open(['route' => ['partners.destroy', $partner->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('partners.show', [$partner->id]) }}" class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('partners.edit', [$partner->id]) }}" class='btn btn-default btn-xs'>
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
