<?php
    
define('CACHE_PATH', realpath(dirname(__FILE__) . '/../cache'));
define('CACHE_FILE', 'oreprices.json');

// Build the cachepath  
$cachePath = CACHE_PATH . '/' . CACHE_FILE;

$oreInfo = array(
    array('typeid' => '1230', 'typename' => 'Veldspar', 'compressRatio' => 166500),
    array('typeid' => '17470', 'typename' => 'Concentrated Veldspar', 'compressRatio' => 166500),
    array('typeid' => '17471', 'typename' => 'Dense Veldspar', 'compressRatio' => 166500),
    array('typeid' => '1228', 'typename' => 'Scordite', 'compressRatio' => 99900),
    array('typeid' => '17463', 'typename' => 'Condensed Scordite', 'compressRatio' => 99900),
    array('typeid' => '17464', 'typename' => 'Massive Scordite', 'compressRatio' => 99900),
    array('typeid' => '1224', 'typename' => 'Pyroxeres', 'compressRatio' => 49950),
    array('typeid' => '17459', 'typename' => 'Solid Pyroxeres', 'compressRatio' => 49950),
    array('typeid' => '17460', 'typename' => 'Viscous Pyroxeres', 'compressRatio' => 49950),
    array('typeid' => '18', 'typename' => 'Plagioclase', 'compressRatio' => 33300),
    array('typeid' => '17455', 'typename' => 'Azure Plagioclase', 'compressRatio' => 33300),
    array('typeid' => '17456', 'typename' => 'Rich Plagioclase', 'compressRatio' => 33300),
    array('typeid' => '1227', 'typename' => 'Omber', 'compressRatio' => 25000),
    array('typeid' => '17867', 'typename' => 'Silvery Omber', 'compressRatio' => 25000),
    array('typeid' => '17868', 'typename' => 'Golden Omber', 'compressRatio' => 25000),
    array('typeid' => '20', 'typename' => 'Kernite', 'compressRatio' => 12000),
    array('typeid' => '17452', 'typename' => 'Luminous Kernite', 'compressRatio' => 12000),
    array('typeid' => '17453', 'typename' => 'Fiery Kernite', 'compressRatio' => 12000),
    array('typeid' => '1226', 'typename' => 'Jaspet', 'compressRatio' => 7500),
    array('typeid' => '17448', 'typename' => 'Pure Jaspet', 'compressRatio' => 7500),
    array('typeid' => '17449', 'typename' => 'Pristine Jaspet', 'compressRatio' => 7500),
    array('typeid' => '21', 'typename' => 'Hedbergite', 'compressRatio' => 5000),
    array('typeid' => '17440', 'typename' => 'Vitric Hedbergite', 'compressRatio' => 5000),
    array('typeid' => '17441', 'typename' => 'Glazed Hedbergite', 'compressRatio' => 5000),
    array('typeid' => '1231', 'typename' => 'Hemorphite', 'compressRatio' => 5000),
    array('typeid' => '17444', 'typename' => 'Vivid Hemorphite', 'compressRatio' => 5000),
    array('typeid' => '17445', 'typename' => 'Radiant Hemorphite', 'compressRatio' => 5000),
    array('typeid' => '1229', 'typename' => 'Gneiss', 'compressRatio' => 4000),
    array('typeid' => '17865', 'typename' => 'Iridescent Gneiss', 'compressRatio' => 4000),
    array('typeid' => '17866', 'typename' => 'Prismatic Gneiss', 'compressRatio' => 4000),
    array('typeid' => '1232', 'typename' => 'Dark Ochre', 'compressRatio' => 2000),
    array('typeid' => '17436', 'typename' => 'Onyx Ochre', 'compressRatio' => 2000),
    array('typeid' => '17437', 'typename' => 'Obsidian Ochre', 'compressRatio' => 2000),
    array('typeid' => '19', 'typename' => 'Spodumain', 'compressRatio' => 1250),
    array('typeid' => '17466', 'typename' => 'Bright Spodumain', 'compressRatio' => 1250),
    array('typeid' => '17467', 'typename' => 'Gleaming Spodumain', 'compressRatio' => 1250),
    array('typeid' => '1225', 'typename' => 'Crokite', 'compressRatio' => 1250),
    array('typeid' => '17432', 'typename' => 'Sharp Crokite', 'compressRatio' => 1250),
    array('typeid' => '17433', 'typename' => 'Crystalline Crokite', 'compressRatio' => 1250),
    array('typeid' => '1223', 'typename' => 'Bistot', 'compressRatio' => 1000),
    array('typeid' => '17428', 'typename' => 'Triclinic Bistot', 'compressRatio' => 1000),
    array('typeid' => '17429', 'typename' => 'Monoclinic Bistot', 'compressRatio' => 1000),
    array('typeid' => '22', 'typename' => 'Arkonor', 'compressRatio' => 1000),
    array('typeid' => '17425', 'typename' => 'Crimson Arkonor', 'compressRatio' => 1000),
    array('typeid' => '17426', 'typename' => 'Prime Arkonor', 'compressRatio' => 1000),
    array('typeid' => '11396', 'typename' => 'Mercoxit', 'compressRatio' => 500),
    array('typeid' => '17869', 'typename' => 'Magma Mercoxit', 'compressRatio' => 500),
    array('typeid' => '17870', 'typename' => 'Vitreous Mercoxit', 'compressRatio' => 500),
    array('typeid' => '16265', 'typename' => 'White Glaze', 'compressRatio' => 1),
    array('typeid' => '17976', 'typename' => 'Pristine White Glaze', 'compressRatio' => 1),
    array('typeid' => '16263', 'typename' => 'Glacial Mass', 'compressRatio' => 1),
    array('typeid' => '17977', 'typename' => 'Smooth Glacial Mass', 'compressRatio' => 1),
    array('typeid' => '16264', 'typename' => 'Blue Ice', 'compressRatio' => 1),
    array('typeid' => '17975', 'typename' => 'Thick Blue Ice', 'compressRatio' => 1),
    array('typeid' => '16262', 'typename' => 'Clear Icicle', 'compressRatio' => 1),
    array('typeid' => '17978', 'typename' => 'Enriched Clear Icicle', 'compressRatio' => 1),
    array('typeid' => '16266', 'typename' => 'Glare Crust', 'compressRatio' => 1),
    array('typeid' => '16267', 'typename' => 'Dark Glitter', 'compressRatio' => 1),
    array('typeid' => '16268', 'typename' => 'Gelidus', 'compressRatio' => 1),
    array('typeid' => '16269', 'typename' => 'Krystallos', 'compressRatio' => 1)
);



