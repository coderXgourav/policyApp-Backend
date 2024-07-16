<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\DepartmentModel;
use App\Models\AdminModel;
use App\Models\PolicyModel;
use App\Models\PolicyAssignToGroupModel;
use DB;


class DepartmentController extends Controller
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
          

    // adminDetails
    public function adminDetails()
  {
    $admin_id = session('admin');
    $admin_data = AdminModel::find($admin_id);
    return $admin_data;
  }


    // addDepartmentPage
    public function addDepartmentPage()
    {
        $admin_data = self::adminDetails();
        return view('admin.dashboard.department.add_department',['admin'=>$admin_data]);


    }

    // addDepartment
    public function addDepartment(Request $request)
    {
        $department_name = $request->department_name;
        $check = DepartmentModel::where('department_name',$department_name)->count();
        if($check>0){
            return self::swal(false,'Department Already Exist','warning');
        }else{
            $department_save = new DepartmentModel;
            $department_save->department_name = $department_name;
            $department_save ->save();
            return self::swal(true,'Successfull','success');
        }

 
    }

    // viewDepartment 
    public function viewDepartment()
    {
        $admin_data = self::adminDetails();
        $departments = DepartmentModel::orderBy('department_id','DESC')->get();
        return view('admin.dashboard.department.view_department',['admin'=>$admin_data,'department'=>$departments]);

    }

    // sendPolicyToGroup
    public function sendPolicyToGroup()
    {
        $admin_data = self::adminDetails();
        $departments = DepartmentModel::orderBy('department_id','DESC')->get();
        $policy = PolicyModel::orderBy('policy_id','DESC')->get();

        return view('admin.dashboard.department.policy_assign_department',['admin'=>$admin_data,'department'=>$departments,'policy'=>$policy]);

    }

    // assignToGroup 
    public function assignToGroup(Request $request)
    {
        $check = PolicyAssignToGroupModel::where([
            ['main_department_id','=',$request->department],
            ['main_policy_id','=',$request->policy]
        ])->first();

        if($check){
            return self::swal(false,'Policy Already Assigned','warning');
        }
        $policy_send = new PolicyAssignToGroupModel;
        $policy_send->main_department_id = $request->department;
        $policy_send->main_policy_id = $request->policy;
        $policy_send->save();
        return self::swal(true, "Successfull",'success');
        

    }

    // deleteDepartment

    public function deleteDepartment(Request $request)
    {
        $delete = DepartmentModel::find($request->id)->delete();
        return self::swal(true,'Deleted','success');
      
    }

    // viewAssignedDepartment
    public function viewAssignedDepartment()
    {
        $admin_data = self::adminDetails();

        $data = DB::table('policy_assign_to_group')
        ->join('department','department.department_id','=','policy_assign_to_group.main_department_id')
        ->join('policy','policy.policy_id','=','policy_assign_to_group.main_policy_id')
        ->orderBy('policy_assign_to_group_id','DESC')
        ->get();

        return view('admin.dashboard.department.view_assigned_policy_to_department',['admin'=>$admin_data,'data'=>$data]);

    }

    // END CLASS 
    
}
