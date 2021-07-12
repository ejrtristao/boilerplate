<div class="table-responsive">
    <table class="table" id="vendasMateriais-table">
        <thead>
            <tr>
                <th>@lang('models/vendasMateriais.fields.VND_ID')</th>
        <th>@lang('models/vendasMateriais.fields.MATERIAL_ID')</th>
        <th>@lang('models/vendasMateriais.fields.VALOR')</th>
        <th>@lang('models/vendasMateriais.fields.VALOR_DESCONTO')</th>
        <th>@lang('models/vendasMateriais.fields.VALOR_TOTAL')</th>
        <th>@lang('models/vendasMateriais.fields.OBSERVACOES')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($vendasMateriais as $vendasMateriais)
            <tr>
                       <td>{{ $vendasMateriais->VND_ID }}</td>
            <td>{{ $vendasMateriais->MATERIAL_ID }}</td>
            <td>{{ $vendasMateriais->VALOR }}</td>
            <td>{{ $vendasMateriais->VALOR_DESCONTO }}</td>
            <td>{{ $vendasMateriais->VALOR_TOTAL }}</td>
            <td>{{ $vendasMateriais->OBSERVACOES }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['admin.vendasMateriais.destroy', $vendasMateriais->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('admin.vendasMateriais.show', [$vendasMateriais->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('admin.vendasMateriais.edit', [$vendasMateriais->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
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
