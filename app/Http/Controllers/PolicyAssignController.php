<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminModel;
use App\Models\PolicyModel;
use App\Models\PolicyAssignToEmployeeModel;
use App\Models\DepartmentModel;
use App\Models\EmployeeModel;
use DB;

class PolicyAssignController extends Controller
{

            public function adminDetails()
            {
            $admin_id = session('admin');
            $admin_data = AdminModel::find($admin_id);
            return $admin_data;
            }
  
          // swal
  
          public function swal($status,$title,$icon){
              $response = [
                  'status'=>$status,
                  'title'=>$title,
                  'icon'=>$icon,
              ];
              echo json_encode($response);
            }

    // policyAssignPage

    public function policyAssignPage()
    {
        $admin_data = self::adminDetails();

        $policy = PolicyModel::orderBy('policy_id','DESC')->get();
        
        $department = DepartmentModel::orderBy('department_id','DESC')->get();
        $employee = EmployeeModel::orderBy('employee_id','DESC')->get();
        return view('admin.dashboard.employee.signPolicy',['admin'=>$admin_data,'policy'=>$policy,'department'=>$department,'employee'=>$employee]);
    }

    // fetchDepartmentEmployee
    public function fetchDepartmentEmployee(Request $request)
    {
        $employee = DB::table('department')
        ->join('employee','employee.department_id','=','department.department_id')
        ->where('employee.department_id',$request->id)
        ->orderBy('employee_id','DESC')
        ->get();
        return json_encode($employee);
    }


    // assignPolicyToEmployee
    public function assignPolicyToEmployee(Request $request)
    {
        $check = PolicyAssignToEmployeeModel::where([
            ['main_employee_id',$request->employee],
            ['main_policy_id',$request->policy],
        ])->first();

        if($check){
            return self::swal(false,'Policy Already Assigned','warning');
        }

        $data_store = new PolicyAssignToEmployeeModel;
       $data_store->main_department_id = $request->department; 
       $data_store->main_employee_id = $request->employee; 
       $data_store->main_policy_id = $request->policy; 
       $data_store->save();
       return self::swal(true,'Successfull','success');

    }

    // viewAssignPolicy

    public function viewAssignPolicy()
    {
        $admin_data = self::adminDetails();
        $policy = DB::table('policy_assign_to_employee')
        ->join('department','department.department_id','=','policy_assign_to_employee.main_department_id')
        ->join('employee','employee.employee_id','=','policy_assign_to_employee.main_employee_id')
        ->join('policy','policy.policy_id','=','main_policy_id')
        ->get();

        return view('admin.dashboard.policy.view_assigned_policy',['admin'=>$admin_data,'data'=>$policy]);
    }

    // END OF CLASS 
}