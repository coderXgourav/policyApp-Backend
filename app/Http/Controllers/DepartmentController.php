<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\DepartmentModel;
use App\Models\AdminModel;

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

    // END CLASS 
    
}
