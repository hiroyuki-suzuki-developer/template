@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('commom.side-menu')
        <div class="col-md-9">
            <div class="my-3 p-3 bg-body rounded shadow-sm">
                <form>
                    <div class="mb-3">
                        <label for="email1">メールアドレス</label>
                        <input type="email" class="form-control" id="email1" aria-describedby="emailHelp" placeholder="メールアドレスを入力">
                        <small id="emailHelp" class="form-text text-muted">キャリアメールは届かない場合があります。</small>
                    </div>
                    <div class="mb-3">
                        <label for="password1">パスワード</label>
                        <input type="password" class="form-control" id="password1" placeholder="パスワードを入力">
                    </div>
                    <div class="mb-3">
                        <label for="select1">プルダウンメニューから選んでください</label>
                        <select class="form-select" id="select1">
                        <option>メニュー1</option>
                        <option>メニュー2</option>
                        <option>メニュー3</option>
                        <option>メニュー4</option>
                        <option>メニュー5</option>
                        </select>
                    </div>
                    <!-- 複数選択のプルダウンメニュー -->
                    <div class="mb-3">
                        <label for="select2">複数選択のプルダウンメニュー</label>
                        <select multiple class="form-select" id="select2">
                        <option>複数選択可A</option>
                        <option>複数選択可B</option>
                        <option>複数選択可C</option>
                        <option>複数選択可D</option>
                        <option>複数選択可E</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="textarea1">複数行のテキスト入力欄</label>
                        <textarea class="form-control" id="textarea1" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="file1">ファイルを選択</label>
                        <input type="file" class="form-control-file" id="file1">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="checkbox01">
                        <label class="form-check-label" for="">チェックする</label>
                    </div>
                    <button type="submit" class="btn btn-primary">送信</button>
                </form>
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
            </div>
        </div>
    </div>
</div>
@endsection
