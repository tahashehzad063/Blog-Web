

@extends('sidebar.sidebar')
@section('content')
<div class="body-wrapper">
@if(session()->has('message'))
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss=" alert" aria-hidden="true">x</button>
    {{session()->get('message')}}
</div>
@endif
 <div class="col-11 border border-1  m-auto mt-5 ps-3 pe-3">
        <h4 class="pt-4 ps-4 text-secondary fs-4 ps-2">
            Posts</h4>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
                <div class="col-10 m-auto  pb-3 pt-3  alert-primary  ">
                    <h2 class=" text-primary     justify-content-center d-flex">2,064</h2>
                    <h4 class=" text-primary justify-content-center d-flex">Total Posts</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="col-10 m-auto pb-3 pt-3 alert-warning ">
                    <h2 class="text-warning      justify-content-center d-flex">1,738</h2>
                    <h4 class="text-warning justify-content-center d-flex">In Progress</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="col-10 m-auto  pb-3 pt-3 alert-success">
                    <h2 class="text-success      justify-content-center d-flex">1100</h2>
                    <h4 class="text-success justify-content-center d-flex">Opened</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="col-10 m-auto  pb-3 pt-3 alert-danger">
                    <h2 class="text-danger      justify-content-center d-flex">1,738</h2>
                    <h4 class="text-danger justify-content-center d-flex">In Progress</h4>
                </div>
            </div></div></div>
<div class="container-fluid pt-4 px-4">
    <div class="bg-dark text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Recent Salse</h6>
            <a href="{{url('writer/dashboard')}}"><button class="btn btn-primary">Add Post</button></a>
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0 table-sortable">
                <thead>
                    <tr class="text-white">
                       
        <th>Post Title</th>
        <th>Description</th>
        <th>Post By</th>
        <th>Id</th>
        <th>User Email</th>
        <th>Image</th>
    </tr></thead>
    @foreach($post as $post) 
<tr >
    <td>{{$post->title}}</td>
    <td>{{$post->description}}</td>
    <td>{{$post->usertype}}</td>
    <td>{{$post->writer_id ?? 'N/A'}}</td>
    <td>{{$post->writer->email}}</td>
    <td>
        
        <img style="height: 150px; width: 250px;" src="{{ asset('postimage/' . $post->image) }}" alt="">

</tr>
@endforeach
     
</tbody>
</table>
</div>
</div>
<script src="./src/tablesort.js"></script>
@endsection
