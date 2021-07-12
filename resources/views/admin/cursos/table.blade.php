<div class="table-responsive">
    <table class="table" id="cursos-table">
        <thead>
            <tr>
                <th>@lang('models/cursos.fields.NOME')</th>
        <th>@lang('models/cursos.fields.VALOR')</th>
        <th>@lang('models/cursos.fields.DETALHES')</th>
        <th>@lang('models/cursos.fields.STATUS')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($cursos as $cursos)
            <tr>
                       <td>{{ $cursos->NOME }}</td>

            <td>{{ $cursos->VALOR }}</td>
            <td>{{ $cursos->DETALHES }}</td>
            <td>{{ $cursos->STATUS }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['admin.cursos.destroy', $cursos->ID], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('admin.cursos.show', [$cursos->ID]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('admin.cursos.edit', [$cursos->ID]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
