<div class="table-responsive">
    <table class="table" id="produtos-table">
        <thead>
            <tr>
                <th>@lang('models/produtos.fields.descricao')</th>
        <th>@lang('models/produtos.fields.inativo')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($produtos as $produtos)
            <tr>
                       <td>{{ $produtos->descricao }}</td>
            <td>{{ $produtos->inativo }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['produtos.destroy', $produtos->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('produtos.show', [$produtos->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('produtos.edit', [$produtos->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
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
