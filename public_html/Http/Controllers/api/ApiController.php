<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Category,SubCategory,Media,Brand,Product,Cart,ShippingAddress};
use App\Http\Controllers\api\AuthController;
use Validator;
use Auth;
use DataTables;
use DB;

class ApiController extends Controller{
    

    public function getCategory(Request $request){
        $data = Category::leftJoin('media', 'media.id', '=', 'categories.category_img')->where(['categories.is_active'=>1, 'categories.is_deleted'=>1])
        ->get(['categories.id','categories.title','media.url']);
    
        if($data){
            return response()->json([
                'data' => $data
            ], 200);
    
        }else{
            return response()->json([
                'message' => 'Data not found!',
            ], 201);
        }
    
    }//end of function

    public function getLanguage(Request $request){
        $data = DB::table('languages')->where('status',1)
        ->get(['id','name']);
    
        if($data){
            return response()->json([
                'data' => $data
            ], 200);
    
        }else{
            return response()->json([
                'message' => 'Data not found!',
            ], 201);
        }
    
    }//end of function

    public function getProductApi(Request $request){

        $data = Product::leftjoin('categories','categories.id','=','products.category')->leftjoin('media','media.id','=','products.book_image')->leftjoin('languages','languages.id','=','products.language')->leftjoin('book_type','book_type.id','=','products.type')->where(['products.is_deleted'=>1,'products.is_active'=>1])->get(['products.id','products.book_title','products.mrp','products.author_name','media.url as image','languages.name as language','book_type.title as book_type','products.type','products.isbn','products.stock_quantity','categories.title as category']);

        if($data){
            return response()->json([
                'data' => $data
            ], 200);
    
        }else{
            return response()->json([
                'message' => 'Data not found!',
            ], 201);
        }

    }//End of function

    public function categoryByProduct($categories) {
        $products = Product::leftJoin('categories', 'categories.id', '=', 'products.category')
            ->leftJoin('media', 'media.id', '=', 'products.book_image')
            ->leftJoin('languages', 'languages.id', '=', 'products.language')
            ->leftJoin('book_type', 'book_type.id', '=', 'products.type')
            ->where(['products.is_deleted' => 1, 'products.is_active' => 1,'products.category'=>$categories])
            ->get([
                'products.id',
                'products.book_title',
                'products.mrp',
                'products.author_name',
                'media.url as image',
                'languages.name as language',
                'book_type.title as book_type',
                'products.type',
                'products.isbn',
                'products.stock_quantity',
               

            ]);
    
        if ($products->isEmpty()) {
            return response()->json([
                'message' => 'Data not found!',
            ], 201);
        }
    
        return response()->json([
            'data' => $products
        ], 200);

    }//End of function
    
