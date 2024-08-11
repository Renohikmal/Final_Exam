@extends('layouts.app')

@section('content')
    <h1>Sales</h1>
    <a href="{{ route('sales.create') }}">Add New Sale</a>
    <ul>
        @foreach ($sales as $sale)
            <li>{{ $sale->description }} - ${{ $sale->amount }}</li>
            <a href="{{ route('sales.edit', $sale->id) }}">Edit</a>
            <form action="{{ route('sales.destroy', $sale->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        @endforeach
    </ul>
@endsection
