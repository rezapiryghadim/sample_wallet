@extends('layout.layout')

@section('content')
    <div class="container py-5 mt-5">
        @include('wallet.form', [
            'action' => route('wallets_store'),
            'method' => 'POST',
            'entity' => $entity
        ])
    </div>
@endsection