<div>
    <div class="app-file-area">
 

        <form wire:submit.prevent='store'>
          <div class="app-file-header">
              <div class="sidebar-toggle show-on-medium-and-down mr-1 ml-1">
                <i class="material-icons">menu</i>
              </div>
              <div class="app-file-header-search">
                <div class="input-field m-0">
                  <i class="material-icons prefix">add</i>
                  <input wire:model.defer='name' type="text" id="email-search" placeholder="Add folder...">
               </div>
               </div>
               
              <div class="app-file-header-icons display-flex align-items-center">
                <div class="fonticon-wrap display-inline">
                  <button class="btn-floating mb-1 btn-small waves-effect waves-light mr-1">
                    <i class="material-icons">add</i>
                  </button>
                </div>
              </div>
              </div>
          </form>
          @if(session()->has('success'))
          <p style="color: green; margin-left: 1rem;">{{ session('success') }}</p>
          @endif

          @if(session()->has('error'))
          <p style="color: red; margin-left: 1rem;">{{ session('error') }}</p>
          @endif
          @error('name')<p style="color: red; margin-left: 1rem;">{{ $message }}</p>@enderror
          
        <div class="app-file-content">
          <h6 class="font-weight-700 mb-3">All Folders</h6>
          <span class="app-file-label">Folders</span>
          <div class="row app-file-recent-access mb-3">

            @forelse ($folders as $folder)
            <div class="col xl3 l6 m3 s12">
                <a href="/add-sub-folder?folder={{ $folder->id }}">
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
                      <div class="app-file-size">12.85kb</div>
                      <div class="app-file-last-access">Created : {{ $folder->created_at->diffForHumans() }}</div>
                    </div>
                  </div>
                </div>
            </a>
              </div>
            @empty
            <h5 style="text-align: center">Empty.</h5>
                
            @endforelse
            
          </div>
        </div>
      </div>
</div>
