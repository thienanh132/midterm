<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Services\Models\UserModel;
use App\Services\Business\UserBusinessService;


class UserController extends Controller
{
    //Receive request from the client and validate input data for login feature
    public function index(Request $request){
        
        //Initiates a userDataService object
        $userService = new UserBusinessService();
        //Initiates a User object
        $user = new UserModel();
        //Set the properties for the user object
        $user->setTitle($request->input('firstName'));
        $user->setPosition($request->input('lastName'));
        $user->setDateStart($request->input('email'));
        $user->setDateEnd($request->input('password'));
        
        //Return the new job history porfolio result
        $isInsertedSuccess= $userService->index($user);
        if ($request->input('firstName') == "CST-256" || $request->input('lastName') == "CST-256" || $request->input('email') == "CST-256" || $request->input('password') == "CST-256")
        {
            return true;
        }
            else {
                return false;
            }
            
        if($isInsertedSuccess){
            return view('home');
        }else{
            return view('assessment');
        }
    }
    
    
    
 
}
