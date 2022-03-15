<?php
namespace App\Http\Controllers;

use App\Models\industry_activity;
use App\Models\economic_category;
use App\Models\factory;
use App\Models\record;
use Illuminate\Http\Request;

class IndustryActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function __construct()
    {
        $this->middleware('permission:activityIndustry-list|activityIndustry-create|activityIndustry-edit|activityIndustry-delete', ['only' => ['index','store','show']]);
        $this->middleware('permission:activityIndustry-create', ['only' => ['create','store']]);
        $this->middleware('permission:activityIndustry-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:activityIndustry-delete', ['only' => ['destroy']]);
   }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
        $req=request()->validate(
            [
               'unite'=>'',
               'chapter'=>'',
               'branch'=>'',
               'groups'=>'',
               'code'=>'',
               
              
            ]
            );

            $cat= economic_category::select('type')->where('unite',$req['unite'])->get()->first();
            $category['unite']=$cat['type'];
            $cat= economic_category::select('type')->where('chapter',$req['chapter'])->get()->first();
            $category['chapter']=$cat['type'];
            $cat= economic_category::select('type')->where('branch',$req['branch'])->get()->first();
            $category['branch']=$cat['type'];
            $cat= economic_category::select('type')->where('groups',$req['groups'])->get()->first();
            $category['groups']=$cat['type'];
            $cat= economic_category::select('type')->where('code',$req['code'])->get()->first();
            $category['type']=$cat['type'];
            $category['code']=$req['code'];
            
           // dd($category);
            return view('layouts.economic.inputIndustryActivity', compact(['category']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
       
        $data=request()->validate(
            [
               'unite'=>'required',
               'chapter'=>'',
               'branch'=>'',
               'code'=>'',
               'type'=>'',
               'kind'=>'',
               'status'=>'',
               
            ]
            );
          $data['record_id']=request()->session()->get('record')['id'];
         // dd($data);
           $activity= industry_activity::create($data);
           //return $this->show($emp);
           return redirect()->route('activity.show', $data['record_id'])->with('mesCreate',' تم اضافة نشاط صناعي للمنشأة بنجاح ');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\industry_activity  $industry_activity
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,record $record)
    {
      
       // $activities=$record->activities();  //
        $activities=industry_activity::where('record_id',$record->id)->get();
        return view('layouts.economic.showIndustryActivity',compact(['record','activities']));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\industry_activity  $industry_activity
     * @return \Illuminate\Http\Response
     */
    public function edit(industry_activity $industry_activity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\industry_activity  $industry_activity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, industry_activity $industry_activity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\industry_activity  $industry_activity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,industry_activity $industry_activity)
    {
        $industry_activity->delete();
        $record=$request->Session()->get('record');
        $activities=industry_activity::where('record_id',$record->id)->get();
        
        //return view('layouts.economic.showIndustryActivity',compact(['record','activities']))->with('mesCreate','تم حذف نشاط صناعي للمنشأة بنجاح');
        return redirect()->route('activity.show',$record)->with('mesCreate','تم حذف نشاط صناعي للمنشأة بنجاح');
       // return redirect()->route('factory.show',$request->Session()->get('factory'))->with('mesCreate','تم حذف نشاط صناعي للمنشأة بنجاح');

    }
}
