<?php

namespace App\Http\Controllers\Fees;

use App\Http\Requests\StoreFeeRequest;
use App\Http\Requests\UpdateFeeRequest;
use App\Models\Fee;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FeeController extends Controller
{
    /**
     * List all fees (with optional pagination)
     */
    public function index()
    {
        $fees = Fee::with(['creator', 'updater'])->paginate(20);
        return response()->json($fees);
    }

    /**
     * Store a new fee
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|unique:fees,slug',
            'amount' => 'required|numeric|min:0',
            'currency' => 'required|string|max:10',
            'description' => 'nullable|string',
            'duration_months' => 'nullable|integer|min:1',
            'active' => 'boolean',
        ]);

        // Generate unique slug if not provided
        $slug = $request->slug ?? Str::slug($request->name);
        $slug = $this->makeUniqueSlug($slug);

        $fee = Fee::create([
            'name' => $request->name,
            'slug' => $slug,
            'amount' => $request->amount,
            'currency' => $request->currency,
            'description' => $request->description,
            'duration_months' => $request->duration_months,
            'active' => $request->active ?? true,
            'created_by' => $request->user()->id,
            'updated_by' => $request->user()->id,
        ]);

        return response()->json($fee, 201);
    }

    /**
     * Show a specific fee
     */
    public function show(Fee $fee)
    {
        return response()->json($fee->load(['creator', 'updater']));
    }

    /**
     * Update an existing fee
     */
    public function update(Request $request, Fee $fee)
    {
        $request->validate([
            'name' => 'sometimes|string|max:255',
            'slug' => 'sometimes|string|unique:fees,slug,' . $fee->id,
            'amount' => 'sometimes|numeric|min:0',
            'currency' => 'sometimes|string|max:10',
            'description' => 'nullable|string',
            'duration_months' => 'nullable|integer|min:1',
            'active' => 'boolean',
        ]);

        // Handle slug uniqueness
        if ($request->has('name') || $request->has('slug')) {
            $slug = $request->slug ?? Str::slug($request->name);
            $slug = $this->makeUniqueSlug($slug, $fee->id);
            $request->merge(['slug' => $slug]);
        }

        $fee->update(array_merge(
            $request->only([
                'name',
                'slug',
                'amount',
                'currency',
                'description',
                'duration_months',
                'active'
            ]),
            ['updated_by' => $request->user()->id]
        ));

        return response()->json($fee);
    }

    /**
     * Delete a fee
     */
    public function destroy(Fee $fee)
    {
        $fee->delete();
        return response()->json(['message' => 'Fee deleted successfully.']);
    }

    /**
     * Generate a unique slug
     */
    protected function makeUniqueSlug($slug, $ignoreId = null)
    {
        $originalSlug = $slug;
        $count = 1;

        while (
            Fee::where('slug', $slug)
                ->when($ignoreId, fn($q) => $q->where('id', '!=', $ignoreId))
                ->exists()
        ) {
            $slug = $originalSlug . '-' . $count++;
        }

        return $slug;
    }
}
