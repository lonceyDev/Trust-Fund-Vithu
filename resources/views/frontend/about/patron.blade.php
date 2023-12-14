@extends('layouts.front.index_blade')
@section('content')
<div class="page-title-area title-bg-one">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="title-item">
                    <h2>Our Patron</h2>
                    <ul>
                        <li>
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li>
                            <span>Our Patron</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('custom-script')
@endpush

@push('custom-style')

@endpush
