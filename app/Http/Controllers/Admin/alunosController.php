<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreatealunosRequest;
use App\Http\Requests\Admin\UpdatealunosRequest;
use App\Repositories\Admin\alunosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class alunosController extends AppBaseController
{
    /** @var  alunosRepository */
    private $alunosRepository;

    public function __construct(alunosRepository $alunosRepo)
    {
        $this->alunosRepository = $alunosRepo;
    }

    /**
     * Display a listing of the alunos.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $alunos = $this->alunosRepository->all();

        return view('admin.alunos.index')
            ->with('alunos', $alunos);
    }

    /**
     * Show the form for creating a new alunos.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.alunos.create');
    }

    /**
     * Store a newly created alunos in storage.
     *
     * @param CreatealunosRequest $request
     *
     * @return Response
     */
    public function store(CreatealunosRequest $request)
    {
        $input = $request->all();

        $alunos = $this->alunosRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/alunos.singular')]));

        return redirect(route('admin.alunos.index'));
    }

    /**
     * Display the specified alunos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $alunos = $this->alunosRepository->find($id);

        if (empty($alunos)) {
            Flash::error(__('messages.not_found', ['model' => __('models/alunos.singular')]));

            return redirect(route('admin.alunos.index'));
        }

        return view('admin.alunos.show')->with('alunos', $alunos);
    }

    /**
     * Show the form for editing the specified alunos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $alunos = $this->alunosRepository->find($id);

        if (empty($alunos)) {
            Flash::error(__('messages.not_found', ['model' => __('models/alunos.singular')]));

            return redirect(route('admin.alunos.index'));
        }

        return view('admin.alunos.edit')->with('alunos', $alunos);
    }

    /**
     * Update the specified alunos in storage.
     *
     * @param int $id
     * @param UpdatealunosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatealunosRequest $request)
    {
        $alunos = $this->alunosRepository->find($id);

        if (empty($alunos)) {
            Flash::error(__('messages.not_found', ['model' => __('models/alunos.singular')]));

            return redirect(route('admin.alunos.index'));
        }

        $alunos = $this->alunosRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/alunos.singular')]));

        return redirect(route('admin.alunos.index'));
    }

    /**
     * Remove the specified alunos from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $alunos = $this->alunosRepository->find($id);

        if (empty($alunos)) {
            Flash::error(__('messages.not_found', ['model' => __('models/alunos.singular')]));

            return redirect(route('admin.alunos.index'));
        }

        $this->alunosRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/alunos.singular')]));

        return redirect(route('admin.alunos.index'));
    }
}
