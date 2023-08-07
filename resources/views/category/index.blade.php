@extends('layouts.admin')

@section('title','Page Title')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header', ['name' => 'Category','key' => 'List'])

    <!-- Main content -->
    <div class="card">
        <div class="card-header">
            <div class="row">

                <div class="col col-md-12">
                    <a href="{{ route('categories.create')}}" class="btn btn-success btn-sm float-right">Add</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>STT</th>
                    <th>Name</th>
                    <th>Action</th>

                </tr>
                @if(count($categories) > 0)

                @foreach($categories as $category)

                <tr>
                    <td>{{ $category->id}}</td>
                    <td>{{ $category->name }}</td>

                    <td>
                        <form method="post" action="{{ route('categories.destroy', ['id' => $category->id]) }}">
                            @csrf
                            @method('DELETE')
                            <a href="" class="btn btn-primary btn-sm">View</a>
                            <a href="{{ route('categories.edit', ['id' => $category->id]) }}" class="btn btn-warning btn-sm">Edit</a>
                            <input onclick="return confirm('Bạn có chắc muốn xóa không ?')" type="submit" class="btn btn-danger btn-sm" value="Delete" />
                        </form>

                    </td>
                </tr>

                @endforeach

                @else
                <tr>
                    <td colspan="5" class="text-center">No Data Found</td>
                </tr>
                @endif
            </table>

        </div>
        <div class="d-flex justify-content-center">
            {{ $categories->links('pagination::bootstrap-4') }}
        </div>
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
<!-- Content Wrapper. Contains page content -->