    public function categoryByProduct_filter(Request $request) {

        $query = Product::leftJoin('media', 'media.id', '=', 'products.book_image')
        ->leftJoin('languages', 'languages.id', '=', 'products.language')
        ->leftJoin('book_type', 'book_type.id', '=', 'products.type');
        if($request->language_id){
            $query->whereIn('products.language', explode(",",$request->language_id));
         }
         if($request->cat_id){
            $query->whereIn('products.category', explode(",",$request->cat_id));
         }
        $query->where(['products.is_deleted' => 1, 'products.is_active' => 1]);
        $query->select(
            'products.id',
            'products.book_title',
            'products.mrp',
            'products.author_name',
            'media.url as image',
            'languages.name as language',
            'products.language as language_id',
            'book_type.title as book_type',
            'products.category as category',
            'products.type');

            $products= $query->get();



        if($request->language_id){
           $cat_id = explode(",",$request->cat_id);
         //  $cat="->whereIn('products.category', $cat_id)";
        }
        //->orwhereIn('products.category', $cat_id)
           // ->orwhereIn('products.language', $language_id)
        //if($request->language_id){
           $language_id = explode(",",$request->language_id);
       // }
        
        $products = Product::leftJoin('categories', 'categories.id', '=', 'products.category')
            ->leftJoin('media', 'media.id', '=', 'products.book_image')
            ->leftJoin('languages', 'languages.id', '=', 'products.language')
            ->leftJoin('book_type', 'book_type.id', '=', 'products.type')
            ->where(['products.is_deleted' => 1, 'products.is_active' => 1])
            ->whereIn('products.category', $cat_id)->whereIn('products.language', $language_id)
            ->get([
                'products.id',
                'products.book_title',
                'products.mrp',
                'products.author_name',
                'media.url as image',
                'languages.name as language',
                'products.language as language_id',
                'book_type.title as book_type',
                'products.category as category',
                'products.type'
            ]);
    
        if ($products->isEmpty()) {
            return response()->json([
                'message' => 'Data not found!',
            ], 201);
        }
    
        return response()->json([
            'data' => $products
        ], 200);

    }
    public function languageByproduct_filter(Request $request) {
        $categories = explode(",",$request->language_id);
        $products = Product::leftJoin('categories', 'categories.id', '=', 'products.category')
            ->leftJoin('media', 'media.id', '=', 'products.book_image')
            ->leftJoin('languages', 'languages.id', '=', 'products.language')
            ->leftJoin('book_type', 'book_type.id', '=', 'products.type')
            ->where(['products.is_deleted' => 1, 'products.is_active' => 1])
            ->whereIn('products.language', $categories)
            ->get([
                'products.id',
                'products.book_title',
                'products.mrp',
                'products.author_name',
                'media.url as image',
                'languages.name as language',
                'book_type.title as book_type',
                'products.category as category',
                'products.type'
            ]);
    
        if ($products->isEmpty()) {
            return response()->json([
                'message' => 'Data not found!',
            ], 201);
        }
    
        return response()->json([
            'data' => $products
        ], 200);

    }

    
    public function getProductDetail(Request $request){
        $product_id = $request->product_id;
        if(!$product_id){
            return ['message'=>"Something went wrong!", 'status_code'=>201];
        }
        $products = DB::table('products')
        ->leftjoin('media','media.id','=','products.book_image')->leftjoin('languages','languages.id','=','products.language')->leftjoin('book_type','book_type.id','=','products.type')
            ->where(['products.is_deleted'=>1,'products.is_active'=>1,'products.id'=> $product_id])->first(['products.id','products.book_title','products.mrp','products.author_name','media.url as image','book_type.title as book_type','products.type','products.genre','languages.name as language','products.no_of_page','products.description','products.isbn','products.stock_quantity']);
       if ($products) {
        return response()->json([
            'data' => $products
        ], 200);
        }
        return response()->json([
            'message' => 'Data not found!',
        ], 201);
    }//end of function

    public function searchText(Request $request){
        $product_title = $request->input('product_title');
        if(is_null($product_title)){
            return ['status_code'=>201, 'message'=>'Product Not Found!'];
        }
        $product_data = Product::
        leftjoin('categories','categories.id','=','products.category')->leftjoin('media','media.id','=','products.book_image')->leftjoin('languages','languages.id','=','products.language')->leftjoin('book_type','book_type.id','=','products.type')
        ->where('products.book_title', 'like', "%$product_title%")
        ->orWhere('products.author_name', 'like', "%$product_title%")
        ->orWhere('categories.title', 'like', "%$product_title%")
        ->get(['products.id','products.book_title','products.mrp','products.author_name','media.url as image','languages.name as language','book_type.title as book_type','products.type','products.isbn','products.stock_quantity']);
        if($product_data){
            return ['status_code'=>200, 'data'=>$product_data];
        }else{
            return ['status_code'=>201, 'message'=>'Something went wrong!'];

        }

    }//end of function

    public function addToCart(Request $request) {
       
        $request->validate([
            'products' => 'required|array',
            'products.*.product_id' => 'required|exists:products,id',
            'products.*.quantity' => 'required|integer|min:1',
        ]);
        
        $user = auth()->user();
        $products = $request->input('products');
        foreach ($products as $productData) {
            $product = Product::findOrFail($productData['product_id']);
            $cartItem = Cart::where('user_id', $user->id)
                ->where('product_id', $product->id)
                ->first();
    
            if ($cartItem) {
                $cartItem->quantity += $productData['quantity'];
                $cartItem->save();
            } else {
                $cartItem = new Cart();
                $cartItem->product_id = $product->id;
                $cartItem->user_id = $user->id;
                $cartItem->quantity = $productData['quantity'];
                $cartItem->created_by = $user->id;
                $cartItem->save();
            }
        }
        return response()->json(['status_code' => 200, 'message' => 'Products added to cart successfully']);
    }//end of function


