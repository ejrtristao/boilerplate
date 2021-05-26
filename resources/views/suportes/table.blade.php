<div class="table-responsive">
    <table class="table" id="suportes-table">
        <thead>
            <tr>
                <th>@lang('models/suportes.fields.cliente_id')</th>
        <th>@lang('models/suportes.fields.prioridade')</th>
        <th>@lang('models/suportes.fields.produto_id')</th>
        <th>@lang('models/suportes.fields.descricao')</th>
        <th>@lang('models/suportes.fields.dataCadastro')</th>
        <th>@lang('models/suportes.fields.dataFinalizacao')</th>
        <th>@lang('models/suportes.fields.observacoes')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($suportes as $suporte)
            <tr>
                       <td>{{ $suporte->cliente_id }}</td>
            <td>{{ $suporte->prioridade }}</td>
            <td>{{ $suporte->produto_id }}</td>
            <td>{{ $suporte->descricao }}</td>
            <td>{{ $suporte->dataCadastro }}</td>
            <td>{{ $suporte->dataFinalizacao }}</td>
            <td>{{ $suporte->observacoes }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['suportes.destroy', $suporte->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('suportes.show', [$suporte->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('suportes.edit', [$suporte->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
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
