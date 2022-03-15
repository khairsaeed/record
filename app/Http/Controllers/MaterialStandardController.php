<?php

namespace App\Http\Controllers;

use App\Models\material_standard;
use App\Models\primeryMaterial;
use App\Models\productStandard;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class MaterialStandardController extends Controller
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

                        
                        $btn = '  <a href="\\material\\create\\'.$row->id.
                        '" class="btn btn-xs btn-primary btn-sm"><i class="glyphicon glyphicon-edit"></i> اضافة</a> ';


                        
                           $btn = $btn.'  <a href="\\material\\create\\'.$row->id.
                           '" class="btn btn-xs btn-danger btn-sm"><i class="glyphicon glyphicon-delete"></i> حذف</a> ';



                            return $btn;

                    })
                    ->removeColumn(['id'])

                    ->rawColumns(['action'])

                    ->make(true);

        }

       // dd(session()->get('factory'));

       return view('layouts.material.viewMaterialStandard');
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
     * @param  \App\Models\material_standard  $material_standard
     * @return \Illuminate\Http\Response
     */
    public function show(material_standard $material_standard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\material_standard  $material_standard
     * @return \Illuminate\Http\Response
     */
    public function edit(material_standard $material_standard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\material_standard  $material_standard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, material_standard $material_standard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\material_standard  $material_standard
     * @return \Illuminate\Http\Response
     */
    public function destroy(material_standard $material_standard)
    {
        //
    }
}
