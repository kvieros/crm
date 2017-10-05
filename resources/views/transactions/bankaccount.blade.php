@extends('layout')
@section('content')
    <div class="col-sm-6">
        <div class="panel">
            <div class="table-primary">
                <div class="table-header">
                    <div class="table-caption">
                        Bank Account
                    </div>
                </div>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Date</th>
                        <th>Account</th>
                        <th>Type</th>
                        <th>Amount</th>
                        <th>Description</th>
                        <th>Debit</th>
                        <th>Credit</th>
                        <th>Balance</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($transactions as $transaction)
                        <tr>
                            <td>{{$transaction->date}}</td>
                            <td>{{$transaction->accountfrom}}</td>
                            <td>{{$transaction->transactiontype}}</td>
                            <td>{{$transaction->amount}}</td>
                            <td>{{$transaction->description}}</td>
                            <td>{{$transaction->debit}}</td>
                            <td>{{$transaction->credit}}</td>
                            <td>{{$transaction->balance}}</td>
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
