<?php
if(!function_exists('render_icon')){
     function render_icon(string $name): string {

       $type = pathinfo($name, PATHINFO_EXTENSION);

        switch ($type) {
            case 'doc':
            case 'docx':
                return 'doc-image.png';
            case 'html': 
            case 'htm':
                return 'html.png';
            case 'xls' : 
            case 'xlsx':
                return 'xls.png';
             case 'ppt' : 
            case 'pptx':
                return 'ppt.png';
            case 'txt' : 
            case 'md':
                return 'txt.png';     
            case 'png':
            case 'jpg':
            case 'jpeg':
                return 'jpg-image.png';
            case 'mp4':
                return 'mp4.png';
            case 'mp3':
                return 'mp3.png';
            case 'zip':
                return 'zip.png';
                default:
                return 'pdf.png';
        }

     }
}


if(!function_exists('bytes_to_human')){
    function bytes_to_human($bytes)
    {
        $units = ['B', 'KiB', 'MiB', 'GiB', 'TiB', 'PiB'];
    
        for ($i = 0; $bytes > 1024; $i++) {
            $bytes /= 1024;
        }
    
        return round($bytes, 2) . ' ' . $units[$i];
    }
}