<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        @foreach($breadcrumbs as $key => $name)
        <a href="{{$key}}"><li class="breadcrumb-item active" aria-current="page">{{$name}}</li></a>
        @endforeach
    </ol>
</nav>