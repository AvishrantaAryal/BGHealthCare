<?php
namespace App\Traits;

use App\Location;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Carbon\Carbon;

trait locationtrait
{

	public function add(){
    	return view('cd-admin.location.addlocation');
    }
    


    public function view(){
    	  $about= DB::table('locations')->get()->first();
        return view('cd-admin.location.location',compact('about'));
    }
}
?>