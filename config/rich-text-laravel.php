<?php

return [


    /*
     |--------------------------------------------------------------------------
     | Supported Files Content-Types
     |--------------------------------------------------------------------------
     |
     | When attaching non-image files to Trix, you can control here which files
     | you want to handle and render in the default "remote file" template
     | by explicitly adding your supported Content-Types to this list.
     |
     */
    'supported_files_content_types' => [
        'application/pdf',
        'text/csv',
        'application/msword',
        'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
        'text/plain',
        'application/vnd.ms-excel',
        'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
    ],
];
