@extends('layouts.app')

@section('content')
<main>
    <div class="container">
        <div class="row justify-content-center">
            @include('commom.side-menu')
            <div class="col-md-9">
                <div class="p-3 bg-white rounded shadow-sm">
                    <h1 class="h3">フォーム</h1>
                    <form action="" method="get">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th scope="row" class="w-25">メールアドレス</th>
                                    <td class="w-75">
                                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" class="w-25">内容</th>
                                    <td class="w-75">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">メールアドレス</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">内容</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </div>
                    </form>
                    <div class="mt-3">
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button type="button" class="btn btn-primary btn-lg">登録</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
