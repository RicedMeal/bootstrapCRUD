<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //getting the data from database
        $suppliers = Supplier::latest()->paginate(5); #Supplier is from Model/Supplier.php

        return view('suppliers.index', compact('suppliers'))
            ->with(request()->input('page'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //for suppliers/create
        return view('suppliers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate the input
        $request->validate([
            'Supplier_Name' => 'required',
            'Address' => 'required',
            'Tel_No' => 'required',
            'Fax_No' => 'required',
            'Website' => 'required',
            'Contact_Person' => 'required',
            'Email' => 'required',
        ]);
        //create a new supplier info into the database: laravelfolder
        Supplier::create($request->all()); #Supplier is from Model/Supplier.php

        //redirect and send friendly message
        return redirect()->route('suppliers.index')->with('success', 'Supplier added successfully.');

        //create also an array in the Supplier.php

    }

    /**
     * Display the specified resource.
     */
    public function show(Supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Supplier $supplier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Supplier $supplier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Supplier $supplier)
    {
        //
        $supplier->delete();

        return redirect()->route('suppliers.index')
                        ->with('success','Product deleted successfully');
    }
}
