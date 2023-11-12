<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Service\MainService;
class MainController extends Controller{
    public function getAllItem(){
        return MainService::getAllUserItem();
    }
    public function addItem(Request $request){
        return MainService::addUserItem($request);
    }
    public function updateItem(Request $request){
        return MainService::updateUserItem($request);
    }
    public function deleteItem(Request $request){
        return MainService::deleteUserItem($request);
    }

}

?>
