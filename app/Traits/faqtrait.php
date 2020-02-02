<?php
namespace App\Traits;

use App\Faq;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Carbon\Carbon;

trait faqtrait
{
	 public function add(){
        return view('cd-admin.faq.addfaq');
    }

    public function view(){
        $faq = DB::table('faqs')->get()->all();
        $er = Faq::all();
        return view('cd-admin.faq.faq',compact('faq','er'));
    }

    public function edit($id){
        $t = Faq::where('id',$id)->get()->first();
        return view('cd-admin.faq.editfaq',compact('t'));
    }


   public function store()
    {
        $a=[];
        $data = $this->insertcontrol();
        $a['created_at'] =Carbon::now('Asia/Kathmandu');
        $replace = array_replace($data,$a);
        DB::table('faqs')->Insert($replace);
        Session::flash('success');
        return redirect('/faq-view');
    }

    public function updatefaq($id){
            $data = $this-> updatevalidation();
        
            $test = DB::table('faqs')->where('id',$id)->get()->first();
            $a['updated_at'] =Carbon::now('Asia/Kathmandu');

            $replace = array_replace($data,$a);

            $data = DB::table('faqs')->where('id',$id)->update($replace);

        Session::flash('updatesuccess');
        return redirect('/faq-view');
    }

    public function delete($id){
      DB::table('faqs')->where('id',$id)->delete();
      Session::flash('deletesuccess');
      return redirect('/faq-view');
    }

    public function statusupdate($id)
    {
        $a = [];
        $test = DB::table('faqs')->where('id',$id)->get()->first();
        if($test->status=='active')
        {
            $a['status'] = 'inactive';
        }
        else
        {
            $a['status'] = 'active'; 
        }
        DB::table('faqs')->where('id',$id)->update($a);
        return redirect('/faq-view');
    }



    public function insertcontrol()
    {
        $request =Request()->all();
        $data =  Request()->validate([

        'question'=>'required',
        'status' =>'required',
        'description' => 'required',
        ]);
        return $data;
    }


        public function updatevalidation()
    {
         $data =  Request()->validate([
        'question'=>'required',
        'status' =>'required',
        'description' => 'required',
        ]);
        return $data;
    }
   }
?>