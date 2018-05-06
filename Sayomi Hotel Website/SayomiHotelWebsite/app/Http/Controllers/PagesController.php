<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Room;
use App\Suite;
use App\Guest;
use App\RoomBooking;
use App\Admin;
use App\SuiteBooking;
use DateTime;
use \Input as Input;

class PagesController extends Controller
{
    public function Index(){
        $result = DB::select('select * from rooms inner join room_pictures on rooms.roomID = room_pictures.roomID');
        $resultSuites = DB::select('select * from suites inner join suite_pictures on suites.suiteID = suite_pictures.suiteId');
        return view('welcome')->with('result', $result)->with('resultSuites', $resultSuites);
    }

    public function About(){
        return view('about');
    }

    public function Rooms(){
        $result = DB::select('select * from rooms inner join room_pictures on rooms.roomID = room_pictures.roomID');
        $roomCount = Room::count();
        $roomCountOnHalf = round($roomCount / 2);

        return view('menu')->with('result', $result)->with('roomCountOnHalf', $roomCountOnHalf);
    }

    public function Suites(){
        $resultSuites = DB::select('select * from suites inner join suite_pictures on suites.suiteID = suite_pictures.suiteId');
        $suiteCount = Suite::count();
        $suiteCountOnHalf = round($suiteCount[0] / 2);

        return view('menu-suite')->with('resultSuites', $resultSuites)->with('suiteCountOnHalf', $suiteCountOnHalf);
    }

    public function Reservation(){
        return view('reservation');
    }

    public function Contact(){
        return view('contact');
    }

    public function ProcessContact(Request $request){

        $to = "anaslatique@gmail.com";
        $subject = $request->input('subjects');
        $txt = $request->input('message');
        $headers = "From:" . $request->input('email') . "\r\n" . "CC: ";

        mail($to,$subject,$txt,$headers);
    }

    public function BookRoom($id)
    {
        $roomToBook = DB::select('select * from rooms inner join room_pictures on rooms.roomID = room_pictures.roomID where rooms.roomID = ?', array($id));

        return view('room')->with('roomToBook', $roomToBook[0]);
    }

    public function BookSuite($id)
    {
        $suiteToBook = DB::select('select * from suites inner join suite_pictures on suites.suiteID = suite_pictures.suiteID where suites.suiteID = ?', array($id));
        return view('suite')->with('suiteToBook', $suiteToBook[0]);
    }

    public function ReserveRoom(Request $request, $id){

        // Server side validate...

        $date=date_create($request->datepicker);
        $room = DB::select("select * from rooms where roomID = " .$id);

        $isValid = 1;

        if (empty($request->Fname))
        {
            $isValid = 0;
        }

        if (empty($request->Lname))
        {
            $isValid = 0;
        }

        if (empty(filter_var($request->email, FILTER_VALIDATE_EMAIL)))
        {
            $isValid = 0;
        }

        if ($request->numberOfNights < 0)
        {
            $isValid = 0;
        }

        if ($request->numberOfPersons < 0)
        {
            $isValid = 0;
        }

        if ($request->numberOfPersons > $room[0]->maxPersons)
        {
            $isValid = 0;
        }

        if (date_create(date("Y-m-d"))->diff($date)->format("%r%d") < 0)
        {
            $isValid = 0;
        }


        if ($isValid == 1)
        {
            $guest = new Guest;
            $guest->firstName = $request->Fname;
            $guest->lastName = $request->Lname;
            $guest->email = $request->email;
            $guest->phone = $request->phone;

            $guest->save();

            $roomBooking = new RoomBooking;

            $roomBooking->roomID = $id;
            $roomBooking->guestID = $guest->id;
            $roomBooking->bookDate = date("Y-m-d h:i:s");

            $date=date_create($request->datepicker);

            $roomBooking->beginStayDate  =  date_format($date,"Y-m-d");

            $roomBooking->nights = $request->numberOfNights;

            $roomBooking->persons = $request->numberOfPersons;

            $roomPrice = DB::select("select pricePerNight from rooms where roomID = " . $id);

            $roomBooking->price = $roomPrice[0]->pricePerNight * $roomBooking->nights;

            // Get The Code
            $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

            $pin = mt_rand(1000000, 9999999)
                . mt_rand(1000000, 9999999)
                . $characters[rand(0, strlen($characters) - 1)];


            $string = str_shuffle($pin);
            $roomBooking->code = $string;
            $roomBooking->save();
            DB::update("update rooms set locked = 1 where roomID = " . $id);
            $roomPicture = DB::select("select url from room_pictures where roomID = " . $id);
            return view("roomReserve")->with('roomBooking', $roomBooking)->with('guest', $guest)->with('room', $room[0])->with('roomPicture', $roomPicture[0]);


        }else
        {
            $roomToBook = DB::select('select * from rooms inner join room_pictures on rooms.roomID = room_pictures.roomID where rooms.roomID = ?', array($id));
            $bigNope = true;
            $request = null;
            return view('room')->with('roomToBook', $roomToBook[0])->with('bigNope', $bigNope);
        }


    }

