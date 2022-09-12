<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Resume - @yield('title')</title>
    @include('user.include.css')
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="51">
<div class="wrapper">
    @include('user.home.slider')
    <div class="content">
        @include('user.home.header')


        @include('user.home.about')

        @include('user.home.education')

        @include('user.home.experience')

        @include('user.home.service')

        @include('user.home.portfoilio')


        @include('user.home.review')

        @include('user.home.contact')

        @include('user.home.footer')


    </div>
</div>

<!-- Back to Top -->
<a href="#" class="back-to-top"><i class="fa fa-angle-double-up"></i></a>
@include('user.include.script')
</body>
</html>
