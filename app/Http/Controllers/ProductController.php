<?php
    
namespace App\Http\Controllers;
    
use App\Models\Product;
use Illuminate\Http\Request;
    
class ProductController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:product-list|product-create|product-edit|product-delete', ['only' => ['index','show']]);
         $this->middleware('permission:product-create', ['only' => ['create','store']]);
         $this->middleware('permission:product-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:product-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->paginate(5);
        return view('products.index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product =new Product();
        
            return view('layouts.product.inputProduct',compact('product'));
        
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
              // 'trading_flag'=>'',
               'ammount'=>'',
               'unit'=>'',
               'note'=>'',
               
            ]
            );
           
         $data['industry_activity_id']=request()->session()->get('industry_activity')['id'];
          // dd($data);
           $product= Product::create($data);
           //return $this->show($emp);
           return redirect()->route('material.show', $data['industry_activity_id'])->with('mesCreate',' تم اضافة   منتج بنجاح ');

    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $primeryMaterials=$product->primeryMaterial()->get();
        return view('layouts.product.showProducts',compact('product','primeryMaterials'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('layouts.product.editProduct',compact('product'));
        
        
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
      $data=   request()->validate([
            'hs_name'=>'',
            'describe'=>'',
            'code'=>'',
            'public_name'=>'',
           // 'trading_flag'=>'',
            'ammount'=>'',
            'unit'=>'',
            'note'=>'',
            
        ]);
    
        $product->update($data);
    
        return redirect()->route('material.show', $request->session()->get('industry_activity')->id)->with('mesCreate',' تم تعديل   منتج بنجاح ');
         
      
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy( request $request ,Product $product)
    {
        $product->delete();
    
        return redirect()->route('material.show', $request->session()->get('industry_activity')->id)->with('mesCreate',' تم تعديل   منتج بنجاح ');

    }
}