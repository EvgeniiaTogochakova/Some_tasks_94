@extends('layouts/default')

@section('content')
<form name="user-form" id="user-form" method="post" action="{{url('store-user')}}">
    @csrf

    <div class="form-group">
        <label for="name" @error('name') class="invalid" @enderror>Name @error('name') <b?>{{$message}}</b> @enderror</label>
        <input type="text" id="name" name="name" class="form-control" size="50" value="{{old('name')}}" required>
    </div>

    <div class="form-group">
        <label for="surname" @error('surname') class="invalid" @enderror>Surname @error('surname') <b?>{{$message}}</b> @enderror</label>
        <input type="text" id="surname" name="surname" class="form-control" size="50" value="{{old('surname')}}" required>
    </div>


    <div class="form-group">
        <label for="email" @error('email') class="invalid" @enderror>Email @error('email') <b?>{{$message}}</b> @enderror</label>
        <input type="email" id="email" name="email" class="form-control" value="{{old('email')}}" required>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@stop