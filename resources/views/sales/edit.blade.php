@extends('layouts.app')

@section('content')
    <h1>Edit Sale</h1>
    <form method="POST" action="{{ route('sales.update', $sale->id) }}">
        @csrf
        @method('PUT')
        <div>
            <label>Description</label>
            <input type="text" name="description" value="{{ $sale->description }}">
        </div>
        <div>
            <label>Amount</label>
            <input type="number" name="amount" step="0.01" value="{{ $sale->amount }}">
        </div>
        <button type="submit">Update</button>
    </form>
@endsection