    public function getCartData(Request $request){

        $user_id = auth()->user()->id;

        $data = Cart::leftjoin('products', 'products.id', '=', 'carts.product_id')->leftjoin('media','media.id','=','products.book_image')
            ->where(['carts.is_deleted' => 1, 'carts.user_id' => $user_id])
            ->get(['carts.product_id','products.book_title', 'carts.quantity', 'media.url as image']);

        $totalPrice = 0; 

        foreach ($data as $item) {
            $item->total_price = $item->quantity * $item->price;
            $totalPrice += $item->total_price;
        }

        if ($data->isNotEmpty()) {
            return ['status_code' => 200, 'message' => 'success', 'data' => $data, 'total_price' => $totalPrice];
        } else {
            return ['status_code' => 201, 'message' => 'No Products In Cart!','data'=>null ,'total_price' => 0];
        }
    }//end of fucntion

    public function updateCartItem(Request $request) {
        $request->validate([
            'products' => 'required|array',
            'products.*.product_id' => 'required|exists:products,id',
            'products.*.quantity' => 'required|integer|min:1',
        ]);
    
        $user = auth()->user();
        $products = $request->input('products');
    
        foreach ($products as $productData) {
            $product = Product::findOrFail($productData['product_id']);
            $cartItem = Cart::where('user_id', $user->id)
                ->where('product_id', $product->id)
                ->first();
    
            if ($cartItem) {
                $cartItem->quantity = $productData['quantity'];
                $cartItem->save();
            } else {
                $cartItem = new Cart();
                $cartItem->product_id = $product->id;
                $cartItem->price = $product->mrp;
                $cartItem->user_id = $user->id;
                $cartItem->quantity = $productData['quantity'];
                $cartItem->created_by = $user->id;
                $cartItem->save();
            }
        }
        return response()->json(['status_code' => 200, 'message' => 'Products added to cart successfully']);
    }//end of function

    public function removeFromCart(Request $request){

        $userId = $request->user()->id;
        $productId = $request->productId;
        
        $cartItem = Cart::where('product_id', $productId)
                        ->where('user_id', $userId)
                        ->first();

        if ($cartItem) {
            $cartItem->delete();
            return response()->json(['message' => 'Item removed from cart', 'status_code'=>200]);
        } else {
            return response()->json(['message' => 'Item not found in cart', 'status_code'=>404]);
        }
        
    }//end of function

    public function getStates(Request $request){

        $states = DB::table('states')->get();

        if($states){
            return ['status_code'=>200, 'message'=>'success', 'data'=>$states];
        }else{
            return ['status_code'=>201, 'message'=>'Something went wrong!'];
        }

    }//end of function

    public function getCityByState(Request $request){

        $state_id = $request->state_id;
        
        $cities = DB::table('cities')->where('state_id',$state_id)->get();

        if($cities){
            return ['status_code'=>200, 'message'=>'success', 'data'=>$cities];
        }else{
            return ['status_code'=>201, 'message'=>'Something went wrong!'];
        }

    }//end of function


    public function addShipingAddress(Request $request){
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'postal_code' => 'required',
        ]);

        $shippingAddress = ShippingAddress::create($request->all());
        return response()->json(['data'=>$shippingAddress, 'status_code'=>200,'message'=>'success']);

    }//End of function

    public function showShippingAddress(Request $request){
        $id = $request->id;

        $addressData =  ShippingAddress::where('id',$id)->get();

        if($addressData){
            return ['status_code'=>200, 'data'=>$addressData];
        }else{
            return ['status_code'=>201, 'message'=> 'something went wrong!'];

        }

    }//End of function

    public function updateShippingAddress(Request $request){
     
        $id = $request->id;
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'postal_code' => 'required',
        ]);

        $shippingAddress = ShippingAddress::findOrFail($id);
        $shippingAddress->update($request->all());
        if($shippingAddress){
            return ['status_code'=>200, 'data'=>$shippingAddress, 'message'=> 'updated Successfully!'];
        }else{
            return ['status_code'=>201, 'message'=> 'something went wrong!'];

        }

    }//end of function

    public function deleteShippingAddress(Request $request){

        $id = $request->id;
        $exists = ShippingAddress::where('id', $id)->exists();
        if ($exists) {

            $shippingAddress = ShippingAddress::findOrFail($id);
            $shippingAddress->delete();

            if($shippingAddress){
                return ['status_code'=>200, 'message'=> 'Deleted Successfully!'];
            }else{
                return ['status_code'=>201, 'message'=> 'Something went wrong!'];
    
            }
        } else {
            return response()->json(['message' => 'Shipping address not found', 'status_code'=>404]);
        }
       

    }//End of function


}//End of Class

