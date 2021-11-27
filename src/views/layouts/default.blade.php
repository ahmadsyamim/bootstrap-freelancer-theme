@include('Freelancer.partials.meta')
@include('Freelancer.partials.header')

<div class="container">
  <div class="block">
    @yield('content')
  </div>
</div>


{{-- <main class="main-content">
    @yield('content')
</main> --}}

@include('Freelancer.partials.footer')
