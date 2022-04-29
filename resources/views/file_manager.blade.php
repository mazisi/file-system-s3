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
  
    <div class="app-file-sidebar-content">
      <!-- App File Left Sidebar - Drive Content Starts -->
      <span class="app-file-label">My Drive</span>
      <div class="collection file-manager-drive mt-3">
        <a href="#" class="collection-item file-item-action active">
          <div class="fonticon-wrap display-inline mr-3">
            <i class="material-icons">folder_open</i>
          </div>
          <span>All Files</span>
          <span class="chip red lighten-5 float-right red-text">2</span>
        </a>
        <a href="#" class="collection-item file-item-action">
          <div class="fonticon-wrap display-inline mr-3">
            <i class="material-icons">computer</i>
          </div>
          <span>My Devices</span>
        </a>
        <a href="#" class="collection-item file-item-action">
          <div class="fonticon-wrap display-inline mr-3">
            <i class="material-icons">schedule</i>
          </div>
          <span>Recents</span>
        </a>
        <a href="#" class="collection-item file-item-action">
          <div class="fonticon-wrap display-inline mr-3">
            <i class="material-icons">star_border</i>
          </div>
          <span>Important</span>
        </a>
        <a href="#" class="collection-item file-item-action">
          <div class="fonticon-wrap display-inline mr-3">
            <i class="material-icons">delete</i>
          </div>
          <span> Deleted Files</span>
        </a>
      </div>
      <!-- App File Left Sidebar - Drive Content Ends -->

      <!-- App File Left Sidebar - Labels Content Starts -->
      <span class="app-file-label">Labels</span>
      <div class="collection file-manager-drive mt-3">
        <a href="#" class="collection-item file-item-action">
          <div class="fonticon-wrap display-inline mr-3">
            <i class="material-icons">content_paste</i>
          </div>
          <span> Documents</span>
        </a>
        <a href="#" class="collection-item file-item-action">
          <div class="fonticon-wrap display-inline mr-3">
            <i class="material-icons">filter</i>
          </div>
          <span>Images</span>
        </a>
        <a href="#" class="collection-item file-item-action">
          <div class="fonticon-wrap display-inline mr-3">
            <i class="material-icons">ondemand_video</i>
          </div>
          <span>Videos</span>
        </a>
        <a href="#" class="collection-item file-item-action">
          <div class="fonticon-wrap display-inline mr-3">
            <i class="material-icons">music_note</i>
          </div>
          <span> Audio</span>
        </a>
        <a href="#" class="collection-item file-item-action">
          <div class="fonticon-wrap display-inline mr-3">
            <i class="material-icons">storage</i>
          </div>
          <span>Zip Files</span>
        </a>
      </div>
      <!-- App File Left Sidebar - Labels Content Ends -->

      <!-- App File Left Sidebar - Storage Content Starts -->
      <span class="app-file-label">Storage Status</span>
      <div class="display-flex mb-1 mt-3">
        <div class="fonticon-wrap mr-3">
          <i class="material-icons storage-icon">sd_card</i>
        </div>
        <div class="file-manager-progress">
          <small>19.5GB used of 25GB</small>
          <div class="progress pink lighten-5 mt-0">
            <div class="determinate" style="width: 70%"></div>
          </div>
        </div>
      </div>
      <a href="#" class="font-weight-900">Upgrade Storage</a>
      <!-- App File Left Sidebar - Storage Content Ends -->
    </div>
  </div>
