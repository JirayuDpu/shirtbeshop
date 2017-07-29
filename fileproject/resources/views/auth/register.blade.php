{{-- @extends('layouts.app') --}}
@extends('layout.main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">


                <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        {{-- 0000000000000000000000000000000000000000000000000000000000000000000000000 --}}
                    <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                            <label for="first_name" class="col-md-4 control-label">ชื่อจริง</label>

                            <div class="col-md-4">
                                <input id="first_name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}">
                            

                             @if ($errors->has('first_name'))
                                <span class="help-block">
                                <strong>{{ 'ชื่อจริงไม่ได้ระบุ'}}</strong>
                                </span>
                            @endif
                            </div>
                        </div>
  

                        {{-- 0000000000000000000000000000000000000000000000000000000000000000000000000 --}}


                        {{-- 0000000000000000000000000000000000000000000000000000000000000000000000000 --}}

                         <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                            <label for="last_name" class="col-md-4 control-label">นามสกุล</label>

                            <div class="col-md-4">
                                <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}">

                            @if ($errors->has('last_name'))
                                <span class="help-block">
                                <strong>{{ 'นามสกุลไม่ได้ระบุ'}}</strong>
                                </span>
                            @endif
                            </div>
                        </div>

                        {{-- 0000000000000000000000000000000000000000000000000000000000000000000000000 --}}


                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">ชื่อใช้แสดง</label>

                            <div class="col-md-4">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                            @if ($errors->has('name'))
                                <span class="help-block">
                                <strong>{{ 'ชื่อแสดงไม่ได้ระบุ'}}</strong>
                                </span>
                            @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-4">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                         {{--    @if ($errors->has('email'))
                                <span class="help-block">
                                <strong>{{ 'อีเมล์ไม่ได้ระบุ'}}</strong>
                                </span>
                            @endif --}}


                            @foreach ($errors->get('email') as $error) 
                                     <span class="help-block">
                                <strong>{{ $error}}</strong>
                            @endforeach

                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">รหัสผ่าน</label>

                            <div class="col-md-4">
                                <input id="password" type="password" class="form-control" name="password">

                            @if ($errors->has('password'))
                                <span class="help-block">
                                <strong>{{ 'รหัสผ่านไม่ได้ระบุหรือข้อมูลยืนยันรหัสผ่านไม่ตรงกันกรุณาตรวจสอบใหม่'}}</strong>
                                </span>
                            @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">ยืนยันรหัสผ่าน</label>

                            <div class="col-md-4">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                            </div>
                        </div>

                        {{-- 0000000000000000000000000000000000000000000000000000000000000000000000000 --}}

                         <div class="form-group{{ $errors->has('sex') ? ' has-error' : '' }}">
                            <label for="sex" class="col-md-4 control-label">เพศ</label>
                            <div class="col-md-4">
                                <input type="radio" id="sex" name="sex" value="ชาย">ชาย
                                <input type="radio" id="sex" name="sex" value="หญิง">หญิง<br>

                            @if ($errors->has('sex'))
                                <span class="help-block">
                                <strong>{{ 'เพศไม่ได้ระบุ'}}</strong>
                                </span>
                            @endif
                            </div>
                        </div>

                        {{-- 0000000000000000000000000000000000000000000000000000000000000000000000000 --}}

                        {{-- 0000000000000000000000000000000000000000000000000000000000000000000000000 --}}

                         <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone" class="col-md-4 control-label">เบอร์โทรศัทท์ที่ติดต่อได้</label>

                            <div class="col-md-3">
                                <input id="phone" type="text" class="form-control" name="phone" 
                                value="{{ old('phone') }}">

                         {{--    @if ($errors->has('sex'))
                                <span class="help-block">
                                <strong>{{ 'กรุณาระบุหมายเลขโทรศัพท์'}}</strong>
                                </span>
                            @endif --}}


                            @foreach ($errors->get('phone') as $error) 
                                     <span class="help-block">
                                <strong>{{ $error}}</strong>
                            @endforeach
                            
                        </div>

                        {{-- 0000000000000000000000000000000000000000000000000000000000000000000000000 --}}


                        


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
