@extends('layout')
@section('content')
    <div class="row">
        <div class="col-sm-6">
            <div class="panel">
                <div class="panel-heading">
                    <span class="panel-title">Add Transfer</span>
                </div>
                <div class="panel-body">

                    <form class="form-horizontal" id="newdeposit" method="post" action="newtransfer">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="jq-validation-select2" class="col-sm-3 control-label">From</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="accountfrom" >
                                    <option value="Bank of Greece">Bank of Greece</option>
                                    <option value="Bank of Schwiezerland">Bank of Schwiezerland</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jq-validation-select2" class="col-sm-3 control-label">To</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="accountto" >
                                    <option value="Bank of Greece">Bank of Greece</option>
                                    <option value="Bank of Schwiezerland">Bank of Schwiezerland</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jq-validation-email" class="col-sm-3 control-label">Date</label>
                            <div class="col-sm-9">
                                <div class="input-group date" id="bs-datepicker-component">
                                    <input type="text" class="form-control" name="date" ><span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                        <script>
                            init.push(function () {
                                var options = {
                                    todayBtn: "linked",
                                    orientation: $('body').hasClass('right-to-left') ? "auto right" : 'auto auto'
                                }
                                $('#bs-datepicker-example').datepicker(options);

                                $('#bs-datepicker-component').datepicker();

                                var options2 = {
                                    orientation: $('body').hasClass('right-to-left') ? "auto right" : 'auto auto'
                                }
                                $('#bs-datepicker-range').datepicker(options2);

                                $('#bs-datepicker-inline').datepicker();
                            });
                        </script>
                        <div class="form-group">
                            <label for="jq-validation-email" class="col-sm-3 control-label">Description</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="description" placeholder="Enter Short description">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jq-validation-email" class="col-sm-3 control-label">Amount</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" name="amount" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jq-validation-select2" class="col-sm-3 control-label">Customer</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="customers" >
                                    @foreach ($customers as $customer)
                                        <option value="{{ $customer->customer_id }}">{{ $customer->firstname }} {{ $customer->lastname }}</option>
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
        <div class="col-sm-6">
            <div class="panel">
                <div class="table-primary">
                    <div class="table-header">
                        <div class="table-caption">
                            Recent Transfers
                        </div>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Description</th>
                            <th>Amount</th>
                            <th>Account</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($transactions as $transaction)
                            <tr>
                                <td>{{$transaction->description}}</td>
                                <td>{{$transaction->amount}}</td>
                                <td>{{$transaction->accountfrom}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="table-footer">
                        Footer
                    </div>
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
