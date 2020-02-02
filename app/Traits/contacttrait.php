<?php
namespace App\Traits;

use App\Contact;
use App\Reply;
use App\Mail\ContactFormMail; 
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Carbon\Carbon;

trait contacttrait
{
	public function store(){

    	$data = Request()->validate([
    		'name' => 'required',
    		'email' => 'required|email',
    		'message' => 'required',
    
    	]);
    	$a = [];
        $a['created_at'] = Carbon::now('Asia/Kathmandu');
        $final = array_merge($a,$data);
        DB::table('contacts')->insert($final);
      
  
	}

	public function addcontact(){
		return view('cd-admin.contact.create');
	}

	public function contact(){
       $ers = Contact::get();
    $c=DB::table('contacts')->orderBy('id','Desc')->paginate(10);
		return view('cd-admin.contact.contact',compact('c','ers'));
	}

	public function replyform($id){
		$n=DB::table('contacts')->where('id',$id)->get()->first();
		return view('cd-admin.contact.reply',compact('n'));
	}
	public function reply(){
    $er = Reply::all();
		$d=DB::table('replies')->orderBy('id', 'DESC')->paginate(10);
		return view('cd-admin.contact.viewreply',compact('d','er'));	
	}


	public function deleteinbox($id){
  	$test = DB::table('contacts')->where('id',$id)->get()->first();
    	
    	DB::table('contacts')->where('id',$id)->delete();
    	Session::flash('deletesuccess');
    	return redirect('/viewcontact');
  	}
  	public function storereply($id){
  	 $data = request()->validate([
            'email' => 'required|email',
            'subject' => 'required|',
            'message' => 'required',
            'status' => 'required'
        ]);
        $a = [];
        $a['created_at'] = Carbon::now('Asia/Kathmandu');
        $a['contact_id'] = $id;
        $final = array_merge($a,$data);
        DB::table('replies')->insert($final);
        
         Mail::to($data['email'])->send(new ContactFormMail($data));
        return redirect('/replies');
       
  	}
  	public function deletereply($id){
  	$test = DB::table('replies')->where('id',$id)->get()->first();
    	
    	DB::table('replies')->where('id',$id)->delete();
    	Session::flash('deletesuccess');
    	return redirect('/replies');
  }


}
?>	