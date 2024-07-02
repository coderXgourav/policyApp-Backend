<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminModel;
use Session; 

class AdminController extends Controller
{

//    getAdminDetails 
  public function adminDetails()
  {
    $admin_id = session('admin');
    $admin_data = AdminModel::find($admin_id);
    return $admin_data;
  }
    // adminDashboard 
    public function adminDashboard()
    {
        $admin_id = session('admin');
        $admin_data = AdminModel::find($admin_id);
  
        // $category_count = CategoryModel::count();
        // $top_product_count = TopProductModel::count();
        // $product_count = ProductModel::count();
        
        return view('admin.dashboard.index',['admin'=>$admin_data]);
    }

    // adminLogout 
    public function adminLogout(Request $request)
    {
        $request->session()->forget('admin');
        return redirect('/login');
    }

    // addEmployeePage 
    public function addEmployeePage()
    {
        $admin_data = self::adminDetails();
        return view('admin.dashboard.employee.addEmployee',['admin'=>$admin_data]);
    }


    // END OF CLASS 
}
