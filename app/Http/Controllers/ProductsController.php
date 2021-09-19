<?php

namespace App\Http\Controllers;
use App\Models\products;
use App\Models\User;
use App\Models\orders;
use Illuminate\Http\Request;
use Auth ;

class ProductsController extends Controller
{
    public function index() 
    {
        $products = products::get();

        return view ('products.products')->with(compact('products'));
    }

    public function cart($id='') 
    {
        $idarr = explode(",",$id);

        $idCount = array_count_values($idarr);
        
        $uid =  array_unique($idarr);

        $products = products::whereIn('id',$uid)->get();

       return view ('products.cart')->with(compact('products','idCount'));
    }

    public function checkout (Request $request)  
    {
        $productIds = $request->product_id ;
        $totalQtys = $request->total_qty ;
        $salesPrice = $request->sales_price ;
        $totalPrice = $request->total_price ;
        $products = products::get();
        $porduct_arr = [];

        foreach ($products as $product) {
            $porduct_arr[$product->id] = $product->name ; 
        }

        return view ('products.checkout')->with(compact('productIds','totalQtys','porduct_arr','totalPrice','salesPrice'));
    }

    public function placeOrder (Request $request) 
    {
        $userId = Auth::id();
        $role = User::where('id',$userId)->first();

        if (!empty($userId)) {
            if($role->role == 'customer'){
                if ($request->payment_method == 'cod') {
                
                    foreach ($request->product_id as $key => $productIdd ) {

                        $data_order_info[$key] =array(

                            'first_name'=>$request->first_name,
                            'last_name'=>$request->last_name,
                            'address'=>$request->address,
                            'mobile_number'=>$request->mobile_number,
                            'user_id'=>$userId,
                            'product_id'=>$productIdd,
                            'total_qty'=>$request->total_qty[$key],
                            'payment_amount'=>$request->sales_price[$key] * $request->total_qty[$key] ,
                            'payment_method'=>$request->payment_method,
                            'created_at'=>date('Y-m-d h:i:s')
                        );
                        
                    }
                    orders::insert($data_order_info);
                    $orders = orders::where('id',$userId)->get();
                    $message = 'Your Order Process by cash on delivery';
                    return view ('orders.order_list')->with(compact('orders','message'));
             
                } else if ($request->payment_method == 'online') {
                    $info = [
                        'amount'          => $request->amount,
                        'transaction_id'  => uniqid(),
                        'success_url'     => 'https://mydomain.com/success',
                        'fail_url'        => 'https://mydomain.com/fail',
                        'customer_name'   => $request->first_name,
                        'customer_mobile' => $request->mobile_number,
                        'purpose'         => 'Online Payment',
                        'payment_details' => 'Payment for buying 3 items'
                    ];
                    
                   $response =  $this->initiatePayment($info); 
                   $obj = json_decode($response);

                   if ($obj->code == '200') {
                        foreach ($request->product_id as $key => $productIdd ) {

                            $data_order_info[$key] =array(

                                'first_name'=>$request->first_name,
                                'last_name'=>$request->last_name,
                                'address'=>$request->address,
                                'mobile_number'=>$request->mobile_number,
                                'user_id'=>$userId,
                                'product_id'=>$productIdd,
                                'total_qty'=>$request->total_qty[$key],
                                'payment_amount'=>$request->sales_price[$key] * $request->total_qty[$key] ,
                                'payment_method'=>$request->payment_method,
                                'created_at'=>date('Y-m-d h:i:s')
                            );
                            
                        }

                        orders::insert($data_order_info);
                       
                        $message = 'Your payment success';
                        return view ('orders.order_list')->with(compact('orders','message'));
                   } else {
                         $orders = orders::where('id',$userId)->get();
                         $message = 'Your payment faild';
                       return view ('orders.order_list')->with(compact('orders','message'));
                   }
                }
            } else {
                return redirect('home');  
            }
          
        } else {
            return redirect('login');
        }

    
    }

    public function initiatePayment($info)
    {
   
        $curl = curl_init();
    
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.sheba.xyz/v1/ecom-payment/initiate',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $info,
            CURLOPT_HTTPHEADER => array(
                'client-id: 215300000',
                'client-secret: BvzPgftoG1HQyEL8hYkwGTBxCT6QEuFhm3VNEcmlpzPFPWUvWp5YdhkhJpmXzPVofLg',
                'Accept: application/json'
            ),
        ));
    
         $response = curl_exec($curl);
    
        curl_close($curl);
         return $response ;
    }
}
