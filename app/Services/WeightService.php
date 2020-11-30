<?php


namespace App\Services;

use App\Models\Weight;
use Illuminate\Http\Request;

class WeightService
{
    public function getData()
    {
        $weights = Weight::orderByDesc('date')->get();

        $items = new \stdClass();
        $items->data = $weights;
        $items->average_max = round($weights->average('max'), 2);
        $items->average_min = round($weights->average('min'), 2);
        $items->average_difference = round($weights->average('different'), 2);

        return $items;
    }

    public function showData($id)
    {
        return Weight::find($id);
    }

    public function insertData(Request $request)
    {
        $item = new Weight();
        $item->fill($request->only('date', 'min', 'max'));
        $item->different = $request->input('max') - $request->input('min');
        $item->save();
    }

    public function updateData(Weight $weight, Request $request)
    {
        $weight->fill($request->only('date', 'min', 'max'));
        $weight->different = $request->input('max') - $request->input('min');
        $weight->save();
    }

    public function deleteData(Weight $weight)
    {
        $weight->delete();
    }
}