    public function ReserveSuite(Request $request, $id){
        {

            // Server side validate...

            $date=date_create($request->datepicker);
            $suite = DB::select("select * from suites where suiteID = " .$id);

            $isValid = 1;

            if (empty($request->Fname))
            {
                $isValid = 0;
            }

            if (empty($request->Lname))
            {
                $isValid = 0;
            }

            if (empty(filter_var($request->email, FILTER_VALIDATE_EMAIL)))
            {
                $isValid = 0;
            }

            if ($request->numberOfNights < 0)
            {
                $isValid = 0;
            }

            if (date_create(date("Y-m-d"))->diff($date)->format("%r%d") < 0)
            {
                $isValid = 0;
            }


            if ($isValid == 1)
            {
                $guest = new Guest;
                $guest->firstName = $request->Fname;
                $guest->lastName = $request->Lname;
                $guest->email = $request->email;
                $guest->phone = $request->phone;

                $guest->save();

                $suiteBooking = new suiteBooking;

                $suiteBooking->suiteID = $id;
                $suiteBooking->guestID = $guest->id;
                $suiteBooking->bookDate = date("Y-m-d h:i:s");

                $date=date_create($request->datepicker);

                $suiteBooking->beginStayDate  =  date_format($date,"Y-m-d");

                $suiteBooking->nights = $request->numberOfNights;

                $suitePrice = DB::select("select pricePerNight from suites where suiteID = " . $id);

                $suiteBooking->price = $suitePrice[0]->pricePerNight * $suiteBooking->nights;

                // Get The Code
                $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

                $pin = mt_rand(1000000, 9999999)
                    . mt_rand(1000000, 9999999)
                    . $characters[rand(0, strlen($characters) - 1)];


                $string = str_shuffle($pin);
                $suiteBooking->code = $string;
                $suiteBooking->save();
                DB::update("update suites set locked = 1 where suiteID = " . $id);
                $suitePicture = DB::select("select url from suite_pictures where suiteID = " . $id);
                return view("suiteReserve")->with('suiteBooking', $suiteBooking)->with('guest', $guest)->with('suite', $suite[0])->with('suitePicture', $suitePicture[0]);

            }else
            {
                $suiteToBook = DB::select('select * from suites inner join suite_pictures on suites.suiteID = suite_pictures.suiteID where suites.suiteID = ?', array($id));
                $bigNope = true;
                $request = null;
                return view('suite')->with('suiteToBook', $suiteToBook[0])->with('bigNope', $bigNope);
            }
        }
    }

    public function AdminIndex(){
        return view('adminViews/dist/index');
    }

