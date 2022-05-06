<div class="sidebar-left">
    <!--left sidebar of file manager start -->
    <div class="app-file-sidebar display-flex">
      <!-- App File sidebar - Left section Starts -->
      <div class="app-file-sidebar-left">
        <!-- sidebar close icon starts -->
        <span class="app-file-sidebar-close hide-on-med-and-up"><i class="material-icons">close</i></span>
        <!-- sidebar close icon ends -->
        {{-- @livewire('add-files') --}}
        <div class="app-file-sidebar-content">
          <!-- App File Left Sidebar - Drive Content Starts -->
          <span class="app-file-label">My Drive</span>
          
         
    
          <!-- App File Left Sidebar - Labels Content Starts -->
          <span class="app-file-label">Labels</span>
          <div class="collection file-manager-drive mt-3">
            <a href="/view-files/documents" class="collection-item file-item-action">
              <div class="fonticon-wrap display-inline mr-3">
                <i class="material-icons">content_paste</i>
              </div>
              <span> Documents</span>
            </a>
            <a href="/view-files/images" class="collection-item file-item-action">
              <div class="fonticon-wrap display-inline mr-3">
                <i class="material-icons">filter</i>
              </div>
              <span>Images</span>
            </a>
            <a href="/view-files/video" class="collection-item file-item-action">
              <div class="fonticon-wrap display-inline mr-3">
                <i class="material-icons">ondemand_video</i>
              </div>
              <span>Videos</span>
            </a>
            <a href="/view-files/audio" class="collection-item file-item-action">
              <div class="fonticon-wrap display-inline mr-3">
                <i class="material-icons">music_note</i>
              </div>
              <span> Audio</span>
            </a>
            <a href="/view-files/zip" class="collection-item file-item-action">
              <div class="fonticon-wrap display-inline mr-3">
                <i class="material-icons">storage</i>
              </div>
              <span>Zip Files</span>
            </a>
          </div>
          <!-- App File Left Sidebar - Labels Content Ends -->
    
        </div>
      </div>
    </div>
    </div>