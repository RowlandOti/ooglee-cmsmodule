<!DOCTYPE html>
<!--**********************************************************************************-->
<!-- Skyllabler - http://www.skyllaber.com                                            -->
<!-- Copyright (c) 2014-2015                                                          -->
<!-- by Skyllabler Soft                                                               -->
<!--**********************************************************************************-->
<html lang="en">
<head>
    @include('ooglee-cms::admin.layouts.head')
</head>
<body id="Body" class="skin-green sidebar-mini">
    <!-- wrapper -->
    <div class="wrapper">
        <!-- Header -->
        @include('ooglee-cms::admin.layouts.header')
        <!-- ./Header -->

        <!-- SidebarMain -->
        @include('ooglee-cms::admin.layouts.sidebarmain')
        <!-- ./SidebarMain -->

        <!-- Content Wrapper-->
        <div class="content-wrapper">
            <!-- Page Content  -->
            @yield('content')
            <!-- ./Page Content -->
        </div>
        <!-- ./Content Wrapper -->

        <!-- Footer -->
        @include('ooglee-cms::admin.layouts.footer')
        <!-- ./Footer -->

        <!-- SideBar Control -->
        @include('ooglee-cms::admin.layouts.sidebarcontrol')
        <!-- ./SideBar Control -->
    </div>
    <!-- ./wrapper -->

    <!-- Footer Scripts -->
    @include('ooglee-cms::admin.layouts.footerscripts')
    <!-- ./Footer Scripts --> 
</body>
</html>