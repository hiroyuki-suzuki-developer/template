@extends('layouts.admin')

@section('content')
<div id="layoutSidenav">
    @include('commom.admin-side-menu')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">お知らせ</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">一覧</li>
                </ol>
                <div class="mb-4">
                    <a class="btn btn-primary" href="{{route('admin.notifications.create')}}" role="button">新規作成</a>
                </div>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        お知らせ
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>名前</th>
                                    <th>ステータス</th>
                                    <th>タイプ</th>
                                    <th>公開日時</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>名前</th>
                                    <th>ステータス</th>
                                    <th>タイプ</th>
                                    <th>公開日時</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($notifications as $notification)
                                <tr>
                                    <td>
                                        <a class="text-muted" href="{{ route('admin.notifications.show', ['notification_id' => $notification->id]) }}">{{$notification->title}}</a>
                                    </td>
                                    <td>
                                        {{$notification->isOpenName}}
                                    </td>
                                    <td>
                                        {{$notification->typeName}}
                                    </td>
                                    <td>
                                        {{ $notification->start_datetime }}<br>
                                        {{$notification->end_datetime}}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
        @include('commom.admin-footer')
    </div>
</div>
@endsection
