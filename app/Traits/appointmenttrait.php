<?php
namespace App\Traits;

use App\Appointment;
use App\Appointmentreply;
use App\Mail\AppointmentMail; 
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Carbon\Carbon;

trait appointmenttrait
{
	public function store(){

    	$data = Request()->validate([
    		'name' => 'required',
    		'email' => 'required|email',
        'location'=>'required',
    		'service' => 'required',
    
    	]);
    	$a = [];
        $a['created_at'] = Carbon::now('Asia/Kathmandu');
        $final = array_merge($a,$data);
        DB::table('appointments')->insert($final);
        Session::flash('success');
        return redirect('/');
      
  
	}

	public function addcontact(){
		return view('cd-admin.appointment.create');
	}

	public function contact(){
       $ers = Appointment::get();
    $c=DB::table('appointments')->orderBy('id','Desc')->paginate(10);
		return view('cd-admin.appointment.contact',compact('c','ers'));
	}

	public function replyform($id){
		$n=DB::table('appointments')->where('id',$id)->get()->first();
		return view('cd-admin.appointment.reply',compact('n'));
	}
	public function reply(){
    $er = Appointmentreply::all();
		$d=DB::table('appointmentreplies')->orderBy('id', 'DESC')->paginate(10);
		return view('cd-admin.appointment.viewreply',compact('d','er'));	
	}


	public function deleteinbox($id){
  	$test = DB::table('appointments')->where('id',$id)->get()->first();
    	
    	DB::table('appointments')->where('id',$id)->delete();
    	Session::flash('deletesuccess');
    	return redirect('/view-appointment');
  	}
  	public function storereply($id){
  	 $data = request()->validate([
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
            'status' => 'required'
        ]);
        $a = [];
        $a['created_at'] = Carbon::now('Asia/Kathmandu');
        $a['contact_id'] = $id;
        $final = array_merge($a,$data);
        DB::table('appointmentreplies')->insert($final);
        
         Mail::to($data['email'])->send(new AppointmentMail($data));
        return redirect('/appointment-replies');
       
  	}
  	public function deletereply($id){
  	$test = DB::table('appointmentreplies')->where('id',$id)->get()->first();
    	
    	DB::table('appointmentreplies')->where('id',$id)->delete();
    	Session::flash('deletesuccess');
    	return redirect('/appointment-replies');
  }


}
?>	