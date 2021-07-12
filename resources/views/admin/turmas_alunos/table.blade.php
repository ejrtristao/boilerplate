<div class="table-responsive">
    <table class="table" id="turmasAlunos-table">
        <thead>
            <tr>
                <th>@lang('models/turmasAlunos.fields.TURMA_ID')</th>
        <th>@lang('models/turmasAlunos.fields.ALUNO_ID')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($turmasAlunos as $turmasAlunos)
            <tr>
                       <td>{{ $turmasAlunos->TURMA_ID }}</td>
            <td>{{ $turmasAlunos->ALUNO_ID }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['admin.turmasAlunos.destroy', $turmasAlunos->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('admin.turmasAlunos.show', [$turmasAlunos->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('admin.turmasAlunos.edit', [$turmasAlunos->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
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
