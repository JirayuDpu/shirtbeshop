<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OmiseAddress;
use App\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Gloudemans\Shoppingcart\Facades\Cart;

use Carbon\Carbon;
use App\Mail\OmisePayment;
use Illuminate\Support\Facades\Mail;

class OmiseAddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $omises = OmiseAddress::where('confirm', '1')->get();

        $sum = OmiseAddress::sum('amount');

      //  $sum = DB::select('select * from omise_addresses');

        
        return view('admin.omise.index' , compact('omises', 'sum'));
    }

    public function createpaymentomise()
    {   
        return view('user.omise.paymentomise');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'order_id' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'address' => 'required',
            'zip' => 'required',
            'amount' => 'required',
            'phone' => 'required',
            ]);
        



            //dd('sss');
            //orders

            $mailuser =  Auth::user()->omiseaddress()->create($request->all());

            Cart::destroy();

             $time = Carbon::now()->addMinute(1); //Mail
             Mail::to('theboat72@gmail.com')->later($time, new OmisePayment($mailuser)); //ส่งให้admin
            //return 'dd';
            $user = Auth::id();
            $orders =Order::where('user_id','=', $user)->get();

           return view('user.omise.index', compact('omises', 'orders'));
    }

      public function storepaymentomise(Request $request)
    {

        $this->validate($request, [
            'order_id' => 'required|numeric',
            'first_name' => 'required',
            'last_name' => 'required',
            'address' => 'required',
            'zip' => 'required|numeric',
            'amount' => 'required|numeric',
            'phone' => 'required|numeric',
            ],
            [
                'order_id.required' => 'กรุณาระยุรหัสสินค้า',
                'order_id.numeric' =>'รหัสสินค้าต้องเป็นตัวเลขเท่านั้น',
                'zip.required' =>'ไปรษณีย์ไม่ได้ระยุ',
                'zip.numeric' =>'ไปรษณีย์ต้องเป็นตัวเลขเท่านั้น',
                'address.required' =>'ที่อยู่ไม่ได้ระบุ',
                'amount.required' =>'จำนวนเงินที่โอนไม่ได้ระบุ',
                'amount.numeric' =>'จำนวนเงินที่โอนต้องเป็นตังเลขเท่านั้น',
                'phone.required' =>'เบอร์โทรศัพท์ที่สามารถติดต่อได้ม่ได้ระบุ',
                'phone.numeric' =>'เบอร์โทรศัพท์ที่สามารถติดต่อได้ตังเลขเท่านั้น',

            ]);
        
            //   'order_id' => 'required|numeric',
            // 'first_name' => 'required',
            // 'last_name' => 'required',
            // 'address' => 'required',
            // 'zip' => 'required|numeric',
            // 'bank_admin_id' => 'required',
            // 'account_user' => 'required|numeric',
            // 'amount' => 'required|numeric',
            // 'phone' => 'required|numeric',
            // 'confirm' => 'required',
            // 'image' => 'required|mimes:png,jpg,jpeg|max:10000'
            // ],
            // [
            //     'order_id.required' => 'กณุญาระยุรหัสสินค้า',
            //     'order_id.numeric' =>'รหัสสินค้าต้องเป็นตัวเลขเท่านั้น',
            //     'address.required' =>'ที่อยู่ไม่ได้ระบุ',
            //     'zip.required' =>'ไปรษณีย์ไม่ได้ระยุ',
            //     'zip.numeric' =>'ไปรษณีย์ต้องเป็นตัวเลขเท่านั้น',
            //     'bank_admin_id.required' =>'ธนาคารที่ใช้โอนเงินไม่ได้ระบุ',
            //     'account_user.required' =>'เลขบัญชีที่โอนเข้ามาไม่ได้ระบุ',
            //     'account_user.numeric' =>'เลขบัญชีที่โอนเข้ามาต้องเป็นตัวเลขเท่านั้น',
            //     'amount.required' =>'จำนวนเงินที่โอนไม่ได้ระบุ',
            //     'amount.numeric' =>'จำนวนเงินที่โอนต้องเป็นตังเลขเท่านั้น',
            //     'phone.required' =>'เบอร์โทรศัพท์ที่สามารถติดต่อได้ม่ได้ระบุ',
            //     'phone.numeric' =>'เบอร์โทรศัพท์ที่สามารถติดต่อได้ตังเลขเท่านั้น',
            //     'image.required' =>'รูปสินหลักฐานการโอนเงินต้องระบุ',
            // ]);

            //dd('sss');
            //orders

            $mailuser =  Auth::user()->omiseaddress()->create($request->all());

             $time = Carbon::now()->addMinute(1); //Mail
             Mail::to('theboat72@gmail.com')->later($time, new OmisePayment($mailuser)); //ส่งให้admin
            //return 'dd';
            $user = Auth::id();
            $orders =Order::where('user_id','=', $user)->get();

           return view('user.omise.index', compact('omises', 'orders'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
