<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/mi.css')}}">
        <script src="\lproc\vendor\ckeditor\ckeditor\ckeditor.js"></script>
        <title>{{config('app.name','miGit')}}</title>

      
    </head>
    <body>
        @include('inc/navbar')
        
        <div class="container">
            
            @yield('content')
        </div>
        @include('inc/footer')
        
        <script>
            CKEDITOR.replace( 'article-ckeditor' );
        </script>
    </body>
</html>
