<!DOCTYPE html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    @include('user.include.head')
</head>

<body itemtype='https://schema.org/WebPage' itemscope='itemscope'
    class="home page-template-default page page-id-10 ast-single-post ast-inherit-site-logo-transparent ast-hfb-header ast-header-break-point ast-page-builder-template ast-no-sidebar astra-3.9.4 elementor-default elementor-kit-5 elementor-page elementor-page-10">
    @include('user.include.body_css')

    <body
        class="home page-template-default page page-id-10 ast-single-post ast-inherit-site-logo-transparent ast-hfb-header ast-header-break-point ast-page-builder-template ast-no-sidebar astra-3.9.4 elementor-default elementor-kit-5 elementor-page elementor-page-10">
        @include('user.include.body_css2')
        @include('user.include.navbar')
        @yield('content')
        @include('user.include.footer')
        @include('user.include.js')
    </body>


</html>
</div>
</body>

</html>