</div>
<!--left sidebar of file manager start -->
</div>
<!--/ sidebar left end -->
<!-- content-right start -->
<div class="content-right">
<!-- file manager main content start -->
<div class="app-file-area">
  <!-- File App Content Area -->
  <!-- App File Header Starts -->
  <div class="app-file-header">
    <!-- Header search bar starts -->
    <div class="sidebar-toggle show-on-medium-and-down mr-1 ml-1">
      <i class="material-icons">menu</i>
    </div>
    <div class="app-file-header-search">
      <div class="input-field m-0">
        <i class="material-icons prefix">search</i>
        <input type="search" id="email-search" placeholder="Search email">
      </div>
    </div>
    <!-- Header search bar Ends -->

    <!-- Header Icons Starts -->
    @livewire('file-upload')
    <!-- Header Icons Ends -->
  </div>
  <!-- App File Header Ends -->

  <!-- App File Content Starts -->
  <div class="app-file-content">
    <h6 class="font-weight-700 mb-3">All Files</h6>

    <!-- App File - Recent Accessed Files Section Starts -->
    <span class="app-file-label">Recently Accessed Files</span>
    <div class="row app-file-recent-access mb-3">
      <div class="col xl3 l6 m3 s12">
        <div class="card box-shadow-none mb-1 app-file-info">
          <div class="card-content">
            <div class="app-file-content-logo grey lighten-4">
              <div class="fonticon">
                <i class="material-icons">more_vert</i>
              </div>
              <img class="recent-file" src="../../../app-assets/images/icon/pdf.png" height="38" width="30"
                alt="Card image cap">
            </div>
            <div class="app-file-recent-details">
              <div class="app-file-name font-weight-700">Felecia_Resume.pdf</div>
              <div class="app-file-size">12.85kb</div>
              <div class="app-file-last-access">Last accessed : 3 hours ago</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col xl3 l6 m3 s12">
        <div class="card box-shadow-none mb-1 app-file-info">
          <div class="card-content">
            <div class="app-file-content-logo grey lighten-4">
              <div class="fonticon"><i class="material-icons">more_vert</i></div>
              <img class="recent-file" src="../../../app-assets/images/icon/psd.png" height="38" width="30"
                alt="Card image cap">
            </div>
            <div class="app-file-content-details">
              <div class="app-file-name font-weight-700">Logo_design.psd</div>
              <div class="app-file-size">15.60mb</div>
              <div class="app-file-last-access">Last accessed : 3 hours ago</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col xl3 l6 m3 s12">
        <div class="card box-shadow-none mb-1 app-file-info">
          <div class="card-content">
            <div class="app-file-content-logo grey lighten-4">
              <div class="fonticon"> <i class="material-icons">more_vert</i></div>
              <img class="recent-file" src="../../../app-assets/images/icon/doc.png" height="38" width="30"
                alt="Card image cap">
            </div>
            <div class="app-file-content-details">
              <div class="app-file-name font-weight-700">Music_Two.xyz</div>
              <div class="app-file-size">1.2gb</div>
              <div class="app-file-last-access">Last accessed : 3 hours ago</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col xl3 l6 m3 s12">
        <div class="card box-shadow-none mb-1 app-file-info">
          <div class="card-content">
            <div class="app-file-content-logo grey lighten-4">
              <div class="fonticon">
                <i class="material-icons">more_vert</i>
              </div>
              <img class="recent-file" src="../../../app-assets/images/icon/sketch.png" height="38" width="30"
                alt="Card image cap">
            </div>
            <div class="app-file-content-details">
              <div class="app-file-name font-weight-700">Application.sketch</div>
              <div class="app-file-size">92.83kb</div>
              <div class="app-file-last-access">Last accessed : 3 hours ago</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- App File - Recent Accessed Files Section Ends -->

    <!-- App File - Folder Section Starts -->
    <span class="app-file-label">Folder</span>
    <div class="row app-file-folder mb-3">
      <div class="col xl3 l6 m4 s6">
        <div class="card box-shadow-none mb-1 app-file-info">
          <div class="card-content">
            <div class="app-file-folder-content cursor-pointer display-flex align-items-center">
              <div class="app-file-folder-logo mr-3">
                <i class="material-icons">folder_open</i>
              </div>
              <div class="app-file-folder-details">
                <div class="app-file-folder-name font-weight-700">Project</div>
                <div class="app-file-folder-size">2 files, 14.05mb</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col xl3 l6 m4 s6">
        <div class="card box-shadow-none mb-1 app-file-info">
          <div class="card-content">
            <div class="app-file-folder-content cursor-pointer display-flex align-items-center">
              <div class="app-file-folder-logo mr-3">
                <i class="material-icons">folder_open</i>
              </div>
              <div class="app-file-folder-details">
                <div class="app-file-folder-name font-weight-700">Video</div>
                <div class="app-file-folder-size">130 files, 890mb</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col xl3 l6 m4 s6">
        <div class="card box-shadow-none mb-1 app-file-info">
          <div class="card-content">
            <div class="app-file-folder-content cursor-pointer display-flex align-items-center">
              <div class="app-file-folder-logo mr-3">
                <i class="material-icons">folder_open</i>
              </div>
              <div class="app-file-folder-details">
                <div class="app-file-folder-name font-weight-700">Music</div>
                <div class="app-file-folder-size">15 files, 58mb</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col xl3 l6 m4 s6">
        <div class="card box-shadow-none mb-1 app-file-info">
          <div class="card-content">
            <div class="app-file-folder-content cursor-pointer display-flex align-items-center">
              <div class="app-file-folder-logo mr-3">
                <i class="material-icons">folder_open</i>
              </div>
              <div class="app-file-folder-details">
                <div class="app-file-folder-name font-weight-700">Documents</div>
                <div class="app-file-folder-size">12 files, 9.5mb</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col xl3 l6 m4 s6">
        <div class="card box-shadow-none mb-1 app-file-info">
          <div class="card-content">
            <div class="app-file-folder-content cursor-pointer display-flex align-items-center">
              <div class="app-file-folder-logo mr-3">
                <i class="material-icons">folder_open</i>
              </div>
              <div class="app-file-folder-details">
                <div class="app-file-folder-name font-weight-700">Application Design</div>
                <div class="app-file-folder-size">1 files, 36.25kb</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col xl3 l6 m4 s6">
        <div class="card box-shadow-none mb-1 app-file-info">
          <div class="card-content">
            <div class="app-file-folder-content cursor-pointer display-flex align-items-center">
              <div class="app-file-folder-logo mr-3">
                <i class="material-icons">folder_open</i>
              </div>
              <div class="app-file-folder-details">
                <div class="app-file-folder-name font-weight-700">Photos</div>
                <div class="app-file-folder-size">3.6k files, 348mb</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- App File - Folder Section Ends -->

    <!-- App File - Files Section Starts -->
    <label class="app-file-label">Files</label>
    <div class="row app-file-files">
      <div class="col xl3 l6 m3 s6">
        <div class="card box-shadow-none mb-1 app-file-info">
          <div class="card-content">
            <div class="app-file-content-logo grey lighten-4">
              <div class="fonticon">
                <i class="material-icons">more_vert</i>
              </div>
              <img class="recent-file" src="../../../app-assets/images/icon/pdf.png" height="38" width="30"
                alt="Card image cap">
            </div>
            <div class="app-file-details">
              <div class="app-file-name font-weight-700">Banner.jpg</div>
              <div class="app-file-size">13kb</div>
              <div class="app-file-type">Image File</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col xl3 l6 m3 s6">
        <div class="card box-shadow-none mb-1 app-file-info">
          <div class="card-content">
            <div class="app-file-content-logo grey lighten-4">
              <div class="fonticon">
                <i class="material-icons">more_vert</i>
              </div>
              <img class="recent-file" src="../../../app-assets/images/icon/psd.png" height="38" width="30"
                alt="Card image cap">
            </div>
            <div class="app-file-details">
              <div class="app-file-name font-weight-700">Management.docx</div>
              <div class="app-file-size">15.60mb</div>
              <div class="app-file-type">Word Document</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col xl3 l6 m3 s6">
        <div class="card box-shadow-none mb-1 app-file-info">
          <div class="card-content">
            <div class="app-file-content-logo grey lighten-4">
              <div class="fonticon">
                <i class="material-icons">more_vert</i>
              </div>
              <img class="recent-file" src="../../../app-assets/images/icon/doc.png" height="38" width="30"
                alt="Card image cap">
            </div>
            <div class="app-file-details">
              <div class="app-file-name font-weight-700">Thunder.mp3</div>
              <div class="app-file-size">3.4mb</div>
              <div class="app-file-type">Mp3 File</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col xl3 l6 m3 s6">
        <div class="card box-shadow-none mb-1 app-file-info">
          <div class="card-content">
            <div class="app-file-content-logo grey lighten-4">
              <div class="fonticon">
                <i class="material-icons">more_vert</i>
              </div>
              <img class="recent-file" src="../../../app-assets/images/icon/sketch.png" height="38" width="30"
                alt="Card image cap">
            </div>
            <div class="app-file-details">
              <div class="app-file-name font-weight-700">Dashboard.sketch</div>
              <div class="app-file-size">108kb</div>
              <div class="app-file-type">Sketch File</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row app-file-files">
      <div class="col xl3 l6 m3 s6">
        <div class="card box-shadow-none mb-1 app-file-info">
          <div class="card-content">
            <div class="app-file-content-logo grey lighten-4">
              <div class="fonticon">
                <i class="material-icons">more_vert</i>
              </div>
              <img class="recent-file" src="../../../app-assets/images/icon/psd.png" height="38" width="30"
                alt="Card image cap">
            </div>
            <div class="app-file-details">
              <div class="app-file-name font-weight-700">Logo.psd</div>
              <div class="app-file-size">10.6kb</div>
              <div class="app-file-type">Photoshop File</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col xl3 l6 m3 s6">
        <div class="card box-shadow-none mb-1 app-file-info">
          <div class="card-content">
            <div class="app-file-content-logo grey lighten-4">
              <div class="fonticon">
                <i class="material-icons">more_vert</i>
              </div>
              <img class="recent-file" src="../../../app-assets/images/icon/sketch.png" height="38" width="30"
                alt="Card image cap">
            </div>
            <div class="app-file-details">
              <div class="app-file-name font-weight-700">Logo_Design.sketch</div>
              <div class="app-file-size">256.5kb</div>
              <div class="app-file-type">Sketch File</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col xl3 l6 m3 s6">
        <div class="card box-shadow-none mb-1 app-file-info">
          <div class="card-content">
            <div class="app-file-content-logo grey lighten-4">
              <div class="fonticon">
                <i class="material-icons">more_vert</i>
              </div>
              <img class="recent-file" src="../../../app-assets/images/icon/doc.png" height="38" width="30"
                alt="Card image cap">
            </div>
            <div class="app-file-details">
              <div class="app-file-name font-weight-700">Bootstrap.xyz</div>
              <div class="app-file-size">0.0kb</div>
              <div class="app-file-type">Unknown File</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col xl3 l6 m3 s6">
        <div class="card box-shadow-none mb-1 app-file-info">
          <div class="card-content">
            <div class="app-file-content-logo grey lighten-4">
              <div class="fonticon">
                <i class="material-icons">more_vert</i>
              </div>
              <img class="recent-file" src="../../../app-assets/images/icon/pdf.png" height="38" width="30"
                alt="Card image cap">
            </div>
            <div class="app-file-details">
              <div class="app-file-name font-weight-700">Read_Me.pdf</div>
              <div class="app-file-size">10.5kb</div>
              <div class="app-file-type">PDF File</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- App File - Files Section Ends -->
  </div>
