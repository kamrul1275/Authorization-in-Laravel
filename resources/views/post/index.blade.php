@extends('layouts.app')


@section('content')


<div class="container">

    <div class="row">

        <div class="col-md-12">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Title</th>
                        <th scope="col">Describtion</th>
                        <th scope="col">Author</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($posts as $post)

                    <tr>
                        <th scope="row">1</th>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->describtion }}</td>
                        <td> <span class="badge bg-danger"> {{ $post->user->name }}</span> </td>
                        <td>

                            @can('view', $post)
                            <a href="" class="btn btn-info">View</a>
                            @endcan
                           
                            
                            @can('create', $post)
                            <a href="" class="btn btn-primary">create</a>
                            @endcan
                            
                            
                            @can('update', $post)
                            <a href="" class="btn btn-success">edit</a>
                            @endcan
                           
                            
                            @can('delete', $post)
                            <a href="" class="btn btn-danger">delete</a> 
                            @endcan
                           

                        </td>
                    </tr>

                    @endforeach



                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection