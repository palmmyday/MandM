<?php

namespace App\Http\Controllers;
use Input;
use Redirect;
use File;
use DB;
use Auth;
use App\tracking;
use Illuminate\Http\Request;
class trackingController extends Controller
{
    public function show($trackingId){
    $obj['trackingId'] = $trackingId;
    $id = DB::table('tracking')->where('trackingId',$trackingId)->value('id');
    $obj['checkId'] = $id;
    $obj['trackingstatus'] = DB::table('tracking')->where('id',$id)->value('trackingstatus');
    
    $obj['detail'] = DB::table('tracking')
                    ->where('trackingId',$id)->get();
   
    $tracking = tracking::get();
    return $tracking ? 'Model tracking Connect Yes!' : 'Error! Model tracking Connect False!!!';
 }
}
