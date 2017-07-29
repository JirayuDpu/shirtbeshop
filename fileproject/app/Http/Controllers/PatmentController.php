<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paymant;
use App\Bank;
use App\Mail\PaymentuserToAdmin;
use Carbon\Carbon;
use App\Mail\ConfirmPayment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;


class PatmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd('ddd');
    }

    public function createpaymentorder()
    {
         $user = Auth::id();
        return view('user/payment.createpaymentorder', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
       
        $user = Auth::id();
        return view('user/payment.create' , compact('id', 'user'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
         $formInput=$request->except('image');

        $this->validate($request, [
            'order_id' => 'required|numeric',
            'first_name' => 'required',
            'last_name' => 'required',
            'address' => 'required',
            'zip' => 'required|numeric',
            'bank_admin_id' => 'required',
            'account_user' => 'required',
            'amount' => 'required|numeric',
            'phone' => 'required|numeric',
            'confirm' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg|max:10000'
            ],
            [
                'order_id.required' => 'กณุญาระยุรหัสสินค้า',
                'order_id.numeric' =>'รหัสสินค้าต้องเป็นตัวเลขเท่านั้น',
                'address.required' =>'ที่อยู่ไม่ได้ระบุ',
                'zip.required' =>'ไปรษณีย์ไม่ได้ระยุ',
                'zip.numeric' =>'ไปรษณีย์ต้องเป็นตัวเลขเท่านั้น',
                'bank_admin_id.required' =>'ธนาคารที่ใช้โอนเงินไม่ได้ระบุ',
                'account_user.required' =>'เลขบัญชีที่โอนเข้ามาไม่ได้ระบุ',
                'amount.required' =>'จำนวนเงินที่โอนไม่ได้ระบุ',
                'amount.numeric' =>'จำนวนเงินที่โอนต้องเป็นตังเลขเท่านั้น',
                'phone.required' =>'เบอร์โทรศัพท์ที่สามารถติดต่อได้ม่ได้ระบุ',
                'phone.numeric' =>'เบอร์โทรศัพท์ที่สามารถติดต่อได้ตังเลขเท่านั้น',
                'image.required' =>'รูปสินหลักฐานการโอนเงินต้องระบุ',
            ]);

        //   return Validator::make($data, [
        //     'first_name' =>'required|string|max:255',
        //     'last_name' =>'required|string|max:255',
        //     'sex' =>'required',
        //     'phone' =>'required|numeric',
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|string|email|max:255|unique:users',
        //     'password' => 'required|string|min:6|confirmed',
        // ],
        // [
        //     'phone.required' =>'เบอร์โทรศัพท์ไม่ได้ระบุ',
        //     'phone.numeric' =>'ข้อมูลเบอร์โทรศัพท์ต้องเป็นตัวเลขเท่านั้น (0-9)',
        //     'email.required' =>'อีเมล์ไม่ได้ระบุ',
        //     'email.unique' =>'E-mail นี้ถูกนำมาใช้แล้ว',
        // ]);

        $image = $request->image;
        if ($image) 
        {
            $imageName=$image->getClientOriginalName();
            $image->move('payment', $imageName);
            $formInput['image']=$imageName;
        }

        $mailuser = Auth::user()->paymant()->create($formInput);

        $time = Carbon::now()->addMinute(1); //Mail
        Mail::to('theboat72@gmail.com')->later($time, new PaymentuserToAdmin($mailuser)); //ส่งให้admin

        

       return view('user.payment.endpayment' , compact('mailuser'));
    }


      public function paymentorder(Request $request)
    {
      
         $formInput=$request->except('image');

        $this->validate($request, [
            'order_id' => 'required|numeric',
            'first_name' => 'required',
            'last_name' => 'required',
            'address' => 'required',
            'zip' => 'required|numeric',
            'bank_admin_id' => 'required',
            'account_user' => 'required|numeric',
            'amount' => 'required|numeric',
            'phone' => 'required|numeric',
            'confirm' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg|max:10000'
            ],
            [
                'order_id.required' => 'กรุณาาระยุรหัสสินค้า',
                'order_id.numeric' =>'รหัสสินค้าต้องเป็นตัวเลขเท่านั้น',
                'address.required' =>'ที่อยู่ไม่ได้ระบุ',
                'zip.required' =>'ไปรษณีย์ไม่ได้ระยุ',
                'zip.numeric' =>'ไปรษณีย์ต้องเป็นตัวเลขเท่านั้น',
                'bank_admin_id.required' =>'ธนาคารที่ใช้โอนเงินไม่ได้ระบุ',
                'account_user.required' =>'เลขบัญชีที่โอนเข้ามาไม่ได้ระบุ',
                'account_user.numeric' =>'เลขบัญชีที่โอนเข้ามาต้องเป็นตัวเลขเท่านั้น',
                'amount.required' =>'จำนวนเงินที่โอนไม่ได้ระบุ',
                'amount.numeric' =>'จำนวนเงินที่โอนต้องเป็นตังเลขเท่านั้น',
                'phone.required' =>'เบอร์โทรศัพท์ที่สามารถติดต่อได้ม่ได้ระบุ',
                'phone.numeric' =>'เบอร์โทรศัพท์ที่สามารถติดต่อได้ตังเลขเท่านั้น',
                'image.required' =>'รูปสินหลักฐานการโอนเงินต้องระบุ',
            ]);

      
        $image = $request->image;
        if ($image) 
        {
            $imageName=$image->getClientOriginalName();
            $image->move('payment', $imageName);
            $formInput['image']=$imageName;
        }

        $mailuser = Auth::user()->paymant()->create($formInput);

        $time = Carbon::now()->addMinute(1); //Mail
        Mail::to('theboat72@gmail.com')->later($time, new PaymentuserToAdmin($mailuser)); //ส่งให้admin

        

       return view('user.payment.endpayment' , compact('mailuser'));
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
        $payment = Paymant::find($id);

        //$confirm = Auth::user();

       // dd('sss');
        if ($request->has('confirm')) 
        {
            $payment->confirm=$request->confirm;
            $time = Carbon::now()->addMinute(1); //Mail
            Mail::to($payment->user)->later($time, new ConfirmPayment($payment)); //ส่งให้admin
            //dd('ddd');
        }
        else
        {
            //dd('456');
            $payment->confirm="0";
        }
        $payment->save();
        return back();
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

     public function payments($type='')
     {
        if ($type == 'pending') 
        {
            $payments = Paymant::where('confirm', '0')->get();
        }
        elseif ($type == 'confirm') 
        {
            $payments = Paymant::where('confirm', '1')->get();
        }
        else
        {
            $payments = Paymant::all();
        }

        return view('admin.payments.index' , compact('payments'));
     }

     //- --------------------User--------------------
      public function paymentuser($type='')
     {
        if ($type == 'pending') 
        {
            //dd('dd');
            $payments = Paymant::where('confirm', '0')->get();
        }
        elseif ($type == 'confirm') 
        {
            $payments = Paymant::where('confirm', '1')->get();
        }
        else
        {
            $payments = Paymant::all();
        }

        return view('user.payment.index' , compact('payments'));
     }

      //- --------------------END User--------------------


    public function images_payments($id)
    {
            $image_payments = Paymant::find($id);

        return view('admin/payments.image_payment', compact('image_payments'));
    }

    // public function updatepayments($id)
    // {
    //         $image_payments = Paymant::find($id);

    //     return view('admin/payments.image_payment', compact('image_payments'));
    // }
}
