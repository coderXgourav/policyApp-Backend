<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminModel; 
use App\Models\EmployeeModel; 
use Session; 

class EmployeeController extends Controller
{
    //

        // swal
        public function swal($status,$title,$icon){
            $response = [
                'status'=>$status,
                'title'=>$title,
                'icon'=>$icon,
            ];
            echo json_encode($response);
          }

    public function adminDetails()
    {
      $admin_id = session('admin');
      $admin_data = AdminModel::find($admin_id);
      return $admin_data;
    }

        // addEmployeePage 
        public function addEmployeePage()
        {
            $admin_data = self::adminDetails();
            return view('admin.dashboard.employee.addEmployee',['admin'=>$admin_data]);
        }
    
        // addEmployee 
        public function addEmployee(Request $request)
        {
                $name= $request->name;
                 $email = $request->email;
                 $number = $request->number;
                 $password = $request->password;
                 $empType = $request->empType;

                if(EmployeeModel::where('employee_number',$number)->first()){
                    return self::swal(false,"Number Already Registered","error");
                }
                if(EmployeeModel::where('employee_email',$email)->first()){
                    return self::swal(false,"Email Already Registered","error");
                }
           
                 $employee = new EmployeeModel;
                 $employee->employee_name = $name;
                 $employee->employee_email = $email;
                 $employee->employee_number = $number;
                 $employee->employee_password = $password ;
                 $employee->employee_type = $empType ;
                 $save = $employee->save();
                 if($save){
                    return self::swal(true,"Successfull","success");
                 }else{
                    return self::swal(false,"Sorry , Technical Issue..","error");
                 }
                 
    
        }

        // viewEmployee 
        public function viewEmployee()
        {
            $admin_data = self::adminDetails();

            return view('admin.dashboard.employee.viewEmployee',['admin'=>$admin_data]);
        }

        // END CLASS 
    
}
