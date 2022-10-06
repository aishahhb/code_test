@extends('layouts.app')

@section('content')
@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif

<div class="container">
    <div class="row">
        <h3>Card Distributor</h3>
    </div>
    <div class="row">
        <form action="{{route('card_submit')}}" method="POST">
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    Input value does not exist or value is invalid
                </div>
            @endif
            <div class="form-group">
                <label for="player">Fill number of player</label>
                <input type="text" class="form-control @error('player') is-invalid @enderror mt-2" id="player" name="player" placeholder="Number of Player" value="{{ old('player') }}">
                @error('player')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary btn-flat mt-3">Submit</button>
            <a href="{{ route('home')}}" class="btn btn-secondary btn-flat mt-3">Refresh</a>
        </form>
    </div>
</div>

<div class="row" id="result">
        <h2>Result: </h2>
        {!! $result ?? '' !!}
</div>
 <br /><br />

<div class="row" style="background: white;padding: 20px 10px;">
       
       <h5 class="mt-10">Question 1.7(9): Spent time around 8 hours</h5>
</div>



@endsection
