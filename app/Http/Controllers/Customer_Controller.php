<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class Customer_Controller extends Controller
{
    public function create( Request $request) {
        $customer = new Customer;

        $customer->Customer_ID = $request->input('Customer_ID');
        $customer->Mobile_Num = $request->input('Mobile_Num');
        $customer->Name = $request->input('Name');
        $customer->Address = $request->input('Address');
        $customer->Landmark = $request->input('Landmark');
        $customer->Distance = $request->input('Distance');
        $customer->Email_ID = $request->input('Email_ID');
        $customer->Contact_Person = $request->input('Contact_Person');
        $customer->Alt_MobileNum = $request->input('Alt_MobileNum');
        $customer->Category_ID = $request->input('Category_ID');
        $customer->Branch_ID = $request->input('Branch_ID');

        if($customer->save())
            return response()->json(true,201);
        else
            return response()->json(false,400);
    }

    public function showAll() {
        try{
            $result = Customer::get();
            return response()->json($result,200);
        }
        catch(Exception $e){
            return response()->json(false,400);
        }
    }

    public function showById($id) {    
        try{         
            $result = Customer::find($id);
            if(!is_null($result)){
                return response()->json($result,200);
            }
            else{
               return response()->json(false,400);
            }
        }
        catch(Exception $e){
            return response()->json(false,400);
        }
    }

    public function update($id, Request $request) {
        $customer = Customer::find($id);
        try{
            $result = $customer->update($request->all());
            return response()->json($result,200);
        }
        catch(Exception $e) {
            return response()->json(false,200);
        }
        
    }

    public function destroy($id) {
        if(Customer::destroy($id))
            return response()->json(true,200);
        else
            return response()->json(false,200);
    }
}