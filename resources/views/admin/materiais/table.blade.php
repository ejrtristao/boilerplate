<div class="table-responsive">
    <table class="table" id="materiais-table">
        <thead>
            <tr>
                <th>@lang('models/materiais.fields.NOME')</th>
        <th>@lang('models/materiais.fields.VALOR')</th>
        <th>@lang('models/materiais.fields.STATUS')</th>
        <th>@lang('models/materiais.fields.QUANTIDADE_ESTOQUE')</th>
        <th>@lang('models/materiais.fields.DETALHES')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($materiais as $materiais)
            <tr>
                       <td>{{ $materiais->NOME }}</td>
            <td>{{ $materiais->VALOR }}</td>
            <td>{{ $materiais->STATUS }}</td>
            <td>{{ $materiais->QUANTIDADE_ESTOQUE }}</td>
            <td>{{ $materiais->DETALHES }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['admin.materiais.destroy', $materiais->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('admin.materiais.show', [$materiais->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('admin.materiais.edit', [$materiais->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
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
