<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ExpenseController extends Controller
{
    public function index(Request $request)
    {
        $expenses = $request->user()->expenses()->get();
        return response()->json($expenses);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'description' => 'required|string|max:191',
            'date' => 'required|date|before_or_equal:today',
            'value' => 'required|numeric|min:0',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $expense = $request->user()->expenses()->create([
            'description' => $request->description,
            'date' => $request->date,
            'value' => $request->value,
        ]);

        return response()->json($expense, 201);
    }

    public function show(Request $request, $id)
    {
        $expense = $request->user()->expenses()->findOrFail($id);
        return response()->json($expense);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'description' => 'sometimes|required|string|max:191',
            'date' => 'sometimes|required|date|before_or_equal:today',
            'value' => 'sometimes|required|numeric|min:0',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $expense = $request->user()->expenses()->findOrFail($id);
        $expense->update($request->only(['description', 'date', 'value']));

        return response()->json($expense);
    }

    public function destroy(Request $request, $id)
    {
        $expense = $request->user()->expenses()->findOrFail($id);
        $expense->delete();

        return response()->json(null, 204);
    }
}
