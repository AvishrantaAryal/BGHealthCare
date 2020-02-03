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
    	  $lo= DB::table('locations')->get();
          $er =  Location::get();

        return view('cd-admin.location.location',compact('lo','er'));
    }

   public function store()
    {
        $a=[];
        $data = $this->insertcontrol();
        $a['created_at'] =Carbon::now('Asia/Kathmandu');
        $replace = array_replace($data,$a);
        DB::table('locations')->Insert($replace);
        Session::flash('success');
        return redirect('/location-view');
    }

    
    public function delete($id){
      DB::table('locations')->where('id',$id)->delete();
      Session::flash('deletesuccess');
      return redirect('/location-view');
    }

    public function statusupdate($id)
    {
        $a = [];
        $test = DB::table('locations')->where('id',$id)->get()->first();
        if($test->status=='active')
        {
            $a['status'] = 'inactive';
        }
        else
        {
            $a['status'] = 'active'; 
        }
        DB::table('locations')->where('id',$id)->update($a);
        return redirect('/location-view');
    }



    public function insertcontrol()
    {
        $request =Request()->all();
        $data =  Request()->validate([

        'name'=>'required',
        'status' =>'required',
        ]);
        return $data;
    }


        public function updatevalidation()
    {
         $data =  Request()->validate([
        'name'=>'required',
        'status' =>'required',

        ]);
        return $data;
    }
   }
?>