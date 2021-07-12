<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreatecursosRequest;
use App\Http\Requests\Admin\UpdatecursosRequest;
use App\Repositories\Admin\cursosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class cursosController extends AppBaseController
{
    /** @var  cursosRepository */
    private $cursosRepository;

    public function __construct(cursosRepository $cursosRepo)
    {
        $this->cursosRepository = $cursosRepo;
    }

    /**
     * Display a listing of the cursos.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $cursos = $this->cursosRepository->all();

        return view('admin.cursos.index')
            ->with('cursos', $cursos);
    }

    /**
     * Show the form for creating a new cursos.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.cursos.create');
    }

    /**
     * Store a newly created cursos in storage.
     *
     * @param CreatecursosRequest $request
     *
     * @return Response
     */
    public function store(CreatecursosRequest $request)
    {
        $input = $request->all();

        $cursos = $this->cursosRepository->create($input);
        
        Flash::success(__('messages.saved', ['model' => __('models/cursos.singular')]));

        return redirect(route('admin.cursos.index'));
    }

    /**
     * Display the specified cursos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $cursos = $this->cursosRepository->find($id);

        if (empty($cursos)) {
            Flash::error(__('messages.not_found', ['model' => __('models/cursos.singular')]));

            return redirect(route('admin.cursos.index'));
        }

        return view('admin.cursos.show')->with('cursos', $cursos);
    }

    /**
     * Show the form for editing the specified cursos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $cursos = $this->cursosRepository->find($id);
        dd($cursos);
        if (empty($cursos)) {
            Flash::error(__('messages.not_found', ['model' => __('models/cursos.singular')]));

            return redirect(route('admin.cursos.index'));
        }

        return view('admin.cursos.edit')->with('cursos', $cursos);
    }

    /**
     * Update the specified cursos in storage.
     *
     * @param int $id
     * @param UpdatecursosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatecursosRequest $request)
    {
        $cursos = $this->cursosRepository->find($id);

        if (empty($cursos)) {
            Flash::error(__('messages.not_found', ['model' => __('models/cursos.singular')]));

            return redirect(route('admin.cursos.index'));
        }

        $cursos = $this->cursosRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/cursos.singular')]));

        return redirect(route('admin.cursos.index'));
    }

    /**
     * Remove the specified cursos from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $cursos = $this->cursosRepository->find($id);

        if (empty($cursos)) {
            Flash::error(__('messages.not_found', ['model' => __('models/cursos.singular')]));

            return redirect(route('admin.cursos.index'));
        }

        $this->cursosRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/cursos.singular')]));

        return redirect(route('admin.cursos.index'));
    }
}
