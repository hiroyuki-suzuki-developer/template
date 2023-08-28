@extends('layouts.admin')

@section('content')
<div id="layoutSidenav">
    @include('commom.admin-side-menu')
    <div id="layoutSidenav_content">
        <main>
            <div id="layoutSidenav_content">
                <div class="container-fluid px-4">
                    <h1 class="mt-4">お知らせ</h1>
                    <ol class="breadcrumb mb-2">
                        <li class="breadcrumb-item active">詳細</li>
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
                                    <form class="" action="{{ route('admin.notifications.update', ['notification_id' => $notification->id]) }}" method="post">
                                        @method('PATCH')
                                        @csrf
                                        <div class="col-md-12 mb-2">
                                            <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="inputTitle" type="text" name="title" value="{{ $notification->title }}" />
                                                <label for="inputTitle">タイトル</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <textarea class="form-control" name="description" id="inputDescription" rows="10">{{ $notification->description }}</textarea>
                                                <label for="inputDescription">詳細</label>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-12 mb-2">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <select class="form-select" id="inputIsOpen" aria-label="" name="is_open" >
                                                        <option for="inputIsOpen" value="0"
                                                        @if($notification->is_open === 0)
                                                        selected
                                                        @endif
                                                        >非公開</option>
                                                        <option for="inputIsOpen" value="1"
                                                        @if($notification->is_open === 1)
                                                        selected
                                                        @endif>公開</option>
                                                    </select>
                                                    <label for="inputIsOpen">公開フラグ</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-12 mb-2">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <select class="form-select" id="inputType" aria-label="" name="type" >
                                                        <option for="inputType" value="0"
                                                        @if($notification->type === 0)
                                                        selected
                                                        @endif
                                                        >一般</option>
                                                        <option for="inputType" value="1"
                                                        @if($notification->type === 1)
                                                        selected
                                                        @endif
                                                        >会員</option>
                                                    </select>
                                                    <label for="inputType">タイプ</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="inputUrl" type="text" name="image" value="{{ $notification->image }}" />
                                                <label for="inputUrl">画像パス</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="inputStartDate" type="text" name="start_date" value="{{ $notification->end_datetime }}" />
                                                <label for="inputStartDate">開始日時</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="inputEndDate" type="text" name="end_date" value="{{ $notification->end_datetime }}" />
                                                <label for="inputEndDate">終了日時</label>
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
<script>
    $('#inputStartDate').datepicker();
    $('#inputEndDate').datepicker();
</script>
@endsection
