<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminModel;
use App\Models\PolicyModel;
use App\Models\McqModel; 
use App\Models\PassMarkModel;

use DB;

class McqController extends Controller
{
    //
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

            // addMcqPage
    public function addMcqPage()
    {
        $admin_data = self::adminDetails();
        $policy = PolicyModel::orderBy('policy_id','DESC')->get();
        return view('admin.dashboard.mcq.addMcq',['admin'=>$admin_data,'policy'=>$policy]);
        
    }

    // addMcq
    public function addMcq(Request $request)
    {
        $policy =  $request->policy;
        $question =  $request->question;
        $option_a =  $request->option_a;
        $option_b =  $request->option_b;
        $option_c =  $request->option_c;
        $option_d =  $request->option_d;

        $ans_option =  $request->ans_option;   
        

        $mcq = new McqModel;
        $mcq->main_policy_id = $policy;
        $mcq->question = $question;
        $mcq->option_a = $option_a;
        $mcq->option_b = $option_b;
        $mcq->option_c = $option_c;
        $mcq->option_d = $option_d;

        if($ans_option=="A"){
            $mcq->ans = $option_a;
        }else if($ans_option=="B"){
            $mcq->ans = $option_b;

        }else if($ans_option=="C"){
            $mcq->ans = $option_c;
            
        }else if($ans_option=="D"){
            $mcq->ans = $option_d;
        }
        
        $mcq->save();

        return self::swal(true,'Successfull','success');
    }

    // viewMcq

    public function viewMcq()
    {
        $admin_data = self::adminDetails();
       $mcq_data = DB::table('policy')
                 ->join('mcq','mcq.main_policy_id','policy.policy_id')
                 ->distinct()
                 ->get();
                 
                //  echo "<pre>";
                //  print_r($mcq_data);
                //  die();

        return view('admin.dashboard.mcq.view_mcq',['admin'=>$admin_data,'mcq_data'=>$mcq_data]);
        
    }
    // viewMcq
    public function viewMcqQuestion()
    {
        $admin_data = self::adminDetails();
        $question = McqModel::orderBy('mcq_id','DESC')->get();
        return view('admin.dashboard.mcq.view_mcq',['admin'=>$admin_data,'question'=>$question]);
        
    }


    // showMcq
    public function showMcq($id)
    {
        $admin_data = self::adminDetails();
        $question = McqModel::where('main_policy_id',$id)->get();
        return view('admin.dashboard.mcq.show_mcq',['admin'=>$admin_data,'question'=>$question]);
         
    }

    // setMarks
    public function setMarks()
    {
    
      $admin_data = self::adminDetails();

      $policy = PolicyModel::where('pass_mark_status',0)->orderBy('policy_id','DESC')->get();


      return view('admin.dashboard.mcq.setMcqMarks',['admin'=>$admin_data,'policy'=>$policy]);
    }

    // setPassMark
    public function setPassMark(Request $request)
    {
        $check = PolicyModel::find($request->policy);
     
        if($check->pass_mark_status>0){
            return self::swal(false,'Already Marks set','warning');
        }

        $passMark = new PassMarkModel;
        $passMark->policy_main_id = $request->policy;
        $passMark->pass_mark = $request->pass_marrk;
        
        $passMark->save();

        $policyStatusUpdate = PolicyModel::find($request->policy);
        $policyStatusUpdate->pass_mark_status = 1;
        $policyStatusUpdate->save();
         
        return self::swal(true,'Successfull','success');
    }

    // showNumberOfQuestion
    public function showNumberOfQuestion(Request $request)
    {
        $questionNo = McqModel::where('main_policy_id',$request->id)->count();
        return json_encode(['question_no'=>$questionNo]); 

    }

    // viewSetMarks
    public function viewSetMarks()
    {
      $admin_data = self::adminDetails();
      $setMarks = DB::table('pass_mark')
      ->join('policy','policy.policy_id','=','pass_mark.policy_main_id')
      ->get();
      return view('admin.dashboard.mcq.viewSetMarks',['admin'=>$admin_data,'marks'=>$setMarks]);

    }


    // END OF CLASS 


}