@extends('layout')
@section('content')
    <div class="row">
        <div class="col-sm-6">
            <div class="panel">
                <div class="panel-heading">
                    <span class="panel-title">Select Item</span>
                </div>
                <div class="panel-body">

                    <form class="form-horizontal" id="newinvoice" method="post" action="newinvoice">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="jq-validation-select2" class="col-sm-3 control-label">Item Name</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="itemname" >
                                    @foreach ($items as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
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