

<!-- Pessoa Field -->
<div class="form-group col-6">
    {!! Form::label('PESSOA', __('models/clientes.fields.PESSOA').':') !!}
    {!! Form::select('PESSOA', ['1' => 'Jurídica', '2' => 'Física'], null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Field -->
<div class="form-group col-6">
    {!! Form::label('TIPO', __('models/clientes.fields.TIPO').':') !!}
    {!! Form::select('TIPO', ['CLIENTE' => 'CLIENTE', 'PRESTADOR' => 'PRESTADOR'], null, ['class' => 'form-control']) !!}  
</div>




<!-- Nomeclie Field -->
<div class="form-group col-sm-6 col-">
    {!! Form::label('NOMECLIE', __('models/clientes.fields.NOMECLIE').':') !!}
    {!! Form::text('NOMECLIE', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Apelido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('APELIDO', __('models/clientes.fields.APELIDO').':') !!}
    {!! Form::text('APELIDO', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Cnpjcpf Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CNPJCPF', __('models/clientes.fields.CNPJCPF').':') !!}
    <input type="text" name="CNPJCPF" class="form-control" onfocus="javascript: retirarFormatacao(this);" onblur="javascript: formatarCNPJCPF(this);" maxlength="14"/>
</div>

<!-- Inscricaoestadualrg Field -->
<div class="form-group col-sm-6">
    {!! Form::label('INSCRICAOESTADUALRG', __('models/clientes.fields.INSCRICAOESTADUALRG').':') !!}
    {!! Form::text('INSCRICAOESTADUALRG', null, ['class' => 'form-control']) !!}
</div>

<!-- Rua Field -->
<div class="form-group col-sm-6">
    {!! Form::label('RUA', __('models/clientes.fields.RUA').':') !!}
    {!! Form::text('RUA', null, ['class' => 'form-control']) !!}
</div>


<!-- Numero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('NUMERO', __('models/clientes.fields.NUMERO').':') !!}
    {!! Form::text('NUMERO', null, ['class' => 'form-control']) !!}
</div>

<!-- Bairro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('BAIRRO', __('models/clientes.fields.BAIRRO').':') !!}
    {!! Form::text('BAIRRO', null, ['class' => 'form-control']) !!}
</div>


<!-- Complemento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('COMPLEMENTO', __('models/clientes.fields.COMPLEMENTO').':') !!}
    {!! Form::text('COMPLEMENTO', null, ['class' => 'form-control']) !!}
</div>

<!-- Cidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CIDADE', __('models/clientes.fields.CIDADE').':') !!}
    {!! Form::text('CIDADE', null, ['class' => 'form-control']) !!}
</div>

<!-- Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ESTADO', __('models/clientes.fields.ESTADO').':') !!}
    {!! Form::text('ESTADO', null, ['class' => 'form-control']) !!}
</div>

<!-- Cep Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CEP', __('models/clientes.fields.CEP').':') !!}
    <input type="text" name="CEP" class="form-control" onblur="formatarCEP(this)" maxlength="10"/>
</div>

<!-- Fone1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('FONE1', __('models/clientes.fields.FONE1').':') !!}
    {!! Form::text('FONE1', null, ['class' => 'form-control']) !!}
</div>

<!-- Celular Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CELULAR', __('models/clientes.fields.CELULAR').':') !!}
    {!! Form::text('CELULAR', null, ['class' => 'form-control']) !!}
</div>

<!-- Homepage Field -->
<div class="form-group col-sm-6">
    {!! Form::label('HOMEPAGE', __('models/clientes.fields.HOMEPAGE').':') !!}
    {!! Form::text('HOMEPAGE', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('EMAIL', __('models/clientes.fields.EMAIL').':') !!}
    {!! Form::email('EMAIL', null, ['class' => 'form-control']) !!}
</div>


<!-- Inativo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('INATIVO', __('models/clientes.fields.INATIVO')) !!}
    {!! Form::select('INATIVO', ['0' => 'Ativo', '-1' => 'INATIVO'], null, ['class' => 'form-control']) !!} 
    <!-- {{ Form::checkbox('INATIVO','-1',null, ['class' => 'form-control']) }} -->
</div>




<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('clientes.index') }}" class="btn btn-light">@lang('crud.cancel')</a>
</div>



@push('scripts')
    <script type="text/javascript">
        function formatarCNPJCPF(campoTexto) {
            if (campoTexto.value.length <= 11) {
                campoTexto.value = mascaraCpf(campoTexto.value);
            } else {
                campoTexto.value = mascaraCnpj(campoTexto.value);
            }   
        }
        function retirarFormatacao(campoTexto) {
            campoTexto.value = campoTexto.value.replace(/(\.|\/|\-)/g,"");
        }
        function mascaraCpf(valor) {
            return valor.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/g,"\$1.\$2.\$3\-\$4");
        }
        function mascaraCnpj(valor) {
            return valor.replace(/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/g,"\$1.\$2.\$3\/\$4\-\$5");
        }
        function formatarCEP(campoTexto){
            campoTexto.value = mascaraCEP(campoTexto.value);
        }
        function mascaraCEP(valor) {
            return valor.replace(/(\d{2})(\d{3})(\d{3})/g,"\$1.\$2\-\$3");
        }
    </script>
@endpush