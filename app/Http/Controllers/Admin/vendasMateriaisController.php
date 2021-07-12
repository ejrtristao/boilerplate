<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreatevendasMateriaisRequest;
use App\Http\Requests\Admin\UpdatevendasMateriaisRequest;
use App\Repositories\Admin\vendasMateriaisRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class vendasMateriaisController extends AppBaseController
{
    /** @var  vendasMateriaisRepository */
    private $vendasMateriaisRepository;

    public function __construct(vendasMateriaisRepository $vendasMateriaisRepo)
    {
        $this->vendasMateriaisRepository = $vendasMateriaisRepo;
    }

    /**
     * Display a listing of the vendasMateriais.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $vendasMateriais = $this->vendasMateriaisRepository->all();

        return view('admin.vendas_materiais.index')
            ->with('vendasMateriais', $vendasMateriais);
    }

    /**
     * Show the form for creating a new vendasMateriais.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.vendas_materiais.create');
    }

    /**
     * Store a newly created vendasMateriais in storage.
     *
     * @param CreatevendasMateriaisRequest $request
     *
     * @return Response
     */
    public function store(CreatevendasMateriaisRequest $request)
    {
        $input = $request->all();

        $vendasMateriais = $this->vendasMateriaisRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/vendasMateriais.singular')]));

        return redirect(route('admin.vendasMateriais.index'));
    }

    /**
     * Display the specified vendasMateriais.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $vendasMateriais = $this->vendasMateriaisRepository->find($id);

        if (empty($vendasMateriais)) {
            Flash::error(__('messages.not_found', ['model' => __('models/vendasMateriais.singular')]));

            return redirect(route('admin.vendasMateriais.index'));
        }

        return view('admin.vendas_materiais.show')->with('vendasMateriais', $vendasMateriais);
    }

    /**
     * Show the form for editing the specified vendasMateriais.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $vendasMateriais = $this->vendasMateriaisRepository->find($id);

        if (empty($vendasMateriais)) {
            Flash::error(__('messages.not_found', ['model' => __('models/vendasMateriais.singular')]));

            return redirect(route('admin.vendasMateriais.index'));
        }

        return view('admin.vendas_materiais.edit')->with('vendasMateriais', $vendasMateriais);
    }

    /**
     * Update the specified vendasMateriais in storage.
     *
     * @param int $id
     * @param UpdatevendasMateriaisRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatevendasMateriaisRequest $request)
    {
        $vendasMateriais = $this->vendasMateriaisRepository->find($id);

        if (empty($vendasMateriais)) {
            Flash::error(__('messages.not_found', ['model' => __('models/vendasMateriais.singular')]));

            return redirect(route('admin.vendasMateriais.index'));
        }

        $vendasMateriais = $this->vendasMateriaisRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/vendasMateriais.singular')]));

        return redirect(route('admin.vendasMateriais.index'));
    }

    /**
     * Remove the specified vendasMateriais from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $vendasMateriais = $this->vendasMateriaisRepository->find($id);

        if (empty($vendasMateriais)) {
            Flash::error(__('messages.not_found', ['model' => __('models/vendasMateriais.singular')]));

            return redirect(route('admin.vendasMateriais.index'));
        }

        $this->vendasMateriaisRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/vendasMateriais.singular')]));

        return redirect(route('admin.vendasMateriais.index'));
    }
}
