<?php

namespace App\Http\Controllers;

use App\Models\factory;
use App\Models\group;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PhpParser\ErrorHandler\Collecting;

use function PHPUnit\Framework\isNull;

class FactoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function __construct()
     {
         $this->middleware('permission:factory-list|factory-create|factory-edit|factory-delete', ['only' => ['index','store','show']]);
         $this->middleware('permission:factory-create', ['only' => ['create','store']]);
         $this->middleware('permission:factory-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:factory-delete', ['only' => ['destroy']]);
         $this->middleware('permission:seaAllFactoryOfGroups', ['only' => ['factoryByGroupID']]);

         
    }


    public function index(Request $request)
    {


                                 if(Auth::user()->groupId==19){
                                              $factories = factory::select('*')->get();

                                            }else{
                            $factories = factory::select('*')->where('groupId',Auth::user()->groupId)->get();

                               //    dd($data)   ;
                                }






                        //    $btn = '  <a href="\\factory\\edit\\'.$row->id.
                        //    '" class="btn btn-xs btn-primary btn-sm"><i class="glyphicon glyphicon-edit"></i> تعديل</a> '.
                        // //   '<a href="\\factory\\delete\\'.$row->id. '" class="btn btn-danger btn-sm"  data-method="DELETE" data-confirm="Are you sure?"> حذف</a>'.
                        //    '<a href="\\factory\\show\\'.$row->id. '" class="btn btn-secondary btn-sm"   "> عرض</a>'.
                        //    '<a href="\\factory\\delete\\'.$row->id. '" class="btn btn-danger btn-sm"  data-method="DELETE" data-confirm="Are you sure?"> حذف</a>'.
                        //   //  '<button onclick="deleteItem(this)" data-id="'.$row->id. '">Delete</button>';
                        //   ' <form method="POST" action="{{route(\'record.delete\', '.$row->id. '}}">



                        //   <input name="_method" type="hidden" value="DELETE">

                    //       <button type="submit" class="btn btn-xs btn-danger btn-flat btn-sm show_confirm" data-toggle="tooltip" title=\'Delete\'>Delete</button>

                    //   </form>';


                                  $groups=group::all();
                                 // dd($groups);


        return view('layouts.factory.index',compact(['factories','groups']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $factory =new factory();

            return view('layouts.factory.inputFactory',compact('factory'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       if(Auth::check()){
        $data=request()->validate(
            [
                'nb'=>'required',
                'name'=>'required',
               'governorate'=>'',
               'address'=>'',
               'phone'=>'',
               'kayan_kanony'=>'',
               'machine_value'=>'',
               'mony'=>'',
               'mail_count_edary'=>'',
               'fmail_count_edary'=>'',
               'mail_count_entage'=>'',
               'fmail_count_entage'=>'',
               'water_consume'=>'',
               'electric_consume'=>'',
               'elec_unit'=>'',
               'fuel_consume'=>'',
               'fuel_unit'=>'',
               'diesel'=>'',
               'diesel_unit'=>'',
               'gaze'=>'',
               'gaze_unit'=>'',
               'oil_grease_consume'=>'',
               'oil_grease_unit'=>'',
               'factory_status'=>'',
               'factory_mode'=>'',


            ]
            );


           $groupid=auth()->user()->groupId;
          $data['groupId']=$groupid;
           $factory= factory::create($data);
         //  return  $factory;
          return redirect()->route('factories')->with('mesCreate','تم اضافة  منشأة بنجاح');
        }
        else return "not register";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\factory  $factory
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,factory $factory)
    {
      if(Auth::user()->groupId!=19)
      {
        $fa = factory::select('*')->where('groupId',Auth::user()->groupId)
        ->where('id',$factory->id)
       ->first()
        ;
    //   dd((!$fa));
if(!$fa)
  return "ليس لديك صلاحية ";
      }
        $request->session()->put('factory',$factory);
        $owners = $factory->owners()->get();
        $records= $factory->records()->get();
      //  $activities=$factory->records()->activities()->get();


        return view('layouts.factory.show2',compact('factory','owners','records'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\factory  $factory
     * @return \Illuminate\Http\Response
     */
    public function edit( $fact)
    {
    //   dd($fact);

      $factory=factory::find($fact);
      if(Auth::user()->groupId!=19)
      {
        $fa = factory::select('*')->where('groupId',Auth::user()->groupId)
        ->where('id',$factory->id)
       ->first()
        ;
    //   dd((!$fa));
if(!$fa)
  return "ليس لديك صلاحية ";
      }
      if(isset($factory))
      //dd($factory);
        return view('layouts.factory.editFactory',compact('factory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\factory  $factory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, factory $factory)
    {
        $data=request()->validate(
            [
                'nb'=>'required',
                'name'=>'required',
               'governorate'=>'',
               'address'=>'',
               'phone'=>'',
               'kayan_kanony'=>'',
               'machine_value'=>'',
               'mony'=>'',
               'mail_count_edary'=>'',
               'fmail_count_edary'=>'',
               'mail_count_entage'=>'',
               'fmail_count_entage'=>'',
               'water_consume'=>'',
               'electric_consume'=>'',
               'elec_unit'=>'',
               'fuel_consume'=>'',
               'fuel_unit'=>'',
               'diesel'=>'',
               'diesel_unit'=>'',
               'gaze'=>'',
               'gaze_unit'=>'',
               'oil_grease_consume'=>'',
               'oil_grease_unit'=>'',
               'factory_status'=>'',
               'factory_mode'=>'',

            ]
            );
//dd($data);
           $factory->update($data);

          // return  $factory;
           return redirect()->route('factories')->with('mesCreate','تم تعديل  منشأة بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\factory  $factory
     * @return \Illuminate\Http\Response
     */
    public function destroy(factory $factory)
    {
        $ow=factory::where('id',$factory->id)->where('groupId',Auth::user()->groupId);
        $ow->delete();
      return redirect()->route('factories')->with('mesCreate','تم حذف مالك منشأة بنجاح');
    }

    public function factoryCountByGroup()
    {
        $statistics = factory::groupBy('groupId')->select('groupId', DB::raw('count(*) as total'))->get();

      
        $noRecords=factory::doesntHave('records')
           -> groupBy('groupId')->select('groupId', DB::raw('count(*) as total'))
            ->get();
       // dd($noRecords);
       $newArray=  Array();
foreach($statistics as $st){
 // $newArray[]=$st;
 $newArray[]=[$st->groupId,$st->group->name,$st->total,0,0];

}


      for($i=0;$i<count($statistics);$i++){
        for($j=0;$j<count($noRecords);$j++){
          if($newArray[$i][0] === $noRecords[$j]["groupId"]){
        
                $newArray[$i][4]=$noRecords[$j]["total"];
                $newArray[$i][3]=$noRecords[$j]["groupId"];
          }
        }
      }
   //  dd(count( $newArray));
      return view('layouts.reports.statistics',compact('statistics','noRecords','newArray'));


    }

public function factoryByGroupID($groupID){

$factories = factory::select('*')->where('groupId',$groupID)->get();

$groups=group::all();

return view('layouts.factory.index',compact(['factories','groups','groupID']));

}




}
