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
            <div class="col-md-2">
                <div class="sidebar content-box" style="display: block;">
                    <ul class="list-group mb-3">
                        <a href="{{ route('notices') }}">
                            <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">お知らせ</h6>
                            </div>
                            </li>
                        </a>
                        <a href="{{ route('members') }}">
                            <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">会員一覧</h6>
                            </div>
                            </li>
                        </a>
                    </ul>
                </div>
            </div>
            <div class="col-md-8">
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
