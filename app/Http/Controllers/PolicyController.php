<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminModel;
use App\Models\PolicyModel;



class PolicyController extends Controller
{
      // swal
      public function swal($status,$title,$icon){
        $response = [
            'status'=>$status,
            'title'=>$title,
            'icon'=>$icon,
        ];
        echo json_encode($response);
      }

      //    getAdminDetails 
  public function adminDetails()
  {
    $admin_id = session('admin');
    $admin_data = AdminModel::find($admin_id);
    return $admin_data;
  }
  

//   employeeLogout 
  public function addPolicyPage()
  {

    $admin_data = self::adminDetails();
    return view('admin.dashboard.policy.addPolicy',['admin'=>$admin_data]);

  }

    //   addPolicy
    public function addPolicy(Request $request)
    {
        $policy_title = $request->policy_title;
        $policy_file = $request->policy_file;
        
        $exe = $policy_file->getClientOriginalExtension();
        $file_name = time().'.'.$exe;
        $move = $policy_file->move('policy_files',$file_name);

        $checkTitle = PolicyModel::where('policy_title',$policy_title)->first(); 
        if($checkTitle){
           return self::swal(false,'Policy Already Exist' ,'error');
        }
        $policyData = new PolicyModel;
        $policyData->policy_title = $policy_title;
        $policyData->policy_file = $file_name;
        $policyData->save();
        return self::swal(true,'Successfull' ,'success');

       



    }


}
