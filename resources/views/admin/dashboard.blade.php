 @extends('layout.main-template')
 @section('external-css')
 <title>{{ $title }}</title>
 <link href="assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />
 @endsection
 @section('content')
 
 @endsection

 @section('external-js')
 <script src="{{ url('assets/js/pages/dashboard-ecommerce.init.js') }}"></script>
 <script src="{{ url('assets/libs/swiper/swiper-bundle.min.js') }}"></script>
 <script src="{{ url('assets/libs/apexcharts/apexcharts.min.js') }}"></script>
 <script src="assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
 <script src="assets/libs/jsvectormap/maps/world-merc.js"></script>
 @endsection