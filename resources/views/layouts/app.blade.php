<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('components.head')
</head>
<body class="font-sans antialiased">

    <div id="layout-wrapper">
        @include('components.navbar')
        @include('components.sidebar')

        <div class="main-content">
            <div class="page-content">
                {{ $slot }}
            </div>
            @include('components.footer')
        </div>
        
    </div>
    @include('components.scripts')

</body>
</html>
