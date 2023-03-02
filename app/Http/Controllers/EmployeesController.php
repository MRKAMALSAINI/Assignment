<?php

namespace App\Http\Controllers;

use App\Models\EmployeesModel;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function employtable()
    {
        $data = EmployeesModel::paginate(10);
        return view('employesstable',['data' => $data]);
    }

    public function employess()
    {
        return view('employees');
    }

    public function employess_post(Request $request)
    {
        // return $request;
        $employess = EmployeesModel::create();
        $employess->fname = $request->fname;
        $employess->lname = $request->lname;
        $employess->email = $request->email;
        $employess->phone = $request->phone;
        $employess->save();
        return redirect(route('employtable'));

}


public function empdelete($id)
    {
        $empdelete = EmployeesModel::where('id', $id)->delete();
        return redirect(route('employtable'));

}

public function empupdate($id)
{
    $data = EmployeesModel::where('id',$id)->first();
    return view('empupdate',['data'=>$data]);

}


public function employeupdate_post(Request $request)
    {
        // return $request;
        $employeupdate = EmployeesModel::where('id',$request->id)->first();
        $employeupdate->fname = $request->fname;
        $employeupdate->lname = $request->lname;
        $employeupdate->email = $request->email;
        $employeupdate->phone = $request->phone;
        $employeupdate->save();
        return redirect(route('employtable'));



}
}


