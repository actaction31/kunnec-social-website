<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use DB;

class SpotApiController extends Controller{
    
    public function __construct(){
        
    }
    
    public function getInfo(Request $request) {
        $response = array();
        if(auth()->user()){
            $response['authorization'] = auth()->user();

            $results = DB::select('select a.id, b.id as user_id, b.first_name, b.last_name, b.username, b.gender, b.image from follows as a left join users as b on a.user_id = b.id where a.follow_userid = "'.$response['authorization']['id'].'" && a.status = "accepted" UNION select a.id, b.id as user_id, b.first_name, b.last_name, b.username, b.gender, b.image from follows as a left join users as b on a.follow_userid = b.id where a.user_id = "'.$response['authorization']['id'].'" && a.status = "accepted"');

            $response['users'] = $results;
        }
        else{
            $response['authorization'] = 'fail';
        }
        return response()->json($response);
    }

    public function sendInvite(Request $request){
        $response = array();
        if(auth()->user()){
            $now = date("Y-m-d H:i:s");
            DB::select('insert into social_chats (room_id, sender_id, receiver_id, chat_content, msg_type, is_read, created_at) values ("'.$request['kunnec_id'].'", "'.$request['sender'].'", "'.$request['receiver'].'", "Spot invite code: '.$request['spot_id'].'","text", "0", "'.$now.'")');
            $response['status'] = 'success';
        }
        else{
            $response['status'] = 'fail';
        }
        return response()->json($response);
    }

    public function saveRecorder(Request $request) {
        $response = array();
        $date = date("Y-m-d H:i:s");

        $result = DB::select('SELECT paid_amount FROM recorder_list WHERE recorder_id = "'.$request['recorder_id'].'";');

        if(count($result) > 0){
            $newAmount = $request['paid_amount'] + (float)$result[0]->paid_amount;
            DB::select('UPDATE recorder_list SET paid_amount = "'.$newAmount.'" WHERE recorder_id = "'.$request['recorder_id'].'";');
        } 
        else {
            DB::select('INSERT INTO recorder_list (recorder_id, room_id, host_id, guest_id, fee, fee_type, paid_amount, start_at) VALUES ("'.$request['recorder_id'].'", "'.$request['room_id'].'", "'.$request['host_id'].'", "'.$request['guest_id'].'", "'.$request['fee'].'", "'.$request['fee_type'].'", "'.$request['paid_amount'].'", "'.$date.'");');
        }

        $response['message'] = 'success';

        return response()->json($response);
    }

    public function endRecorder(Request $request) {
        $response = array();
        DB::select('UPDATE recorder_list SET end_at = "'.date("Y-m-d H:i:s").'" WHERE recorder_id = "'.$request['recorder_id'].'";');
        $response['message'] = 'success';

        return response()->json($response);
    }

    public function updateRecorder(Request $request) {
        $response = array();

        DB::select('UPDATE recorders SET status = "'.$request['status'].'" WHERE id = "'.$request['id'].'" ');

        $response['status'] = 'success';

        return response()->json($response);
    }

    public function getRecorderInfo(Request $request) {
        $response = array();
        // $auth = array();
        $auth = auth()->user();

        // $auth['id'] = 3;
        // $auth['first_name'] = 'Dennis';
        // $auth['last_name'] = 'Smith';
        // $auth['username'] = 'Manza';
        // $auth['gender'] = 1;
        // $auth['image'] = 'http://localhost/public/user-dash/images/users/profiles/1679256333_image.png';

        if($auth){
            $response['authorization'] = $auth;
            
            $recorder = DB::select('SELECT id, user_id, fee, fee_type, status FROM recorders WHERE id = "'.$request['recorderId'].'";');
            
            if(count($recorder) == 0) {
                $response['status'] = 'fail';
                $response['message'] = 'Recorder not exist';
            }
            else {
                if($response['authorization']['id'] == $recorder[0]->user_id){
                    $response['status'] = 'success';
                    $response['recorder'] = $recorder[0];
                    $response['host'] = $response['authorization'];

                    DB::select('UPDATE recorders SET status = "2" WHERE id = "'.$recorder[0]->id.'";');
                }
                else {
                    if($recorder[0]->status == 2){
                        $response['status'] = 'success';
                        $response['recorder'] = $recorder[0];
                        $response['host'] = DB::select('SELECT id, username, image FROM users WHERE id = "'.$recorder[0]->user_id.'";')[0];
                        
                        DB::select('UPDATE recorders SET status = "1" WHERE id = "'.$recorder[0]->id.'";');
                    }
                    else{
                        $response['status'] = 'fail';
                        $response['message'] = 'Recorder is not available';
                    }
                }
            }
        }
        else{
            $response['status'] = 'fail';
            $response['message'] = 'Unauthorized user';
        }

        return response()->json($response);
    }
}