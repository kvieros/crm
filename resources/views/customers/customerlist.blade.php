@extends('layout')
@section('content')
    <div class="tabrle-primary">
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
                <td>action</td>
            </tr>
            @endforeach
            </tbody>
        </table>
        <div class="table-footer">
            Footer
        </div>
    </div>
@endsection
