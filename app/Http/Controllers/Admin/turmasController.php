<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateturmasRequest;
use App\Http\Requests\Admin\UpdateturmasRequest;
use App\Repositories\Admin\turmasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class turmasController extends AppBaseController
{
    /** @var  turmasRepository */
    private $turmasRepository;

    public function __construct(turmasRepository $turmasRepo)
    {
        $this->turmasRepository = $turmasRepo;
    }

    /**
     * Display a listing of the turmas.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $turmas = $this->turmasRepository->all();

        return view('admin.turmas.index')
            ->with('turmas', $turmas);
    }

    /**
     * Show the form for creating a new turmas.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.turmas.create');
    }

    /**
     * Store a newly created turmas in storage.
     *
     * @param CreateturmasRequest $request
     *
     * @return Response
     */
    public function store(CreateturmasRequest $request)
    {
        $input = $request->all();

        $turmas = $this->turmasRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/turmas.singular')]));

        return redirect(route('admin.turmas.index'));
    }

    /**
     * Display the specified turmas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $turmas = $this->turmasRepository->find($id);

        if (empty($turmas)) {
            Flash::error(__('messages.not_found', ['model' => __('models/turmas.singular')]));

            return redirect(route('admin.turmas.index'));
        }

        return view('admin.turmas.show')->with('turmas', $turmas);
    }

    /**
     * Show the form for editing the specified turmas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $turmas = $this->turmasRepository->find($id);

        if (empty($turmas)) {
            Flash::error(__('messages.not_found', ['model' => __('models/turmas.singular')]));

            return redirect(route('admin.turmas.index'));
        }

        return view('admin.turmas.edit')->with('turmas', $turmas);
    }

    /**
     * Update the specified turmas in storage.
     *
     * @param int $id
     * @param UpdateturmasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateturmasRequest $request)
    {
        $turmas = $this->turmasRepository->find($id);

        if (empty($turmas)) {
            Flash::error(__('messages.not_found', ['model' => __('models/turmas.singular')]));

            return redirect(route('admin.turmas.index'));
        }

        $turmas = $this->turmasRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/turmas.singular')]));

        return redirect(route('admin.turmas.index'));
    }

    /**
     * Remove the specified turmas from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $turmas = $this->turmasRepository->find($id);

        if (empty($turmas)) {
            Flash::error(__('messages.not_found', ['model' => __('models/turmas.singular')]));

            return redirect(route('admin.turmas.index'));
        }

        $this->turmasRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/turmas.singular')]));

        return redirect(route('admin.turmas.index'));
    }
}
