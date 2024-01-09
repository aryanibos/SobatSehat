@include('backend.partials.header')
@include('backend.partials.navbar')
@include('backend.partials.sidebar')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            @yield('content-header')
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            @yield('content')
        </div>
    </section>
</div>
@include('backend.partials.footer')
