<?php

namespace App\Http\Controllers;

use App\Models\owner;

use Illuminate\Http\Request;
use DataTables;

class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:owner-list|owner-create|owner-edit|owner-delete', ['only' => ['index','store','show']]);
        $this->middleware('permission:owner-create', ['only' => ['create','store']]);
        $this->middleware('permission:owner-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:owner-delete', ['only' => ['destroy']]);
   }


    public function index()
    {
        $owners = owner::all();
        return view('layouts.industry.viewOwner',compact(['owners']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $info =new owner();
    //     $pranches=posPlace2::get()->where('MainName','like',Auth::user()->branch);
    //    //dd($pranches);
    // 	$pranches2=Auth::user()->branch;
    // 	// if($pranches->isEmpty())
    // 	// {
    // 	// $pranches2=Auth::user()->branch;
    // 	// }
        return view('layouts.industry.inputOwner',compact('info'));
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
               'fname'=>'required',
               'lname'=>'',
               'fatherName'=>'',
               'khana'=>'',
               'nationalNb'=>'',
               'sex'=>'',
            ]
            );
          
           $emp= owner::create($data);
           //return $this->show($emp);
           return redirect()->route('owners')->with('mesCreate','تم اضافة مالك منشأة بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function show(owner $owner)
    {
       $info = $owner;
        return view('layouts.industry.inputOwner',compact('info'));
       

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function edit(owner $owner)
    {
       // dd($owner);
        $info = $owner;
        return view('layouts.industry.editOwner',compact('info'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, owner $owner)
    {
        $data=request()->validate(
            [
               'fname'=>'required',
               'lname'=>'',
               'fatherName'=>'',
               'khana'=>'',
               'nationalNb'=>'',
               'sex'=>'',
            ]
            );

        $owner->update($data);

      //  return $this->index();
      return redirect()->route('owners')->with('mesCreate','تم تعديل مالك منشأة بنجاح');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function destroy(owner $owner)
    {
        $ow=owner::find($owner->id);
        if($ow->factories()->count()){
            return redirect()->route('owners')->with('mesCreate','لا يمكن حذف هذا المالك لانه مرتبط ب منشات');

        }
        $ow->delete();
      return redirect()->route('owners')->with('mesCreate','تم حذف مالك منشأة بنجاح');

    }
}
