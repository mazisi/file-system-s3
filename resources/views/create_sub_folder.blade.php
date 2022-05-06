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
@include('layouts.sidebar_left')
<div class="content-right">
@livewire('create-sub-folder')
</div>

</div>

      </div>
      <div class="content-overlay"></div>
    </div>
  </div>
</div>

@push('page-specific-js')
    <script src="{{ asset('app-assets/js/scripts/app-file-manager.js') }}"></script>
@endpush
@endsection