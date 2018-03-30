<?php
fscanf(STDIN, "%d",
    $N // Number of elements which make up the association table.
);
fscanf(STDIN, "%d",
    $Q // Number Q of file names to be analyzed.
);

$extension = [];

for ($i = 0; $i < $N; $i++)
{
    fscanf(STDIN, "%s %s",
        $EXT, // file extension
        $MT // MIME type.
    );
    
    $extension[strtolower($EXT)] = $MT; // OUR EXTENSION IS SAVED IN OUR ARRAY WITH HIS MIME type
}

for ($i = 0; $i < $Q; $i++)
{
    $FNAME = stream_get_line(STDIN, 500 + 1, "\n"); // One file name per line.
    
    $file_extension = strtolower(substr(strrchr($FNAME, '.'), 1)); // DETECT FILE'S EXTENSION
    
    // FILE EXTENSION IN OUR ARRAY
    if(array_key_exists($file_extension, $extension)){
        echo($extension[$file_extension]."\n"); // SUCCESS - PRINT
    }
    else {
        echo("UNKNOWN\n");    // ERROR - DEFAULT
    }
}
