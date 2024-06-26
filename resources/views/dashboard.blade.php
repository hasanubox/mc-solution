@extends('layouts.app')
@section('title')
    @lang('Dashboard')
@endsection
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="row">
        <form action="{{ route('submit') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="single_select" class="form-label">Select Option</label>
                <select id="single_select" name="single_select" class="form-select" required>
                <option value="">Select Option</option>    
                    <option value="option1">Option 1</option>
                    <option value="option2">Option 2</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>       
    </div>
</main>
@endsection
@push('body')
<script>
        $(document).ready(function() {
            if (typeof Echo !== 'undefined') {
                Echo.channel('option-channel')
                    .listen('OptionSelected', (e) => {
                        $("#single_select").val(e.option);
                    });
            }
        });
</script>
@endpush
