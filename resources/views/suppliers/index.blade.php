@extends('suppliers.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h2>Supplier Management</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('suppliers.create') }}"> Create New Supplier</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Supplier Name</th>
            <th>Address</th>
            <th>Tel No</th>
            <th>Fax No</th>
            <th>Website</th>
            <th>Contact Person</th>
            <th>Email</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($suppliers as $supplier)
        <tr>
            <td>{{ $supplier->Supplier_ID }}</td>
            <td>{{ $supplier->Supplier_Name }}</td>
            <td>{{ $supplier->Address }}</td>
            <td>{{ $supplier->Tel_No }}</td>
            <td>{{ $supplier->Fax_No }}</td>
            <td>{{ $supplier->Website }}</td>
            <td>{{ $supplier->Contact_Person }}</td>
            <td>{{ $supplier->Email }}</td>
            <td>
                <form action="{{ route('suppliers.destroy',$supplier->Supplier_ID) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('suppliers.show',$supplier->Supplier_ID) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('suppliers.edit',$supplier->Supplier_ID) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>
    {{ $suppliers->links() }}

@endsection