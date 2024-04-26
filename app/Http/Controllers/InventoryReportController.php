<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Models\InventoryReport;

class InventoryReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Inertia::render('Admin/Reports/Inventory/Index', [
            'inventoryreports' => InventoryReport::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(InventoryReport $inventoryReport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InventoryReport $inventoryReport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, InventoryReport $inventoryReport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InventoryReport $inventoryReport)
    {
        //
    }
}