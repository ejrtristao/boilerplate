<div class="table-responsive">
    <table class="table" id="vendas-table">
        <thead>
            <tr>
                <th>@lang('models/vendas.fields.CHV_UNG')</th>
        <th>@lang('models/vendas.fields.CHV_PFJ')</th>
        <th>@lang('models/vendas.fields.DOC')</th>
        <th>@lang('models/vendas.fields.NUM_PEDIDO')</th>
        <th>@lang('models/vendas.fields.DATAEMISSAO')</th>
        <th>@lang('models/vendas.fields.DATAENTREGA')</th>
        <th>@lang('models/vendas.fields.CHV_VNDDR')</th>
        <th>@lang('models/vendas.fields.PCT_COMISSAO')</th>
        <th>@lang('models/vendas.fields.FORMA_RECTO')</th>
        <th>@lang('models/vendas.fields.STATUS')</th>
        <th>@lang('models/vendas.fields.CHV_TRANSP')</th>
        <th>@lang('models/vendas.fields.TIPOFRT')</th>
        <th>@lang('models/vendas.fields.VLRFRT')</th>
        <th>@lang('models/vendas.fields.SUBTOTAL')</th>
        <th>@lang('models/vendas.fields.PCTDESCT')</th>
        <th>@lang('models/vendas.fields.VLRDESCT')</th>
        <th>@lang('models/vendas.fields.VLRTOTAL')</th>
        <th>@lang('models/vendas.fields.ID_SNH')</th>
        <th>@lang('models/vendas.fields.DAT_CAD')</th>
        <th>@lang('models/vendas.fields.DAT_GRV')</th>
        <th>@lang('models/vendas.fields.UPD')</th>
        <th>@lang('models/vendas.fields.CONTATO')</th>
        <th>@lang('models/vendas.fields.OBS')</th>
        <th>@lang('models/vendas.fields.FIN_SN')</th>
        <th>@lang('models/vendas.fields.COMIS_PGTO_SN')</th>
        <th>@lang('models/vendas.fields.SELEC_SN')</th>
        <th>@lang('models/vendas.fields.FIDELIDADE_PONTOS')</th>
        <th>@lang('models/vendas.fields.FIDELIDADE_VLR')</th>
        <th>@lang('models/vendas.fields.VLR_CCPFJ')</th>
        <th>@lang('models/vendas.fields.VLRDESCTSUB')</th>
        <th>@lang('models/vendas.fields.PCTDESCTSUB')</th>
        <th>@lang('models/vendas.fields.Dinheiro')</th>
        <th>@lang('models/vendas.fields.Parcelado')</th>
        <th>@lang('models/vendas.fields.cheque')</th>
        <th>@lang('models/vendas.fields.cartao')</th>
        <th>@lang('models/vendas.fields.ContaCorrente')</th>
        <th>@lang('models/vendas.fields.Troco')</th>
        <th>@lang('models/vendas.fields.C_COR')</th>
        <th>@lang('models/vendas.fields.Din_SN')</th>
        <th>@lang('models/vendas.fields.Chq_SN')</th>
        <th>@lang('models/vendas.fields.Cartao_SN')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($vendas as $vendas)
            <tr>
                       <td>{{ $vendas->CHV_UNG }}</td>
            <td>{{ $vendas->CHV_PFJ }}</td>
            <td>{{ $vendas->DOC }}</td>
            <td>{{ $vendas->NUM_PEDIDO }}</td>
            <td>{{ $vendas->DATAEMISSAO }}</td>
            <td>{{ $vendas->DATAENTREGA }}</td>
            <td>{{ $vendas->CHV_VNDDR }}</td>
            <td>{{ $vendas->PCT_COMISSAO }}</td>
            <td>{{ $vendas->FORMA_RECTO }}</td>
            <td>{{ $vendas->STATUS }}</td>
            <td>{{ $vendas->CHV_TRANSP }}</td>
            <td>{{ $vendas->TIPOFRT }}</td>
            <td>{{ $vendas->VLRFRT }}</td>
            <td>{{ $vendas->SUBTOTAL }}</td>
            <td>{{ $vendas->PCTDESCT }}</td>
            <td>{{ $vendas->VLRDESCT }}</td>
            <td>{{ $vendas->VLRTOTAL }}</td>
            <td>{{ $vendas->ID_SNH }}</td>
            <td>{{ $vendas->DAT_CAD }}</td>
            <td>{{ $vendas->DAT_GRV }}</td>
            <td>{{ $vendas->UPD }}</td>
            <td>{{ $vendas->CONTATO }}</td>
            <td>{{ $vendas->OBS }}</td>
            <td>{{ $vendas->FIN_SN }}</td>
            <td>{{ $vendas->COMIS_PGTO_SN }}</td>
            <td>{{ $vendas->SELEC_SN }}</td>
            <td>{{ $vendas->FIDELIDADE_PONTOS }}</td>
            <td>{{ $vendas->FIDELIDADE_VLR }}</td>
            <td>{{ $vendas->VLR_CCPFJ }}</td>
            <td>{{ $vendas->VLRDESCTSUB }}</td>
            <td>{{ $vendas->PCTDESCTSUB }}</td>
            <td>{{ $vendas->Dinheiro }}</td>
            <td>{{ $vendas->Parcelado }}</td>
            <td>{{ $vendas->cheque }}</td>
            <td>{{ $vendas->cartao }}</td>
            <td>{{ $vendas->ContaCorrente }}</td>
            <td>{{ $vendas->Troco }}</td>
            <td>{{ $vendas->C_COR }}</td>
            <td>{{ $vendas->Din_SN }}</td>
            <td>{{ $vendas->Chq_SN }}</td>
            <td>{{ $vendas->Cartao_SN }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['admin.vendas.destroy', $vendas->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('admin.vendas.show', [$vendas->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('admin.vendas.edit', [$vendas->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
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
