@include('admin.layouts.header')
@include('admin.layouts.menu')
@include('admin.layouts.sidebar')

<div class="content-wrapper">
    <section class="content-header">
        @yield('content-header')
    </section>

    <section class="content">
        @include('admin.layouts.alert')
        @yield('content')
    </section>
</div>
@include('admin.layouts.footer')