@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('commom.side-menu')
        <div class="col-md-9">
            <article class="p-3 rounded shadow-sm bg-white">
                <div class="row justify-content-center border-bottom">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-4 col-sm-12 text-center">
                                <svg class="bd-placeholder-img" width="100" height="100" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <p class="text-center"><h1 class="h3">商品</h1></p>
                        <div class="row">
                            <div class="col-4 text-reset">
                                <p class="text-left">価格</p>
                                <p class="text-left">価格</p>
                            </div>
                            <div class="col-8">
                                <p>2000~</p>
                                <p>なし</p>
                            </div>
                        </div>
                        <form action="{{ route('purchase') }}" method="POST">
                            @csrf
                            <div class="d-grid gap-2 col-6 mx-auto my-3">
                                <button type="button" class="btn btn-primary btn-lg">購入する</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="mt-3">
                    <p>はじめまして。こんにちは。</p>
                </div>
            </article>
        </div>
    </div>
</div>
@endsection
