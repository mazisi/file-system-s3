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
    <div>
        <div class="app-file-area">
    
                
              @if(session()->has('success'))
              <p style="color: green; margin-left: 1rem;">{{ session('success') }}</p>
              @endif
    
              @if(session()->has('error'))
              <p style="color: red; margin-left: 1rem;">{{ session('error') }}</p>
              @endif
              @error('name')<p style="color: red; margin-left: 1rem;">{{ $message }}</p>@enderror
              
            <div class="app-file-content"> 
              <h6 class="font-weight-700 mb-3">{{request('type')}}</h6>
              <div class="row app-file-recent-access mb-3">
                  @foreach ($dataCollection as $data)
                  <div class="col xl3 l6 m3 s12">
                    
                    <div class="card box-shadow-none mb-1 app-file-info">
                      <div class="card-content">
                        <div class="app-file-content-logo grey lighten-4">
                          
                          <a href="{{Storage::temporaryUrl('nexgen/'.$data['name'], now()->addMinutes(3) )}}">
                          <img class="recent-file" src="{{ asset('app-assets/images/icon/'.render_icon($data['name']))}}" height="38" width="30"
                            alt="Card image cap">
                        </div>
                        <div class="app-file-recent-details">
                          <div class="app-file-name font-weight-700">{{$data['name']}}</div>
                          <div class="app-file-size">{{bytes_to_human(Storage::size('nexgen/'.$data['name']))}}</div>
                          <div class="app-file-last-access">Created : {{$data['created_at']}}</div>
                        </div>
                      </a>
                      </div>
                    </div>
                
                  </div> 
                  @endforeach
               
              
              </div>
            </div>
          </div>
    </div>
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