<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    <a class="nav-link" href="home">
        <i class=" fas fa-building"></i><span>Dashboard</span>
    </a>
</li>

<li>
    <a href="{{ route('config/db/index') }}"><i class="fa fa-database"></i><span>Alterar BD</span></a>
</li>
<hr />
<li class="{{ Request::is('clientes*') ? 'active' : '' }}">
    <a href="{{ route('clientes.index') }}"><i class="fa fa-address-card"></i><span>Clientes</span></a>
</li>

<li class="{{ Request::is('produtos*') ? 'active' : '' }}">
    <a href="{{ route('produtos.index') }}"><i class="fa fa-barcode"></i><span>@lang('models/produtos.plural')</span></a>
</li>

<li class="{{ Request::is('suportes*') ? 'active' : '' }}">
    <a href="{{ route('suportes.index') }}"><i class="fa fa-headset"></i><span>@lang('models/suportes.plural')</span></a>
</li>

