<div class="table-responsive">
    <table class="table" id="alunos-table">
        <thead>
            <tr>
                <th>@lang('models/alunos.fields.CHV_UNG')</th>
        <th>@lang('models/alunos.fields.PESSOA')</th>
        <th>@lang('models/alunos.fields.TIPO')</th>
        <th>@lang('models/alunos.fields.TIPOCADASTRO')</th>
        <th>@lang('models/alunos.fields.CHAVREGI')</th>
        <th>@lang('models/alunos.fields.DATACADASTRO')</th>
        <th>@lang('models/alunos.fields.NOMECLIE')</th>
        <th>@lang('models/alunos.fields.APELIDO')</th>
        <th>@lang('models/alunos.fields.CNPJ')</th>
        <th>@lang('models/alunos.fields.INSCRICAOESTADUAL')</th>
        <th>@lang('models/alunos.fields.CPF')</th>
        <th>@lang('models/alunos.fields.RG')</th>
        <th>@lang('models/alunos.fields.RUA')</th>
        <th>@lang('models/alunos.fields.BAIRRO')</th>
        <th>@lang('models/alunos.fields.CIDADE')</th>
        <th>@lang('models/alunos.fields.ESTADO')</th>
        <th>@lang('models/alunos.fields.CEP')</th>
        <th>@lang('models/alunos.fields.PAIS')</th>
        <th>@lang('models/alunos.fields.FONE1')</th>
        <th>@lang('models/alunos.fields.FONE2')</th>
        <th>@lang('models/alunos.fields.FAX')</th>
        <th>@lang('models/alunos.fields.CELULAR')</th>
        <th>@lang('models/alunos.fields.HOMEPAGE')</th>
        <th>@lang('models/alunos.fields.EMAIL')</th>
        <th>@lang('models/alunos.fields.ATIVIDADEPRINCIPAL')</th>
        <th>@lang('models/alunos.fields.COMISN')</th>
        <th>@lang('models/alunos.fields.COMISSAO')</th>
        <th>@lang('models/alunos.fields.MESANIVER')</th>
        <th>@lang('models/alunos.fields.CONTATO1')</th>
        <th>@lang('models/alunos.fields.CONTATO2')</th>
        <th>@lang('models/alunos.fields.CONTATO3')</th>
        <th>@lang('models/alunos.fields.CARGOCONTATO1')</th>
        <th>@lang('models/alunos.fields.CARGOCONTATO2')</th>
        <th>@lang('models/alunos.fields.CARGOCONTATO3')</th>
        <th>@lang('models/alunos.fields.FONECONTATO1')</th>
        <th>@lang('models/alunos.fields.FONECONTATO2')</th>
        <th>@lang('models/alunos.fields.FONECONTATO3')</th>
        <th>@lang('models/alunos.fields.IMPR')</th>
        <th>@lang('models/alunos.fields.INATIVO')</th>
        <th>@lang('models/alunos.fields.CCO_PFJ')</th>
        <th>@lang('models/alunos.fields.CCV_SN')</th>
        <th>@lang('models/alunos.fields.DAT_GRV')</th>
        <th>@lang('models/alunos.fields.DAT_CAD')</th>
        <th>@lang('models/alunos.fields.DAT_ANI_FUND')</th>
        <th>@lang('models/alunos.fields.OBS')</th>
        <th>@lang('models/alunos.fields.PCT_COMIS_EMI')</th>
        <th>@lang('models/alunos.fields.PCT_COMIS_AR')</th>
        <th>@lang('models/alunos.fields.CHV_COT_TAB_VND')</th>
        <th>@lang('models/alunos.fields.STAT_VND')</th>
        <th>@lang('models/alunos.fields.VND_MAIOR')</th>
        <th>@lang('models/alunos.fields.VND_ULT_DT')</th>
        <th>@lang('models/alunos.fields.VND_ULT_VLR')</th>
        <th>@lang('models/alunos.fields.VND_MED')</th>
        <th>@lang('models/alunos.fields.VND_QTD')</th>
        <th>@lang('models/alunos.fields.TIP_VNDD')</th>
        <th>@lang('models/alunos.fields.ID_ORIG')</th>
        <th>@lang('models/alunos.fields.ID_VNDD_INT')</th>
        <th>@lang('models/alunos.fields.ID_VNDD_EXT')</th>
        <th>@lang('models/alunos.fields.UPD')</th>
        <th>@lang('models/alunos.fields.NUMERO')</th>
        <th>@lang('models/alunos.fields.COMPLEMENTO')</th>
        <th>@lang('models/alunos.fields.PONTO_REFERENCIA')</th>
        <th>@lang('models/alunos.fields.COD_MUNICIPIO')</th>
        <th>@lang('models/alunos.fields.QUALIF_SN')</th>
        <th>@lang('models/alunos.fields.Tipo_Operacao')</th>
        <th>@lang('models/alunos.fields.Taxa')</th>
        <th>@lang('models/alunos.fields.DATA_CASAMENTO')</th>
        <th>@lang('models/alunos.fields.Est_Civ')</th>
        <th>@lang('models/alunos.fields.Orig_Cli')</th>
        <th>@lang('models/alunos.fields.NUM_PASSAP')</th>
        <th>@lang('models/alunos.fields.PASSAP_VALID')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($alunos as $alunos)
            <tr>
                       <td>{{ $alunos->CHV_UNG }}</td>
            <td>{{ $alunos->PESSOA }}</td>
            <td>{{ $alunos->TIPO }}</td>
            <td>{{ $alunos->TIPOCADASTRO }}</td>
            <td>{{ $alunos->CHAVREGI }}</td>
            <td>{{ $alunos->DATACADASTRO }}</td>
            <td>{{ $alunos->NOMECLIE }}</td>
            <td>{{ $alunos->APELIDO }}</td>
            <td>{{ $alunos->CNPJ }}</td>
            <td>{{ $alunos->INSCRICAOESTADUAL }}</td>
            <td>{{ $alunos->CPF }}</td>
            <td>{{ $alunos->RG }}</td>
            <td>{{ $alunos->RUA }}</td>
            <td>{{ $alunos->BAIRRO }}</td>
            <td>{{ $alunos->CIDADE }}</td>
            <td>{{ $alunos->ESTADO }}</td>
            <td>{{ $alunos->CEP }}</td>
            <td>{{ $alunos->PAIS }}</td>
            <td>{{ $alunos->FONE1 }}</td>
            <td>{{ $alunos->FONE2 }}</td>
            <td>{{ $alunos->FAX }}</td>
            <td>{{ $alunos->CELULAR }}</td>
            <td>{{ $alunos->HOMEPAGE }}</td>
            <td>{{ $alunos->EMAIL }}</td>
            <td>{{ $alunos->ATIVIDADEPRINCIPAL }}</td>
            <td>{{ $alunos->COMISN }}</td>
            <td>{{ $alunos->COMISSAO }}</td>
            <td>{{ $alunos->MESANIVER }}</td>
            <td>{{ $alunos->CONTATO1 }}</td>
            <td>{{ $alunos->CONTATO2 }}</td>
            <td>{{ $alunos->CONTATO3 }}</td>
            <td>{{ $alunos->CARGOCONTATO1 }}</td>
            <td>{{ $alunos->CARGOCONTATO2 }}</td>
            <td>{{ $alunos->CARGOCONTATO3 }}</td>
            <td>{{ $alunos->FONECONTATO1 }}</td>
            <td>{{ $alunos->FONECONTATO2 }}</td>
            <td>{{ $alunos->FONECONTATO3 }}</td>
            <td>{{ $alunos->IMPR }}</td>
            <td>{{ $alunos->INATIVO }}</td>
            <td>{{ $alunos->CCO_PFJ }}</td>
            <td>{{ $alunos->CCV_SN }}</td>
            <td>{{ $alunos->DAT_GRV }}</td>
            <td>{{ $alunos->DAT_CAD }}</td>
            <td>{{ $alunos->DAT_ANI_FUND }}</td>
            <td>{{ $alunos->OBS }}</td>
            <td>{{ $alunos->PCT_COMIS_EMI }}</td>
            <td>{{ $alunos->PCT_COMIS_AR }}</td>
            <td>{{ $alunos->CHV_COT_TAB_VND }}</td>
            <td>{{ $alunos->STAT_VND }}</td>
            <td>{{ $alunos->VND_MAIOR }}</td>
            <td>{{ $alunos->VND_ULT_DT }}</td>
            <td>{{ $alunos->VND_ULT_VLR }}</td>
            <td>{{ $alunos->VND_MED }}</td>
            <td>{{ $alunos->VND_QTD }}</td>
            <td>{{ $alunos->TIP_VNDD }}</td>
            <td>{{ $alunos->ID_ORIG }}</td>
            <td>{{ $alunos->ID_VNDD_INT }}</td>
            <td>{{ $alunos->ID_VNDD_EXT }}</td>
            <td>{{ $alunos->UPD }}</td>
            <td>{{ $alunos->NUMERO }}</td>
            <td>{{ $alunos->COMPLEMENTO }}</td>
            <td>{{ $alunos->PONTO_REFERENCIA }}</td>
            <td>{{ $alunos->COD_MUNICIPIO }}</td>
            <td>{{ $alunos->QUALIF_SN }}</td>
            <td>{{ $alunos->Tipo_Operacao }}</td>
            <td>{{ $alunos->Taxa }}</td>
            <td>{{ $alunos->DATA_CASAMENTO }}</td>
            <td>{{ $alunos->Est_Civ }}</td>
            <td>{{ $alunos->Orig_Cli }}</td>
            <td>{{ $alunos->NUM_PASSAP }}</td>
            <td>{{ $alunos->PASSAP_VALID }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['admin.alunos.destroy', $alunos->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('admin.alunos.show', [$alunos->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('admin.alunos.edit', [$alunos->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
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
