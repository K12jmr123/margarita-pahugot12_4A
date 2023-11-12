<?php
namespace App\Http\Controllers\Service;

use App\Models\userProduct;
use Illuminate\Http\Request;
class MainService
{
       // user item services
       public static function getAllUserItem()
       {
           return userProduct::all();
       }
       public static function addUserItem(Request $request)
       {
           $tmp = new userProduct();
           $tmp->product_name = $request->input('product_name');
           $tmp->product_description = $request->input('product_description');
           $tmp->product_price = $request->input('product_price');
           $tmp->product_quantity = $request->input('product_quantity');
           $tmp->product_status = $request->input('product_status');

           $tmp->save();

           return userProduct::all();
           // $arr = [
           //     "status" => 201,
           //     "message" => "Successfully Added",
           //     "timestamp" => "01/01/1002 10:10:12",
           // ];
           // return new Response($arr);
       }
       public static function updateUserItem(Request $request)
       {
           $tmp = userProduct::find($request->id);


           $tmp->product_name = $request->input('product_name');
           $tmp->product_description = $request->input('product_description');
           $tmp->product_price = $request->input('product_price');
           $tmp->product_quantity = $request->input('product_quantity');
           $tmp->product_status = $request->input('product_status');

           $tmp->save();

           return userProduct::all();
       }
       public static function deleteUserItem(Request $request)
       {
           $tmp = userProduct::find($request->id);
           $tmp->delete();
           return userProduct::all();
       }
}

?>
