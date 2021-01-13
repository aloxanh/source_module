@extends('layouts.appadmin')

@section('content')
<div class="main-content-inner">
    <div class="breadcrumbs ace-save-state" id="breadcrumbs">
        <ul class="breadcrumb">
            <li>
                <i class="ace-icon fa fa-home home-icon"></i>
                <a href="admin/home">Admin</a>
            </li>
            <li class="active">Users</li>
        </ul><!-- /.breadcrumb -->

        @include('admin.user.search')
    </div>

    <div class="page-content">

        <div class="page-header">
            <h1>
                Danh sách User

            </h1>
        </div><!-- /.page-header -->

        <div class="row">
            <div class="col-xs-12">

                @include('partials.alert')

                <a class="btn btn-sm" href="{{route('adminusers.create')}}">Tạo mới</a>
                <div class="row">

                    <div class="col-xs-10">
                        <table class=" table table-bordered table-hover"">
                            <thead>
                                <th>#</th>
                                <th>User Name</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Roles</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach($users as $u)
                                <tr>
                                    <td scope=" row">
                            {{$u->id}}
                            </td>
                            <td>
                                {{$u->username}}
                            </td>
                            <td>
                                {{$u->name}}
                            </td>
                            <td>
                                {{$u->email}}
                            </td>
                            <td>
                                {{implode(',',$u->roles()->get()->pluck('name')->toArray())}}
                            </td>
                            <td>
                                @can('edit-user')
                                <a href="{{route('adminusers.edit',$u->id)}}"><button class="btn btn-link" style="float:left;"> <i class="ace-icon fa fa-pencil blue bigger-130"></i></button></a>

                                @endcan

                                @can('delete-user')
                                <form action="{{route('adminusers.destroy',$u->id)}}" method="POST">
                                    @csrf
                                    {{method_field('DELETE')}}
                                    <button type="submit" onclick="return confirm('Bạn có muốn xóa không?');" class="btn btn-link " style="float:left;"><i class=" fa fa-trash bigger-120"></i></button>
                                </form>
                                @endcan



                            </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>

                        {{$users->links()}}

                    </div><!-- /.col -->
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

</script>
@endsection