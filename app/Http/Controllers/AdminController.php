<?php


namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Admin;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
  	public function getAddHospital(){
       $provinces = DB::table('province')->get();
		return view('pages.admin.add', ['provinces' => $provinces]);
	}
	public function postAddHospital(Request $request){
                  $this->validate($request,
                  	[
                  		'username' => 'required|min:3|max:20'
                  		/*'IdentityCard' => 'required'
                  		'fullname' => 'required|min:3|max:20'
                  		'idhospital' => 'required'
                  		'address' => 'required|min:3|max:20'
                  		'optionsRadiosInline' => 'required|min:3|max:20'
                  		'phonenumber' => 'required|min:3|max:20'
                  		'ethnic' => 'required|min:3|max:20'
                  		'job' => 'required|min:3|max:20'
                  		'idCard' => 'required|min:3|max:20'
                  		'idCard' => 'required|min:3|max:20'*/

                  ],
                  [
                  	'username.required'=> 'You have not entered ',
                  	/*'IdentityCard.required'=> 'You have not entered ',
                  	'fullname.required'=> 'You have not entered ',
                  	'idhospital.required'=> 'You have not entered ',
                  	'address.required'=> 'You have not entered ',
                  	'optionsRadiosInline.required'=> 'You have not entered ',
                  	'phonenumber.required'=> 'You have not entered ',
                  	'ethnic.required'=> 'You have not entered ',
                  	'job.required'=> 'You have not entered ',
                  	'create .required'=> 'You have not entered ',
                  	'update.required'=> 'You have not entered ',*/
                  	
                  ]);
                  $Hospital = new Hospital;
                  $Hospital->username = $request->username;
                  $Hospital->Password = $request->Password;
                  $Hospital->name = $request->name;
                  $Hospital->province = $request->province;
                  $Hospital->Description = $request->Description;
                  $Hospital->optionsRadios = $request->optionsRadios;


                  

                 $Hospital->save();
                  return redirect('pages.admin.view')->with('Notification','Success');
	}
      public function getAjaxDistrict(Request $request)
    {
        $districts = DB::table('district')->where('_province_id', $request->idProvince)->get();
        echo "<option></option>";
        foreach ($districts as $d) {
            echo "<option value='" . $d->id . "'>" . $d->_name . "</option>";
        }
    }

    public function getAjaxWard(Request $request)
    {
        $wards = DB::table('ward')->where('_province_id', $request->idProvince)->where('_district_id', $request->idDistrict)->get();
        echo "<option></option>";
        foreach ($wards as $w) {
            echo "<option value='" . $w->id . "'>" . $w->_name . "</option>";
        }
    }
    public function getEditHospital(){
       $provinces = DB::table('province')->get();
    return view('pages.admin.edit', ['provinces' => $provinces]);
  }
  public function getViewHospital(){
     
   	$Hospital = Hospital::all();
		return view('admin.theloai.danhsach',['Hospital'=>$Hospital]);
  }
  public function getEditHospital($id){
		$Hospital = Hospital::find($id);
		return view('pages.admin.edit',['Hospital'=>$Hospital]);

	}
	public function postEditHospital(Request $request, $id){
		
		$Hospital = Hospital::find($id);
		  $this->validate($request,
                  	[
                  		'name' => 'required|unique:Hospital,name|min:3|max:20'
                  ],
                  [
                  	'name.required'=> 'No name entered',
                  	'name.unique' =>'name already exists',
                  	'name.min'=> 'Enter more than 3 characters',
                  	'name.max'=> 'Enter less than 20 characters',

                  ]);

                    
                  $Hospital->name = $request->name
                
                 $Hospital->save();
                  return redirect('pages/admin/edit/'.$id)->with('Notification','Success');
	}
	public function getDelete($id){
		$Hospital = Hospital::find($id);
		$Hospital->delete();
		return redirect('pages/admin/view');
	}
	public function getLogin(){
		
		return view('pages.admin.login');
	}
	public function postLogin(Request $request){
                  $this->validate($request,
                  	[
                  		'email' => 'required|min:3|max:20'
                  		'password' => 'required|min:3|max:20'
                  ],
                  [
                  	'email.required'=> 'No name entered ',
                  	'email.unique' =>'name already exists',
                  	'email.min'=> 'Enter more than 3 characters',
                  	'email.max'=> 'Enter less than 20 characters',

                   'password.required'=> 'No name entered ',
                  ]);
                  if($request->email == "admin" && $request->password=="admin"){
                  	return redirect('pages/admin/view');

                  }

	}



}
