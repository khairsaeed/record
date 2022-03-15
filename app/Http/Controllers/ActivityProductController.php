<?php

namespace App\Http\Controllers;

use App\Models\activityProduct;
use App\Models\industry_activity;
use App\Models\productStandard;
use Illuminate\Http\Request;

class ActivityProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

  

    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(productStandard $productStandard)
    {
       // dd($productStandard);
        return view('layouts.product.inputProduct',compact(['productStandard']));
        
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
               'ammount'=>'',
               'unit'=>'',
               'note'=>'',
               
            ]
            );
            //dd(request()->session()->get('industry_activity'));
          $data['industry_activity_id']=request()->session()->get('industry_activity')['id'];
         // dd($data);
           $activity= activityProduct::create($data);
           //return $this->show($emp);
           return redirect()->route('material.show', $data['industry_activity_id'])->with('mesCreate',' تم اضافة   منتج بنجاح ');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\activityProduct  $activityProduct
     * @return \Illuminate\Http\Response
     */
    public function show(activityProduct $activityProduct)
    {
        

        
        $materials=$activityProduct->materials()->get();
        
        return view('layouts.product.showProductStandard',compact(['materials','activityProduct']));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\activityProduct  $activityProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(activityProduct $activityProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\activityProduct  $activityProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, activityProduct $activityProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\activityProduct  $activityProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,activityProduct $activityProduct)
    {
        $activityProduct->delete();
        $industry_activity=$request->Session()->get('industry_activity');
      
        $activityProducts=$industry_activity->activityProducts()->get();
        //  dd( $activity_product);

        
          return  view('layouts.material.showActivityProduct',compact(['activityProducts','industry_activity']))->with('mesCreate',' تم حذف   منتج بنجاح ');
      }
}