</div>

<!-- file manager main content end  -->
</div>
<!-- content-right end -->
<!-- App File sidebar - Right section Starts -->
<div class="app-file-sidebar-info">
<div class="card box-shadow-none m-0 pb-1">
  <div class="card-header display-flex justify-content-between align-items-center">
    <h6 class="m-0">Document.pdf</h6>
    <div class="app-file-action-icons display-flex align-items-center">
      <i class="material-icons mr-10">delete</i>
      <i class="material-icons close-icon">close</i>
    </div>
  </div>
  <div class="card-content">
    <ul class="tabs tabs-fixed-width mb-1">
      <li class="tab mr-1 pr-1">
        <a class="active display-flex align-items-center" id="details-tab" href="#details">
          <i class="material-icons mr-1">content_paste</i>
          <span>Details</span>
        </a>
      </li>
      <li class="tab">
        <a class="display-flex align-items-center" id="activity-tab" href="#file-activity">
          <i class="material-icons mr-1">timeline</i>
          <span>Activity</span>
        </a>
      </li>
    </ul>
    <div class="tab-content">
      <div class="details-tab active" id="details">
        <div class="display-flex align-items-center flex-column pb-2 pt-4">
          <img src="../../../app-assets/images/icon/pdf.png" alt="PDF" height="42" width="35" class="mt-5 mb-5">
          <p class="mt-4">15.3mb</p>
        </div>
        <div class="divider mt-5 mb-5"></div>
        <div class="pt-6">
          <span class="app-file-label">Setting</span>
          <div class="display-flex justify-content-between align-items-center mt-6">
            <p>File Sharing</p>
            <div class="switch">
              <label>
                <input type="checkbox" id="customSwitchGlow1">
                <span class="lever"></span>
              </label>
            </div>
          </div>
          <div class="display-flex justify-content-between align-items-center mt-6">
            <p>Synchronization</p>
            <div class="switch">
              <label>
                <input type="checkbox" id="customSwitchGlow2" checked>
                <span class="lever"></span>
              </label>
            </div>
          </div>
          <div class="display-flex justify-content-between align-items-center mt-6 mb-8">
            <p>Backup</p>
            <div class="switch">
              <label>
                <input type="checkbox" id="customSwitchGlow3">
                <span class="lever"></span>
              </label>
            </div>
          </div>
          <span class="app-file-label">Info</span>
          <div class="display-flex justify-content-between align-items-center mt-6">
            <p>Type</p>
            <p class="font-weight-700">PDF</p>
          </div>
          <div class="display-flex justify-content-between align-items-center mt-6">
            <p>Size</p>
            <p class="font-weight-700">15.6mb</p>
          </div>
          <div class="display-flex justify-content-between align-items-center mt-6">
            <p>Location</p>
            <p class="font-weight-700">Files > Documents</p>
          </div>
          <div class="display-flex justify-content-between align-items-center mt-6">
            <p>Owner</p>
            <p class="font-weight-700">Elnora Reese</p>
          </div>
          <div class="display-flex justify-content-between align-items-center mt-6">
            <p>Modified</p>
            <p class="font-weight-700">September 4 2019</p>
          </div>
          <div class="display-flex justify-content-between align-items-center mt-6">
            <p>Opened</p>
            <p class="font-weight-700">July 8, 2019</p>
          </div>
          <div class="display-flex justify-content-between align-items-center mt-6">
            <p>Created</p>
            <p class="font-weight-700">July 1, 2019</p>
          </div>
        </div>
      </div>
      <div class="activity-tab" id="file-activity">
        <ul class="widget-timeline mb-0">
          <li class="timeline-items timeline-icon-green active">
            <div class="timeline-time">Today</div>
            <h6 class="timeline-title">You added an item to</h6>
            <p class="timeline-text">You added an item</p>
            <div class="timeline-content">
              <img src="../../../app-assets/images/icon/psd.png" alt="PSD" height="30" width="25"
                class="mr-1">Mockup.psd
            </div>
          </li>
          <li class="timeline-items timeline-icon-cyan active">
            <div class="timeline-time">10 min ago</div>
            <h6 class="timeline-title">You shared 2 times</h6>
            <p class="timeline-text">Emily Bennett edited an item</p>
            <div class="timeline-content">
              <img src="../../../app-assets/images/icon/sketch.png" alt="Sketch" height="30" width="25"
                class="mr-1">Template_Design.sketch
            </div>
          </li>
          <li class="timeline-items timeline-icon-red active">
            <div class="timeline-time">Mon 10:20 PM</div>
            <h6 class="timeline-title">You edited an item</h6>
            <p class="timeline-text">You edited an item</p>
            <div class="timeline-content">
              <img src="../../../app-assets/images/icon/pdf.png" alt="document" height="30" width="25"
                class="mr-1">Information.doc
            </div>
          </li>
          <li class="timeline-items timeline-icon-indigo active">
            <div class="timeline-time">Jul 13 2019</div>
            <h6 class="timeline-title">You edited an item</h6>
            <p class="timeline-text">John Keller edited an item</p>
            <div class="timeline-content">
              <img src="../../../app-assets/images/icon/pdf.png" alt="document" height="30" width="25"
                class="mr-1">Documentation.doc
            </div>
          </li>
          <li class="timeline-items timeline-icon-orange">
            <div class="timeline-time">Apr 18 2019</div>
            <h6 class="timeline-title">You added an item to</h6>
            <p class="timeline-text">You edited an item</p>
            <div class="timeline-content">
              <img src="../../../app-assets/images/icon/pdf.png" alt="document" height="30" width="25"
                class="mr-1">Resume.pdf
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
</div>
<!-- App File sidebar - Right section Ends -->
</div><!-- START RIGHT SIDEBAR NAV -->
<aside id="right-sidebar-nav">
<div id="slide-out-right" class="slide-out-right-sidenav sidenav rightside-navigation">
<div class="row">
  <div class="slide-out-right-title">
    <div class="col s12 border-bottom-1 pb-0 pt-1">
      <div class="row">
        <div class="col s2 pr-0 center">
          <i class="material-icons vertical-text-middle"><a href="#" class="sidenav-close">clear</a></i>
        </div>
        <div class="col s10 pl-0">
          <ul class="tabs">
            <li class="tab col s4 p-0">
              <a href="#messages" class="active">
                <span>Messages</span>
              </a>
            </li>
            <li class="tab col s4 p-0">
              <a href="#settings">
                <span>Settings</span>
              </a>
            </li>
            <li class="tab col s4 p-0">
              <a href="#activity">
                <span>Activity</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="slide-out-right-body row pl-3">
    <div id="messages" class="col s12 pb-0">
      <div class="collection border-none mb-0">
        <input class="header-search-input mt-4 mb-2" type="text" name="Search" placeholder="Search Messages" />
        <ul class="collection right-sidebar-chat p-0 mb-0">
          <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
            data-target="slide-out-chat">
            <span class="avatar-status avatar-online avatar-50"><img
                src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar" />
              <i></i>
            </span>
            <div class="user-content">
              <h6 class="line-height-0">Elizabeth Elliott</h6>
              <p class="medium-small blue-grey-text text-lighten-3 pt-3">Thank you</p>
            </div>
            <span class="secondary-content medium-small">5.00 AM</span>
          </li>
          <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
            data-target="slide-out-chat">
            <span class="avatar-status avatar-online avatar-50"><img
                src="../../../app-assets/images/avatar/avatar-1.png" alt="avatar" />
              <i></i>
            </span>
            <div class="user-content">
              <h6 class="line-height-0">Mary Adams</h6>
              <p class="medium-small blue-grey-text text-lighten-3 pt-3">Hello Boo</p>
            </div>
            <span class="secondary-content medium-small">4.14 AM</span>
          </li>
          <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
            data-target="slide-out-chat">
            <span class="avatar-status avatar-off avatar-50"><img
                src="../../../app-assets/images/avatar/avatar-2.png" alt="avatar" />
              <i></i>
            </span>
            <div class="user-content">
              <h6 class="line-height-0">Caleb Richards</h6>
              <p class="medium-small blue-grey-text text-lighten-3 pt-3">Hello Boo</p>
            </div>
            <span class="secondary-content medium-small">4.14 AM</span>
          </li>
          <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
            data-target="slide-out-chat">
            <span class="avatar-status avatar-online avatar-50"><img
                src="../../../app-assets/images/avatar/avatar-3.png" alt="avatar" />
              <i></i>
            </span>
            <div class="user-content">
              <h6 class="line-height-0">Caleb Richards</h6>
              <p class="medium-small blue-grey-text text-lighten-3 pt-3">Keny !</p>
            </div>
            <span class="secondary-content medium-small">9.00 PM</span>
          </li>
          <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
            data-target="slide-out-chat">
            <span class="avatar-status avatar-online avatar-50"><img
                src="../../../app-assets/images/avatar/avatar-4.png" alt="avatar" />
              <i></i>
            </span>
            <div class="user-content">
              <h6 class="line-height-0">June Lane</h6>
              <p class="medium-small blue-grey-text text-lighten-3 pt-3">Ohh God</p>
            </div>
            <span class="secondary-content medium-small">4.14 AM</span>
          </li>
          <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
            data-target="slide-out-chat">
            <span class="avatar-status avatar-off avatar-50"><img
                src="../../../app-assets/images/avatar/avatar-5.png" alt="avatar" />
              <i></i>
            </span>
            <div class="user-content">
              <h6 class="line-height-0">Edward Fletcher</h6>
              <p class="medium-small blue-grey-text text-lighten-3 pt-3">Love you</p>
            </div>
            <span class="secondary-content medium-small">5.15 PM</span>
          </li>
          <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
            data-target="slide-out-chat">
            <span class="avatar-status avatar-online avatar-50"><img
                src="../../../app-assets/images/avatar/avatar-6.png" alt="avatar" />
              <i></i>
            </span>
            <div class="user-content">
              <h6 class="line-height-0">Crystal Bates</h6>
              <p class="medium-small blue-grey-text text-lighten-3 pt-3">Can we</p>
            </div>
            <span class="secondary-content medium-small">8.00 AM</span>
          </li>
          <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
            data-target="slide-out-chat">
            <span class="avatar-status avatar-off avatar-50"><img
                src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar" />
              <i></i>
            </span>
            <div class="user-content">
              <h6 class="line-height-0">Nathan Watts</h6>
              <p class="medium-small blue-grey-text text-lighten-3 pt-3">Great!</p>
            </div>
            <span class="secondary-content medium-small">9.53 PM</span>
          </li>
          <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
            data-target="slide-out-chat">
            <span class="avatar-status avatar-off avatar-50"><img
                src="../../../app-assets/images/avatar/avatar-8.png" alt="avatar" />
              <i></i>
            </span>
            <div class="user-content">
              <h6 class="line-height-0">Willard Wood</h6>
              <p class="medium-small blue-grey-text text-lighten-3 pt-3">Do it</p>
            </div>
            <span class="secondary-content medium-small">4.20 AM</span>
          </li>
          <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
            data-target="slide-out-chat">
            <span class="avatar-status avatar-online avatar-50"><img
                src="../../../app-assets/images/avatar/avatar-1.png" alt="avatar" />
              <i></i>
            </span>
            <div class="user-content">
              <h6 class="line-height-0">Ronnie Ellis</h6>
              <p class="medium-small blue-grey-text text-lighten-3 pt-3">Got that</p>
            </div>
            <span class="secondary-content medium-small">5.20 AM</span>
          </li>
          <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
            data-target="slide-out-chat">
            <span class="avatar-status avatar-online avatar-50"><img
                src="../../../app-assets/images/avatar/avatar-9.png" alt="avatar" />
              <i></i>
            </span>
            <div class="user-content">
              <h6 class="line-height-0">Daniel Russell</h6>
              <p class="medium-small blue-grey-text text-lighten-3 pt-3">Thank you</p>
            </div>
            <span class="secondary-content medium-small">12.00 AM</span>
          </li>
          <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
            data-target="slide-out-chat">
            <span class="avatar-status avatar-off avatar-50"><img
                src="../../../app-assets/images/avatar/avatar-10.png" alt="avatar" />
              <i></i>
            </span>
            <div class="user-content">
              <h6 class="line-height-0">Sarah Graves</h6>
              <p class="medium-small blue-grey-text text-lighten-3 pt-3">Okay you</p>
            </div>
            <span class="secondary-content medium-small">11.14 PM</span>
          </li>
          <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
            data-target="slide-out-chat">
            <span class="avatar-status avatar-off avatar-50"><img
                src="../../../app-assets/images/avatar/avatar-11.png" alt="avatar" />
              <i></i>
            </span>
            <div class="user-content">
              <h6 class="line-height-0">Andrew Hoffman</h6>
              <p class="medium-small blue-grey-text text-lighten-3 pt-3">Can do</p>
            </div>
            <span class="secondary-content medium-small">7.30 PM</span>
          </li>
          <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
            data-target="slide-out-chat">
            <span class="avatar-status avatar-online avatar-50"><img
                src="../../../app-assets/images/avatar/avatar-12.png" alt="avatar" />
              <i></i>
            </span>
            <div class="user-content">
              <h6 class="line-height-0">Camila Lynch</h6>
              <p class="medium-small blue-grey-text text-lighten-3 pt-3">Leave it</p>
            </div>
            <span class="secondary-content medium-small">2.00 PM</span>
          </li>
        </ul>
      </div>
    </div>
    <div id="settings" class="col s12">
      <p class="setting-header mt-8 mb-3 ml-5 font-weight-900">GENERAL SETTINGS</p>
      <ul class="collection border-none">
        <li class="collection-item border-none">
          <div class="m-0">
            <span>Notifications</span>
            <div class="switch right">
              <label>
                <input checked type="checkbox" />
                <span class="lever"></span>
              </label>
            </div>
          </div>
        </li>
        <li class="collection-item border-none">
          <div class="m-0">
            <span>Show recent activity</span>
            <div class="switch right">
              <label>
                <input type="checkbox" />
                <span class="lever"></span>
              </label>
            </div>
          </div>
        </li>
        <li class="collection-item border-none">
          <div class="m-0">
            <span>Show recent activity</span>
            <div class="switch right">
              <label>
                <input type="checkbox" />
                <span class="lever"></span>
              </label>
            </div>
          </div>
        </li>
        <li class="collection-item border-none">
          <div class="m-0">
            <span>Show Task statistics</span>
            <div class="switch right">
              <label>
                <input type="checkbox" />
                <span class="lever"></span>
              </label>
            </div>
          </div>
        </li>
        <li class="collection-item border-none">
          <div class="m-0">
            <span>Show your emails</span>
            <div class="switch right">
              <label>
                <input type="checkbox" />
                <span class="lever"></span>
              </label>
            </div>
          </div>
        </li>
        <li class="collection-item border-none">
          <div class="m-0">
            <span>Email Notifications</span>
            <div class="switch right">
              <label>
                <input checked type="checkbox" />
                <span class="lever"></span>
              </label>
            </div>
          </div>
        </li>
      </ul>
      <p class="setting-header mt-7 mb-3 ml-5 font-weight-900">SYSTEM SETTINGS</p>
      <ul class="collection border-none">
        <li class="collection-item border-none">
          <div class="m-0">
            <span>System Logs</span>
            <div class="switch right">
              <label>
                <input type="checkbox" />
                <span class="lever"></span>
              </label>
            </div>
          </div>
        </li>
        <li class="collection-item border-none">
          <div class="m-0">
            <span>Error Reporting</span>
            <div class="switch right">
              <label>
                <input type="checkbox" />
                <span class="lever"></span>
              </label>
            </div>
          </div>
        </li>
        <li class="collection-item border-none">
          <div class="m-0">
            <span>Applications Logs</span>
            <div class="switch right">
              <label>
                <input checked type="checkbox" />
                <span class="lever"></span>
              </label>
            </div>
          </div>
        </li>
        <li class="collection-item border-none">
          <div class="m-0">
            <span>Backup Servers</span>
            <div class="switch right">
              <label>
                <input type="checkbox" />
                <span class="lever"></span>
              </label>
            </div>
          </div>
        </li>
        <li class="collection-item border-none">
          <div class="m-0">
            <span>Audit Logs</span>
            <div class="switch right">
              <label>
                <input type="checkbox" />
                <span class="lever"></span>
              </label>
            </div>
          </div>
        </li>
      </ul>
    </div>
    <div id="activity" class="col s12">
      <div class="activity">
        <p class="mt-5 mb-0 ml-5 font-weight-900">SYSTEM LOGS</p>
        <ul class="widget-timeline mb-0">
          <li class="timeline-items timeline-icon-green active">
            <div class="timeline-time">Today</div>
            <h6 class="timeline-title">Homepage mockup design</h6>
            <p class="timeline-text">Melissa liked your activity.</p>
            <div class="timeline-content orange-text">Important</div>
          </li>
          <li class="timeline-items timeline-icon-cyan active">
            <div class="timeline-time">10 min</div>
            <h6 class="timeline-title">Melissa liked your activity Drinks.</h6>
            <p class="timeline-text">Here are some news feed interactions concepts.</p>
            <div class="timeline-content green-text">Resolved</div>
          </li>
          <li class="timeline-items timeline-icon-red active">
            <div class="timeline-time">30 mins</div>
            <h6 class="timeline-title">12 new users registered</h6>
            <p class="timeline-text">Here are some news feed interactions concepts.</p>
            <div class="timeline-content">
              <img src="../../../app-assets/images/icon/pdf.png" alt="document" height="30" width="25"
                class="mr-1">Registration.doc
            </div>
          </li>
          <li class="timeline-items timeline-icon-indigo active">
            <div class="timeline-time">2 Hrs</div>
            <h6 class="timeline-title">Tina is attending your activity</h6>
            <p class="timeline-text">Here are some news feed interactions concepts.</p>
            <div class="timeline-content">
              <img src="../../../app-assets/images/icon/pdf.png" alt="document" height="30" width="25"
                class="mr-1">Activity.doc
            </div>
          </li>
          <li class="timeline-items timeline-icon-orange">
            <div class="timeline-time">5 hrs</div>
            <h6 class="timeline-title">Josh is now following you</h6>
            <p class="timeline-text">Here are some news feed interactions concepts.</p>
            <div class="timeline-content red-text">Pending</div>
          </li>
        </ul>
        <p class="mt-5 mb-0 ml-5 font-weight-900">APPLICATIONS LOGS</p>
        <ul class="widget-timeline mb-0">
          <li class="timeline-items timeline-icon-green active">
            <div class="timeline-time">Just now</div>
            <h6 class="timeline-title">New order received urgent</h6>
            <p class="timeline-text">Melissa liked your activity.</p>
            <div class="timeline-content orange-text">Important</div>
          </li>
          <li class="timeline-items timeline-icon-cyan active">
            <div class="timeline-time">05 min</div>
            <h6 class="timeline-title">System shutdown.</h6>
            <p class="timeline-text">Here are some news feed interactions concepts.</p>
            <div class="timeline-content blue-text">Urgent</div>
          </li>
          <li class="timeline-items timeline-icon-red">
            <div class="timeline-time">20 mins</div>
            <h6 class="timeline-title">Database overloaded 89%</h6>
            <p class="timeline-text">Here are some news feed interactions concepts.</p>
            <div class="timeline-content">
              <img src="../../../app-assets/images/icon/pdf.png" alt="document" height="30" width="25"
                class="mr-1">Database-log.doc
            </div>
          </li>
        </ul>
        <p class="mt-5 mb-0 ml-5 font-weight-900">SERVER LOGS</p>
        <ul class="widget-timeline mb-0">
          <li class="timeline-items timeline-icon-green active">
            <div class="timeline-time">10 min</div>
            <h6 class="timeline-title">System error</h6>
            <p class="timeline-text">Melissa liked your activity.</p>
            <div class="timeline-content red-text">Error</div>
          </li>
          <li class="timeline-items timeline-icon-cyan">
            <div class="timeline-time">1 min</div>
            <h6 class="timeline-title">Production server down.</h6>
            <p class="timeline-text">Here are some news feed interactions concepts.</p>
            <div class="timeline-content blue-text">Urgent</div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
