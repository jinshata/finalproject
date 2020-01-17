<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\storage;
use DB;
use App\CountryModel;
use App\StateModel;
use App\DistrictModel;
use App\LoginModel;
use App\UseraccountModel;
use App\FoodcategoryModel;
use App\LocationModel;
use App\AddfoodModel;
use App\ClothcategoryModel;
use App\AddclothModel;
use App\ToycategoryModel;
use App\AddtoyModel;
use App\ReceiverModel;
use App\DonorModel;




class donationcontroller extends Controller
{
    public function view_country()
	{
    return view('addcountry');
    }

    public function country(Request $request)
    {
    	$country = new CountryModel();
        $country-> country_name = $request->input('country_name');
        $country->save();
        return view('/addcountry');
    }

    
    public function view_state()
	{
    return view('addstate');
    }

    public function state(Request $request)
    {
    	$state = new StateModel();
        $state-> state_name = $request->input('state_name');
        $state->save();
        return view('/addstate');
    }
     
     public function view_district()
	{
    return view('adddistrict');
    }

    public function district(Request $request)
    {
    	$district = new DistrictModel();
        $district-> district_name = $request->input('district_name');
        $district->save();
        return view('/adddistrict');
    }
   

      public function fetchDistricts(Request $request)
    {
        $data = DistrictModel::all();
        return view('/signup')->with('data',$data);

    }
     

    //  public function useraccount()
    // {
    // return view('/signup');
    // }

    public function user(Request $request) 
    {
      //  $data= request()->validate([
      // 'fullname' => 'required',
      // 'contactno' => 'required|numeric',
      // 'email' => 'required|email',
      // 'gender' => 'required',
      // 'district' => 'required',
      // 'state' => 'required',
      // 'country' => 'required',
      // 'pincode' => 'required',
      // // 'image' => 'required|image|mimes:jpeg,png,jpg|max:2048'
      // ]);

        $check_email_exists = DB::table('user_login') -> where('email', $request->input('email'))->first();
        if ($check_email_exists === null) {
            $signin = new LoginModel();
            $signin-> email = $request->input('email');
            $signin-> password = $request->input('password');
            $signin-> usertype = $request->input('usertype');
            $signin-> status = "1";
            $signin->save();
            if ($signin -> id > 0) {
                $signup = new UseraccountModel();
                $signup-> fullname = $request->input('fullname');
                $signup-> address = $request->input('address');
                $signup-> gender = $request->input('gender');
                $signup-> contactno = $request->input('contactno');
                $signup-> district = $request->input('district_name');
                $signup-> state = $request->input('state_name');
                $signup-> country = $request->input('country_name');
                $signup-> pincode = $request->input('pincode');
                $signup-> usertype = $request->input('usertype');
                $signup-> status = "1";
                $signup-> fk_login_id = $signin-> id;
                $signup-> save();
                if ($signup-> id > 0) {    
                    return view('/home'); 
                }
            }
         } else {
            return view('/login');
         }
    }

    public function userreject($id)
        {   
          // $user_obj = UseraccountModel::find($id);
          // $user_obj->status = 0;
          // $user_obj->save();
          // $user_ob = LoginModel::find($id);
          // $user_ob->status = 0;
          // $user_ob->save();
          $user_obj = UseraccountModel::where('fk_login_id',$id)
          ->update(['status' => 0]);

          if($user_obj){
            $user_ob = LoginModel::where('login_id','=',$id)
                        ->update(['status' => 0]);
          }

          return redirect('/viewprofile');
        }



    public function login()
    {
        return view('login');
    }

     public function login_fun(Request $request)
   {

        $eml = $request->input('email');
        $pwd = $request->input('password');
        
        $con=DB::table('user_login') ->where('email',$eml)->first();
        //$con-> usertype

        if(is_null($con)) {
           // return view('/donordetails');
          echo "incorect username";
        }
        elseif($con-> email == $eml && $con-> password == $pwd) {
                 $request->session()->put('user',$request->input('email'));
                  // $registerTbl = DB::table('user_account') ->where('fk_login_id',
                  //  $con-> login_id) ->first();
                
                  $request->session()->put('userId', $con -> login_id);
                  
                  $value=session()->get('userId');
                  // echo $value;
                  // exit;
                 if ($con -> usertype == 'Donor') {
                    return view('/donordetails');
                  // echo "donor";
                 }
                 elseif ($con -> usertype == 'admin') {
                    return view('/admin');
                  //echo "admin";
                 }
                  //  elseif ($con -> status == 0) {
                  //  echo "no access to login";
                  // # code...
                  //   }

                 else {

                    return view('/receiver');
                    // $value=session()->get('userId');
                  // echo $value;
                  // exit;
                }
            }
            else{
              echo "incorect pass";
            }
            
        }

    


