<div class="table-responsive">
    <table class="table" id="turmas-table">
        <thead>
            <tr>
                <th>@lang('models/turmas.fields.PROFESSOR_ID')</th>
        <th>@lang('models/turmas.fields.NOME')</th>
        <th>@lang('models/turmas.fields.DATA_INICIO')</th>
        <th>@lang('models/turmas.fields.DATA_TERMINO')</th>
        <th>@lang('models/turmas.fields.STATUS')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($turmas as $turmas)
            <tr>
                       <td>{{ $turmas->PROFESSOR_ID }}</td>
            <td>{{ $turmas->NOME }}</td>
            <td>{{ $turmas->DATA_INICIO }}</td>
            <td>{{ $turmas->DATA_TERMINO }}</td>
            <td>{{ $turmas->STATUS }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['admin.turmas.destroy', $turmas->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('admin.turmas.show', [$turmas->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('admin.turmas.edit', [$turmas->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
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
