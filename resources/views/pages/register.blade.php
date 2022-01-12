@extends('layouts.app')
      
@section('content')
  <h1 class="display-2">Register page here.</h1>
  <p class="text-danger">Blah blah balh...</p>
  <h2>reggo...</h2>
  
  <form action="{{ route('register') }}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="name">Name:</label>
      <input 
        type="text" 
        id="name" 
        name="name"
        value="{{ old('name') }}"
        class="custom-form-input @error('name') border-danger @enderror"
      />
    
      @error("name")
        <div class="text-danger">
          {{ $message }}
        </div>
      @enderror
    </div>

    <button type="submit" class="btn btn-primary">
      Submit
    </button>
  </form>
@endsection