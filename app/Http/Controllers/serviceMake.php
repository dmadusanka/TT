<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\teaTask;
use Illuminate\Support\Facades\DB;

class serviceMake extends Controller
{
    public function main_page(){
    	return view('loging');
    }

    public function login_check(Request $req){
        $user = isset($req->user);
        $pass = isset($req->pass);

        $result = false;

        if($user && $pass){

            $password = md5($pass);

            $login_count = DB::table('login_cred')->where('user_name', $user)->where('password', $pass)->where('status', 1)->count();
    
                if($login_count > 0){
                    $result = true;
                } else {
                    $result = false;
                }

        } else {
            $result = false;
        }
        return $result;
    }

    public function blend_sheet_creator(Request $req){
        return "Came Here";
    }

    public function dashboard(){
    	return view('index');
    }

    public function tea_blend_unit(){
        return view('tea_blend_init');
    }
    public function tea_search(Request $reqest){
        //return "TEST";
        // $results_array = array();
        $term = $reqest->input('term');
        $com = $reqest->input('com');

        $trm = "%".$term['term']."%";

        $Tea_data = DB::table('tea_tasks')->where('com_id', $com)->where('scode', 'LIKE',$trm)->where('status',1)->get();

            // return json_encode($response);
            return ['term'=>$Tea_data];
    
    
    }

    public function lot_check(Request $request){
        $row_id = $request->row_id;

        $row_data_all = DB::table('tea_tasks')->where('id', $row_id)->get();
        return $row_data_all;
    }

    public function broker(){
        $broker = DB::table('brokersnames')->where('staus','1')->get();
        return $broker;
    }

    public function tableload(){
        $table_load = DB::table('tea_tasks')
        ->join('brokersnames', 'tea_tasks.tea_broker_id', '=', 'brokersnames.id')
        ->join('tea_grade', 'tea_tasks.tea_grade', '=', 'tea_grade.id')->get();
        return $table_load;
    }

    public function profile_load(){
        $com_profile = DB::table('compnay_details')->where('status', '1')->get();
        return $com_profile;
    }

    public function lot_no_check(Request $request){
        // return ($request->lot_no);
        $status=false;
        $result=array();
        $count = DB::table('tea_tasks')->where('lot_no', $request->lot_no)->count();

        if($count>0){
            $status = true;

            $result['status'] = $status;

            return $result;
        } else {
            return ('Empty');
        }
    }

    public function po_master(){
    	return view('po_master');
    }

    public function select_tea_update_data(Request $req){

        $id = $req->id;
        $tea_d = DB::table('tea_tasks')->where('id', $id)->get();
        return $tea_d;

    }

    public function tea_save(Request $request){

        $tea_store = new teaTask();
        $data = teaTask::all();
        $operation = $request->operation;
        $count = DB::table('tea_tasks')->where('lot_no', $request->lot_no)->count();

        if($operation == 'insert'){
            
            if($count==0){
                $net_weight = $request->bag_weight * $request->tea_weight;
    
                $tea_store->com_id=$request->companay;
                $tea_store->tea_broker_id=$request->brocker;
                $tea_store->scode=$request->s_code;
                $tea_store->saleDate=$request->sale_date;
                $tea_store->lot_no=$request->lot_no;
                $tea_store->tea_mark=$request->tea_mark;
                $tea_store->invoice_number=$request->invoice_number;
                $tea_store->tea_grade=$request->tea_grade;
                $tea_store->bags_weight=$request->bag_weight;
                $tea_store->tea_weight=$request->tea_weight;
                $tea_store->net_weight=$net_weight;
                $tea_store->price_per_kg=$request->price_tag;
                $tea_store->total=$net_weight * $request->price_tag;
                $tea_store->remarks=$request->remarks;
    
                $tea_store->save();
    
            } else {
                return ('This Lot Is Exist');
            }
            
        } else {
            $net_weight = $request->bag_weight * $request->tea_weight;
            
            $up_id = $request->up_id;
            $com_id = $request->companay;
            $tea_broker_id = $request->brocker;
            $scode = $request->s_code;
            $saleDate = $request->sale_date;
            $lot_no = $request->lot_no;
            $tea_mark = $request->tea_mark;
            $invoice_number = $request->invoice_number;
            $tea_grade = $request->tea_grade;
            $bags_weight = $request->bag_weight;
            $tea_weight = $request->tea_weight;
            $net_weight = $net_weight;
            $price_per_kg = $request->price_tag;
            $total = $net_weight * $request->price_tag;
            $remarks = $request->remarks;

            $up = DB::table('tea_tasks')->where('id', $up_id)->update([
                'com_id'=>$com_id,
                'tea_broker_id'=>$tea_broker_id,
                'scode'=>$scode,
                'saleDate'=>$saleDate,
                'lot_no'=>$lot_no,
                'tea_mark'=>$tea_mark,
                'invoice_number'=>$invoice_number,
                'tea_grade'=>$tea_grade,
                'bags_weight'=>$bags_weight,
                'tea_weight'=>$tea_weight,
                'net_weight'=>$net_weight,
                'price_per_kg'=>$price_per_kg,
                'total'=>$total,
                'remarks'=>$remarks
            ]);

            if($up){
                return "Updated";
            } else {
                return "There are no anything to update";
            }

        }


        // if($brocker){
            // $save = $tea_store->save();
            //dd($data);
            // return view('tea_inventory')->with('row_data', $data);
        // }

        // if($save){
        //     //return view('tea_inventory');
        //     return view('tea_inventory')->with('row_data', $data);
        // } else {
        //     echo "Sorry";
        // }
        //dd($request->all());
    }
}