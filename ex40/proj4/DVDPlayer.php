<?php
// DVDPlayer
// - brand

class DVDPlayer implements IDevicePlayable
{
    public $brand;
    public function __construct() {

    }
    public function testSound () {
        return "di di di di";
    }
    public function playDemo () {
        return <<<EOT
(intro of $this->brand DVD Player)
Blu-ray Disc & DVD Players · Super fast boot-up · USB media playback · Multi-format media playback.
EOT;
    }
}
