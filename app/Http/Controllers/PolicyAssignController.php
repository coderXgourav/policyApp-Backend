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
        ->orderBy('employee_id','DESC')
        ->get();
        return json_encode($employee);
    }


    // END OF CLASS 
}
