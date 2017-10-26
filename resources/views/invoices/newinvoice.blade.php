@extends('layout')
@section('content')
    <div class="row">
        <div class="col-sm-6">
            <div class="panel">
                <div class="panel-heading">
                    <span class="panel-title">New Invoice</span>
                </div>
                <div class="panel-body">

                    <form class="form-horizontal" id="addinvoice" method="post" action="addinvoice">
                        {{ csrf_field() }}

                            <div class="form-group">
                                <label for="jq-validation-email" class="col-sm-3 control-label">Item Code</label>
                                <div class="col-sm-9">
                                    <input type="text" value="{{ $item->id }}" class="form-control" name="itemid" placeholder="" >
                                </div>
                            </div>
                        <div class="form-group">
                            <label for="jq-validation-email" class="col-sm-3 control-label">Item Name</label>
                            <div class="col-sm-9">
                                <input type="text" value="{{ $item->name }}" class="form-control" name="name" placeholder="" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jq-validation-email" class="col-sm-3 control-label">Quantity</label>
                            <div class="col-sm-9">
                                <input type="number" value="{{ $item->quantity }}" class="form-control" name="quantity" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jq-validation-email" class="col-sm-3 control-label">Price Unique</label>
                            <div class="col-sm-9">
                                <input type="number" value="{{ $item->price }}" class="form-control" name="price" placeholder="" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jq-validation-select2" class="col-sm-3 control-label">Tax</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="tax" >
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jq-validation-select2" class="col-sm-3 control-label">Status</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="status" >
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jq-validation-email" class="col-sm-3 control-label">Discount</label>
                            <div class="col-sm-9">
                                <input type="number" value="{{ $item->discount }}" class="form-control" name="discount" placeholder="" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jq-validation-email" class="col-sm-3 control-label">Due Date</label>
                            <div class="col-sm-9">
                                <div class="input-group date" id="bs-datepicker-component">
                                    <input type="date" class="form-control" name="duedate" ><span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jq-validation-select2" class="col-sm-3 control-label">Customer</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="customer" >
                                    @foreach ($customers as $customer)
                                        <option value="{{ $customer->customer_id }}">{{ $customer->firstname  }} {{ $customer->lastname  }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

@endsection