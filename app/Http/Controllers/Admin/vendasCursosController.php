<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreatevendasCursosRequest;
use App\Http\Requests\Admin\UpdatevendasCursosRequest;
use App\Repositories\Admin\vendasCursosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class vendasCursosController extends AppBaseController
{
    /** @var  vendasCursosRepository */
    private $vendasCursosRepository;

    public function __construct(vendasCursosRepository $vendasCursosRepo)
    {
        $this->vendasCursosRepository = $vendasCursosRepo;
    }

    /**
     * Display a listing of the vendasCursos.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $vendasCursos = $this->vendasCursosRepository->all();

        return view('admin.vendas_cursos.index')
            ->with('vendasCursos', $vendasCursos);
    }

    /**
     * Show the form for creating a new vendasCursos.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.vendas_cursos.create');
    }

    /**
     * Store a newly created vendasCursos in storage.
     *
     * @param CreatevendasCursosRequest $request
     *
     * @return Response
     */
    public function store(CreatevendasCursosRequest $request)
    {
        $input = $request->all();

        $vendasCursos = $this->vendasCursosRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/vendasCursos.singular')]));

        return redirect(route('admin.vendasCursos.index'));
    }

    /**
     * Display the specified vendasCursos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $vendasCursos = $this->vendasCursosRepository->find($id);

        if (empty($vendasCursos)) {
            Flash::error(__('messages.not_found', ['model' => __('models/vendasCursos.singular')]));

            return redirect(route('admin.vendasCursos.index'));
        }

        return view('admin.vendas_cursos.show')->with('vendasCursos', $vendasCursos);
    }

    /**
     * Show the form for editing the specified vendasCursos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $vendasCursos = $this->vendasCursosRepository->find($id);

        if (empty($vendasCursos)) {
            Flash::error(__('messages.not_found', ['model' => __('models/vendasCursos.singular')]));

            return redirect(route('admin.vendasCursos.index'));
        }

        return view('admin.vendas_cursos.edit')->with('vendasCursos', $vendasCursos);
    }

    /**
     * Update the specified vendasCursos in storage.
     *
     * @param int $id
     * @param UpdatevendasCursosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatevendasCursosRequest $request)
    {
        $vendasCursos = $this->vendasCursosRepository->find($id);

        if (empty($vendasCursos)) {
            Flash::error(__('messages.not_found', ['model' => __('models/vendasCursos.singular')]));

            return redirect(route('admin.vendasCursos.index'));
        }

        $vendasCursos = $this->vendasCursosRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/vendasCursos.singular')]));

        return redirect(route('admin.vendasCursos.index'));
    }

    /**
     * Remove the specified vendasCursos from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $vendasCursos = $this->vendasCursosRepository->find($id);

        if (empty($vendasCursos)) {
            Flash::error(__('messages.not_found', ['model' => __('models/vendasCursos.singular')]));

            return redirect(route('admin.vendasCursos.index'));
        }

        $this->vendasCursosRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/vendasCursos.singular')]));

        return redirect(route('admin.vendasCursos.index'));
    }
}
