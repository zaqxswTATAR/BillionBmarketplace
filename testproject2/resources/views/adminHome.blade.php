@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

    

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    หน้าแอดมิน จากไฟล์ adminHome.blade ใส่ตารางไว้ตรงนี้ได้ แต่สรุปว่าใช้โค้ดตาราง dashboard อันเก่าไม่ได้เพราะต้องมีการ set-jetstream
                </div>
            </div>
        </div>
    </div>
</div>
        
@endsection
