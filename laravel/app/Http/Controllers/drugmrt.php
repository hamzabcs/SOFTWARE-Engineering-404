<?php

namespace App\Http\Controllers;
use DB;
use Auth;
use Session;
use App\drug;
use Illuminate\Http\Request;

class drugmrt extends Controller
{
    public function index(){
		
		return view('index');
	}
	
	 public function login(){
		
		return view('auth/login');
	}
	
	public function edit($id){
		$ad=Auth::user()->name;
		$data = DB::table('data')->where('id', $id)->get();
		return view('edit',compact('data'));
	}
	
	public function del($id){
		
		//return $id;
		echo "Development Mode";
	}
	
	public function add(){
		if(Auth::check()){
		return view('add');
		}
		else{
			
			return redirect('login');
		}

	}
	public function stat(){
		if(Auth::check()){
			$ad=Auth::user()->name;
		$data = DB::table('data')->where('addby', $ad)->paginate(1);
		return view('stat',compact('data'));
		}
		else{
			
			return redirect('login');
		}
		
	}
	
	public function logout(){
		Session::flush();
		return redirect('login');
		
		
	}
	
	public function search(Request $req){
		if($req->ajax())
		{
			$output="";
			$data=DB::table('data')->where('name','LIKE','%'.$req->search.'%')->get();
			if($data)
			{
				foreach($data as $key => $data)
				{
					$output.='<tr>'.
					'<td>'.$data->name.'</td>'.
					'<td>'.$data->quantity.'</td>'.
					'<td>'.$data->price.'</td>'.
					'<td>'.$data->cname.'</td>'.
					'<td><a href="edit/'.$data->id.'"class="btn btn-info btn-sm">edit</a>&nbsp;&nbsp;<a href="delete/'.$data->id.'"class="btn btn-danger btn-sm">delete</a></td>'.
					'</tr>';
					
				}
				
				return Response($output);
				
			}
			
		}
		
		
	}
	
	public function insert(Request $req){
		
    $pname=$req->input('product');
    $cname=$req->input('company');
    $quan=$req->input('browser');
    $buy=$req->input('buy');
    $sell=$req->input('sell');
    $ad=Auth::user()->name;
$chk = DB::table('data')->where('addby', $ad)->where('name',$pname)->get();
if($chk->isEmpty()){
	$data=array('name'=>$pname,'quantity'=>$quan,'cname'=>$cname,'price'=>$buy,'sell'=>$sell,'addby'=>$ad);
    drug::create($data);
    Session::flash('success', 'SuccessFully Added!!');
return view('add');
	
}
else{
    Session::flash('success', 'Product already exist go to product page to edit it!');
return view('add');
}
	}
}
