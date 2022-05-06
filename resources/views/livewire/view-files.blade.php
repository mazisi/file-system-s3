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

            
          <h6 class="font-weight-700 mb-3"> {{ $get_folder->name }}</h6>
          <div class="row app-file-recent-access mb-3">

            @forelse ($folders as $folder)
            <div class="col xl3 l6 m3 s12">
                <a href="/add-sub-folder/?folder={{ $folder->id }}">
                <div class="card box-shadow-none mb-1 app-file-info">
                  <div class="card-content">
                    <div class="app-file-content-logo grey lighten-4">
                      <div class="fonticon">
                        <i class="material-icons">more_vert</i>
                      </div>
                      <img class="recent-file" src="{{ asset('app-assets/images/icon/folder.PNG') }}" height="38" width="30"
                        alt="Card image cap">
                    </div>
                    <div class="app-file-recent-details">
                      <div class="app-file-name font-weight-700">{{ $folder->name }}</div>
                      <div class="app-file-last-access">Created : {{ $folder->created_at->diffForHumans() }}</div>
                    </div>
                  </div>
                </div>
            </a>
              </div>
            @empty
            
                
            @endforelse

     
            
          </div>
        </div>
      </div>
</div>

