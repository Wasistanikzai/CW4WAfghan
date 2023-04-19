@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Data List') }}
                <a href="{{route('form.create')}}" class="btn btn-primary float-right">Add Data</a>
                </div>
                <div class="card-body">
                    <div class="pt-2">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Description</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($formData as $index=>$data)
                                <tr>
                                    <th scope="row">{{$formData->firstItem() + $index}}</th>
                                    <td>{{$data->name}}</td>
                                    <td>{{$data->sex==0 ? "Male" : "Female"}}</td>
                                    <td>{{$data->description}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$formData->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
