@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('commom.side-menu')
        <div class="col-md-9">
            <article class="p-3 rounded shadow-sm bg-white">
                <h1 class="h3">山田 太郎</h1>
                <div class="row justify-content-center border-bottom">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-4 col-sm-12 text-center">
                                <svg class="bd-placeholder-img rounded-circle" width="100" height="100" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
                            </div>
                            <div class="col-8 col-sm-12">
                                <p class="text-center">
                                    男性 30歳
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-4 text-reset">
                                <p class="text-center">希望時給</p>
                                <p class="text-center">保有資格</p>
                            </div>
                            <div class="col-8">
                                <p>2000~</p>
                                <p>なし</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <p>はじめまして。こんにちは。</p>
                </div>
                <div class="mt-3">
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button type="button" class="btn btn-primary btn-lg">コンタクト</button>
                    </div>
                </div>
            </article>
        </div>
    </div>
</div>
@endsection
