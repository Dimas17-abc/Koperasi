<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function create() {
        return view('customers.create');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'code' => 'required|unique:customers|max:4',
            'name' => 'required|max:30',
            'phone' => 'max:15',
            'address' => 'required'
        ]);

        // INSERT INTO customers(code,name,phone,address) values ('')
        $customer = new Customer();
        $customer->code = $request->code;
        $customer->name = $request->name;
        $customer->phone = $request->phone;
        $customer->address = $request->address;

        if($customer->save()) {
            return redirect()->route('customer.show', $customer->id);
        } else {
            dd("Data Gagal Disimpan");
        }
    }

    public function show($id) {
        //SELECT * from customer where id - $id
        $customer = Customer::find($id);

        return view('customers.show', compact('customer'));
    }

    public function index() {
        $customer = Customer::all();

        return view('customers.index', compact('customers'));
    }
}
