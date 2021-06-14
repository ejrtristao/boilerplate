<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    <a class="nav-link" href="/">
        <i class=" fas fa-building"></i><span>Dashboard</span>
    </a>
</li>
<li class="{{ Request::is('admin/cursos*') ? 'active' : '' }}">
    <a href="{{ route('admin.cursos.index') }}"><i class="fa fa-edit"></i><span>@lang('models/cursos.plural')</span></a>
</li>

<li class="{{ Request::is('admin/materiais*') ? 'active' : '' }}">
    <a href="{{ route('admin.materiais.index') }}"><i class="fa fa-edit"></i><span>@lang('models/materiais.plural')</span></a>
</li>

<li class="{{ Request::is('admin/alunos*') ? 'active' : '' }}">
    <a href="{{ route('admin.alunos.index') }}"><i class="fa fa-edit"></i><span>@lang('models/alunos.plural')</span></a>
</li>

<li class="{{ Request::is('admin/turmas*') ? 'active' : '' }}">
    <a href="{{ route('admin.turmas.index') }}"><i class="fa fa-edit"></i><span>@lang('models/turmas.plural')</span></a>
</li>

<li class="{{ Request::is('admin/vendas*') ? 'active' : '' }}">
    <a href="{{ route('admin.vendas.index') }}"><i class="fa fa-edit"></i><span>@lang('models/vendas.plural')</span></a>
</li>

<!-- <li class="{{ Request::is('admin/vendasCursos*') ? 'active' : '' }}">
    <a href="{{ route('admin.vendasCursos.index') }}"><i class="fa fa-edit"></i><span>@lang('models/vendasCursos.plural')</span></a>
</li>

<li class="{{ Request::is('admin/vendasMateriais*') ? 'active' : '' }}">
    <a href="{{ route('admin.vendasMateriais.index') }}"><i class="fa fa-edit"></i><span>@lang('models/vendasMateriais.plural')</span></a>
</li>

<li class="{{ Request::is('admin/turmasAlunos*') ? 'active' : '' }}">
    <a href="{{ route('admin.turmasAlunos.index') }}"><i class="fa fa-edit"></i><span>@lang('models/turmasAlunos.plural')</span></a>
</li> -->