    public function SignHimUp(Request $request){
        $isValid = 1;


        if (empty($request->username))
        {
            $isValid = 0;
        }

        if (empty($request->password))
        {
            $isValid = 0;
        }

        if ($request->passwordAgain !== $request->password)
        {
            $isValid = 0;
        }

        if (empty(filter_var($request->email, FILTER_VALIDATE_EMAIL)))
        {
            $isValid = 0;
        }

        if (empty($request->firstName))
        {
            $isValid = 0;
        }

        if (empty($request->lastName))
        {
            $isValid = 0;
        }

        if ($isValid == 1)
        {
        	$alreadyExistsUser = DB::table("admins")->where('username', '=', $request->username)->first();

            if (is_null($alreadyExistsUser))
            {
            	DB::insert("INSERT INTO Admins(username, firstName, LastName, Password, Email) VALUES (?, ?, ?, ?, ?)", array($request->username, $request->firstName, $request->lastName, $request->password, $request->email));

                $user = DB::table('admins')->where('username', '=', $request->username)->first();

                return view('adminViews/dist/dashboard')->with('user', $user);
            }else
            {
                $alreadyThere = true;
                return view('adminViews/dist/index')->with('alreadyThere', $alreadyThere);
            }

            // implement login, implement CRUD funcs
            // display some stuff more in G keep
        }else
        {
            $somethingWrong = true;
            return view('adminViews/dist/index')->with('somethingWrong', $somethingWrong)->with('request', $request);
        }
    }

    // SAME THING FOR SIGN UP
    public function LogHimIn(Request $request){
        $isValid = 1;

        if (empty($request->username))
        {
        	$isValid = 0;
        }

        if (empty($request->password))
        {
        	$isValid = 0;
        }

        $user = DB::table("admins")->where('username', '=', $request->username)->where('password', '=', $request->password)->first();

        if (!is_null($user))
        {
        	// log him in

            // SELECT Max(select count(*) from room_bookings group by roomID)

            $totalNumberOfRoomsReservations = RoomBooking::count();
            $totalNumberOfSuitesReservations = SuiteBooking::count();
            $totalNumberOfGuests = Guest::count();
            $roomsRevenue = DB::table('room_bookings')->sum('price');
            $suitesRevenue = DB::table('suite_bookings')->sum('price');

            // Can't get best guest cause guests reserve rooms with different IDs everytime we increment the ID!

            $bestRoom = DB::select('SELECT Max(count) resCount, rooms.roomID, rooms.description, url from (select count(*) as count, roomID from room_bookings group by roomID) as Y inner join rooms on Y.roomID = rooms.roomID inner join room_pictures on rooms.roomID = room_pictures.roomID group by rooms.roomID, rooms.description, url LIMIT 1');
            $bestSuite = DB::select('SELECT Max(count) resCount, suites.suiteID, suites.description, url from (select count(*) as count, suiteID from suite_bookings group by suiteID) as Y inner join suites on Y.suiteID = suites.suiteID inner join suite_pictures on suites.suiteID = suite_pictures.suiteID group by suites.suiteID, suites.description, url LIMIT 1');


            $rooms = DB::select("SELECT * FROM rooms inner join room_pictures on rooms.roomID = room_pictures.roomID");
            $suites = DB::select("SELECT * FROM suites inner join suite_pictures on suites.suiteID = suite_pictures.suiteID");
            $guests = DB::select("SELECT * FROM guests");
            $roomBookings = DB::select("SELECT * FROM room_bookings");
            $suiteBookings= DB::select("SELECT * FROM suite_bookings");


            // Session saving

            session_start();
            $_SESSION["user"] = $user;


            return view('adminViews/dist/dashboard')->with('user', $user)
                ->with('totalNumberOfRoomsReservations', $totalNumberOfRoomsReservations)
                ->with('totalNumberOfSuitesReservations', $totalNumberOfSuitesReservations)
                ->with('totalNumberOfGuests', $totalNumberOfGuests)
                ->with('roomsRevenue', $roomsRevenue)
                ->with('suitesRevenue', $suitesRevenue)
                ->with('bestRoom', $bestRoom)
                ->with('bestSuite', $bestSuite)
                ->with('rooms', $rooms)
                ->with('suites', $suites)
                ->with('guests', $guests)
                ->with('roomBookings', $roomBookings)
                ->with('suiteBookings', $suiteBookings);
        }else
        {
            $bigNope = true;
            return view('adminViews/dist/index')->with('bigNope', $bigNope);
        }
    }

