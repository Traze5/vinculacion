<table class="table table-responsive" id="pais-table">
    <thead>
        <tr>
            <th>Nombre</th>
        <th>Nacionalidad</th>
            <th colspan="3">Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($pais as $pais)
        <tr>
            <td>{!! $pais->nombre !!}</td>
            <td>{!! $pais->nacionalidad !!}</td>
            <td>
                {!! Form::open(['route' => ['pais.destroy', $pais->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('pais.show', [$pais->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('pais.edit', [$pais->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
