@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Form') }}
                <a href="{{route('home')}}" class="btn btn-primary float-right">Back To List</a>
                </div>
                <div class="card-body">
                   @include('flash-message')
                    <form method="POST" action="{{route('form.store')}}">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Name</label>
                                <input type="text" name="name" value="{{old('name')}}" class="form-control {{$errors->has('name') ? ' is-invalid' : ''}}" id="inputName4" placeholder="Name">
                                @if($errors->has('name'))
                                    <div id="validationServer05Feedback" class="invalid-feedback">
                                        {{$errors->first('name')}}
                                    </div>
                                @endif

                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputSex">Sex</label>
                                <select id="inputSex" class="form-control {{$errors->has('sex') ? ' is-invalid' : ''}}" name="sex">
                                    <option selected value="">Sex</option>
                                    <option value="0" {{old('sex') =='0' ? 'selected="selected"' : ''}}>Male</option>
                                    <option value="1" {{old('sex') =='1' ? 'selected="selected"' : ''}}>Female</option>
                                </select>
                                @if($errors->has('sex'))
                                    <div id="validationServer05Feedback" class="invalid-feedback">
                                        {{$errors->first('sex')}}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Description</label>
                            <textarea class="form-control {{$errors->has('description') ? ' is-invalid' : ''}}" name="description" id="exampleFormControlTextarea1" rows="3">{{old('description')}}</textarea>
                            @if($errors->has('description'))
                                <div id="validationServer05Feedback" class="invalid-feedback">
                                    {{$errors->first('description')}}
                                </div>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
