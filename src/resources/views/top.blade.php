@extends('layouts.app')

@section('content')
<main>
    <div class="container">
        <div class="row justify-content-center">
            @include('commom.breadcrumb',['breadcrumbs' => ['/' => 'TOP']])
            @include('commom.side-menu')
            <div class="col-md-9">
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

                <div class="my-3 p-3 bg-white rounded shadow-sm">
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

                <div class="my-3 p-3 bg-white rounded shadow-sm">
                    <h6 class="border-bottom pb-2 mb-0">会員一覧</h6>
                    <div class="d-flex text-muted pt-3 pb-2 border-bottom">
                        <div class="text-center me-2">
                            <svg class="bd-placeholder-img rounded-circle" width="50" height="50" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
                        </div>
                    
                        <div class="pb-3 mb-0 small lh-sm w-100">
                            <div class="d-flex justify-content-between">
                                <strong class="text-gray-dark">山田 太郎</strong>
                                <a href="{{ route('member') }}">詳細</a>
                            </div>
                            <span class="d-block">@username</span>
                        </div>
                    </div>
                    <div class="d-flex text-muted pt-3 pb-2 border-bottom">
                        <div class="text-center me-2">
                            <svg class="bd-placeholder-img rounded-circle" width="50" height="50" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
                        </div>
                    
                        <div class="pb-3 mb-0 small lh-sm w-100">
                            <div class="d-flex justify-content-between">
                                <strong class="text-gray-dark">山田 太郎</strong>
                                <a href="{{ route('member') }}">詳細</a>
                            </div>
                            <span class="d-block">@username</span>
                        </div>
                    </div>
                    <div class="d-flex text-muted pt-3 pb-2 border-bottom">
                        <div class="text-center me-2">
                            <svg class="bd-placeholder-img rounded-circle" width="50" height="50" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
                        </div>
                    
                        <div class="pb-3 mb-0 small lh-sm w-100">
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


                <div class="my-3 p-3 bg-white rounded shadow-sm">
                    <h6 class="border-bottom pb-2 mb-0">新規スタッフ</h6>
                    <div class="row">
                        <div class="col-lg-4 p-3">
                            <div class="text-center">
                                <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
                            </div>
                            <h3 class="text-center text-muted pt-1">山田 太郎</h3>
                            <p class="text-muted">And lastly this, the third column of representative placeholder content.</p>
                            <p class="text-center"><a class="btn btn-secondary" href="{{ route('staff') }}">詳細</a></p>
                        </div>
                        <div class="col-lg-4 p-3">
                            <div class="text-center">
                                <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
                            </div>
                            <h3 class="text-center text-muted pt-1">山田 太郎</h3>
                            <p class="text-muted">And lastly this, the third column of representative placeholder content.</p>
                            <p class="text-center"><a class="btn btn-secondary" href="{{ route('staff') }}">詳細</a></p>
                        </div>
                        <div class="col-lg-4 p-3">
                            <div class="text-center">
                                <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
                            </div>
                            <h3 class="text-center text-muted pt-1">山田 太郎</h3>
                            <p class="text-muted">And lastly this, the third column of representative placeholder content.</p>
                            <p class="text-center"><a class="btn btn-secondary" href="{{ route('staff') }}">詳細</a></p>
                        </div>
                    </div>
                    <small class="d-block text-center mt-3">
                        <a href="#" class="text-reset">もっとみる</a>
                    </small>
                </div>



                <div class="my-3 p-3 bg-white rounded shadow-sm">
                    <h6 class="border-bottom pb-2 mb-0">商品一覧</h6>
                    <div class="d-flex text-muted pt-3 pb-2 border-bottom">
                        <div class="text-center me-2">
                            <svg class="bd-placeholder-img rounded-circle" width="50" height="50" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
                        </div>
                    
                        <div class="pb-3 mb-0 small lh-sm w-100">
                            <div class="d-flex justify-content-between">
                                <strong class="text-gray-dark">商品</strong>
                                <a href="{{ route('purchase') }}">詳細</a>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex text-muted pt-3 pb-2 border-bottom">
                        <div class="text-center me-2">
                            <svg class="bd-placeholder-img rounded-circle" width="50" height="50" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
                        </div>
                    
                        <div class="pb-3 mb-0 small lh-sm w-100">
                            <div class="d-flex justify-content-between">
                                <strong class="text-gray-dark">商品</strong>
                                <a href="{{ route('purchase') }}">詳細</a>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex text-muted pt-3 pb-2 border-bottom">
                        <div class="text-center me-2">
                            <svg class="bd-placeholder-img rounded-circle" width="50" height="50" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
                        </div>
                    
                        <div class="pb-3 mb-0 small lh-sm w-100">
                            <div class="d-flex justify-content-between">
                                <strong class="text-gray-dark">商品</strong>
                                <a href="{{ route('purchase') }}">詳細</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