     public function show_data(Request $request)
        {
           // $value =  $request->session()->get('userId');
             
           //   // var_dump($request);
           //   //  exit;
           // $registertbl = DB::table('user_account')->where('fk_login_id', $value)->first();
            $data = UseraccountModel::all();
            return view('/viewprofile')->with('data', $data);
          }


     public function edit_data($id)
     {
        //$data = UseraccountModel::find($id);
       $data=DB::table('user_account')->where('register_id',$id)->first();
       // $dist = $data->district;
       // echo $data;
       //  exit;
        return view('/editdata')->with('data',$data);
      }
      


       public function edit(Request $request)
      {
           $id = $request->input('id');

            $data= UseraccountModel::find($id);
          // echo $data;
          // exit;
            $data-> fullname=$request-> input('fullname');
            $data-> address= $request-> input('address');
            $data-> gender= $request-> input('gender');
            $data-> contactno= $request-> input('contactno');
            $data-> district= $request-> input('district_name');
            $data-> state= $request-> input('state_name');
            $data-> country= $request-> input('country_name');
            $data->save();
           return redirect('/viewprofile');

      }

      public function delete($id)
      {
        $data= UseraccountModel::find($id);
        $data->delete();
        return Redirect()->back();
      }
       
       // FOOD CATEGORY
      
     
       public function add_food()
        {
         return view('addfoodcategory');
        }

       public function foodcategory(Request $request) 
       {
         $food = new FoodcategoryModel();
         $food-> foodcategory = $request->input('foodcategory');
         $food->save();
        return view('/addfoodcategory');
      }

       public function fetchfood(Request $request)
    {
        $data = FoodcategoryModel::all();
        return view('/addfood')->with('data',$data);

    }

       
    //  public function getfood()
    //  {
    // return view('addfood');//file name view
    //   }

      public function addfood(Request $request) 
    {
       
            $add = new AddfoodModel();
            $add-> foodcategory = $request->input('foodcategory');
            $add-> description = $request->input('description');
            $add-> quantity = $request->input('quantity');
         

         if($request->hasFile('image')){
         $file= $request->file('image');
         $extension= time().'.'.$file->getClientOriginalExtension();
         $destinationpath=public_path('/img');
         $file->move($destinationpath, $extension);
         $add->image=$extension;
      }
        else {
          $add->image='';
        }


        $add->save();
        return Redirect()->back();
    }
      
     
      public function show_food(Request $request)
        {
           
            $data = AddfoodModel::all();
            return view('/viewfood')->with('data', $data);
          }
       
      public function fetch_food($foodid)
       {
         $data = AddfoodModel::find($foodid);
       // $data=DB::table('user_account')->where('register_id',$id)->first();
       // $dist = $data->district;
       // echo $data;
       //  exit;
        return view('/editfood')->with('data',$data);
      }
      
      public function update_food(Request $request,$foodid)
        {
           // $id = $request->input('id');

          $data= AddfoodModel::find($foodid);
          // var_dump($data);
          // exit;
          $data-> foodcategory=$request-> input('foodcategory');
          $data-> quantity= $request-> input('quantity');
          
          
          if($request->hasFile('image'))
           {
          $file=$request->file('image');
          $extension=time().'.'.$file->getClientOriginalExtension();
          $destinationpath=public_path('/img');
          $file-> move($destinationpath,$extension);
          $data->image=$extension; 
           }
           else
           {
            $data->image='';
           }
           // var_dump($data);
           // exit;
              $data->save();
           return redirect('/viewfood')->with('data',$data);
       }
           
       public function deletefood($foodid)
      {
        $data= AddfoodModel::find($foodid);
        $data->delete();
        return Redirect()->back();
      }
       

      // CLOTH CATEGORY

        public function add_cloth()
        {
         return view('addclothcategory');
        }

       public function clothcategory(Request $request) 
       {
         $cloth = new ClothcategoryModel();
         $cloth-> clothcategory = $request->input('clothcategory');
         $cloth->save();
        return view('/addclothcategory');
      }

