<!doctype html>
<html lang="en">

@include ('includes.head')

<body>
    @include('includes.menu')
    <main role="main">
        <div class="container">
            @yield('content')
        </div>
    </main>
    @include ('includes.jsfooter')
    @include ('includes.footer')

</body>

</html>


