<?php

namespace App\Http\Controllers;

use App\Models\economic_category;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class EconomicCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

    //     if ($request->ajax()) {

    //       $data =     economic_category::select('*');
    //   //    $data =  economic_category::whereNotNull('unite')->Where('unite', '!=' ,'')->get();

    //      // dd($data);
    //         return Datatables::of($data)

    //                 ->addIndexColumn()

    //                 ->addColumn('action', function($row){

                        

    //                        $btn = '  <a href="\\activity\\create\\'.$row->id.
    //                        '" class="btn btn-xs btn-primary btn-sm"><i class="glyphicon glyphicon-edit"></i> اضافة</a> ';


    //                         return $btn;

    //                 })
    //                 ->removeColumn(['id'])

    //                 ->rawColumns(['action'])

    //                 ->make(true);

    //     }

    //    // dd(session()->get('factory'));

    $unites=economic_category::whereNotNull('unite')->Where('unite', '!=' ,'')->get();
        return view('layouts.economic.viewEconomic_category2',compact(['unites']));

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
     * @param  \App\Models\economic_category  $economic_category
     * @return \Illuminate\Http\Response
     */
    public function show(economic_category $economic_category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\economic_category  $economic_category
     * @return \Illuminate\Http\Response
     */
    public function edit(economic_category $economic_category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\economic_category  $economic_category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, economic_category $economic_category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\economic_category  $economic_category
     * @return \Illuminate\Http\Response
     */
    public function destroy(economic_category $economic_category)
    {
        //
    }
    public function getGroupss( $unite)
    { $this->groupss=  economic_category::where('groups', 'like' , $unite.'%')->get();
        $groupss['data']=  economic_category::where('groups', 'like' , $unite.'%')->get();
        return response()->json($groupss);
    }

    public function groups_change($groups)
    {       
        $chapters['data']=  economic_category::where('chapter', 'like' , $groups.'%')->get();
        return response()->json($chapters);        
    }
    
    public function chapter_change($chapter)
    {       
        $branchs['data']=  economic_category::where('branch', 'like' , $chapter.'%')->get();
      
        return response()->json($branchs);       
    }
    public function branch_change($branch)
    {      //  dd($branch)   ; 
        $thcode['data']=  economic_category::where('code', 'like' , $branch.'%')->get();
        return response()->json($thcode);   
    }
}
