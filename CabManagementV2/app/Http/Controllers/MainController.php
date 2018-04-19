<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Drivers;
use App\Trip;
use App\User;

class MainController extends Controller
{
    public function customerDashboard()
    {
    	$user = Auth::user();
    	return view('homepage')->with('user',$user);
    }

    public function driverDashboard()
    {
    	$user = Auth::user();
        $trips = Trip::where('d_id','=',$user->id)->orderBy('id', 'desc')->first();
        $cust = User::where('id','=',$trips->u_id)->first();
        //get pickup and drop location address from latitude, longitude
        $url = 'http://maps.googleapis.com/maps/api/geocode/json?latlng='.trim($trips->pickup_loc_lat).','.trim($trips->pickup_loc_long).'&sensor=false';
        $json = file_get_contents($url);
        $data = json_decode($json);
        $status = $data->status;
        if($status=="OK")
        {
           $paddr = $data->results[0]->formatted_address;
        }
        else
        {
           $paddr = "invalid";
        }
        $url = 'http://maps.googleapis.com/maps/api/geocode/json?latlng='.trim($trips->drop_loc_lat).','.trim($trips->drop_loc_long).'&sensor=false';
        $json = file_get_contents($url);
        $data=json_decode($json);
        $status = $data->status;
        if($status=="OK")
        {
           $daddr = $data->results[0]->formatted_address;
        }
        else
        {
           $daddr = "invalid";
        }
    	return view('dashboard')->with('user',$user)->with('trips',$trips)->with('cust',$cust)->with('paddr',$paddr)->with('daddr',$daddr);    //find better way of rendering
    }

    public function driverdetails(Request $request)
    {
    	$user = Auth::user();
    	$d = new Drivers;
    	$d->d_id = $user->id;
    	$d->name = $request->name;
    	$d->email = $request->email;
    	$d->contact = $request->contact;
    	$d->address = $request->address;
    	$d->PAN = $request->PAN;
    	$d->license = $request->license;
    	$d->contract= $request->contract;
    	$d->save();
    	$msg = "details saved";
    	return response()->json(compact('msg'));
    }

    public function book(Request $request)
    {
        $user = Auth::user();
        $result = Drivers::where('availability_flag','=','1')->first();
        if(!empty($result))
        {
        $t = new Trip;
        $t->u_id = $user->id;
        $t->u_email = $user->email;
        $t->pickup_loc_lat = $request->plat;
        $t->pickup_loc_long = $request->plng;
        $t->drop_loc_lat = $request->dlat;
        $t->drop_loc_long = $request->dlng;
        $t->d_id = $result->d_id;
        $t->save();
        }       

    	return response()->json(compact('result'));

        //try finding driver with radial proximity too
    }

    public function changeavailability(Request $request)
    {
        $user = Auth::user();
        $res = Drivers::where('d_id','=',$user->id)->first();
        $id = $res->id;
        $r = Drivers::find($id);
        $r->availability_flag = $request->availability_flag;
        $r->save();
        $msg = $r->availability_flag;
        return response()->json(compact('msg'));
    }

    public function adminDashboard()
    {
        $t = Trip::all();
        return view('admin')->with('t',$t);
    }
}