    public function DisplayCreateRoomForm()
    {
        session_start();
        return view('adminViews/dist/createRoom');
    }

    public function CreateRoom(Request $request)
    {
        $this->validate($request, [
        'image'  => 'required|image',
        'category' => ['required', 'regex:/^(Single|Double|single|double)$/'],
        'description' => 'required',
        'numberOfBeds' => 'required|min:1',
        'pricePerNight' => 'required|min:1',
        'maxPersons' => 'required|min:1',
        'locked' => 'required|max:1|min:0',
       ]);


        if($request->hasFile('image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            // Upload Image
            $file = $request->file('image');

            $file->move(public_path('/images'), $filenameWithExt);

            $room = new Room;
            $room->description = $request->description;
            $room->category = $request->category;
            $room->numberOfBeds = $request->numberOfBeds;
            $room->pricePerNight = $request->pricePerNight;
            $room->locked = $request->locked;
            $room->maxPersons = $request->maxPersons;

            $room->save();

            DB::insert("INSERT INTO room_pictures(url, roomID) VALUES (?, ?)", array($filenameWithExt, $room->roomID));

            $rooms = DB::select("SELECT * FROM rooms inner join room_pictures on rooms.roomID = room_pictures.roomID");
            session_start();
            return view('adminViews/dist/rooms')->with('rooms', $rooms);
        }
    }


    public function ModifyRoom($roomID){

        $room = Room::find($roomID);

        session_start();
        return view('adminViews/dist/modifyRoom')->with('room', $room);
    }

    public function DeleteRoom($roomID){
        DB::delete("DELETE FROM rooms WHERE roomID = ?", array($roomID));


        $rooms = DB::select("SELECT * FROM rooms inner join room_pictures on rooms.roomID = room_pictures.roomID");
        session_start();
        return view('adminViews/dist/rooms')->with('rooms', $rooms);
    }

    public function ModifyTheRoomForReal(Request $request, $roomID){
        $this->validate($request, [
     'image'  => 'required|image',
     'category' => ['required', 'regex:/^(Single|Double|single|double)$/'],
     'description' => 'required',
     'numberOfBeds' => 'required|min:1',
     'pricePerNight' => 'required|min:1',
     'maxPersons' => 'required|min:1',
     'locked' => 'required|max:1|min:0',
    ]);


        if($request->hasFile('image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            // Upload Image
            $file = $request->file('image');

            $file->move(public_path('/images'), $filenameWithExt);

            $room = Room::find($roomID);


            $room->description = $request->description;
            $room->category = $request->category;
            $room->numberOfBeds = $request->numberOfBeds;
            $room->pricePerNight = $request->pricePerNight;
            $room->locked = $request->locked;
            $room->maxPersons = $request->maxPersons;

            $room->update();

            DB::insert("UPDATE room_pictures SET url = ? WHERE roomID = ?", array($filenameWithExt, $room->roomID));

            session_start();


            $totalNumberOfRoomsReservations = RoomBooking::count();
            $totalNumberOfSuitesReservations = SuiteBooking::count();
            $totalNumberOfGuests = Guest::count();
            $roomsRevenue = DB::table('room_bookings')->sum('price');
            $suitesRevenue = DB::table('suite_bookings')->sum('price');

            // Can't get best guest cause guests reserve rooms with different IDs everytime we increment the ID!

            $bestRoom = DB::select('SELECT Max(count) resCount, rooms.roomID, rooms.description, url from (select count(*) as count, roomID from room_bookings group by roomID) as Y inner join rooms on Y.roomID = rooms.roomID inner join room_pictures on rooms.roomID = room_pictures.roomID group by rooms.roomID, rooms.description, url LIMIT 1');
            $bestSuite = DB::select('SELECT Max(count) resCount, suites.suiteID, suites.description, url from (select count(*) as count, suiteID from suite_bookings group by suiteID) as Y inner join suites on Y.suiteID = suites.suiteID inner join suite_pictures on suites.suiteID = suite_pictures.suiteID group by suites.suiteID, suites.description, url LIMIT 1');


            $rooms = DB::select("SELECT * FROM rooms inner join room_pictures on rooms.roomID = room_pictures.roomID");
            $suites = DB::select("SELECT * FROM suites inner join suite_pictures on suites.suiteID = suite_pictures.suiteID");
            $guests = DB::select("SELECT * FROM guests");
            $roomBookings = DB::select("SELECT * FROM room_bookings");
            $suiteBookings= DB::select("SELECT * FROM suite_bookings");


            return view('adminViews/dist/dashboard')->with('totalNumberOfRoomsReservations', $totalNumberOfRoomsReservations)
                ->with('totalNumberOfSuitesReservations', $totalNumberOfSuitesReservations)
                ->with('totalNumberOfGuests', $totalNumberOfGuests)
                ->with('roomsRevenue', $roomsRevenue)
                ->with('suitesRevenue', $suitesRevenue)
                ->with('bestRoom', $bestRoom)
                ->with('bestSuite', $bestSuite)
                ->with('rooms', $rooms)
                ->with('suites', $suites)
                ->with('guests', $guests)
                ->with('roomBookings', $roomBookings)
                ->with('suiteBookings', $suiteBookings);
        }
    }

    // SAME FOR SUITES


    public function DisplayCreateSuiteForm()
    {
        session_start();
        return view('adminViews/dist/createSuite');
    }

    public function CreateSuite(Request $request)
    {
        $this->validate($request, [
      'image'  => 'required|image',
      'description' => 'required',
      'numberOfRooms' => 'required|min:1',
      'pricePerNight' => 'required|min:1',
      'locked' => 'required|max:1|min:0',
     ]);


        if($request->hasFile('image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            // Upload Image
            $file = $request->file('image');

            $file->move(public_path('/images'), $filenameWithExt);

            $suite = new Suite;
            $suite->description = $request->description;
            $suite->numberOfRooms = $request->numberOfRooms;
            $suite->pricePerNight = $request->pricePerNight;
            $suite->locked = $request->locked;

            $suite->save();

            $suiteID = DB::SELECT("SELECT suiteID FROM Suites ORDER BY suiteID DESC LIMIT 1");

            DB::insert("INSERT INTO suite_pictures(url, suiteID) VALUES (?, ?)", array($filenameWithExt, $suiteID[0]->suiteID));

            $suites = DB::select("SELECT * FROM suites inner join suite_pictures on suites.suiteID = suite_pictures.suiteID");
            session_start();
            return view('adminViews/dist/suites')->with('suites', $suites);
        }
    }

    public function ModifySuite($suiteID){

        $suite = DB::select("SELECT * FROM Suites WHERE suiteID = ?", array($suiteID));

        session_start();
        return view('adminViews/dist/modifySuite')->with('suite', $suite[0]);
    }

    public function DeleteSuite($suiteID){
        DB::delete("DELETE FROM suites WHERE suiteID = ?", array($suiteID));


        $suites = DB::select("SELECT * FROM suites inner join suite_pictures on suites.suiteID = suite_pictures.suiteID");
        session_start();
        return view('adminViews/dist/suites')->with('suites', $suites);
    }

    public function ModifyTheSuiteForReal(Request $request, $suiteID){
        $this->validate($request, [
     'image'  => 'required|image',
     'description' => 'required',
     'numberOfRooms' => 'required|min:1',
     'pricePerNight' => 'required|min:1',
     'locked' => 'required|max:1|min:0',
    ]);


        if($request->hasFile('image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            // Upload Image
            $file = $request->file('image');

            $file->move(public_path('/images'), $filenameWithExt);

            $suite = Suite::find($suiteID);

            $suite->description = $request->description;
            $suite->numberOfRooms = $request->numberOfRooms;
            $suite->pricePerNight = $request->pricePerNight;
            $suite->locked = $request->locked;

            $suite->update();

            DB::insert("UPDATE suite_pictures SET url = ? WHERE suiteID = ?", array($filenameWithExt, $suite->suiteID));


            $suites = DB::select("SELECT * FROM suites inner join suite_pictures on suites.suiteID = suite_pictures.suiteID");
            session_start();
            return view('adminViews/dist/suites')->with('suites', $suites);
        }
    }

    //GUESTS TOO

    public function ModifyGuest($guestID){

        $guest = DB::select("SELECT * FROM Guests WHERE id = ?", array($guestID));

        session_start();
        return view('adminViews/dist/modifyGuest')->with('guest', $guest[0]);
    }

    public function DeleteGuest($guestID){
        DB::delete("DELETE FROM guests WHERE id = ?", array($guestID));


        $guests = DB::select("SELECT * FROM guests");
        session_start();
        return view('adminViews/dist/guests')->with('guests', $guests);
    }

    public function ModifyTheGuestForReal(Request $request, $guestID){
        $this->validate($request, [
     'firstName' => 'required',
     'lastName' => 'required',
     'email' => 'required',
     'phone' => 'required',
    ]);
        $guest = Guest::find($guestID);

        $guest->firstName = $request->firstName;
        $guest->lastName = $request->lastName;
        $guest->email = $request->email;
        $guest->phone = $request->phone;

        $guest->update();

        $guests = DB::select("SELECT * FROM guests");
        session_start();
        return view('adminViews/dist/guests')->with('guests', $guests);
    }


    // ROOM BOOKINGS

    public function DeleteRoomBookings($RoomBookingsID){
        DB::delete("DELETE FROM room_bookings WHERE id = ?", array($RoomBookingsID));


        $rBs = DB::select("SELECT * FROM room_bookings");
        session_start();
        return view('adminViews/dist/RoomBookings')->with('rBs', $rBs);
    }

    // SUITE BOOKINGS

    public function DeleteSuiteBookings($SuiteBookingsID){
        DB::delete("DELETE FROM suite_bookings WHERE id = ?", array($SuiteBookingsID));


        $sBs = DB::select("SELECT * FROM suite_bookings");
        session_start();
        return view('adminViews/dist/SuiteBookings')->with('sBs', $sBs);
    }



    public function Dashboard(){

        $totalNumberOfRoomsReservations = RoomBooking::count();
        $totalNumberOfSuitesReservations = SuiteBooking::count();
        $totalNumberOfGuests = Guest::count();
        $roomsRevenue = DB::table('room_bookings')->sum('price');
        $suitesRevenue = DB::table('suite_bookings')->sum('price');

        // Can't get best guest cause guests reserve rooms with different IDs everytime we increment the ID!

        $bestRoom = DB::select('SELECT Max(count) resCount, rooms.roomID, rooms.description, url from (select count(*) as count, roomID from room_bookings group by roomID) as Y inner join rooms on Y.roomID = rooms.roomID inner join room_pictures on rooms.roomID = room_pictures.roomID group by rooms.roomID, rooms.description, url LIMIT 1');
        $bestSuite = DB::select('SELECT Max(count) resCount, suites.suiteID, suites.description, url from (select count(*) as count, suiteID from suite_bookings group by suiteID) as Y inner join suites on Y.suiteID = suites.suiteID inner join suite_pictures on suites.suiteID = suite_pictures.suiteID group by suites.suiteID, suites.description, url LIMIT 1');

        session_start();

        return view('adminViews/dist/dashboard')->with('totalNumberOfRoomsReservations', $totalNumberOfRoomsReservations)
                ->with('totalNumberOfSuitesReservations', $totalNumberOfSuitesReservations)
                ->with('roomsRevenue', $roomsRevenue)
                ->with('suitesRevenue', $suitesRevenue)
                ->with('bestRoom', $bestRoom)
                ->with('bestSuite', $bestSuite);
    }


    // P1 : rooms or suites...
    // P2 : CRUD...
    // P3 : additional parameters, maybe id...

    public function BigCrud($P1, $P2, $P3){
        switch ($P1)
        {
            case "room":
                switch ($P2)
                {
                	case "create":
                        break;

                    case "update":
                        break;

                    case "delete":
                        break;
                }
                break;

            case "suites":
                switch ($P2)
                {
                	case "create":
                        break;

                    case "update":
                        break;

                    case "delete":
                        break;
                }
                break;

            case "guests":
                break;

            case "roomBookings":
                break;

            case "suiteBookings":
                break;
        }

    }

    public function DisplayRooms(){
        $rooms = DB::select("SELECT * FROM rooms inner join room_pictures on rooms.roomID = room_pictures.roomID");
        session_start();
        return view('adminViews/dist/rooms')->with('rooms', $rooms);
    }

    public function DisplaySuites(){
        $suites = DB::select("SELECT * FROM suites inner join suite_pictures on suites.suiteID = suite_pictures.suiteID");
        session_start();
        return view('adminViews/dist/suites')->with('suites', $suites);
    }

    public function DisplayGuests(){
        $guests = DB::select("SELECT * FROM guests");
        session_start();
        return view('adminViews/dist/guests')->with('guests', $guests);
    }

    public function DisplayRoomBookings(){
        $rBs = DB::select("SELECT * FROM room_Bookings");
        session_start();
        return view('adminViews/dist/roomBookings')->with('rBs', $rBs);
    }

    public function DisplaySuiteBookings(){
        $sBs = DB::select("SELECT * FROM suite_Bookings");
        session_start();
        return view('adminViews/dist/suiteBookings')->with('sBs', $sBs);
    }

    public function Logout(){
        session_start();

        session_destroy();

        return view('/adminViews/dist/index');
    }

    public function EditProfile(){
        session_start();

        return view('/adminViews/dist/EditProfile');
    }

    public function ModifyTheProfileForReal(Request $request, $userID){
        $this->validate($request, [
'Username' => 'required',
'firstName' => 'required',
'lastName' => 'required',
'email' => 'required',
'password' => 'required',
]);
        $user = Admin::find($userID);

        $user->Username = $request->Username;
        $user->firstName = $request->firstName;
        $user->lastName = $request->lastName;
        $user->email = $request->email;
        $user->password= $request->password;

        $user->update();

        $users = DB::select("SELECT * FROM Admins");


        $totalNumberOfRoomsReservations = RoomBooking::count();
        $totalNumberOfSuitesReservations = SuiteBooking::count();
        $totalNumberOfGuests = Guest::count();
        $roomsRevenue = DB::table('room_bookings')->sum('price');
        $suitesRevenue = DB::table('suite_bookings')->sum('price');

        // Can't get best guest cause guests reserve rooms with different IDs everytime we increment the ID!

        $bestRoom = DB::select('SELECT Max(count) resCount, rooms.roomID, rooms.description, url from (select count(*) as count, roomID from room_bookings group by roomID) as Y inner join rooms on Y.roomID = rooms.roomID inner join room_pictures on rooms.roomID = room_pictures.roomID group by rooms.roomID, rooms.description, url LIMIT 1');
        $bestSuite = DB::select('SELECT Max(count) resCount, suites.suiteID, suites.description, url from (select count(*) as count, suiteID from suite_bookings group by suiteID) as Y inner join suites on Y.suiteID = suites.suiteID inner join suite_pictures on suites.suiteID = suite_pictures.suiteID group by suites.suiteID, suites.description, url LIMIT 1');

        session_start();

        $_SESSION['user'] = $user;


        return view('adminViews/dist/dashboard')->with('totalNumberOfRoomsReservations', $totalNumberOfRoomsReservations)
                ->with('totalNumberOfSuitesReservations', $totalNumberOfSuitesReservations)
                ->with('roomsRevenue', $roomsRevenue)
                ->with('suitesRevenue', $suitesRevenue)
                ->with('bestRoom', $bestRoom)
                ->with('bestSuite', $bestSuite)
                ->with('users', $users);
    }
}