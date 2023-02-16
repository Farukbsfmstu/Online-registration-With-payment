<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BSFMSTU</title>
    <!-- font awsome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
   <body  style="background-image:url(Image/p2.jpg); background-repeat: no-repeat; background-position: 100% 100%;background-size: cover;">
    <!--start main part of form -->
 
    <!-- NAVBAR END -->
 <div class="container shadow-lg mb-5 bg-light">
    <div class="row p-5">
    	
    		
    	
      <h1 class="fs-4 fw-bold my-3 text-primary text-center">Student Registration Form </h1>
       <div class="col-md-12">
        <form method="post" action="{{ route('Form_fillup')}}">
          @csrf
           <div class="col-md-12 sm-12">
            <label for="" class="my-2"><span class="fw-bolder">Student Name:</span>  <br>
                <input  type="string" id="Student_name" name="Student_name" placeholder="Enter Your Fast Name" class="py-2 px-3 border-0 rounded-2 mb-2">
                <!-- <span class="text-muted">Your First Name</span> -->
                <input  type="string" id="Middle_name" name="Middle_name" placeholder="Enter Your Middle Name" class="py-2 px-3 border-0 rounded-2 mb-2">
                <input type="string" id="Last_name" name="Last_name" placeholder="Enter Your Last Name" class="py-2 px-3 border-0 rounded-2"><br>
            </label><br> 
           </div>
           <div class="col-md-12">
            <label for="" class="my-2">Father Name:  <input type="string"  id="Father_name" name="Father_name" placeholder="Enter Your Father Name" class="py-2 px-3 border-0 rounded-2">
            </label> 
           </div>
            <div class="col-md-12">
                <label for="" class="my-2">Mother Name:  <input  type="string" id="Mother_name" name="Mother_name" placeholder="Enter Your Mother Name" class="py-2 px-3 border-0 rounded-2">
                </label>
            </div>
           <div class="col-md-12">
            <label for="id" class="my-2">Student ID:  <input type="string" id="ID_Number" name="ID_Number" placeholder="Enter Your ID" class="py-2 px-3 border-0 rounded-2">
            </label> 
            <label for="type">Student Type:</label>
            <select name="Student_Type" id="Student_Type" class="py-2 px-3 border-0 rounded-2 mb-2">
                <option value="Regular">Regular</option>
                <option value="Irregular">Irregular</option>
            </select>
           </div>
           <!-- add new code and correction start-->
           <!-- birthday form star -->
           <div class="row">
            <div class="col-md-12">
            <fieldset>
                    <label class="" >Birthday</label>
                     <label class="month"> 
                     <select class="select-style py-2 px-4 border-0 mb-1" id="BirthMonth" name="BirthMonth" >
                     <option value="" class="">Month</option>
                     <option  value="01">January</option>
                     <option value="02">February</option>
                     <option value="03" >March</option>
                     <option value="04">April</option>
                     <option value="05">May</option>
                     <option value="06">June</option>
                     <option value="07">July</option>
                     <option value="08">August</option>
                     <option value="09">September</option>
                     <option value="10">October</option>
                     <option value="11">November</option>
                     <option value="12" >December</option>
                     </label>
                    </select>    
                   <label>Day<input class="birthday py-2 px-2 border-0 w-25 mx-1" maxlength="2" id="BirthDay" name="BirthDay"  placeholder="Day" required=""></label>
                   <label class="year">Year <input class="birthyear py-2 px-2 border-0 w-50" maxlength="4" id="BirthYear" name="BirthYear" placeholder="Year" required=""></label>
                 </fieldset>
            </div>
           </div>
           <!-- birthaday form end -->
           <div class="row my-2">
            <div class="col-md-6">
                <p>Gender:</p>
                <select class="select-style py-2 px-4 border-0 mb-1" id="male" name="Gender"> 
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                
                </div>
                          <div class="row mt-3">
            <div class="col-md-6 col-sm-12">
                <label for="picture">Picture: 
                    <input type="string" name="choose_file" id="choose_file" class="py-2 px-3 border-0 rounded-2"  value="picture">
                </label>
               </div>
                <div class="col-md-6">
                    <label for="Religion">Religion</label>
                    <select name="Religion" id="Religion" class="py-2 px-3 border-0 rounded-2">
                        <option value="Islam">Islam</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Buddis">Buddis</option>
                        <option value="Kristan">Kristan</option>
                    </select>
                </div>
           </div>
             <!-- add new code and correction end-->
           </div>
            <div class="col-md-12">
                <label for="type" >Department:</label>
            <select name="Department" id="type" class="py-2 px-3 border-0 rounded-2">
                <option value="CSE">CSE</option>
                <option value="EEE">EEE</option>
                <option value="MATH">MATH</option>
                <option value="Fisheries">Fisheries</option>
                <option value="Social Work">Social Work</option>
                <option value="Management">Management</option>
            </select>
            <label for="id" class="my-2">Contact number:  <input type="string" id="Phone_no" name="Phone_no" placeholder="Enter Your Phone number" class="py-2 px-3 border-0 rounded-2 ">
            </label>
            </div>
               <div class="row">
                <div class="col-md-6 col-sm-12">
                    <label for=""> Present Address: <br>
                        <textarea name=" Present_Address" id="Present_Address" ></textarea>
                    </label> 
                   </div>
                   <div class="col-md-6 col-sm-12">
                    <label for=""> Permanent Address: <br>
                        <textarea name="Permanent_Address" id="Permanent_Address"></textarea>
                    </label>
                   </div>
               </div>

            <div class="col-md-6 col-sm-12">
                <!-- <label for="picture" class="mb-3">Payment Method: 
                    <span class="common-button"><button  class="py-1 px-3 border-0 rounded-2 bg-danger text-light fs-5 fw-bolder my-1 me-3">Bkash</button> 
                    </span>
                   <span class="common-button">
                    <button class="py-1 px-3 border-0 rounded-2 bg-success text-light fs-5 fw-bolder my-1">Nogod</button>
                   </span>
                </label> -->
               </div>
          </div>
        <!--    <div class="col-md-12">
            <span class="link-button">
                <input type="button" value="Submit" name="Submit" id="Submit" class="py-1 px-3 border-0 rounded-2 bg-dark text-light fs-5 fw-bolder text-center d-block m-auto">
            </span>
           </div> -->
           <div class="col-md-12">
            <span class="">
               <!-- <a href="payement.html" target="_blank" > -->
                <input type="submit" value="Next" class="py-1 px-3 border-0 rounded-2 bg-dark text-light fs-5 fw-bolder text-center next-button">
               </a> <i class="fa-sharp fa-solid fa-arrow-right"></i>
            </span>
           </div>
        </form>
       </div>
    </div>
 </div>
 <script src="js/bootstrap.min.js"></script>
</body>
</html>