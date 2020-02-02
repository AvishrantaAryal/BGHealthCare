<?php
namespace App\Traits;

use App\Blog;
use App\Traits\imagetrait;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Carbon\Carbon;

trait blogtrait
{
    use imagetrait;

    public function add(){
        return view('cd-admin.blog.addblog');
    }

    public function view(){
        $blogs = DB::table('blogs')->get()->all();
        $er = Blog::all();
        return view('cd-admin.blog.blog',compact('blogs','er'));
    }

    public function edit($id){
        $t = Blog::where('id',$id)->get()->first();
        return view('cd-admin.blog.editblog',compact('t'));
    }


   public function store()
    {
        $a=[];
        $data = $this->insertcontrol();
        $test = $this->insertimage($data['image']);
        $a['image'] = $test;
        $a['slug'] = str_slug($data['title'],'-');
        $a['created_at'] =Carbon::now('Asia/Kathmandu');
        $replace = array_replace($data,$a);
        DB::table('blogs')->Insert($replace);
        Session::flash('success');
        return redirect('/blog-view');
    }

    public function updateblog($id){
            $data = $this-> updatevalidation();
        
            $test = DB::table('blogs')->where('id',$id)->get()->first();
            if(isset($data['image'])){
            if (file_exists('imageupload/'.$test->image)) 
            {
                unlink('imageupload/'.$test->image);
            }


            $test = $this->insertimage($data['image']);
            $a['image'] = $test ;
            }
            $a['slug'] = str_slug($data['title'],'-');
            $a['updated_at'] =Carbon::now('Asia/Kathmandu');

            $replace = array_replace($data,$a);

            $data = DB::table('blogs')->where('id',$id)->update($replace);

        Session::flash('updatesuccess');
        return redirect('/blog-view');
    }

    public function delete($id){
        $test = DB::table('blogs')->where('id',$id)->get()->first();
      if (file_exists('imageupload/'.$test->image)) 
      {
        unlink('imageupload/'.$test->image);
       }
      DB::table('blogs')->where('id',$id)->delete();
      Session::flash('deletesuccess');
      return redirect('/blog-view');
    }

    public function statusupdate($id)
    {
        $a = [];
        $test = DB::table('blogs')->where('id',$id)->get()->first();
        if($test->status=='active')
        {
            $a['status'] = 'inactive';
        }
        else
        {
            $a['status'] = 'active'; 
        }
        DB::table('blogs')->where('id',$id)->update($a);
        return redirect('/blog-view');
    }



    public function insertcontrol()
    {
        $request =Request()->all();
        $data =  Request()->validate([

        'title' => 'required',
        'summary'=>'required',
        'description' => 'required',
        'seotitle'=>'required',
        'keywords'=>'required',
        'seodescription'=>'required',
        'image' => 'required|image',
        'altimage' => 'required',
        'status' => 'required',
        'slug' =>'',
        ]);
        return $data;
    }


        public function updatevalidation()
    {
         $data =  Request()->validate([
        'title' => 'required',
        'summary'=>'required',
        'description' => 'required',
        'seotitle'=>'required',
        'keywords'=>'required',
        'seodescription'=>'required',
        'altimage' => 'required',
        'slug' =>'',
        'status' => 'required',
        'image' => '',
        ]);
        return $data;
    }
    }
?>