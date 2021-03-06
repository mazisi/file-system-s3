<div>
    <div class="app-file-area">

        <form wire:submit.prevent='addFolder'>
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
                    
                    <a class="waves-effect waves-light btn-small mb-1 mr-1"><i class="material-icons">add</i> Folder</a>
                  </button>
                </div>
              </div>
              </div>
          </form>

          {{-- adding of files --}}

          <form action="/submit-files" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" value="{{request('folder')}}" name="folder_id">
            <div class="app-file-header">
                <div class="sidebar-toggle show-on-medium-and-down mr-1 ml-1">
                  <i class="material-icons">menu</i>
                </div>
                <div class="file-field input-field">
                    <div class="btn btn-file">
                      <span>Attach Files</span>
                      <input type="file" name='documents[]' multiple>
                    </div>
                    <div class="file-path-wrapper">
                      <input class="file-path validate" type="text">
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

            @forelse ($files as $file)
            
            {{-- end --}}
            <div class="col xl3 l6 m3 s12">
                
                <div class="card box-shadow-none mb-1 app-file-info">
                  <div class="card-content">
                    <div class="app-file-content-logo lighten-4">
                      <div class="fonticon">
                        <div class="select-action">
                          <!-- Dropdown Trigger -->
                            <i x-data onclick="return confirm('Do you want to delete??') ? @this.deleteFile('{{ $file->id }}') : false"  class="material-icons" style="color:red;">delete</i> 
                                            
                        </div>
                      </div>
                    </div>
                    <a href="{{Storage::temporaryUrl('nexgen/'.$file->name , now()->addMinutes(3) )}}">
                      <img class="recent-file" src="{{ asset('app-assets/images/icon/'.render_icon($file->name)) }}" height="38" width="30"
                        alt="Card image cap">
                    
                    <div class="app-file-recent-details">
                      
                        <div class="app-file-name font-weight-700">{{ $file->name }}</div>
                        <div class="app-file-size">
                          {{bytes_to_human(Storage::size('nexgen/'.$file->name))}}
                        </div>
                      <div class="app-file-last-access">Created : {{ $file->created_at->diffForHumans() }}</div>
                    </div>
                  </a>
                  </div>
                </div>
            
              </div>
            @empty
            
                
            @endforelse
            
          </div>
        </div>
      </div>
</div>

