@extends('layouts.app')
@section('content')
<div id="main">
  <div class="row">
    <div class="col s12">
      <div id="multiple-file-input" class="card card-tabs">
        <div class="card-content">
          <div class="card-title">
            <div class="row">
              <div class="col s12 m6 l10">
                <h4 class="card-title">Create Folder</h4>
              </div>
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