</div>

<!-- Slide Out Chat -->
<ul id="slide-out-chat" class="sidenav slide-out-right-sidenav-chat">
<li class="center-align pt-2 pb-2 sidenav-close chat-head">
  <a href="#!"><i class="material-icons mr-0">chevron_left</i>Elizabeth Elliott</a>
</li>
<li class="chat-body">
  <ul class="collection">
    <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
      <span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-7.png"
          alt="avatar" />
      </span>
      <div class="user-content speech-bubble">
        <p class="medium-small">hello!</p>
      </div>
    </li>
    <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
      <div class="user-content speech-bubble-right">
        <p class="medium-small">How can we help? We're here for you!</p>
      </div>
    </li>
    <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
      <span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-7.png"
          alt="avatar" />
      </span>
      <div class="user-content speech-bubble">
        <p class="medium-small">I am looking for the best admin template.?</p>
      </div>
    </li>
    <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
      <div class="user-content speech-bubble-right">
        <p class="medium-small">Materialize admin is the responsive materializecss admin template.</p>
      </div>
    </li>

    <li class="collection-item display-grid width-100 center-align">
      <p>8:20 a.m.</p>
    </li>

    <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
      <span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-7.png"
          alt="avatar" />
      </span>
      <div class="user-content speech-bubble">
        <p class="medium-small">Ohh! very nice</p>
      </div>
    </li>
    <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
      <div class="user-content speech-bubble-right">
        <p class="medium-small">Thank you.</p>
      </div>
    </li>
    <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
      <span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-7.png"
          alt="avatar" />
      </span>
      <div class="user-content speech-bubble">
        <p class="medium-small">How can I purchase it?</p>
      </div>
    </li>

    <li class="collection-item display-grid width-100 center-align">
      <p>9:00 a.m.</p>
    </li>

    <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
      <div class="user-content speech-bubble-right">
        <p class="medium-small">From ThemeForest.</p>
      </div>
    </li>
    <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
      <div class="user-content speech-bubble-right">
        <p class="medium-small">Only $24</p>
      </div>
    </li>
    <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
      <span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-7.png"
          alt="avatar" />
      </span>
      <div class="user-content speech-bubble">
        <p class="medium-small">Ohh! Thank you.</p>
      </div>
    </li>
    <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
      <span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-7.png"
          alt="avatar" />
      </span>
      <div class="user-content speech-bubble">
        <p class="medium-small">I will purchase it for sure.</p>
      </div>
    </li>
    <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
      <div class="user-content speech-bubble-right">
        <p class="medium-small">Great, Feel free to get in touch on</p>
      </div>
    </li>
    <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
      <div class="user-content speech-bubble-right">
        <p class="medium-small">https://pixinvent.ticksy.com/</p>
      </div>
    </li>
  </ul>
</li>
<li class="center-align chat-footer">
  <form class="col s12" onsubmit="slideOutChat()" action="javascript:void(0);">
    <div class="input-field">
      <input id="icon_prefix" type="text" class="search" />
      <label for="icon_prefix">Type here..</label>
      <a onclick="slideOutChat()"><i class="material-icons prefix">send</i></a>
    </div>
  </form>
</li>
</ul>
</aside>
<!-- END RIGHT SIDEBAR NAV -->
      </div>
      <div class="content-overlay"></div>
    </div>
  </div>
</div>

@push('page-specific-js')
    <script src="{{ asset('app-assets/js/scripts/app-file-manager.js') }}"></script>
    @endpush
@endsection