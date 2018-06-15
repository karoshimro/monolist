@extends('layouts.app')

@section('content')
    <h1>Wantランキング</h1>
    <?php $type = "Wants";?>
    @include('items.items', ['items' => $items])
@endsection