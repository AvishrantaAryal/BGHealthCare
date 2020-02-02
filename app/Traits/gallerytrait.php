<?php
namespace App\Traits;

use App\Gallery;
use App\Traits\imagetrait;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Carbon\Carbon;

trait gallerytrait
{
	use imagetrait;

	public function add(){
		return view('cd-admin.gallery.addgallery');
	}

	public function store(){
    	$a=[];
        $data = $this->insertcontrol();
        $test = $this->insertimage($data['image']);
        $a['image'] = $test;
        $a['created_at'] =Carbon::now('Asia/Kathmandu');
        $replace = array_replace($data,$a);
        DB::table('galleries')->Insert($replace);
        
        Session::flash('success');
        return redirect('/album-view');
    }

    public function storeimage($id){
    	$a=[];
    	$data=$this->insertimagecontrol();
		$test = $this->insertimage($data['image']);
		$a['image'] = $test;
    
        $a['created_at'] =Carbon::now('Asia/Kathmandu');
        $replace = array_replace($data,$a);
         DB::table('images')->Insert($replace);
        Session::flash('success');
        return redirect('/image-view/'.$id);
    

    }

    public function view(){
    	$gal = Gallery::get()->all();
    	$er = Gallery::all();
    	return view('cd-admin.gallery.viewalbum',compact('gal','er'));
    }

     public function image($album_id)
     {

        $ga=DB::table('galleries')->get();
        $im=DB::table('images')->where('gallery_id',$album_id)->get();
 	  return view('cd-admin.gallery.imageview',compact('im','album_id','ga'));

	 }
    public function status($id)
	{
	  $a = [];
	  $test = DB::table('galleries')->where('id',$id)->get()->first();
	    if($test->status=='active')
	        {
	            $a['status'] = 'inactive';
	        }
	    else
	        {
	            $a['status'] = 'active'; 
	        }
	    	DB::table('galleries')->where('id',$id)->update($a);
	    	return redirect('/album-view');
	    }

	  public function deletealbum($id){
	  		DB::beginTransaction();
        try{
		$ga = DB::table('galleries')->where('id',$id)->get()->first();
        if(file_exists('imageupload/'.$ga->image)) 
    	{
        unlink('imageupload/'.$ga->image);
   		 }

       $img =DB::table('images')->where('gallery_id',$id)->get();
       foreach ($img as $i) {
         if(file_exists('imageupload/'.$i->image)) 
        {
        unlink('imageupload/'.$i->image);
         $img =DB::table('images')->where('gallery_id',$id)->delete();
        }
        }
   		 	DB::table('galleries')->where('id',$id)->delete();
        DB::commit();
		Session::flash('deletesuccess');
		return redirect('/album-view');
    	}
      catch(\Exception $e){
            DB::rollback();

        }
      

	  }

	  public function deleteimage($id){
	  	$g = DB::table('images')->where('id',$id)->get()->first();
        if(file_exists('imageupload/'.$g->image)) 
      {
        unlink('imageupload/'.$g->image);
       }
        DB::table('images')->where('id',$id)->delete();
    Session::flash('deletesuccess');
    return redirect('/album-view');

	  } 



	  public function addimage($id){
        $g = Gallery::where('id',$id)->get()->first();

		return view('cd-admin.gallery.addimage',compact('g'));
	}

       public function insertcontrol()
    {
        $request =Request()->all();
        $data =  Request()->validate([
        'name'=>'required',
        'image' => 'required|image',
        'altimage' => 'required',
        'status'=>'required',
        ]);
        return $data;
    }
    public function insertimagecontrol()
    {
        $request =Request()->all();
        $data =  Request()->validate([
        'image' => 'required|image',
        'gallery_id'=>'required',
        ]);
        return $data;
    }

}

?>