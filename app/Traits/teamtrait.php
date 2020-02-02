<?php
namespace App\Traits;

use App\Team;
use App\Traits\imagetrait;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Carbon\Carbon;

trait teamtrait
{
	use imagetrait;

	public function add(){
		return view('cd-admin.team.addteam');
	}

	public function edit($id){
		$team= DB::table('teams')->where('id',$id)->get()->first();
		return view('cd-admin.team.editteam',compact('team'));

	}

	public function update($id){
		  $data = $this-> updatevalidation();
        
            $test = DB::table('teams')->where('id',$id)->get()->first();
            if(isset($data['image'])){
            if (file_exists('imageupload/'.$test->image)) 
            {
                unlink('imageupload/'.$test->image);
            }


            $test = $this->insertimage($data['image']);
            $a['image'] = $test ;
            }
            $a['updated_at'] =Carbon::now('Asia/Kathmandu');
            $replace = array_replace($data,$a);

            $data = DB::table('teams')->where('id',$id)->update($replace);

        Session::flash('updatesuccess');
        return redirect('/team-view');
	}

	public function store(){
		$data = $this->insertcontrol();
        $test = $this->insertimage($data['image']);
        $a['image'] = $test;
        $a['created_at'] =Carbon::now('Asia/Kathmandu');
        $replace = array_replace($data,$a);
        DB::table('teams')->Insert($replace);
        Session::flash('success');

        return redirect('/team-view');
	}

	public function view(){
		$team = DB::table('teams')->get()->all();
        $er = Team::all();
        return view('cd-admin.team.team',compact('team','er'));
	}

	public function statusupdate($id){
		$a = [];
	  $test = DB::table('teams')->where('id',$id)->get()->first();
	    if($test->status=='active')
	        {
	            $a['status'] = 'inactive';
	        }
	    else
	        {
	            $a['status'] = 'active'; 
	        }
	    	DB::table('teams')->where('id',$id)->update($a);
	    	return redirect('/team-view');
	}

	 public function deleteteam($id){
        $test = DB::table('teams')->where('id',$id)->get()->first();
      if (file_exists('imageupload/'.$test->image)) 
      {
        unlink('imageupload/'.$test->image);
       }
      DB::table('teams')->where('id',$id)->delete();
      Session::flash('deletesuccess');
      return redirect('/team-view');
    }



	public function insertcontrol()
    {
        $request =Request()->all();
        $data =  Request()->validate([
        'summary'=>'required',
        'image' => 'required|image',
        'altimage' => 'required',
        'status'=>'required',
        'name'=>'required',
        ]);
        return $data;
    }

    public function updatevalidation()
    {
        $request =Request()->all();
        $data =  Request()->validate([
        'summary'=>'required',
        'image' => '',
        'altimage' => 'required',
        'status'=>'required',
        'name'=>'required',
        ]);
        return $data;
    }

}
?>