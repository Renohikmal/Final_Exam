@extends('layouts.app')

@section('content')
    <h1>Edit Invoice</h1>
    <form method="POST" action="{{ route('invoices.update', $invoice->id) }}">
        @csrf
        @method('PUT')
        <div>
            <label>Invoice Number</label>
            <input type="text" name="invoice_number" value="{{ $invoice->invoice_number }}">
        </div>
        <div>
            <label>Total Amount</label>
            <input type="number" name="total" step="0.01" value="{{ $invoice->total }}">
        </div>
        <button type="submit">Update</button>
    </form>
@endsection
