@extends('layouts.app')
@section('content')
@push('page-specific-css')
<link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/vertical-modern-menu-template/materialize.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/vertical-modern-menu-template/style.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/app-file-manager.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/widget-timeline.css">
@endpush
 

<div id="main">
  <div class="row">
    <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
    <div class="col s12">
      <div class="container">
        <div class="section app-file-manager-wrapper">
<!-- File Manager app overlay -->
<div class="app-file-overlay"></div>
<!-- /File Manager app overlay -->
<!-- sidebar left start -->
<div class="sidebar-left">
<!--left sidebar of file manager start -->
<div class="app-file-sidebar display-flex">
  <!-- App File sidebar - Left section Starts -->
  <div class="app-file-sidebar-left">
    <!-- sidebar close icon starts -->
    <span class="app-file-sidebar-close hide-on-med-and-up"><i class="material-icons">close</i></span>
    <!-- sidebar close icon ends -->
  
    {{-- side bar --}}
    @include('layouts.sidebar_left')
    
  </div>
</div>
<!--left sidebar of file manager start -->
</div>
<!--/ sidebar left end -->
<!-- content-right start -->
<div class="content-right">
<!-- file manager main content start -->
@livewire('add-folder')
</div>

</div><!-- START RIGHT SIDEBAR NAV -->

      </div>
      <div class="content-overlay"></div>
    </div>
  </div>
</div>

@push('page-specific-js')
    <script src="{{ asset('app-assets/js/scripts/app-file-manager.js') }}"></script>
    @endpush
@endsection