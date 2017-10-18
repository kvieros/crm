@extends('layout')
@section('content')
    <div class="col-sm-6">
     <div class="col-sm-9">
                 <label for="jq-validation-select2" class="col-sm-3 control-label">Choose Balance</label>
                 <div class="col-sm-9">
                     <select class="form-control" name="account" >
                         @foreach($balance as $bal)
                             <option value=" {{$bal}}"> {{$bal}}</option>
                         @endforeach
                     </select>
                 </div>
     </div>
    </div>
@endsection