if(file_exists($cachePath))
{
    $now = time();
    $ftime = filemtime($cachePath);
    $difference = $ftime - $now;
    if($difference > 3600)
    {
        unlink($cachePath);
        $data = json_encode(generateEveCentralCall($oreInfo));
    }

    $data = file_get_contents($cachePath);
}
else
{
    $data = json_encode(generateEveCentralCall($oreInfo));
    file_put_contents($cachePath, $data);
}

echo $data;

function generateEveCentralCall($oreInfo = array()){

    $queryString = "";
    $baseUrl = 'http://api.eve-central.com/api/marketstat?regionlimit=10000002&';

    foreach($oreInfo as $ore)
    {
        $queryString .= ($queryString == "") ? "" : "&";
        $queryString .= 'typeid=' . $ore['typeid'];
    }
    
    $arrayResponse = responder(file_get_contents($baseUrl . $queryString));
   
    $returnResult = array();

    foreach($arrayResponse['marketstat']['type'] as $type)
    {
        $returnResult[$type['@attributes']['id']] = $type['buy']['percentile'];
    }

    foreach($oreInfo as $key => $val)
    {
        $oreInfo[$key]['value'] = $returnResult[$val['typeid']];
    }

    return $oreInfo;
}

function responder($results = null)
{
    $results = str_replace(array("\n", "\r", "\t"), '', $results);
    $results = trim(str_replace('"', "'", $results));
    $simpleXmlResult = simplexml_load_string($results);

    // Because the @attributes things sucks to work with.
     return json_decode(json_encode($simpleXmlResult),true);
 }


