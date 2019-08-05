@extends('layouts.app')

@section('content')
<div class="container">
        @if (Auth::check())
        <div>Bạn đang đăng nhập với quyền 
        @if( Auth::user()->level == 1)
            {{ "người bán" }}
        @elseif( Auth::user()->level == 2)
            {{ "người mua" }}
        @endif
        </div>
        <div class="pull-right" style="margin-top: 3px;"><a class="btn btn-primary" href="/{{ url('/logout') }}">Đăng xuất</a></div>
        @endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Dang nhap thanh cong!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
