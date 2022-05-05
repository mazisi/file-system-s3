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
                <h4 class="card-title">Multiple File Input</h4>
              </div>
            </div>
          </div>
          <div id="view-multiple-file-input" class="active" style="display: block;">
           
            <form action="/submit-file" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="file-field input-field">
                <div class="btn">
                  <span>File</span>
                  <input type="file" name="documents[]" multiple>
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text" placeholder="Upload one or more files">
                </div>
              </div>
              <button>Submit</button>
            </form>
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