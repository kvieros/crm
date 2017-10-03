@extends('layout')
@section('content')
    <div class="table-primary">
        <div class="table-header">
            <div class="table-caption">
                Customer list
            </div>
        </div>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Photo</th>
                <th>Customer Name</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>Address</th>
                <th>Type</th>
                <th>join</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($customers as $customer)
                <tr>
                    <td><img src="image/{{$customer->image}} " width="50" height="50"></td>
                    <td>{{$customer->firstname}} {{$customer->lastname}}</td>
                    <td>{{$customer->mobile}}</td>
                    <td>{{$customer->email}}</td>
                    <td>{{$customer->address}}</td>
                    <td>{{$customer->customertype}}</td>
                    <td>{{$customer->created_at}}</td>
                    <td>{{$customer->status}}</td>
                    <td><button data="{{$customer->customer_id}}" class="btn btn-success">Update</button> <button id="{{$customer->customer_id}}" name="{{$customer->firstname}} {{$customer->lastname}}" class="btn btn-danger">Delete</button></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="table-footer">
            Footer
        </div>
    </div>
    <form class="form-horizontal" id="formid" method="post" action="addcustomer" style="display: none">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="jq-validation-email" class="col-sm-3 control-label">First Name</label>
            <div class="col-sm-9">
                <input type="text" id="firstnameid" class="form-control" name="firstname" placeholder="Enter First Name" value="">
            </div>
        </div>
        <div class="form-group">
            <label for="jq-validation-email" class="col-sm-3 control-label">Last Name</label>
            <div class="col-sm-9">
                <input type="text"  id="lastnameid" class="form-control" name="lastname" placeholder="Enter Last Name" value="">
            </div>
        </div>
        <div class="form-group">
            <label for="jq-validation-email" class="col-sm-3 control-label">Email</label>
            <div class="col-sm-9">
                <input type="text"  id="emailid" class="form-control"  name="email" placeholder="Enter Email" value="">
            </div>
        </div>
        <div class="form-group">
            <label for="jq-validation-phone" class="col-sm-3 control-label">Mobile</label>
            <div class="col-sm-9">
                <input type="text"  id="mobileid" class="form-control" name="mobile" placeholder="Phone: (999) 999-9999" value="">
            </div>
        </div>
        <div class="form-group">
            <label for="jq-validation-text" class="col-sm-3 control-label">Address</label>
            <div class="col-sm-9">
                <textarea class="form-control"  id="addressid" name="address" value=""></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="jq-validation-select2" class="col-sm-3 control-label">Customer Type</label>
            <div class="col-sm-9">
                <select class="form-control"  id="customertypeid" name="customertype" >
                    <option value="vendor">vendor</option>
                    <option value="vip">vip</option>
                    <option value="regular">regular</option>
                </select>
            </div>
        </div>
    </form>
    <script src="javascript/Main.js">
    </script>
@endsection
