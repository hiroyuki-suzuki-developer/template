@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('commom.side-menu')
        <div class="col-md-9">
            <div class="p-3 bg-white rounded shadow-sm">
                <h1 class="h3">フォーム</h1>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('post-form') }}" method="POST">
                    @csrf
                    <div>
                        <div class="mb-3">
                            <label for="name" class="form-label">名前</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="名前" value="{{ old('name') }}">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">メールアドレス</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" value="{{ old('email') }}">
                        </div>
                        <div class="mb-3">
                            <label for="content" class="form-label">内容</label>
                            <textarea class="form-control" id="content" name="content" rows="3">{{ old('content') }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="content" class="form-label">日程</label>
                            <input type="text" class="form-control" id="date" name="date" placeholder="" value="{{ old('date') }}">
                        </div>
                        <div class="mb-3">
                            <label for="content" class="form-label">時間</label>
			                <input class="form-control" type="text" id="time" name="time">
                        </div>
                        <div class="mb-3">
                            <label for="content" class="form-label">画像</label>
                            <input type="file" class="form-control" id="image" name="image" accept='image/*' onchange="previewImage(this);" value="{{ old('image') }}">
                            <img id="preview" class="img-thumbnail">
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button type="submit" class="btn btn-primary btn-lg">登録</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function previewImage(obj)
    {
        var fileReader = new FileReader();
        fileReader.onload = (function() {
            document.getElementById('preview').src = fileReader.result;
        });
        fileReader.readAsDataURL(obj.files[0]);
    }
    $(function(){
        $('#date').datepicker({
            format: 'yyyy/mm/dd',
            language: 'ja'
        });
    });
</script>
<link rel="stylesheet" type="text/css" href="/lib/bootstrap-datepicker-1.9.0-dist/css/bootstrap-datepicker.min.css">
<script type="text/javascript" src="/lib/bootstrap-datepicker-1.9.0-dist/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="/lib/bootstrap-datepicker-1.9.0-dist/locales/bootstrap-datepicker.ja.min.js"></script>
@endsection
