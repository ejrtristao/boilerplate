<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreatemateriaisRequest;
use App\Http\Requests\Admin\UpdatemateriaisRequest;
use App\Repositories\Admin\materiaisRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class materiaisController extends AppBaseController
{
    /** @var  materiaisRepository */
    private $materiaisRepository;

    public function __construct(materiaisRepository $materiaisRepo)
    {
        $this->materiaisRepository = $materiaisRepo;
    }

    /**
     * Display a listing of the materiais.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $materiais = $this->materiaisRepository->all();

        return view('admin.materiais.index')
            ->with('materiais', $materiais);
    }

    /**
     * Show the form for creating a new materiais.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.materiais.create');
    }

    /**
     * Store a newly created materiais in storage.
     *
     * @param CreatemateriaisRequest $request
     *
     * @return Response
     */
    public function store(CreatemateriaisRequest $request)
    {
        $input = $request->all();

        $materiais = $this->materiaisRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/materiais.singular')]));

        return redirect(route('admin.materiais.index'));
    }

    /**
     * Display the specified materiais.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $materiais = $this->materiaisRepository->find($id);

        if (empty($materiais)) {
            Flash::error(__('messages.not_found', ['model' => __('models/materiais.singular')]));

            return redirect(route('admin.materiais.index'));
        }

        return view('admin.materiais.show')->with('materiais', $materiais);
    }

    /**
     * Show the form for editing the specified materiais.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $materiais = $this->materiaisRepository->find($id);

        if (empty($materiais)) {
            Flash::error(__('messages.not_found', ['model' => __('models/materiais.singular')]));

            return redirect(route('admin.materiais.index'));
        }

        return view('admin.materiais.edit')->with('materiais', $materiais);
    }

    /**
     * Update the specified materiais in storage.
     *
     * @param int $id
     * @param UpdatemateriaisRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatemateriaisRequest $request)
    {
        $materiais = $this->materiaisRepository->find($id);

        if (empty($materiais)) {
            Flash::error(__('messages.not_found', ['model' => __('models/materiais.singular')]));

            return redirect(route('admin.materiais.index'));
        }

        $materiais = $this->materiaisRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/materiais.singular')]));

        return redirect(route('admin.materiais.index'));
    }

    /**
     * Remove the specified materiais from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $materiais = $this->materiaisRepository->find($id);

        if (empty($materiais)) {
            Flash::error(__('messages.not_found', ['model' => __('models/materiais.singular')]));

            return redirect(route('admin.materiais.index'));
        }

        $this->materiaisRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/materiais.singular')]));

        return redirect(route('admin.materiais.index'));
    }
}
