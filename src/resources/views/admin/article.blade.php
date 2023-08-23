@extends('layouts.admin')
<!-- Import prismjs stylesheet -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.13.0/themes/prism.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/plugins/line-highlight/prism-line-highlight.min.css">
<link rel="stylesheet" href="/trumbowyg/dist/ui/trumbowyg.min.css">
<link rel="stylesheet" href="/trumbowyg/dist/plugins/highlight/ui/trumbowyg.highlight.min.css">
@section('content')
<div id="layoutSidenav">
    @include('commom.admin-side-menu')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">記事</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">新規記事</li>
                </ol>
                <div>
                    <textarea id="editor" name="editor" style="width:100%;"></textarea>
                </div>
                <button class="btn btn-primary">保存</button>
            </div>
        </main>
        @include('commom.admin-footer')
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/prism.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/plugins/line-highlight/prism-line-highlight.min.js"></script>
<script src="/trumbowyg/dist/trumbowyg.min.js"></script>
<script src="/trumbowyg/dist/plugins/highlight/trumbowyg.highlight.min.js"></script>
<script>
$(function(){
$('#editor').trumbowyg({
    btns: [
        ['strong', 'em'],
        ['justifyLeft', 'justifyCenter'],
        ['insertImage', 'link'],
        ['highlight']
    ]
});
});
</script>
@endsection
