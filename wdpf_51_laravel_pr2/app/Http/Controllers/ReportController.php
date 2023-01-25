<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{

    public function report1()
    {

        ##### Report 01
        // $data = DB::table('offices')->where('country', 'USA')->get();
        // echo $data->count();
        // dd($data);

        ##### Report 02

        // $data = DB::table('employees')->whereIn('officeCode',[1,2,3]);
        // $result = $data->get();
        // echo $data->count();
        // dd($result);

        ##### Report 03

        // $data = DB::table('employees')->whereIn('officeCode',[1,2,3])->where('jobTitle', 'Sales Rep' );
        // $result = $data->get();
        // echo $data->count();
        // dd($result);

        ##### Report 04

        // $data = DB::table('employees')->select(DB::raw("CONCAT(firstName,' ', lastName) as full_name"), 'email', 'jobTitle');

        // $result = $data->get();
        // echo $data->count();
        // dd($result);

        ##### Report 05

        // $data = DB::table('employees')->select(DB::raw('count(employeeNumber)'), 'jobTitle')->groupBy('jobTitle');

        // $result = $data->get();
        // echo $result->count();
        // dd($result);

        ##### Report 06

        // $data = DB::table('employees')->where('officeCode',[3])->orWhere('officeCode',[5]);
        // $result = $data->get();
        // echo $data->count();
        // dd($result);

        ##### Report 07

        // $data = DB::table('employees')->whereBetween('officeCode',[1,3]);
        // $result = $data->get();
        // echo $data->count();
        // dd($result);

        ##### Report 08 Join Table



        $data = DB::table('employees')
            ->join('offices', 'employees.officeCode', '=', 'offices.officeCode')
            ->select('employees.*', 'offices.city', 'phone')->get();
        echo $datas =  $data->count();
        echo "<pre>";
        print_r($data);






        // return view('reports.report1', compact('data'));


    }
}
