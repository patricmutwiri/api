@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Customers</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @forelse ($customers as $customer)
                        <li>{{ $customer->Name }}</li>
                    @empty
                        <p>No customers</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
