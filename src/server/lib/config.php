<?php
return [
    'token' => 'test123',
    'tokenKey' => "token",
    'zipFileName' => 'file',
    'saveReceivedPathFile' => __DIR__ . DIRECTORY_SEPARATOR . 'temp',
    'projectPath' => __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'hostFolder',

    //in projectPath
    'folderPreventRemove'=>[
        'robot'
    ],
    'filesPreventRemove'=>[
        'protected.txt'
    ]
];
