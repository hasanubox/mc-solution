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
        
        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
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
            <div class="mb-3">
                <label for="multi_select" class="form-label">Select Steps</label>
                <select id="multi_select" name="multi_select[]" class="form-select" required>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        
        @if (isset($selectedOption) && isset($selectedSteps))
            <div class="mt-5">
                <h3>Selected Values:</h3>
                <p>Option: {{ $selectedOption }}</p>
                <p>Steps: {{ implode(', ', $selectedSteps) }}</p>
            </div>
        @endif
        </div>       
    </div>
</main>
@endsection
@push('body')
<script>
        $(document).ready(function() {
            $('#multi_select').select2({
                placeholder: "Select steps",
                allowClear: true
            });

            const steps = {
                option1: ['step11', 'step12', 'step13', 'step14'],
                option2: ['step21', 'step22', 'step23', 'step24']
            };

            $('#single_select').change(function() {
                const selectedOption = $(this).val();
                const multiSelect = $('#multi_select');
                multiSelect.empty();
                steps[selectedOption].forEach(function(step) {
                    multiSelect.append(new Option(step, step));
                });
                multiSelect.select2();
            }).trigger('change');
        });
</script>
@endpush
