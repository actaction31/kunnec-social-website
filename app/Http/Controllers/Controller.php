<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    /*https://www.facebook.com/sharer/sharer.php?u=https://kunnec.com/public/dashboard
    https://twitter.com/intent/tweet?text=Default+share+text&url=https://kunnec.com/public/dashboard
    https://www.linkedin.com/sharing/share-offsite?mini=true&url=https://kunnec.com/public/dashboard&title=Default+share+text&summary=
    https://telegram.me/share/url?url=https://kunnec.com/public/dashboard&text=Default+share+text*/

    public $perpage=10;
    public $profilePath="/user-dash/images/users/profiles";
    public $chat_file_path="/user-dash/chats";
    public $posts_file_path="/user-dash/posts";
    public $portfolio_file_path="/user-dash/portfolio";
    public $snaps_file_path="/user-dash/snaps";
    public $event_file_path="/user-dash/events";
    public $record_file_path="/user-dash/recorders";



    public $jobDuration=45;
    public $topRated_rating=0;
    public $topRated_total=0;
    public $tutor_levels=["1"=>"Beginner","2"=>"Intermediate","3"=>"Advanced","4"=>"Expert"];
    public $available_days=[
        'mon'=>'Monday',
        'tue'=>'Tuesday',
        'wed'=>'Wednesday',
        'thu'=>'Thursday',
        'fri'=>'Friday',
        'sat'=>'Saturday',
        'sun'=>'Sunday',
    ];
    public $tutor_types=[
        '0'=>"Tutor",
        '1'=>"Recorder"
    ];
    public $jobTypes=[
        'One Time'=>'One Time',
        'Full Time'=>'Full Time',
        'Part Time'=>'Part Time',
        'Internship'=>'Internship',
        'Freelance'=>'Freelance',
        'Remote'=>'Remote',
    ];
    public $paymentTypes=[
        "One Time"=>"One Time",
        "Hourly"=>"Hourly",
        "Weekly"=>"Weekly",
        "Completion"=>"Completion",
        "Salary"=>"Salary",
        "No Payment"=>"No Payment",
    ];
    public $educations=[
        "High School"=>"High School",
        "Associates"=>"Associates",
        "Bachelors"=>"Bachelors",
        "Master"=>"Master",
        "PhD"=>"PhD",
        "Postdoc"=>"Postdoc",
    ];
    public $classifications=[
        "Personal"=>"Personal",
        "Company"=>"Company",
    ];
    public $intreview_types=[
        "face_face"=>"Face to Face ( camera )",
        "in_person"=>"In Person"
    ];



    public $timeZones=[
        "GMT-12:00 Etc/GMT-12",
        "GMT-11:00 Etc/GMT-11",
        "GMT-11:00 Pacific/Midway",
        "GMT-10:00 America/Adak",
        "GMT-09:00 America/Anchorage",
        "GMT-09:00 Pacific/Gambier",
        "GMT-08:00 America/Dawson_Creek",
        "GMT-08:00 America/Ensenada",
        "GMT-08:00 America/Los_Angeles",
        "GMT-07:00 America/Chihuahua",
        "GMT-07:00 America/Denver",
        "GMT-06:00 America/Belize",
        "GMT-06:00 America/Cancun",
        "GMT-06:00 America/Chicago",
        "GMT-06:00 Chile/EasterIsland",
        "GMT-05:00 America/Bogota",
        "GMT-05:00 America/Havana",
        "GMT-05:00 America/New_York",
        "GMT-04:30 America/Caracas",
        "GMT-04:00 America/Campo_Grande",
        "GMT-04:00 America/Glace_Bay",
        "GMT-04:00 America/Goose_Bay",
        "GMT-04:00 America/Santiago",
        "GMT-04:00 America/La_Paz",
        "GMT-03:00 America/Argentina/Buenos_Aires",
        "GMT-03:00 America/Montevideo",
        "GMT-03:00 America/Araguaina",
        "GMT-03:00 America/Godthab",
        "GMT-03:00 America/Miquelon",
        "GMT-03:00 America/Sao_Paulo",
        "GMT-03:30 America/St_Johns",
        "GMT-02:00 America/Noronha",
        "GMT-01:00 Atlantic/Cape_Verde",
        "GMT Europe/Belfast",
        "GMT Africa/Abidjan",
        "GMT Europe/Dublin",
        "GMT Europe/Lisbon",
        "GMT Europe/London",
        "UTC UTC",
        "GMT+01:00 Africa/Algiers",
        "GMT+01:00 Africa/Windhoek",
        "GMT+01:00 Atlantic/Azores",
        "GMT+01:00 Atlantic/Stanley",
        "GMT+01:00 Europe/Amsterdam",
        "GMT+01:00 Europe/Belgrade",
        "GMT+01:00 Europe/Brussels",
        "GMT+02:00 Africa/Cairo",
        "GMT+02:00 Africa/Blantyre",
        "GMT+02:00 Asia/Beirut",
        "GMT+02:00 Asia/Damascus",
        "GMT+02:00 Asia/Gaza",
        "GMT+02:00 Asia/Jerusalem",
        "GMT+03:00 Africa/Addis_Ababa",
        "GMT+03:00 Asia/Riyadh89",
        "GMT+03:00 Europe/Minsk",
        "GMT+03:30 Asia/Tehran",
        "GMT+04:00 Asia/Dubai",
        "GMT+04:00 Asia/Yerevan",
        "GMT+04:00 Europe/Moscow",
        "GMT+04:30 Asia/Kabul",
        "GMT+05:00 Asia/Tashkent",
        "GMT+05:30 Asia/Kolkata",
        "GMT+05:45 Asia/Katmandu",
        "GMT+06:00 Asia/Dhaka",
        "GMT+06:00 Asia/Yekaterinburg",
        "GMT+06:30 Asia/Rangoon",
        "GMT+07:00 Asia/Bangkok",
        "GMT+07:00 Asia/Novosibirsk",
        "GMT+08:00 Etc/GMT+8",
        "GMT+08:00 Asia/Hong_Kong",
        "GMT+08:00 Asia/Krasnoyarsk",
        "GMT+08:00 Australia/Perth",
        "GMT+08:45 Australia/Eucla",
        "GMT+09:00 Asia/Irkutsk",
        "GMT+09:00 Asia/Seoul",
        "GMT+09:00 Asia/Tokyo",
        "GMT+09:30 Australia/Adelaide",
        "GMT+09:30 Australia/Darwin",
        "GMT+09:30 Pacific/Marquesas",
        "GMT+10:00 Etc/GMT+10",
        "GMT+10:00 Australia/Brisbane",
        "GMT+10:00 Australia/Hobart",
        "GMT+10:00 Asia/Yakutsk",
        "GMT+10:30 Australia/Lord_Howe",
        "GMT+11:00 Asia/Vladivostok",
        "GMT+11:30 Pacific/Norfolk",
        "GMT+12:00 Etc/GMT+12",
        "GMT+12:00 Asia/Anadyr",
        "GMT+12:00 Asia/Magadan",
        "GMT+12:00 Pacific/Auckland",
        "GMT+12:45 Pacific/Chatham",
        "GMT+13:00 Pacific/Tongatapu",
        "GMT+14:00 Pacific/Kiritimati",
    ];
    public $eventOrganizers=[
        "Massachusetts Institute of Technology",
        "University of Chicago",
        "GSAS Open Labs At Harvard",
        "California Institute of Technology",
    ];
    public $eventSponsors=[
        "Microsoft Corporation",
        "Technext Limited",
        "Hewlett-Packard",
    ];
    public $eventTypes=[
        "Class, Training, or Workshop",
        "Concert or Performance",
        "Conference",
        "Convention",
        "Dinner or Gala",
        "Festival or Fair",
    ];
    public $eventTopics=[
        "Auto, Boat & Air",
        "Business & Professional",
        "Charity & Causes",
        "Community & Culture",
        "Family & Education",
        "Fashion & Beauty",
        "Film, Media & Entertainment",
        "Food & Drink",
        "Government & Politics",
    ];
    public $eventTags=[
        "Concert",
        "New Year",
        "Party",
];
    public $securityQuestions=[
        "What was your childhood nickname?",
        "In what city did you meet your spouse/significant other?",
        "What is the name of your favorite childhood friend?",
        "What street did you live on in third grade?",
        "What is your oldest sibling's birthday month and year? (e.g., January 1900)",
        "What is the middle name of your youngest child?",
        "What is your oldest sibling's middle name?",
        "What school did you attend for sixth grade?",
        "What was your childhood phone number including area code? (e.g., 000-000-0000)",
        "What is your oldest cousin's first and last name?",
        "What was the name of your first stuffed animal?",
        "In what city or town did your mother and father meet?",
        "Where were you when you had your first kiss?",
        "What is the first name of the boy or girl that you first kissed?",
        "What was the last name of your third grade teacher?",
        "In what city does your nearest sibling live?",
        "What is your youngest brother's birthday month and year? (e.g., January 1900)",
        "What is your maternal grandmother's maiden name?",
        "In what city or town was your first job?",
        "What is the name of the place your wedding reception was held?",
        "What is the name of a college you applied to but didn't attend?",
        "Where were you when you first heard about 9/11?",
    ];
    public $postStatus=[
        'Public'=>'public',
        'Private'=>'private',
        'Draft'=>'draft',
    ];
    public $languages=[
        "Afrikanns"=>"Afrikanns",
        "Albanian"=>"Albanian",
        "Amharic"=>"Amharic",
        "Arabic"=>"Arabic",
        "Armenian"=>"Armenian",
        "Basque"=>"Basque",
        "Belarusian"=>"Belarusian",
        "Bengali"=>"Bengali",
        "Bosnian"=>"Bosnian",
        "Bulgarian"=>"Bulgarian",
        "Catalan"=>"Catalan",
        "Cambodian"=>"Cambodian",
        "Cebuano"=>"Cebuano",
        "Chichwea"=>"Chichwea",
        "Chinese (Mandarin)"=>"Chinese (Mandarin)",
        "Corsican"=>"Corsican",
        "Croation"=>"Croation",
        "Czech"=>"Czech",
        "Danish"=>"Danish",
        "Dutch"=>"Dutch",
        "English"=>"English",
        "Estonian"=>"Estonian",
        "Filipino"=>"Filipino",
        "Fiji"=>"Fiji",
        "Finnish"=>"Finnish",
        "French"=>"French",
        "Gallician"=>"Gallician",
        "Georgian"=>"Georgian",
        "German"=>"German",
        "Greek"=>"Greek",
        "Gujarati"=>"Gujarati",
        "Hausa"=>"Hausa",
        "Cebuano"=>"Cebuano",
        "Hebrew"=>"Hawaiian",
        "Hebrew"=>"Hebrew",
        "Hindi"=>"Hindi",
        "Hmong"=>"Hmong",
        "Hungarian"=>"Hungarian",
        "Icelandic"=>"Icelandic",
        "Igbo"=>"Igbo",
        "Indonesian"=>"Indonesian",
        "Irish"=>"Irish",
        "Italian"=>"Italian",
        "Japanese"=>"Japanese",
        "Javanese"=>"Javanese",
        "Kannada"=>"Kannada",
        "Kazakh"=>"Kazakh",
        "Khmer"=>"Khmer",
        "Korean"=>"Korean",
        "Kurdish"=>"Kurdish",
        "Kyrgyz"=>"Kyrgyz",
        "Lao"=>"Lao",
        "Latin"=>"Latin",
        "Latvian"=>"Latvian",
        "Lithuanian"=>"Lithuanian",
        "Luxembourgish"=>"Luxembourgish",
        "Macedonian"=>"Macedonian",
        "Malagasy"=>"Malagasy",
        "Malay"=>"Malay",
        "Malayalam"=>"Malayalam",
        "Maltese"=>"Maltese",
        "Maori"=>"Maori",
        "Marathi"=>"Marathi",
        "Mongolian"=>"Mongolian",
        "Myammar"=>"Myammar",
        "Nepali"=>"Nepali",
        "Norwegian"=>"Norwegian",
        "Pashto"=>"Pashto",
        "Persian"=>"Persian",
        "Polish"=>"Polish",
        "Portuguese"=>"Portuguese",
        "Punjabi"=>"Punjabi",
        "Quechua"=>"Quechua",
        "Romanian"=>"Romanian",
        "Russian"=>"Russian",
        "Samoan"=>"Samoan",
        "Scots Gaelic"=>"Scots Gaelic",
        "Serbian"=>"Serbian",
        "Sesotho"=>"Sesotho",
        "Shona"=>"Shona",
        "Sinhala"=>"Sinhala",
        "Slovak"=>"Slovak",
        "Slovenian"=>"Slovenian",
        "Somali"=>"Somali",
        "Spanish"=>"Spanish",
        "Sundanese"=>"Sundanese",
        "Swahili"=>"Swahili",
        "Swedish "=>"Swedish ",
        "Tajik"=>"Tajik",
        "Tamil"=>"Tamil",
        "Tatar"=>"Tatar",
        "Telugu"=>"Telugu",
        "Thai"=>"Thai",
        "Tibetan"=>"Tibetan",
        "Tonga"=>"Tonga",
        "Turkish"=>"Turkish",
        "Ukranian"=>"Ukranian",
        "Urdu"=>"Urdu",
        "Uzbek"=>"Uzbek",
        "Vietnamese"=>"Vietnamese",
        "Welsh"=>"Welsh",
        "Xhosa"=>"Xhosa",
        "Yiddish"=>"Yiddish",
        "Yoruba"=>"Yoruba",
        "Zulu"=>"Zulu",
    ];
    public function fileUpload(Request $request,$image_key,$upload_path){
        $fileName = "";
        if($request->hasFile($image_key)){
            $image = $request->file($image_key);
            $fileName= $name = time().'_'.$image_key.'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path($upload_path);
            $image->move($destinationPath, $name);            
            //$image->storeAs('public/'.$upload_path,$name);
        }
        return $fileName;
    }
    public function fileUploadWithType(Request $request,$image_key,$upload_path){
        $fileName=array();
        if($request->hasFile($image_key)){
            $image = $request->file($image_key);
            $name = time().'_'.$image_key.'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path($upload_path);
            $image->move($destinationPath, $name);            
            $ext=$image->getClientOriginalExtension();
            $imgExts=[
                'png',
                'PNG',
                'jpg',
                'JPEG',
                'gif',
            ];
            if(in_array($ext, $imgExts)){
                $ext="img";
            }else{
                $ext="video";
            }
            $fileName=[
                'file'=>$name,
                'file_type'=>$ext
            ];
        }
        return $fileName;
    }
    public function bulkFileUpload(Request $request,$image_key,$upload_path){
        $fileName = array();
        if($request->hasFile($image_key)){
            $images = $request->file($image_key);
            foreach ($images as $key=>$image) {
                $name = time().'_'.$image_key.'_'.$key.'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path($upload_path);
                if($image->move($destinationPath, $name)){
                    $ext=$image->getClientOriginalExtension();
                    $imgExts=[
                        'png',
                        'PNG',
                        'jpg',
                        'JPEG',
                        'jpeg',
                        'gif',
                    ];
                    $audioExts=[
                        'mp3',
                        'MP3',
                        'wav'
                    ];
                    $videoExts=[
                        'mp4',
                        'MP4',
                        'MOV',
                        'WMV',
                    ];
                    if(in_array($ext, $imgExts)){
                        $ext="img";
                    }else if(in_array($ext, $audioExts)){
                        $ext="audio";
                    }else if(in_array($ext, $videoExts)){
                        $ext="video";
                    }
                    $fileName[]=[
                        'file'=>$name,
                        'file_type'=>$ext
                    ];
                }
            }
        }
        return $fileName;
    }
    public function getArrayDrop($arrays){
        $assoArray=array();
        foreach ($arrays as $arr){
            $assoArray[$arr]=$arr;
        }
        return $assoArray;
    }
    public function getDropArray($arrays,$key_='id',$value_='name'){
        $assoArray=array();
        foreach ($arrays as $arr){
            $assoArray[$arr->$key_]=$arr->$value_;
        }
        return $assoArray;
    }
}
