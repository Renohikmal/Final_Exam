@extends('layouts.app')

@section('content')
    <h1>Add New Sale</h1>
    <form method="POST" action="{{ route('sales.store') }}">
        @csrf
        <div>
            <label>Description</label>
            <input type="text" name="description">
        </div>
        <div>
            <label>Amount</label>
            <input type="number" name="amount" step="0.01">
        </div>
        <button type="submit">Save</button>
    </form>
@endsection
