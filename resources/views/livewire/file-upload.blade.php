<div id="view-multiple-file-input" class="active" style="display: block;">
  <p>You can also use the <code class=" language-markup">multiple</code> attribute to allow multiple file
    uploads. </p>
  <form action="#">
    <div class="file-field input-field">
      <div class="btn">
        <span>File</span>
        <input type="file" multiple x-ref="input">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" placeholder="Upload one or more files">
      </div>
    </div>
  </form>
</div>


















<div>
<div class="app-file-header-icons display-flex align-items-center">
  <div class="fonticon-wrap display-inline">
    <a style="background-color: #ff4081;" href="/add-files" class="btn mb-1 waves-effect waves-light btn" >Add File
      <i class="material-icons right">add</i>
    </a>
  </div>
  <div class="fonticon-wrap display-inline">
    <i class="material-icons">delete</i>
  </div>
  <div class="fonticon-wrap display-inline ">
    <i class="material-icons">more_vert</i>
  </div>
</div>

<div id="modal1" class="modal" tabindex="0" wire:ignore>
  <form wire:submit.prevent='storeDocument'>
  <div class="modal-content"
 >
    <input wire:model="documents[]" type="file" multiple >
  </div>
  <button type="submit" class=" ">Save</button>
  <div class="modal-footer">
    <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat ">Close</a>
    
  </div>
</div>
</form>
@push('file-pond')
<script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>
@endpush
</div>