<?php

// For this daily page we are using a switch

// date_default_timezone_set('America/Los_Angeles');

// is today set, if today is set, great
// else the date function for the day will be assigned to today

if(isset($_GET['today'])) {
    $today = $_GET['today'];
}   else {
    $today = date('l');
}

//echo date('l');

switch($today){
    case 'Friday' :
    $coffee = 'Friday is Seahawks Day!';
    $pic = 'seahawks.jpg';
    $alt = 'Seahawks';
    $content = "The Seattle Seahawks are a professional American football team based in Seattle. The Seahawks compete in the National Football League (NFL) as a member club of the league's National Football Conference (NFC) West division. The Seahawks joined the NFL in 1976 as an expansion team. They are coached by Pete Carroll, they have played their home games at Lumen Field (formerly CenturyLink Field) in Seattle's SoDo neighborhood since 2002. They previously played home games in the Kingdome (1976–1999) and Husky Stadium (1994, 2000–2001). Seahawks fans have been referred to collectively as the 12s. The fans have twice set the Guinness World Record for the loudest crowd noise at a sporting event, first registering 136.6 decibels during a game against the San Francisco 49ers in September 2013, and later during a Monday Night Football game against the New Orleans Saints a few months later, with a then record-setting 137.6 dB.";
    break;
        
    case 'Saturday' :
    $coffee = 'Saturday is Emerald City Day';
    $pic = 'emerald.jpg';
    $alt = 'Emerald City';
    $content = "Seattle is known to many as the Emerald City because of its famous, lush evergreen forests. There is no shortage of things to do and places to see in this metropolis, from the thriving culinary scene to the iconic Space Needle.";
    break;
        
    case 'Sunday' :
    $coffee = 'Sunday is Sounders Day!';
    $pic = 'sounders.jpg';
    $alt = 'Sounders';
    $content = "Seattle Sounders FC is an American professional soccer club based in Seattle, Washington. The Sounders compete as a member of the Western Conference of Major League Soccer (MLS). The club was established on November 13, 2007, and began play in 2009 as an MLS expansion team. The Sounders are a phoenix club, carrying the same name as the original franchise that competed in the North American Soccer League from 1974 to 1983.";
    break;
        
    case 'Monday' :
    $coffee = 'Monday is Skiing Day!';
    $pic = 'ski.jpg';
    $alt = 'Skiing';
    $content = "We all know that Stevens Pass is the best of the west (this side of the Cascades, that is). With 52 runs, night skiing, and a terrain park, you can find adventure here most anytime of the day and night. Plus, the Bavarian village of Leavenworth is nearby if you want to make a weekend of it (and yes, there’s plenty of German beer to be found).";
    break;
        
    case 'Tuesday' :
    $coffee = 'Tuesday is Mount Rainier Day!';
    $pic = 'rainier.jpg';
    $alt = 'Rainier';
    $content = "Mount Rainier, also known as Tahoma or Tacoma, is a large active stratovolcano in the Cascade Range of the Pacific Northwest, located in Mount Rainier National Park about 59 miles (95 km) south-southeast of Seattle. With a summit elevation of 14,411 ft (4,392 m), it is the highest mountain in the U.S. state of Washington and the Cascade Range, the most topographically prominent mountain in the contiguous United States, and the tallest in the Cascade Volcanic Arc.";
    break;
        
    case 'Wednesday' :
    $coffee = 'Wednesday is Hiking Day!';
    $pic = 'hiking.jpg';
    $alt = 'Hiking';
    $content = "Looking for a great trail near Seattle, Washington? AllTrails has 75 great hiking trails, trail running trails, walking trails and more, with hand-curated trail maps and driving directions as well as detailed reviews and photos from hikers, campers, and nature lovers like you. If you're looking for the best trails around Saint Edward State Park or Squak Mountain State Park, we've got you covered. You'll also find some great local park options, like Discovery Park or Marckworth Forest. Just looking to take a quick stroll? We've got 67 easy trails in Seattle ranging from 0.6 to 18.3 miles and from 6 to 577 feet above sea level. Start checking them out and you'll be out on the trail in no time!";
    break;
        
    case 'Thursday' :
    $coffee = 'Thursday is Biking Day!';
    $pic = 'biking.jpg';
    $alt = 'Biking';
    $content = "For new-to-town Seattleites, biking in the city can seem daunting. Seattle, after all, is a hilly town with fragmented biking infrastructure and a notoriously long wet-weather season. Biking is part of Seattle’s culture, though, and those less-than-ideal realities help bind Seattle’s community of cyclists—we’re in it together. Over time, and with the right combination of support, experience, and gear, impediments to biking in Seattle give way to something else: freedom, flexibility, cost savings, and a more nuanced connection to the city itself.";
    break;
}

?>