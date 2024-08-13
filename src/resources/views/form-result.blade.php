@extends('layouts.app')

@section('content')
<main>
    <div class="container">
        <div class="row justify-content-center">
            @include('commom.side-menu')
            <div class="col-md-9">
                <div class="p-3 bg-white rounded shadow-sm">
                    <h1 class="h3 text-center">変更が完了しました。</h1>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
