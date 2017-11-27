@extends('layout')
@section('content')
    <div class="col-sm-6">
        <div class="panel">
            <div class="table-primary">
                <div class="table-header">
                    <div class="table-caption">
                        Invoices
                    </div>
                </div>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Account</th>
                        <th>Amount</th>
                        <th>Invoice Date</th>
                        <th>Due Date</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($invoices as $invoice)
                        <tr>
                            <td>{{$invoice->invoicenumber}}</td>
                            <td>{{$invoice->account}}</td>
                            <td>{{$invoice->amount}}</td>
                            <td>{{$invoice->created_at}}</td>
                            <td>{{$invoice->duedate}}</td>
                            <td>{{$invoice->type}}</td>
                            <td>{{$invoice->status}}</td>
                            <td></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
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
