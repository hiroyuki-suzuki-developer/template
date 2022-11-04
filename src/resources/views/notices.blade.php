@extends('layouts.app')

@section('content')
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h1 class="h3 mb-3">お知らせ</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            @include('commom.side-menu')
            <div class="col-md-9">
                <div class="p-3 bg-white rounded shadow-sm">
                    <h6 class="border-bottom pb-2 mb-0">お知らせ</h6>
                    <a href="{{ route('notice') }}">
                        <div class="d-flex text-muted pt-3">
                            <small class="d-block text-end me-2">2022-01-01</small>
                            お知らせ１です。
                        </div>
                    </a>
                    <a href="{{ route('notice') }}">
                        <div class="d-flex text-muted pt-3">
                            <small class="d-block text-end me-2">2022-01-01</small>
                            お知らせ２です。
                        </div>
                    </a>
                    <a href="{{ route('notice') }}">
                        <div class="d-flex text-muted pt-3">
                            <small class="d-block text-end me-2">2022-01-01</small>
                            お知らせ３です。
                        </div>
                    </a>
                    <a href="{{ route('notice') }}">
                        <div class="d-flex text-muted pt-3">
                            <small class="d-block text-end me-2">2022-01-01</small>
                            お知らせ４です。
                        </div>
                    </a>
                    <a href="{{ route('notice') }}">
                        <div class="d-flex text-muted pt-3">
                            <small class="d-block text-end me-2">2022-01-01</small>
                            お知らせ５です。
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
