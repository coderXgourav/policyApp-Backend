<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminModel; 
use App\Models\EmployeeModel; 
use App\Models\DepartmentModel; 
use Session; 
use DB;

class EmployeeController extends Controller
{
    //

    //    getAdminDetails 
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

    public function employeeDetails()
    {
      $employee_id = session('employee');
      $employee_data = EmployeeModel::find($employee_id);
      return $employee_data;
    }

        // addEmployeePage 
        public function addEmployeePage()
        {
            $admin_data = self::adminDetails();
            $departments = DepartmentModel::orderBy('department_id','DESC')->get();
            return view('admin.dashboard.employee.addEmployee',['admin'=>$admin_data,'departments'=>$departments]);
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
                 $employee->department_id = $empType ;
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
            $employees = DB::table('employee')
            ->join('department','department.department_id','=','employee.department_id')
            ->orderBy('employee_id','DESC')
            ->get();

            return view('admin.dashboard.employee.viewEmployee',['admin'=>$admin_data,'employees'=>$employees]);
            
        }


        // employeeDashboard
        public function employeeDashboard()
        {
            $employee_details = self::employeeDetails();
            return view('employeePanel.dashboard.index',['employee'=>$employee_details]);
        }

        // employeeLogout

        public function employeeLogout(Request $request)
        {
            $request->session()->forget('employee');
            return redirect('/login');
        }

        // deleteEmployee
        public function deleteEmployee(Request $request)
        {
            $delete = EmployeeModel::find($request->id)->delete();
            return self::swal(true,'Deleted','success');


        }

        // END CLASS 
    
}
