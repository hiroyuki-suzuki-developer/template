@extends('layouts.admin')

@section('content')
<div id="layoutSidenav">
    @include('commom.admin-side-menu')
    <div id="layoutSidenav_content">
        <main>
            <div id="layoutSidenav_content">
                <div class="container-fluid px-4">
                    <h1 class="mt-4">スタッフ</h1>
                    <ol class="breadcrumb mb-2">
                        <li class="breadcrumb-item active">新規登録</li>
                    </ol>
                    <div class="row justify-content-center">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="col-lg-12">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <form class="" action="{{ route('admin.staff.store') }}" method="post">
                                        @csrf
                                        <div class="col-md-12 mb-2">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" id="inputName" type="text" name="name" value="{{old('name')}}" />
                                                <label for="inputName">名前</label>
                                            </div>
                                        </div>

                                        <div class="col-md-12 mb-2">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" id="inputEmail" type="text" name="email" value="{{old('email')}}" />
                                                <label for="inputEmail">メールアドレス</label>
                                            </div>
                                        </div>

                                        <div class="col-md-12 mb-2">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" id="inputPassword" type="password" name="password" value="{{old('password')}}" />
                                                <label for="inputEmail">パスワード</label>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-12 mb-2">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <select class="form-select" id="inputAuthority" aria-label="" name="authority" >
                                                        <option for="inputAuthority"></option>
                                                        <option for="inputAuthority" value="0">一般</option>
                                                        <option for="inputAuthority" value="1">管理者</option>
                                                    </select>
                                                    <label for="inputAuthority">権限</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mt-4 mb-0 mx-auto">
                                            <div class="d-grid">
                                                <button class="btn btn-primary" type="submit">登録</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        @include('commom.admin-footer')
    </div>
</div>
@endsection
