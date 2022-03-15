<?php

namespace App\Http\Controllers;

use App\Models\activityProduct;
use App\Models\industry_activity;
use App\Models\material;
use App\Models\primeryMaterial;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

   

    public function index(request  $request)
    {
        if ($request->ajax()) {

            $data = material_standard::select('*');

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
    public function create(primeryMaterial $primeryMaterial)
    {
       // dd($primeryMaterial);
        return view('layouts.material.inputMaterial',compact(['primeryMaterial']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $data=request()->validate(
            [
               'name'=>'required',
               'describe'=>'',
               'code'=>'',
               'public_name'=>'',
               'trading_flag'=>'',
               'ammount'=>'',
               'unit'=>'',
               'note'=>'',
               
            ]
            );
         $data['activity_product_id']=request()->session()->get('activityProduct')['id'];
         // dd($data);
           $material= material::create($data);
           //return $this->show($emp);
           return redirect()->route('product.show', $data['activity_product_id'])->with('mesCreate',' تم اضافة   مادة بنجاح ');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\material  $material
     * @return \Illuminate\Http\Response
     */
    public function show(industry_activity $industry_activity)
    {
       // dd($industry_activity);
      
        $products=$industry_activity->Products()->get();
      //  dd( $activity_product);
        return view('layouts.material.showActivityProduct',compact(['products','industry_activity']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\material  $material
     * @return \Illuminate\Http\Response
     */
    public function edit(material $material)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\material  $material
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, material $material)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\material  $material
     * @return \Illuminate\Http\Response
     */
    public function destroy(material $material)
    {
        //
    }
}
