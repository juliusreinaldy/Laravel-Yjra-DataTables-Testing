@extends('layout')

@section('content')
    <table class="table table-bordered" id="product-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Barcode</th>
                <th>ProductName</th>
                <th>price</th>
                <th>Status</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>
    </table>
@stop

@push('scripts')
<script>
$(function() {
    $('#product-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: 'product/json',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'barcode', name: 'barcode' },
            { data: 'productName', name: 'productName' },
            { data: 'price', name: 'price' },
            { data: 'status', name: 'status' },
            { data: 'created_at', name: 'created_at' },
            { data: 'updated_at', name: 'updated_at' }
        ]
    });
});
</script>
@endpush