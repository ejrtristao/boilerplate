<!-- Turma Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TURMA_ID', __('models/turmasAlunos.fields.TURMA_ID').':') !!}
    {!! Form::number('TURMA_ID', null, ['class' => 'form-control']) !!}
</div>

<!-- Aluno Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ALUNO_ID', __('models/turmasAlunos.fields.ALUNO_ID').':') !!}
    {!! Form::number('ALUNO_ID', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.turmasAlunos.index') }}" class="btn btn-light">@lang('crud.cancel')</a>
</div>
