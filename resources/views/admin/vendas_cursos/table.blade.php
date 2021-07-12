<div class="table-responsive">
    <table class="table" id="vendasCursos-table">
        <thead>
            <tr>
                <th>@lang('models/vendasCursos.fields.VND_ID')</th>
        <th>@lang('models/vendasCursos.fields.CURSO_ID')</th>
        <th>@lang('models/vendasCursos.fields.VALOR')</th>
        <th>@lang('models/vendasCursos.fields.VALOR_DESCONTO')</th>
        <th>@lang('models/vendasCursos.fields.VALOR_TOTAL')</th>
        <th>@lang('models/vendasCursos.fields.OBSERVACOES')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($vendasCursos as $vendasCursos)
            <tr>
                       <td>{{ $vendasCursos->VND_ID }}</td>
            <td>{{ $vendasCursos->CURSO_ID }}</td>
            <td>{{ $vendasCursos->VALOR }}</td>
            <td>{{ $vendasCursos->VALOR_DESCONTO }}</td>
            <td>{{ $vendasCursos->VALOR_TOTAL }}</td>
            <td>{{ $vendasCursos->OBSERVACOES }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['admin.vendasCursos.destroy', $vendasCursos->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('admin.vendasCursos.show', [$vendasCursos->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('admin.vendasCursos.edit', [$vendasCursos->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
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