       public function fetchcloth(Request $request)
      {
        $data = ClothcategoryModel::all();
        return view('/addcloth')->with('data',$data);

       }

     
     public function addcloth(Request $request) 
    {
       
          $add = new AddclothModel();
          $add-> clothcategory = $request->input('clothcategory');
          $add-> description = $request->input('description');
          $add-> quantity = $request->input('quantity');
         

         if($request->hasFile('image')){
         $file= $request->file('image');
         $extension= time().'.'.$file->getClientOriginalExtension();
         $destinationpath=public_path('/img');
         $file->move($destinationpath, $extension);
         $add->image=$extension;
      }
        else {
          $add->image='';
        }


        $add->save();
        return Redirect()->back();
    }


    public function show_cloth(Request $request)
        {
           $data = AddclothModel::all();
           return view('/viewcloth')->with('data', $data);
        }
      

     public function fetch_cloth($clothid)
       {
         $data = AddclothModel::find($clothid);
       // $data=DB::table('user_account')->where('register_id',$id)->first();
       // $dist = $data->district;
       // echo $data;
       //  exit;
        return view('/editcloth')->with('data',$data);
      }  

     public function update_cloth(Request $request,$id)
        {
           // $id = $request->input('id');

         $data = AddclothModel::find($id);
          // var_dump($data);
          // exit;
          $data-> clothcategory=$request-> input('clothcategory');
          $data-> quantity= $request-> input('quantity');
          
          
          if($request->hasFile('image'))
           {
          $file=$request->file('image');
          $extension=time().'.'.$file->getClientOriginalExtension();
          $destinationpath=public_path('/img');
          $file-> move($destinationpath,$extension);
          $data->image=$extension; 
           }
           else
           {
            $data->image='';
           }
           // var_dump($data);
           // exit;
              $data->save();
           return redirect('/viewcloth')->with('data',$data);
       }
           
       public function deletecloth($clothid)
      {
        $data= AddclothModel::find($clothid);
        $data->delete();
        return Redirect()->back();
      } 


    //TOY CATEGORY 
     public function add_toy()
        {
         return view('addtoycategory');
        }

       public function toycategory(Request $request) 
       {
         $toy = new ToycategoryModel();
         $toy-> toycategory = $request->input('toycategory');
         $toy->save();
        return view('/addtoycategory');
      }

       public function fetchtoy(Request $request) //list the toy in dropdown menu
      {
        $data = ToycategoryModel::all();
        return view('/addtoy')->with('data',$data);

       }

      public function addtoy(Request $request)  //insert data in table
    {
       
          $add = new AddtoyModel();
          $add-> toycategory = $request->input('toycategory');
          $add-> description = $request->input('description');
          $add-> quantity = $request->input('quantity');
         

         if($request->hasFile('image')){
         $file= $request->file('image');
         $extension= time().'.'.$file->getClientOriginalExtension();
         $destinationpath=public_path('/img');
         $file->move($destinationpath, $extension);
         $add->image=$extension;
      }
        else {
          $add->image='';
        }


        $add->save();
        return Redirect()->back();
    }


    public function show_toy(Request $request)
        {
           $data = AddtoyModel::all();
           return view('/viewtoy')->with('data', $data);
        }
      

     public function fetch_toy($toyid)
       {
         $data = AddtoyModel::find($toyid);
       // $data=DB::table('user_account')->where('register_id',$id)->first();
       // $dist = $data->district;
       // echo $data;
       //  exit;
        return view('/edittoy')->with('data',$data);
      }  

     public function update_toy(Request $request,$id)
        {
           // $id = $request->input('id');

         $data = AddtoyModel::find($id);
          // var_dump($data);
          // exit;
          $data-> toycategory=$request-> input('toycategory');
          $data-> quantity= $request-> input('quantity');
          
          
          if($request->hasFile('image'))
           {
          $file=$request->file('image');
          $extension=time().'.'.$file->getClientOriginalExtension();
          $destinationpath=public_path('/img');
          $file-> move($destinationpath,$extension);
          $data->image=$extension; 
           }
           else
           {
            $data->image='';
           }
           // var_dump($data);
           // exit;
              $data->save();
           return redirect('/viewtoy')->with('data',$data);
       }
           
