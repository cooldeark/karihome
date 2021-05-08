<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\userModel;
use App\gameClickModel;
use Illuminate\Support\Facades\Session;

class kariController extends Controller
{
    

  public function index(){
    $countTimes=count(DB::table('game_click')->get());
    if($countTimes<10){
        $countTimes='0000'.$countTimes;
    }else if($countTimes>=10 && $countTimes<100){
        $countTimes='000'.$countTimes;
    }else if($countTimes>=100 && $countTimes<1000){
        $countTimes='00'.$countTimes;
    }else if($countTimes>=1000 && $countTimes<10000){
        $countTimes='0'.$countTimes;
    }else if($countTimes>=10000){
        // do nothing
    }
    $alreadyWatch=Session::get('alreadyWatch');
    return view('index',compact('countTimes','alreadyWatch'));
  }

  public function register(Request $request){
    //   dd($request->name);
        $myCreate=userModel::create([
            'name'=>$request->name,
            'sex'=>$request->sex,
            'birth'=>$request->birth,
            'identityID'=>$request->identityID,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'whichStore'=>$request->whichStore,
            'facebook_id'=>$request->FBID
        ]);
            
        $json=array(
            "status"=>200,
            "data"=>"success"
        );

        return response(json_encode($json),200);
    }


    public function roster(){
        $showOnView=array();
        $myList=DB::table('karihome_user')->get();
        foreach($myList as $index=>$value){
            
            $str = $value->name; 
            $len = mb_strlen($str,'utf-8'); 
            if($len>=6){ 
                $str1 = mb_substr($str,0,2,'utf-8'); 
                $str2 = mb_substr($str,$len-2,2,'utf-8'); 
            } else{ 
                $str1 = mb_substr($str,0,1,'utf-8'); 
                $str2 = mb_substr($str,$len-1,1,'utf-8'); 
            } 
            $nowName=$str1.'O'.$str2;
            $nowIDNum=substr_replace($value->identityID,'XXXXX',5,5);
            $nowPhone=substr_replace($value->phone,'-XXX-XXX',4,10);

            $showOnView[]=array("name"=>$nowName,"identityID"=>$nowIDNum,"phone"=>$nowPhone);
            
        }
        
        return view('roster',compact('showOnView'));
    }

    public function getBladeFBID(Request $request){
        Session::put('FBID', $request->FBId);
        
        return 'success';
    }

    public function game(){
        Session::put('alreadyWatch', 'true');
        $userFBID = Session::get('FBID');
        if($userFBID=='null'||empty($userFBID) || !isset($userFBID)){
            $countTimes=count(DB::table('game_click')->get());
            if($countTimes<10){
                $countTimes='0000'.$countTimes;
            }else if($countTimes>=10 && $countTimes<100){
                $countTimes='000'.$countTimes;
            }else if($countTimes>=100 && $countTimes<1000){
                $countTimes='00'.$countTimes;
            }else if($countTimes>=1000 && $countTimes<10000){
                $countTimes='0'.$countTimes;
            }else if($countTimes>=10000){
                // do nothing
            }
            $alreadyWatch=Session::get('alreadyWatch');
    return view('index',compact('countTimes','alreadyWatch'));
        }else{
            if(Session::get('alreadyCount')=='true'){
                //do nothing
            }else{
                Session::put('alreadyCount', 'true'); 
                $add=gameClickModel::create([
                    "create_time"=>date('Y-m-d H:i:s',time())
                ]);
            }
            
            
            return view('game',compact('userFBID'));
        }
        
    }

    public function test(){
        
        $test=gameClickModel::create([
            "create_time"=>date('Y-m-d H:i:s',time())
        ]);
    }
}
