<?php

namespace App\Http\Controllers;

use App\Models\record;
use App\Models\factory;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function __construct()
    {
        $this->middleware('permission:record-list|record-create|record-edit|record-delete', ['only' => ['index','store','show']]);
        $this->middleware('permission:record-create', ['only' => ['create','store']]);
        $this->middleware('permission:record-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:record-delete', ['only' => ['destroy']]);
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
    public function create(factory $factory)
    {
        
        $record =new record();
      
            return view('layouts.record.inputRecord',compact('record','factory'));
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
               
                
               'code_work'=>'',
               'record_nb'=>'required',
               'record_date'=>'',
               'industry_kind'=>'',
               'type'=>'',
               'shift_count'=>'',
               'law'=>'',
               'factory_status'=>'',
              
            ]
            );

          $factory=$request->session()->get('factory');
          $data['factory_id']=$factory->id;
           $record= record::create($data);
           //return $this->show($emp);
           return redirect()->route('factory.show', $data['factory_id'])->with('mesCreate','تم اضافة سجل صناعي للمنشأة بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\record  $record
     * @return \Illuminate\Http\Response
     */
    public function show(record $record)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\record  $record
     * @return \Illuminate\Http\Response
     */
    public function edit(factory $factory,record $record)
    {
        return view('layouts.record.editRecord',compact('record','factory'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\record  $record
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, record $record)
    {
        $data=request()->validate(
            [
                
               
               'code_work'=>'',
               'record_nb'=>'required',
               'record_date'=>'',
               'industry_kind'=>'',
               'type'=>'',
               'shift_count'=>'',
               'law'=>'',
               'factory_status'=>'',
              
            ]
            );
            $factory=$request->session()->get('factory');
            $data['factory_id']=$factory->id;
           $record->update($data);
           //return $this->show($emp);
           return redirect()->route('factory.show', $data['factory_id'])->with('mesCreate','تم تعديل سجل صناعي للمنشأة بنجاح');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\record  $record
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,record $record)
    {
        //dd($record);
        $record->delete();
        return redirect()->route('factory.show',$request->Session()->get('factory'))->with('mesCreate','تم حذف سجل صناعي للمنشأة بنجاح');

    }
}
