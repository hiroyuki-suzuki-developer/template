@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-2">
            <div class="sidebar content-box" style="display: block;">
                <ul class="list-group mb-3 rounded">
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
            <article class="p-3 rounded shadow-sm bg-white">
                <h1 class="h3">お知らせ</h1>
                <small class="d-block text-end me-2 text-muted mb-3">2022-01-01</small>
                <p>
                    A few weeks ago I ran a poll on Twitter to understand why Angular account has 280k followers on Twitter while Angular-In-Depth has only a fraction of that on Medium (11k). The poll showed that 50% of those who responded don’t use Medium, 17% find stories too complicated, 27% have no time to read and there are people (7%) who find stories not interesting.
                </p>
            </article>
        </div>
    </div>
</div>
@endsection
