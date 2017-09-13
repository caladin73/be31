<?php
/**
 * Description of LiveLecture
 *
 * @author phm
 */
class LiveLecture extends Product {
    protected $lecturer;
    protected $duration;
    protected $topic;
    
    
    public function __construct($title, $lecturer, $duration, $topic) {
        $this->title = $title;
        $this->lecturer = $lecturer;
        $this->duration = $duration;
        $this->topic = $topic;
        $this->type = 'LiveLecture';
    }
    
    public function getDuration() {
        return $this->lecturer;
        return $this->duration;
        return $this->topic;
    }
    
    public function display() {
        printf("<p>LiveLecture: %s (%s pages)\n"
                , $this->getTitle()
                , $this->getDuration());
    }
            
}