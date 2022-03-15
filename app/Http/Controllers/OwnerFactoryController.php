<?php

namespace App\Http\Controllers;

use App\Models\factory;
use App\Models\owner;
use App\Models\owner_factory;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
class OwnerFactoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function __construct()
    {
        $this->middleware('permission:factoryowner-list|factoryowner-create|factoryowner-edit|factoryowner-delete', ['only' => ['index','store','show']]);
        $this->middleware('permission:factoryowner-create', ['only' => ['create','store']]);
        $this->middleware('permission:factoryowner-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:factoryowner-delete', ['only' => ['destroy']]);
   }

    public function index(Request $request,factory $factory)
    {
        if ($request->ajax()) {

            $data = $factory->owners()->get();

            return Datatables::of($data)

                    ->addIndexColumn()

                    ->addColumn('action', function($row,$factory){

     

                           $btn = '  <a href="\\ownerFactory\\delete\\'.$factory->id.'\\'.$row->id.
                           '" class="btn btn-xs btn-primary btn-sm"><i class="glyphicon glyphicon-edit"></i> حذف</a> ';


                            return $btn;

                    })
                    ->removeColumn(['id'])

                    ->rawColumns(['action'])

                    ->make(true);
                }
                return view('layouts.factory.factory_owners.show',compact(['factory']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request,factory $factory)
    {  
       // $owners = owner::all('*');
      
       return view('layouts.factory.factory_owners.show',compact(['factory']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,owner $owner)
    {
       // dd($owner);

       
       $factory=   $request-> Session()->get('factory');
//dd( $factory);
//$factory_id=$data['factory'];
      //  $factory=factory::find($factory_id);
      if(isset( $factory))
      {
        $factory->owners()->save($owner);
        return redirect()->route('factory.show',$factory)->with('mesCreate','تم اضافة مالك منشأة بنجاح');
      }
      else{return 'error ........';}
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\owner_factory  $owner_factory
     * @return \Illuminate\Http\Response
     */
    public function show(owner_factory $owner_factory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\owner_factory  $owner_factory
     * @return \Illuminate\Http\Response
     */
    public function edit(owner_factory $owner_factory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\owner_factory  $owner_factory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, owner_factory $owner_factory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\owner_factory  $owner_factory
     * @return \Illuminate\Http\Response
     */
    public function destroy(factory $factory, owner $owner)
    {

      //  dd($factory);
        owner_factory::where('factory_id',$factory->id)
                                    ->where('owner_id',$owner->id)->delete();

                                    $data = $factory->owners()->get();

      return redirect()->route('factory.show',$factory)->with('mesCreate','تم حذف مالك منشأة بنجاح');       
       
                                //    return redirect()->view('layouts.factory.show',compact('factory','data'))->with('mesCreate','تم حذف مالك منشأة بنجاح');                      
    }



    public function search(Request $request)   {
           
                 if($request->keyword != ''){   
                        $owners = owner::where('lname','LIKE','%'.$request->keyword.'%')->get();    
      } 
           return response()->json([         'owners' => $owners      ]);  
      }
   







}
