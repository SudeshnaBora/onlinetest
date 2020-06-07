<?php

namespace App\Domain\OnlineTest\Data;

class OnlineTestData
{
    /** @var success */
    public $success;

    /** @var test_part */
    public $test_part;

    /** @var trial_type */
    public $trial_type;

    /** @var trial_index */
    public $trial_index;

    /** @var time_elapsed */
    public $time_elapsed;

    /** @var internal_node_id */
    public $internal_node_id;

    /** @var subject */
    public $subject;

    /** @var browser_name */
    public $browser_name;

    /** @var browser_version */
    public $browser_version;

    /** @var os_name */
    public $os_name;

    /** @var os_version */
    public $os_version;

    /** @var screen_resolution */
    public $screen_resolution;

    /** @var window_resolution */
    public $window_resolution;

    /** @var rt */
    public $rt;

    /** @var stimulus */
    public $stimulus;

    /** @var key_press */
    public $key_press;

    /** @var button_pressed */
    public $button_pressed;

    /** @var responses */
    public $responses;

    /** @var question_order */
    public $question_order;

    /** @var correct_answer */
    public $correct_answer;

    /** @var name */
    public $name;

    /** @var correct */
    public $correct;

    /** @var choices */
    public $choices;

    /** @var correct_choice */
    public $correct_choice;

    /** @var trial_duration */
    public $trial_duration;

    /** @var response_ends_trial */
    public $response_ends_trial;

    /** @var reinsert_type */
    public $reinsert_type;

    /** @var frame_rate */
    public $frame_rate;

    /** @var frame_rate_array */
    public $frame_rate_array;

    /** @var number_of_frames */
    public $number_of_frames;

    /** @var aperture_center_x */
    public $aperture_center_x;

    /** @var aperture_center_y */
    public $aperture_center_y;

    /** @var fixation_cross */
    public $fixation_cross;

    /** @var fixation_cross_width */
    public $fixation_cross_width;

    /** @var fixation_cross_height */
    public $fixation_cross_height;

    /** @var fixation_cross_color */
    public $fixation_cross_color;

    /** @var fixation_cross_thickness */
    public $fixation_cross_thickness;

    /** @var aperture_type */
    public $aperture_type;

    /** @var RDK_type */
    public $RDK_type;

    /** @var background_color */
    public $background_color;

    /** @var dot_color */
    public $dot_color;

    /** @var aperture_height */
    public $aperture_height;

    /** @var aperture_width */
    public $aperture_width;

    /** @var move_distance */
    public $move_distance;

    /** @var dot_life */
    public $dot_life;

    /** @var dot_radius */
    public $dot_radius;

    /** @var opposite_coherence */
    public $opposite_coherence;

    /** @var coherence */
    public $coherence;

    /** @var coherent_direction */
    public $coherent_direction;

    /** @var number_of_sets */
    public $number_of_sets;

    /** @var number_of_dots */
    public $number_of_dots;

    /** @var number_of_apertures */
    public $number_of_apertures;

    /** @var RCat */
    public $RCat;

    /** @var run */
    public $run;

    /** @var block_type */
    public $block_type;

    /** @var trial_number */
    public $trial_number;

    /** @var canvas_height */
    public $canvas_height;

    /** @var canvas_width */
    public $canvas_width;

    /** @var border_color */
    public $border_color;

    /** @var border_thickness */
    public $border_thickness;

    /** @var border */
    public $border;

    function __construct(array $data) {
        foreach($data as $key => $val) {
            if(property_exists(__CLASS__,$key)) {
                $this->$key = $val;
            }else if($key == "key_resp.rt"){
                $key = "key_resp_rt";
                $this->$key = $val;
            }else if($key == "key_resp.keys"){
                $key = "key_resp_keys";
                $this->$key = $val;
            }
            else {
                throw new Exception("Error Processing Request", 1);
            }
        }
    }

};

    