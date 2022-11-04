@extends('layouts.app')

@section('content')
<div class="container">
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
            {{-- バナー --}}
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="/images/800x400.png" class="d-block w-100" alt="/images/800x400.png">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>First slide label</h5>
                      <p>Some representative placeholder content for the first slide.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="/images/800x400.png" class="d-block w-100" alt="/images/800x400.png">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Second slide label</h5>
                      <p>Some representative placeholder content for the second slide.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="/images/800x400.png" class="d-block w-100" alt="/images/800x400.png">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Third slide label</h5>
                      <p>Some representative placeholder content for the third slide.</p>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
            </div>

            <div class="my-3 p-3 bg-body rounded shadow-sm">
                <h6 class="border-bottom pb-2 mb-0">お知らせ</h6>
                <div class="d-flex text-muted pt-3">
                    <span class="me-2">2022-01-01</span>
                    お知らせ１です。
                </div>
                <div class="d-flex text-muted pt-3">
                    <span class="me-2">2022-01-01</span>
                    お知らせ２です。
                </div>
                <div class="d-flex text-muted pt-3">
                    <span class="me-2">2022-01-01</span>
                    お知らせ３です。
                </div>
                <div class="d-flex text-muted pt-3">
                    <span class="me-2">2022-01-01</span>
                    お知らせ４です。
                </div>
                <div class="d-flex text-muted pt-3">
                    <span class="me-2">2022-01-01</span>
                    お知らせ５です。
                </div>
                <small class="d-block text-end mt-3">
                  <a href="{{ route('notices') }}">もっとみる</a>
                </small>
            </div>

            <div class="my-3 p-3 bg-body rounded shadow-sm">
                <h6 class="border-bottom pb-2 mb-0">会員一覧</h6>
                <div class="d-flex text-muted pt-3">
                  <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"></rect><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
            
                  <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                    <div class="d-flex justify-content-between">
                        <strong class="text-gray-dark">山田 太郎</strong>
                        <a href="{{ route('member') }}">詳細</a>
                    </div>
                    <span class="d-block">@username</span>
                  </div>
                </div>
                <div class="d-flex text-muted pt-3">
                  <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"></rect><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
            
                  <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                    <div class="d-flex justify-content-between">
                        <strong class="text-gray-dark">山田 太郎</strong>
                        <a href="{{ route('member') }}">詳細</a>
                    </div>
                    <span class="d-block">@username</span>
                  </div>
                </div>
                <div class="d-flex text-muted pt-3">
                  <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"></rect><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
            
                  <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                    <div class="d-flex justify-content-between">
                      <strong class="text-gray-dark">山田 太郎</strong>
                      <a href="{{ route('member') }}">詳細</a>
                    </div>
                    <span class="d-block">@username</span>
                  </div>
                </div>
                <small class="d-block text-end mt-3">
                  <a href="{{ route('members') }}">もっとみる</a>
                </small>
            </div>
        </div>
    </div>
</div>
@include('commom.footer1')
@endsection
