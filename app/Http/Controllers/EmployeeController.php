<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminModel; 
use App\Models\EmployeeModel; 
use App\Models\DepartmentModel; 
use App\Models\PolicyModel; 
use App\Models\McqResultModel;
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
            $employee_details = DB::table('employee')
            ->join('department','department.department_id','=','department.department_id')
            ->where('employee.employee_id',session('employee'))
            ->first();
        
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

        // viewAssignedPolicy
        public function viewAssignedPolicy()
        {

            $employee_data = self::employeeDetails();

            // $policy = DB::table('policy_assign_to_employee')
            // ->join('policy','policy.policy_id','=','policy_assign_to_employee.main_policy_id')
            // ->join('employee','employee.employee_id','=','policy_assign_to_employee.main_employee_id')
            // ->get();

            $group_policy = DB::table('policy_assign_to_employee')
            ->join('department','department.department_id','=','policy_assign_to_employee.main_department_id')
            ->join('policy','policy.policy_id','=','policy_assign_to_employee.main_policy_id')
            ->join('employee','employee.department_id','=','department.department_id')
            ->get();
          
            return view('employeePanel.dashboard.policy.viewPolicy',['employee'=>$employee_data,'policy'=>$group_policy]);
        }

        // viewPolicyByEmployee
        public function viewPolicyByEmployee($id)
        {
            $employee_data = self::employeeDetails();
            $policy = PolicyModel::find($id);

            $haveMcq = DB::table('policy')
            ->join('mcq','mcq.main_policy_id','=','policy.policy_id')
            ->where('policy.policy_id',$id)
            ->count();

            if($haveMcq>0){
             $mcq_test = 1;
            }else{
             $mcq_test = 0;
            }
      
            return view('employeePanel.dashboard.policy.show_policy',['employee'=>$employee_data,'policy'=>$policy,'mcq_test'=>$mcq_test]);
        }

        // viewPolicyQuestions 
        public function viewPolicyQuestions($id)
        {
            $employee_data = self::employeeDetails();
            
            $questions = DB::table('policy')
            ->join('mcq','mcq.main_policy_id','=','policy.policy_id')
            ->where('mcq.main_policy_id',$id)
            ->get();
            
            $pass_mark = DB::table('policy')
            ->join('pass_mark','pass_mark.policy_main_id','=','policy.policy_id')
            ->first();



            // echo "<pre>";
            // print_r($pass_mark);
            // die();

          return view('employeePanel.dashboard.mcq.mcqpage',['employee'=>$employee_data,'mcq'=>$questions,'pass_mark'=>$pass_mark->pass_mark]);

        }

        // departmentWisePolicy
        public function departmentWisePolicy($id)
        {

            $employee_data = self::employeeDetails();

            $group_policy = DB::table('policy_assign_to_group')
            ->join('department','department.department_id','=','policy_assign_to_group.main_department_id')
            ->join('policy','policy.policy_id','=','policy_assign_to_group.main_policy_id')
            ->join('employee','employee.department_id','=','department.department_id')
            ->get();

            return view('employeePanel.dashboard.policy.view_group_policy',['employee'=>$employee_data,'policy'=>$group_policy]);
        }

        // policyTestSubmit 
        public function policyTestSubmit(Request $request)
        {
           $save_result = new McqResultModel;
           $save_result->main_policy_id = $request->policy_id;
           $save_result->main_employee_id = session('employee');
           $save_result->marks = 10;
           $save_result->date_time = date('s:i:H d-m-Y'); 
           $save_result->save();

           return self::swal(true,'Answer Submited','success');

        }



        // END CLASS 
    
}
