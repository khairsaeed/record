<?php

namespace App\Http\Controllers;

use App\Models\productStandard;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Exports\productStandardExport;
use App\Imports\productStandardImport;
use Maatwebsite\Excel\Facades\Excel;

class ProductStandardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $data = productStandard::select('*');

            return Datatables::of($data)

                    ->addIndexColumn()

                    ->addColumn('action', function($row){

                        

                           $btn = '  <a href="\\product\\create\\'.$row->id.
                           '" class="btn btn-xs btn-primary btn-sm"><i class="glyphicon glyphicon-edit"></i> اضافة</a> ';


                            return $btn;

                    })
                    ->removeColumn(['id'])

                    ->rawColumns(['action'])

                    ->make(true);

        }

       // dd(session()->get('factory'));

        return view('layouts.product.viewProductStandard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\productStandard  $productStandard
     * @return \Illuminate\Http\Response
     */
    public function show(productStandard $productStandard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\productStandard  $productStandard
     * @return \Illuminate\Http\Response
     */
    public function edit(productStandard $productStandard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\productStandard  $productStandard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, productStandard $productStandard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\productStandard  $productStandard
     * @return \Illuminate\Http\Response
     */
    public function destroy(productStandard $productStandard)
    {
        //
    }



    public function fileImportExport()
    {
       return view('layouts.product.file-import');
    }
   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function fileImport(Request $request) 
    {
        Excel::import(new productStandardImport, $request->file('file')->store('temp'));
        return back();
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function fileExport() 
    {
        return Excel::download(new productStandardExport, 'users-collection.xlsx');
    }    






}
