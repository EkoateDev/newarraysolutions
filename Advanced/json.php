<?php

//  Json a syntax for storing and exchanging data 

// json_encode used to encode values to JSON format

$recordlabels = [
    'DreamChasers' => 'Meek',
    'Starboy' => 'Wizkid',
    'DMW' => 'Davido'
];

echo json_encode($recordlabels);


// Json decode used to decode a JSON object into a php object 
// or associative array
// use var_dump

$recordlabels = '{
    "DreamChasers" : 30,
    "Starboy" : 22,
    "DMW" : 40
}';

var_dump(json_decode($recordlabels));


//  decoding to an array 

$recordlabels = '{
    "DreamChasers" : 30,
    "Starboy" : 22,
    "DMW" : 40
}';

var_dump(json_decode($recordlabels, true));


// accessing decoded values 

$recordlabels = '{
    "DreamChasers" : 30,
    "Starboy" : 22,
    "DMW" : 40
}';

$obj = json_decode($recordlabels);

echo $obj->DreamChasers;
echo $obj->Starboy;
echo $obj->DMW;

// accessing values of an associative 

$recordlabels = '{
    "DreamChasers" : 30,
    "Starboy" : 22,
    "DMW" : 40
}';

$arr = (json_decode($recordlabels, true));

echo $arr['DreamChasers'];
echo $arr['Starboy'];
echo $arr['DMW'];


// looping through an object 

$recordlabels = '{
    "DreamChasers" : 30,
    "Starboy" : 22,
    "DMW" : 40
}';

$obj = json_decode($recordlabels);

foreach ($obj as $key => $value) {
    echo $key . '=>' . $value . '<br>';
}

// looping through associative 

$recordlabels = '{
    "DreamChasers" : 30,
    "Starboy" : 22,
    "DMW" : 40
}';

$obj = json_decode($recordlabels, true);

foreach ($obj as $key => $value) {
    echo $key . '=>' . $value . '<br>';
}
