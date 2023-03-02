<?php

namespace App\Http\Controllers;

use App\Models\CompaninesModel;
use Illuminate\Http\Request;

class companiesController extends Controller
{

    public function companytable()
    {
        $data = CompaninesModel::paginate(10);
        return view('comapnytab', ['data' => $data]);
    }


    public function company()
    {

        return view('Companies');
    }

    public function company_post(Request $request)
    {
        // return $request;
        $company = CompaninesModel::create();
        $company->name = $request->name;
        $company->email = $request->email;
        $company->url = $request->url;



        if ($request->file) {
            $imageName = time() . '.' . $request->file->extension();
            $request->file->move(public_path('/images'), $imageName);
            $company->file = $imageName;
        }
        $company->save();
        return redirect(route('companytable'));
    }

    public function delete($id)
    {
        $delete = CompaninesModel::where('id', $id)->first();
        $delete->delete();
        return redirect()->back();
    }

    public function update($id)
    {
        $data = CompaninesModel::where('id',$id)->first();
        return view('compudate',['data'=>$data]);

    }

    public function update_post(Request $request)
    {
        $compudate = CompaninesModel::where('id',$request->id)->first();
        $compudate->name = $request->name;
        $compudate->email = $request->email;
        $compudate->url = $request->url;


        if ($request->file) {

            $imageName = time() . '.' . $request->file->extension();
            $request->file->move(public_path('/images'), $imageName);
            $compudate->file = $imageName;
        }
        $compudate->save();
        return redirect(route('companytable'));
    }





}
