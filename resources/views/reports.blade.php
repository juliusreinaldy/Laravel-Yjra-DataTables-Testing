@extends('layout')

@section('content')
    <table class="table table-bordered" id="report-table">
        <thead>
            <tr>
                <th>Barcode</th>
                <th>Jumlah</th>
                <th>Total Harga</th>
                <th>Ready</th>
                <th>OnHold</th>
                <th>Delivered</th>
                <th>Packing</th>
                <th>Sent</th>
            </tr>
        </thead>
    </table>
@stop

@push('scripts')
<script>
$(function() {
    $('#report-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: 'product/json',
        columns: [
            { data: $barcodeValueA, name: 'id' },
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