       public function deletetoy($toyid)
      {
        $data= AddtoyModel::find($toyid);
        $data->delete();
        return Redirect()->back();
      } 

  
  // Receiver page 
      public function view_receiver()
        {
          $receiverId = session()->get('userId');
          $notification = DonorModel::where('receiver_id', $receiverId)
                          ->join('receiver', 'receiver.id','=', 'donor.order_id')
                          ->select('receiver.subcategory', 'receiver.quantity', 'receiver.needdate')
                          ->first();
         return view('receiver')->with('notification', $notification);
        }


      public function receiver_data(Request $request)  //insert data in table
    { 
         $add = new ReceiverModel();
         // $request->session()->put('userId', $con -> login_id);

          // $value = $request->session()->get('userId');
         $add-> fk_receiver_id = $request->input('login_id');
         $add-> needtype = $request->input('needtype');
         $add-> subcategory = $request->input('subcategory');
         $add-> quantity = $request->input('quantity');
         $date = $request->input('year') .'-'. $request->input('month') .'-'. $request->input('day');
         $add-> needdate = $date;
         // $add-> status = "1";
         $add-> status = "pending";
         $value = session()->get('userId');
         // print_r($value);
         // exit;
         $add -> fk_receiver_id = $value;
         
         $add->save();
         return Redirect()->back();
         
    }

    //    public function fn_donordata(Request $request)  //insert data in table
    // { 
    //      $add = new DonorModel();
    //      // $request->session()->put('userId', $con -> login_id);

    //       // $value = $request->session()->get('userId');
    //      $add-> donor_id = $request->input('login_id');
    //      // $add-> receiver = $request->input('fk_receiver_id');
    //      // $add-> order_id = $request->input('id');
    //      // $add -> id = $order;
    //      // $add -> fk_receiver_id=$receiver;

    //       // DB::table('donor')->insert(['order_id' => $id,'receiver_id' => $receiver, 'status' =>0));
    //      $value = session()->get('userId');
    //      // print_r($value);
    //      //  exit;
    //      $add -> donor_id = $value;


         
    //      $add->save();
    //      return Redirect()->back();
         
    // }   

      
      
      public function viewdata(Request $request)
        {
             
             $data = ReceiverModel::all();
             return view('/donordetails');
        }

      public function view(Request $request)
        {
             $data = ReceiverModel::where('status', 'pending')->get();
             //$data = ReceiverModel::all();
             return view('/donordetails')->with('data', $data);
        }
      
        public function userconfirm($id, $receiver_id)
        {   
          $reciver_obj = ReceiverModel::find($id);
          $reciver_obj->status = 'approved';
          $reciver_obj->save();
          $add = new DonorModel();
          // $add-> donor_id = $request->input('login_id');
          $value = session()->get('userId');
         // print_r($value);
         //  exit;
          $add -> donor_id = $value;
          $add-> receiver_id = $receiver_id;
          $add-> order_id = $id;



         
         $add->save();
         // return Redirect()->back();


          return redirect('/donordetails');
        }


        public function donor_history(Request $request)
        {
             //$data = ReceiverModel::where('status', pending)->get();
              $data = ReceiverModel::all();
             return view('/donorhistory')->with('data', $data);
        }
         

         
        /*public function fn_notification()
        {
          $notification= DB::table('donor')
                        ->select('donor.order_id','donor.donor_id')
                        ->join('receiver.fk_receiver_id','receiver.subcategory','receiver.quantity','receiver.needdate','receiver.id' '=', 'donor.order_id')->first();
                        return view('viewnotification')->with('notification',$notification);



        }
*/
        

        //  public function fn_notification(Request $request,$id)
        // { 
        //   $notification_obj = ReceiverModel::find($id);
        //   $data=DB::table('user_account')->where('receiver_id',$id)->first();
        //   return view('/receiver');
           
        // }
       
    
     public function logout()
     {
      session()->forget('userId');
      session()->flush();
       return redirect('login');
     //  if(session::has('userId')){
     //    session::flush()
     //  }
     //     return redirect('login');
     // }
  
   
    
     public function index()
      {
        return view('donate');
      }

      function fetch(Request $request)
      {
        if($request->get('query'))
        {
          $query = $request->get('query');
          $data = DB::table('location')->where('place','LIKE', "%{$query}%")->get();
          return response($data);
        }
          return response("hi");
          
      }
      
       
          
}


