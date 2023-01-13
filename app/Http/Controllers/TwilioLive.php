<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Twilio\Rest\Client;
use Twilio\TwiML\VoiceResponse;


class TwilioLive extends Controller
{
    public function index(){
        // require_once '/path/to/vendor/autoload.php';
     
        $sid = getenv("TWILIO_SID");
        $token = getenv("TWILIO_TOKEN");
        $twilio = new Client($sid, $token);

        $room = $twilio->video->v1->rooms
                                ->create([
                                            "type" => "go",
                                            "uniqueName" => "My First Video Room"
                                        ]
                                );
                                print_r($room);
        // print($room->sid);
    }
    // public function fetchRoom(){
    //     // curl -G https://video.twilio.com/v1/Rooms \
    //     // -u '{API Key Sid}:{API Key Secret}'
    // }
    public function sendMessage(){
       
        // Find your Account SID and Auth Token at twilio.com/console
        // and set the environment variables. See http://twil.io/secure
        try{

            $sid = getenv("TWILIO_SID");
            $token = getenv("TWILIO_TOKEN");
            $twilio = new Client($sid, $token);
    
            $message = $twilio->messages
                            ->create("+918219603529", // to
                                    ["body" => "Hi there i am abhishek sharma", "from" => "+19302322835"]
                            );
    
            print($message->sid);
            return "message sent succesfully...";
        }catch(\Exception $e){
           return $e->getMessage();
        }

    }
    public function makeCall(){
        try{
        $sid = getenv("TWILIO_SID");
        $token = getenv("TWILIO_TOKEN");
        $twilio = new Client($sid, $token);


        $call = $twilio->calls
                    ->create("+918219603529", // to
                                "+19302322835", // from
                                [
                                    "twiml" => "<Response><Say>Ahoy there!</Say></Response>"
                                ]
                    );

        print($call->sid);
        return "calling ...";

        }catch(\Exception $e){
            return $e->getMessage();
        }
    }
    public function makeVedioCall(){
        $sid = getenv("TWILIO_SID");
        $token = getenv("TWILIO_TOKEN");
        $twilio = new Client($sid, $token);

        $room = $twilio->video->v1->rooms
                                ->create([
                                            "type" => "go",
                                            "uniqueName" => "My First Video Room"
                                        ]
                                );
                return $room; 
 
    }
    public function fetchRoom(){
        $sid = getenv("TWILIO_SID");
        $token = getenv("TWILIO_TOKEN");
        $twilio = new Client($sid, $token);

        $room = $twilio->video->v1->rooms("My First Video Room")
                                ->fetch();

        print($room->uniqueName);
    }
    public function connectToRoom(){
        $sid = getenv("TWILIO_SID");
        $token = getenv("TWILIO_TOKEN");
        $twilio = new Client($sid, $token);

        $room = $twilio->video->v1->rooms
                                ->create([
                                            "uniqueName" => "My First Video Room",
                                            "emptyRoomTimeout" => 60
                                        ]
                                );
                                print($room->sid);
    }
}

