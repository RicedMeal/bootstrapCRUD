{{-- using the layout file under suppliers folder --}}
@extends('suppliers.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Supplier</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('suppliers.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('suppliers.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Supplier Name:</strong>
                <input type="text" name="Supplier_Name" class="form-control" placeholder="Supplier Name">
            </div>
            <div class="form-group">
                <strong>Address:</strong>
                <input type="text" name="Address" class="form-control" placeholder="Address">
            </div>
            <div class="form-group">
                <strong>Tel No:</strong>
                <input type="text" name="Tel_No" class="form-control" placeholder="Tel No">
            </div>
            <div class="form-group">
                <strong>Fax No:</strong>
                <input type="text" name="Fax_No" class="form-control" placeholder="Fax No">
            </div>
            <div class="form-group">
                <strong>Website:</strong>
                <input type="text" name="Website" class="form-control" placeholder="Website">
            </div>
            <div class="form-group">
                <strong>Contact Person:</strong>
                <input type="text" name="Contact_Person" class="form-control" placeholder="Contact Person">
            </div>
            <div class="form-group">
                <strong>Email:</strong>
                <input type="email" name="Email" class="form-control" placeholder="Email">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>




@endsection