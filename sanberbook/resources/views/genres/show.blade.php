@extends('layouts.master')

@section('title', 'Genre Detail')

@section('content')
<div class="container">
    <h1>Genre Details</h1>
    
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $genre->name }}</h5>
            <p class="card-text">{{ $genre->description ?? 'No description' }}</p>
            <a href="{{ route('genres.index') }}" class="btn btn-primary">Back to List</a>
        </div>
    </div>
</div>
@endsection 