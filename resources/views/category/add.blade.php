@extends('layouts.admin')

@section('title','Trang chu')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header', ['name' => 'Category','key' => 'Add'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <form action="{{ route('categories.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Ten danh muc</label>
                            <input type="text" class="form-control" placeholder="Nhap ten dnah muc" name="name">
                        </div>
                        <div class="form-group">
                            <label>Chon danh muc</label>
                            <select class="form-control" name="parent_id">
                                <option value="0">Chon danh muc cha</option>
                                {!! $htmlOption !!}
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

            </div>
        </div>
        <!-- /.content -->
    </div>
</div>
<!-- /.content-wrapper -->
@endsection
<!-- Content Wrapper. Contains page content -->