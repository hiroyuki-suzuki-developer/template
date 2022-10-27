@extends('layouts.app')

@section('content')
<div class="container p-0">
    <h1 class="h3 mb-3">Messages</h1>
    <div class="card mx-2">
        <div class="row g-0">
            <div class="px-4 py-4 col-12 col-lg-5 col-xl-3 border-right w-100">
                <div class="d-none d-md-block">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <input type="text" class="form-control my-3" placeholder="Search...">
                        </div>
                    </div>
                </div>

                <a href="{{ route('function-chat') }}" class="list-group-item list-group-item-action border-0">
                    <div class="d-flex align-items-start">
                        <img src="https://bootdey.com/img/Content/avatar/avatar5.png" class="rounded-circle mr-1" alt="Vanessa Tucker" width="40" height="40">
                        <div class="flex-grow-1 ml-3">
                            Vanessa Tucker
                            <div class="small"><span class="fas fa-circle chat-online"></span> Online</div>
                        </div>
                        <div class="badge bg-success float-right">5</div>
                    </div>
                </a>
                <a href="{{ route('function-chat') }}" class="list-group-item list-group-item-action border-0">
                    <div class="d-flex align-items-start">
                        <img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="rounded-circle mr-1" alt="William Harris" width="40" height="40">
                        <div class="flex-grow-1 ml-3">
                            William Harris
                            <div class="small"><span class="fas fa-circle chat-online"></span> Online</div>
                        </div>
                        <div class="badge bg-success float-right">2</div>
                    </div>
                </a>
                <a href="{{ route('function-chat') }}" class="list-group-item list-group-item-action border-0">
                    <div class="d-flex align-items-start">
                        <img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">
                        <div class="flex-grow-1 ml-3">
                            Sharon Lessman
                            <div class="small"><span class="fas fa-circle chat-online"></span> Online</div>
                        </div>
                    </div>
                </a>
                <a href="{{ route('function-chat') }}" class="list-group-item list-group-item-action border-0">
                    <div class="d-flex align-items-start">
                        <img src="https://bootdey.com/img/Content/avatar/avatar4.png" class="rounded-circle mr-1" alt="Christina Mason" width="40" height="40">
                        <div class="flex-grow-1 ml-3">
                            Christina Mason
                            <div class="small"><span class="fas fa-circle chat-offline"></span> Offline</div>
                        </div>
                    </div>
                </a>
                <a href="{{ route('function-chat') }}" class="list-group-item list-group-item-action border-0">
                    <div class="d-flex align-items-start">
                        <img src="https://bootdey.com/img/Content/avatar/avatar5.png" class="rounded-circle mr-1" alt="Fiona Green" width="40" height="40">
                        <div class="flex-grow-1 ml-3">
                            Fiona Green
                            <div class="small"><span class="fas fa-circle chat-offline"></span> Offline</div>
                        </div>
                    </div>
                </a>
                <a href="{{ route('function-chat') }}" class="list-group-item list-group-item-action border-0">
                    <div class="d-flex align-items-start">
                        <img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="rounded-circle mr-1" alt="Doris Wilder" width="40" height="40">
                        <div class="flex-grow-1 ml-3">
                            Doris Wilder
                            <div class="small"><span class="fas fa-circle chat-offline"></span> Offline</div>
                        </div>
                    </div>
                </a>
                <a href="{{ route('function-chat') }}" class="list-group-item list-group-item-action border-0">
                    <div class="d-flex align-items-start">
                        <img src="https://bootdey.com/img/Content/avatar/avatar4.png" class="rounded-circle mr-1" alt="Haley Kennedy" width="40" height="40">
                        <div class="flex-grow-1 ml-3">
                            Haley Kennedy
                            <div class="small"><span class="fas fa-circle chat-offline"></span> Offline</div>
                        </div>
                    </div>
                </a>
                <a href="{{ route('function-chat') }}" class="list-group-item list-group-item-action border-0">
                    <div class="d-flex align-items-start">
                        <img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle mr-1" alt="Jennifer Chang" width="40" height="40">
                        <div class="flex-grow-1 ml-3">
                            Jennifer Chang
                            <div class="small"><span class="fas fa-circle chat-offline"></span> Offline</div>
                        </div>
                    </div>
                </a>

                <hr class="d-block d-lg-none mt-1 mb-0">
            </div>
        </div>
    </div>
</div>
@endsection
