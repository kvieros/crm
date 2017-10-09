@extends('layout')
@section('content')
    <div class="row">
        <div class="col-sm-6">
            <div class="panel">
                <div class="panel-heading">
                    <span class="panel-title">Send Email</span>
                </div>
                <div class="panel-body">

                    <form class="form-horizontal" id="newdeposit" method="post" action="sendemail">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="jq-validation-email" class="col-sm-3 control-label">Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="name" placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jq-validation-email" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="email" placeholder="Enter Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jq-validation-email" class="col-sm-3 control-label">Subject</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="subject" placeholder="Enter Subject">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jq-validation-text" class="col-sm-3 control-label">Message</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="message"></textarea>
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
