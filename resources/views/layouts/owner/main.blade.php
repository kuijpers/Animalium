@include('layouts.owner.includes.header')

<body>
<div id="wrapper">
    @include('layouts.owner.includes.navigation')

    <div id="page-wrapper">
    @yield('content')
    </div>

</div>
<!-- /#wrapper -->

    @yield('script')

<script type="text/javascript" src="/lib/jquery/jquery.nicescroll.min.js"></script>

<!-- NICE Scroll plugin -->
<script>
    //scroll bar custom
    jQuery(document).ready(
        function() {
            $("html").niceScroll({cursorcolor:"#333"});
        }
    );

</script>

</body>
</html>
