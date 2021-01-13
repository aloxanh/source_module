@extends('layouts.appadmin')

@section('content')
<div class="main-content-inner">
    <div class="breadcrumbs ace-save-state" id="breadcrumbs">
        <ul class="breadcrumb">
            <li>
                <i class="ace-icon fa fa-home home-icon"></i>
                <a href="/admin/users">User</a>
            </li>
            <li class="active">Cập nhật User</li>
        </ul><!-- /.breadcrumb -->

    </div>

    <div class="page-content">


        <div class="page-header">
            <h1>
                Cập nhật User: {{$user->name}}

            </h1>
        </div><!-- /.page-header -->

        <div class="row">
            <div class="col-xs-12">

                @include('partials.alert')
                <div class="row">

                    <div class="col-xs-10">
                        <div class="card">
                            <div class="card-header">
                                <!-- <Strong>
                                Cập nhật User: {{$user->name}}
                            </Strong> -->
                            </div>
                            <div class="card-body">

                                <form action="{{ route('adminusers.update',$user) }}" method="POST">
                                    <div class="form-group row">
                                        <label for="companycode" class="col-md-4 col-form-label text-md-right">{{ __('Mã công ty') }}</label>
                                        <div class="col-md-6">
                                            <select class="form-control" name="companycode" id="companycode" required autocomplete="companycode" autofocus>

                                                @foreach($company as $com)
                                                <option value="{{$com->id}}" @if($com->id == $user->companycode )selected @endif>{{$com->name}}</option>
                                                @endforeach
                                            </select>

                                            @error('companycode')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="sloc" class="col-md-4 col-form-label text-md-right">{{ __('Mã kho') }}</label>
                                        <div class="col-md-6">
                                            <select class="form-control" name="sloc" id="sloc" required autocomplete="sloc" autofocus>
                                                @foreach($sloc as $slo)
                                                <option value="{{$slo->id}}" @if($slo->id == $user->sloc )selected @endif>{{$slo->name}}</option>
                                                @endforeach
                                            </select>
                                            @error('sloc')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>


                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">Tên đầy đủ</label>

                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$user->name }}" required autofocus>

                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="username" class="col-md-4 col-form-label text-md-right">Mã nhân viên</label>

                                        <div class="col-md-6">
                                            <input id="username" readonly type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{$user->username }}" required autofocus>

                                            @error('username')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autofocus>

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">Mật khẩu</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password" readonly class="@error('password') is-invalid @enderror" name="password" value="123456" required autofocus>
                                            <input id="doimatkhau" name="doimatkhau" value="1" type="checkbox" /> Đổi mật khẩu
                                            @error('password') <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="roles" class="col-md-4 col-form-label text-md-right">Roles</label>
                                        <div class="col-md-6">
                                            @csrf
                                            {{method_field('PUT')}}
                                            <div class="row">
                                                <h4 class="header smaller lighter blue">
                                                    Role phân quyền
                                                    <small>
                                                        <a href="admin/roles" target="_blank">
                                                            (Xem thêm
                                                            <i class="ace-icon fa fa-external-link"></i>)
                                                        </a>
                                                    </small>
                                                </h4>
                                                @foreach($roles as $role)
                                                <div class="col-xs-6">
                                                    <ul>
                                                        <li style="display:inline;">
                                                            <div class="form-check">
                                                                <input type="checkbox" name="roles[]" id="roles[]" value="{{$role->id}}" @if($user->roles()->pluck('roles.id')->contains($role->id)) checked @endif>
                                                                <label>{{$role->name}}</label>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                @endforeach

                                            </div>

                                            <a href="{{ url()->previous() }}" class="btn btn-default">Quay lại</a>
                                            <button type="submit" class="btn btn-primary">Cập nhật</button>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.page-content -->
        </div>
    </div>
</div>
<style>
    /* fix khoảng cách bên dưới table so với phân trang */

    .table {
        margin-bottom: 0px;
    }
</style>
@endsection

@section('script')
<script>
    $('#doimatkhau').click(function() {

        if ($(this).is(':checked')) {
            $('#password').removeAttr('readonly');
        } else {
            $('#password').attr('readonly', true);
        }

    });
</script>
@endsection