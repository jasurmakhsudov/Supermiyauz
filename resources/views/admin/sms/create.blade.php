@extends('layouts.master')

@section('title', 'Create Sms Page')

@section('content')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">

<div class="container">
    <h1>Send Sms</h1>
    <form action="{{route('admin.sms.send')}}" enctype="multipart/form-data" class="form-group" method="POST">
        <div class="form-group row">
            <label for="title" class="col-sm-2 col-form-label">Phone</label>
            <div class="col-sm-10">
                <select id="phone" name="phone" class="form-control" required>
                    <option disabled selected value>-</option>
                      @foreach ($phones as $phone)
                          <option value="{{$phone}}">{{$phone}}</option>
                      @endforeach
                  </select>
            </div>
        </div>
        @csrf
        <div class="form-group row">
            <label for="definition" class="col-sm-2 col-form-label">Message</label>
            <div class="col-sm-10">
              <textarea type="text" class="form-control" name="message" id="message" rows="10"></textarea>
            </div>
        </div>
        <input class="btn btn-success" type="submit" value="Send">
        <a class="btn btn-danger" href="{{route('admin.sms.index')}}">Cancel</a>
    </form>
</div> 


@endsection


