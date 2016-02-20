<?php
// The code below creates the class
class song
{
    // Creating some properties (variables tied to an object)
    public $isAlive = true;
    public $artist;
    public $songName;
    public $stars;  //star rating of this tab
    public $fileNameLoc;  //eventually going to be the filename pointing to the songsheet

    // Assigning the values
    public function __construct($artist, $songName, $stars, $fileNameLoc)
    {
        $this->artist = $artist;
        $this->songName = $songName;
        $this->stars = $stars;
        $this->fileNameLoc = $fileNameLoc;
    }

    public function displaySongInfo($artist, $songName, $stars, $fileNameLoc){
        echo "Song Info: " . $this->artist . " " . $this->SongName . " " . $this->stars . " " . $this->fileNameLoc ;
    }
}
    /* Creating a method (function tied to an object)
    public function greet() {
        return "Hello, my name is " . $this->firstname . " " . $this->lastname . ". Nice to meet you! :-)";
    }

}

// Creating a new person called "boring 12345", who is 12345 years old ;-)
$me = new Person('boring', '12345', 12345);

// Printing out, what the greet method returns
echo $me->greet();

    */

?>