<?php

namespace App\Http\Controllers;

use App\Http\Requests\WeightStoreRequest;
use App\Http\Requests\WeightUpdateRequest;
use App\Models\Weight;
use App\Services\WeightService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class WeightController extends Controller
{
    /**
     * @var WeightService
     */
    private $weight_srv;

    public function __construct()
    {
        $this->weight_srv = new WeightService();
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $items = $this->weight_srv->getData();

        return view('weight.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view('weight.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param WeightStoreRequest $request
     * @return RedirectResponse
     */
    public function store(WeightStoreRequest $request)
    {
        $this->weight_srv->insertData($request);

        return redirect()->route('weight.index')->with('alert', [
            'alert' => 'success',
            'message' => 'Data successfully save!'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param string $date
     * @return View
     */
    public function show($date)
    {
        $item = $this->weight_srv->showData($date);

        return view('weight.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Weight $weight
     * @return View
     */
    public function edit(Weight $weight)
    {
        return view('weight.edit', compact('weight'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param WeightUpdateRequest $request
     * @param Weight $weight
     * @return RedirectResponse
     */
    public function update(WeightUpdateRequest $request, Weight $weight)
    {
        $this->weight_srv->updateData($weight, $request);

        return redirect()->route('weight.index')->with('alert', [
            'alert' => 'success',
            'message' => 'Data successfully updated!'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Weight $weight
     * @return RedirectResponse
     */
    public function destroy(Weight $weight)
    {
        $this->weight_srv->deleteData($weight);

        return redirect()->route('weight.index')->with('alert', [
            'alert' => 'success',
            'message' => 'Data successfully removed!'
        ]);
    }
}
