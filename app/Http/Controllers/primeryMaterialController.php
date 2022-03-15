<?php

namespace App\Http\Controllers;

use App\Models\primeryMaterial;
use App\Models\Product;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
class primeryMaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function __construct()
    {
        $this->middleware('permission:primeryMaterial-list|primeryMaterial-create|primeryMaterial-edit|primeryMaterial-delete', ['only' => ['index','store','show']]);
        $this->middleware('permission:primeryMaterial-create', ['only' => ['create','store']]);
        $this->middleware('permission:primeryMaterial-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:primeryMaterial-delete', ['only' => ['destroy']]);
   }
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $data = primeryMaterial::select('*');

            return Datatables::of($data)

                    ->addIndexColumn()

                    ->addColumn('action', function($row){

                        

                           $btn = '  <a href="\\material\\create\\'.$row->id.
                           '" class="btn btn-xs btn-primary btn-sm"><i class="glyphicon glyphicon-edit"></i> اضافة</a> ';


                            return $btn;

                    })
                    ->removeColumn(['id'])

                    ->rawColumns(['action'])

                    ->make(true);

        }

       // dd(session()->get('factory'));

        return view('layouts.primeryMaterial.viewPrimeryMaterial');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $primeryMaterial =new primeryMaterial();
        
        return view('layouts.primeryMaterial.inputPrimeryMaterial',compact('primeryMaterial'));
    
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
               'hs_name'=>'',
               'describe'=>'',
               'code'=>'',
               'public_name'=>'',
               'trading_flag'=>'',
               'ammount'=>'',
               'unit'=>'',
               'note'=>'',
               
            ]
            );
           
         $data['product_id']=request()->session()->get('product')['id'];
          // dd($data);
           $primeryMaterial= primeryMaterial::create($data);
           //return $this->show($emp);
           return redirect()->route('product.show', $data['product_id'])->with('mesCreate',' تم اضافة   منتج بنجاح ');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\productStandard  $productStandard
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\productStandard  $productStandard
     * @return \Illuminate\Http\Response
     */
    public function edit(primeryMaterial $primeryMaterial)
    {
        return view('layouts.primeryMaterial.editPrimeryMaterial',compact('primeryMaterial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\productStandard  $productStandard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, primeryMaterial $primeryMaterial)
    {
        $data=   request()->validate([
            'hs_name'=>'',
            'describe'=>'',
            'code'=>'',
            'public_name'=>'',
            'trading_flag'=>'',
            'ammount'=>'',
            'unit'=>'',
            'note'=>'',
            
        ]);
    
        $primeryMaterial->update($data);
    
        return redirect()->route('product.show', $request->session()->get('product')->id)->with('mesCreate',' تم تعديل   مادة اولية بنجاح ');
         
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\productStandard  $productStandard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,primeryMaterial $primeryMaterial)
    {
        $primeryMaterial->delete();
        return redirect()->route('product.show', $request->session()->get('product')->id)->with('mesCreate',' تم حذف   مادة اولية بنجاح ');

    }
}
