<?php

declare(strict_types=1);

class Event{

    /**
     * The event ID
     *
     * @var int
     */
    public $id;

    /**
     * The event title
     *
     * @var string
     */
    public $title;

    /**
     * The event description
     *
     * @var string
     */
    public $description;

    /**
     * The event start time
     *
     * @var string
     */
    public $start;

    /**
     * The event end time
     *
     * @var string
     */
    public $end;

    /**
     *
     */
     public $event;
    /**
     * Accepts an array of event data and stores it
     * @param array $event Associative array of event data
     * @throws Exception
     */

    public function __construct($event){
        if ($event['event_id'] != ""){
            $this->id = $event['event_id'];
            $this->title = $event['event_title'];
            $this->description = $event['event_desc'];
            $this->start = $event['event_start'];
            $this->end = $event['event_end'];
        }else{
          //  throw new Exception("No event data was supplied.");
        }
    }
}
?>