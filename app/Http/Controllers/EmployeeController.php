<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminModel; 
use App\Models\EmployeeModel; 
use App\Models\DepartmentModel; 
use App\Models\PolicyModel; 
use App\Models\McqResultModel;
use App\Models\DummyMarkModel;
use App\Models\McqModel;
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

            $group_policy = DB::table('policy_assign_to_employee')
            ->join('department','department.department_id','=','policy_assign_to_employee.main_department_id')
            ->join('policy','policy.policy_id','=','policy_assign_to_employee.main_policy_id')
            ->join('employee','employee.department_id','=','department.department_id')
            ->where('employee.employee_id',session('employee'))
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
                
                $passMarkDetails = DB::table('policy')
                ->join('pass_mark','pass_mark.policy_main_id','=','policy.policy_id')
                ->where('pass_mark.policy_main_id',$id)
                ->first();

                if($passMarkDetails){
                    $pass_mark = $passMarkDetails->pass_mark;

                            $user_mark = McqResultModel::where('main_policy_id',$id)
                        ->where('main_employee_id',session('employee'))
                        ->orderBy('marks','DESC')
                        ->select('marks')
                        ->first();

                if($user_mark){

                    $mark = $user_mark->marks;
                    
                    if($mark>=$pass_mark){
                        $mcq_test = 2;
                     }else{
                 $mcq_test = 1;
                     }
                }else{
                    $mcq_test = 1;
                        }
                }else{
                    $mcq_test = 1;
                        }
            }else{
             $mcq_test = 0;
            }
            // echo $mcq_test;
            
            // die();

          
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
            $department_id = $employee_data->department_id;

            $group_policy = DB::table('policy_assign_to_group')
            ->join('department','department.department_id','=','policy_assign_to_group.main_department_id')
            ->join('policy','policy.policy_id','=','policy_assign_to_group.main_policy_id')
            ->join('employee','employee.department_id','=','department.department_id')
            ->where('policy_assign_to_group.main_department_id',$department_id)
            ->get();

            return view('employeePanel.dashboard.policy.view_group_policy',['employee'=>$employee_data,'policy'=>$group_policy]);
        }




        // mcqCheck
        public function mcqCheck(Request $request){
            
            $mcqId = $request->mcq_id;
            $ans = $request->user_ans;

            $checkAnswer = McqModel::find($mcqId);
         
          if($checkAnswer->ans==$ans){
            $currentMark = session('mark');
            $newMark = $currentMark+1;
            session(['mark' => $newMark]);   
          }else{
           echo "wrong";
          }
          echo session('mark');
            
            
             
        }



        // policyTestSubmit 

        public function policyTestSubmit(Request $request)
        {

       // Step 1: Retrieve all questions related to the policy_id
$questions = DB::table('mcq')
->join('policy', 'policy.policy_id', '=', 'mcq.main_policy_id')
->where('policy.policy_id', $request->policy_id)
->pluck('mcq.mcq_id'); // Retrieve only the mcq_id values

// Step 2: Retrieve correct answers for all questions
$correct_ans = McqModel::whereIn('mcq_id', $questions)->pluck('ans', 'mcq_id');

// Step 3: Calculate the score based on user answers
$score = 0;

foreach ($questions as $ques) {
$user_ans = $request->$ques; // Assuming $request->$ques contains the user's answer
$correct_ans_for_question = $correct_ans[$ques] ?? null;

if ($correct_ans_for_question !== null && $user_ans === $correct_ans_for_question) {
    $score++;
}
}

           $save_result = new McqResultModel;
           $save_result->main_policy_id = $request->policy_id;
           $save_result->main_employee_id = session('employee');
           $save_result->marks = $score;
           $save_result->date_time = date('s:i:H d-m-Y'); 
           $save_result->save();
           return self::swal(true,'Answer Submited','success');
        }

        // checkPolicyStatus
        public function checkPolicyStatus(Request $request)
        {
         $id = $request->id;
         
      
    

        $checkStatus = McqResultModel::where('main_policy_id',$id)
        ->where('main_employee_id',session('employee'))
        ->orderBy('marks','DESC')
        ->select('marks')
        ->first();

        if(!$checkStatus){
            return self::swal(false,'View Policy','error');
        }

        $passMarkDetails = DB::table('policy')
        ->join('pass_mark','pass_mark.policy_main_id','=','policy.policy_id')
        ->where('pass_mark.policy_main_id',$id)
        ->first();
        
        if($passMarkDetails){
            $passMark = $passMarkDetails->pass_mark;
        }else{
           return self::swal(false,'Contact with Admin','error');
        }

        array($checkStatus);
   
        $userMark =  $checkStatus['marks'];


        if($userMark>=$passMark){
            return self::swal(true,'Successful, Download Paper','success');

        }else{
            return self::swal(false,'Failed, Retest Exam','error');
        }


        }

        // END CLASS 
}