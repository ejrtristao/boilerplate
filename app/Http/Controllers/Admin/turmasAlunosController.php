<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateturmasAlunosRequest;
use App\Http\Requests\Admin\UpdateturmasAlunosRequest;
use App\Repositories\Admin\turmasAlunosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class turmasAlunosController extends AppBaseController
{
    /** @var  turmasAlunosRepository */
    private $turmasAlunosRepository;

    public function __construct(turmasAlunosRepository $turmasAlunosRepo)
    {
        $this->turmasAlunosRepository = $turmasAlunosRepo;
    }

    /**
     * Display a listing of the turmasAlunos.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $turmasAlunos = $this->turmasAlunosRepository->all();

        return view('admin.turmas_alunos.index')
            ->with('turmasAlunos', $turmasAlunos);
    }

    /**
     * Show the form for creating a new turmasAlunos.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.turmas_alunos.create');
    }

    /**
     * Store a newly created turmasAlunos in storage.
     *
     * @param CreateturmasAlunosRequest $request
     *
     * @return Response
     */
    public function store(CreateturmasAlunosRequest $request)
    {
        $input = $request->all();

        $turmasAlunos = $this->turmasAlunosRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/turmasAlunos.singular')]));

        return redirect(route('admin.turmasAlunos.index'));
    }

    /**
     * Display the specified turmasAlunos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $turmasAlunos = $this->turmasAlunosRepository->find($id);

        if (empty($turmasAlunos)) {
            Flash::error(__('messages.not_found', ['model' => __('models/turmasAlunos.singular')]));

            return redirect(route('admin.turmasAlunos.index'));
        }

        return view('admin.turmas_alunos.show')->with('turmasAlunos', $turmasAlunos);
    }

    /**
     * Show the form for editing the specified turmasAlunos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $turmasAlunos = $this->turmasAlunosRepository->find($id);

        if (empty($turmasAlunos)) {
            Flash::error(__('messages.not_found', ['model' => __('models/turmasAlunos.singular')]));

            return redirect(route('admin.turmasAlunos.index'));
        }

        return view('admin.turmas_alunos.edit')->with('turmasAlunos', $turmasAlunos);
    }

    /**
     * Update the specified turmasAlunos in storage.
     *
     * @param int $id
     * @param UpdateturmasAlunosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateturmasAlunosRequest $request)
    {
        $turmasAlunos = $this->turmasAlunosRepository->find($id);

        if (empty($turmasAlunos)) {
            Flash::error(__('messages.not_found', ['model' => __('models/turmasAlunos.singular')]));

            return redirect(route('admin.turmasAlunos.index'));
        }

        $turmasAlunos = $this->turmasAlunosRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/turmasAlunos.singular')]));

        return redirect(route('admin.turmasAlunos.index'));
    }

    /**
     * Remove the specified turmasAlunos from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $turmasAlunos = $this->turmasAlunosRepository->find($id);

        if (empty($turmasAlunos)) {
            Flash::error(__('messages.not_found', ['model' => __('models/turmasAlunos.singular')]));

            return redirect(route('admin.turmasAlunos.index'));
        }

        $this->turmasAlunosRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/turmasAlunos.singular')]));

        return redirect(route('admin.turmasAlunos.index'));
    }
}
