@extends('layouts.admin')

@section('content')
<div id="layoutSidenav">
    @include('commom.admin-side-menu')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">スタッフ</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">一覧</li>
                </ol>
                <div class="mb-4">
                    <a class="btn btn-primary" href="{{route('admin.staff.create')}}" role="button">新規作成</a>
                </div>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        スタッフ
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>名前</th>
                                    <th>メールアドレス</th>
                                    <th>権限</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>名前</th>
                                    <th>メールアドレス</th>
                                    <th>権限</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($staffs as $staff)
                                <tr>
                                    <td>
                                        <a href="{{ route('admin.staff.show', ['staff_id' => $staff->id]) }}">{{$staff->id}}</a>
                                    </td>
                                    <td>{{$staff->name}}</td>
                                    <td>{{$staff->email}}</td>
                                    <td>{{$staff->authorityName}}</td>
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
