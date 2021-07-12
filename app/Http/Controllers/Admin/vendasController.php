<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreatevendasRequest;
use App\Http\Requests\Admin\UpdatevendasRequest;
use App\Repositories\Admin\vendasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class vendasController extends AppBaseController
{
    /** @var  vendasRepository */
    private $vendasRepository;

    public function __construct(vendasRepository $vendasRepo)
    {
        $this->vendasRepository = $vendasRepo;
    }

    /**
     * Display a listing of the vendas.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $vendas = $this->vendasRepository->all();

        return view('admin.vendas.index')
            ->with('vendas', $vendas);
    }

    /**
     * Show the form for creating a new vendas.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.vendas.create');
    }

    /**
     * Store a newly created vendas in storage.
     *
     * @param CreatevendasRequest $request
     *
     * @return Response
     */
    public function store(CreatevendasRequest $request)
    {
        $input = $request->all();

        $vendas = $this->vendasRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/vendas.singular')]));

        return redirect(route('admin.vendas.index'));
    }

    /**
     * Display the specified vendas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $vendas = $this->vendasRepository->find($id);

        if (empty($vendas)) {
            Flash::error(__('messages.not_found', ['model' => __('models/vendas.singular')]));

            return redirect(route('admin.vendas.index'));
        }

        return view('admin.vendas.show')->with('vendas', $vendas);
    }

    /**
     * Show the form for editing the specified vendas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $vendas = $this->vendasRepository->find($id);

        if (empty($vendas)) {
            Flash::error(__('messages.not_found', ['model' => __('models/vendas.singular')]));

            return redirect(route('admin.vendas.index'));
        }

        return view('admin.vendas.edit')->with('vendas', $vendas);
    }

    /**
     * Update the specified vendas in storage.
     *
     * @param int $id
     * @param UpdatevendasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatevendasRequest $request)
    {
        $vendas = $this->vendasRepository->find($id);

        if (empty($vendas)) {
            Flash::error(__('messages.not_found', ['model' => __('models/vendas.singular')]));

            return redirect(route('admin.vendas.index'));
        }

        $vendas = $this->vendasRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/vendas.singular')]));

        return redirect(route('admin.vendas.index'));
    }

    /**
     * Remove the specified vendas from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $vendas = $this->vendasRepository->find($id);

        if (empty($vendas)) {
            Flash::error(__('messages.not_found', ['model' => __('models/vendas.singular')]));

            return redirect(route('admin.vendas.index'));
        }

        $this->vendasRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/vendas.singular')]));

        return redirect(route('admin.vendas.index'));
    }
}
