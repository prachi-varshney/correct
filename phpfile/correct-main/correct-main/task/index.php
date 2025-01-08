
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <style>
        .form-container {
            max-width: 100%;
            margin-left: 4%;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: rgb(255, 255, 255);
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        
    </style>

</head>

<body>
    <div class="form-container">
<h2>REGISTRATION FORM</h2>


        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">


            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                    type="button" role="tab" aria-controls="nav-profile" aria-selected="false">TABLE</button>

                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                    type="button" role="tab" aria-controls="nav-home" aria-selected="true">FORM</button>
                
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">


            <form id="registrationForm" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"  onsubmit="return validateForm()">
            <!-- Row 1 -->
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="Name">Name</label>
                    
                    <!-- <input type="text" class="form-control" id="name" placeholder=" Name" required> -->
                    <input type="text" class="form-control" id="name" value="<?php echo $_POST['name'] ?? ''; ?>" name="name" placeholder="Name" required>
                   
                    <span id="nameError" style="color: red;"></span>
                
                </div>
               
                <div class="form-group col-md-4">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Email">
                    <span id="mailError" style="color: red;"></span>
                    <!-- <span id="nameError" style="color: red;"><?php echo $nameError; ?></span> -->
                </div>

                <div class="form-group col-md-4">
                    <label for="password">password</label>
                    <input type="password" class="form-control" id="password" >
                    <span id="passwordError" style="color: red;"></span>
                </div>
            </div>

            <!-- Row 2 -->
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="phone">Phone Number</label>
                    <input type="number" class="form-control" id="phone" placeholder="Phone Number">
                    <span id="phoneError" style="color: red;"></span>                
                </div>
                <div class="form-group col-md-4">
                    <label for="dob">Date of Birth</label>
                    <input type="date" class="form-control" id="dob" >
                    <span id="dobError" style="color: red;"></span>
                
                </div>
                <div class="form-group col-md-4">
                    <label for="gender">Gender</label>
                    <div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="Male">
                            <label class="form-check-label" for="male">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="Female">
                            <label class="form-check-label" for="female">Female</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="other" value="Other" onclick="showOtherr()">
                            <label class="form-check-label" for="other">Other</label>
                        </div>
                        <span id="genderError" style="color: red;"></span>
                    </div>
                </div>
                <div id="test" style="display:none">   
                <input class="form-check-input" type="text" name="other" id="ot" value="Other">
                </div>
            </div>

            <!-- Row 3 -->
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="language">Language</label>
                    <div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="language" id="hindi" value="Hindi">
                            <label class="form-check-label" for="hindi">Hindi</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="language" id="english"
                                value="English">
                            <label class="form-check-label" for="english">English</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="language" id="otherLanguage"
                                value="Other">
                            <label class="form-check-label" for="otherLanguage">Other</label>
                        </div>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="country">Country</label>
                    <select id="country" class="form-control">
                        <option selected>Select</option>

                    </select>   
                </div>
                <div class="form-group col-md-4">
                    <label for="state">State</label>
                    <select id="state" class="form-control">
    
                    </select>
                </div>
            </div> <!-- Closing the previous row -->

            <!-- Row 4 -->
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="district">District</label>
                    <input type="text" class="form-control" id="district" placeholder="District">
                </div>
                <div class="form-group col-md-4">
                    <label for="pincode">Pincode</label>
                    <input type="text" class="form-control" id="pincode" placeholder="Pincode">
                    <span id="pincodeError" style="color: red;"></span>
                </div>
                <div class="form-group col-md-4">
                    <label for="experience">Experience</label>
                    <input type="text" class="form-control" id="experience" placeholder="Experience in years">
                </div>
            </div>
            <!-- ROW 5 -->

            <div class="row">
                <div class="form-group col-md-4">
                    <label for="salary">Salary</label>
                    <input type="text" class="form-control" id="salary" placeholder="Salary">
                </div>
                <div class="form-group col-md-4">
                    <label for="bio">Bio</label>
                    <textarea class="form-control" id="bio" placeholder="Enter bio"></textarea>
                </div>
                <div class="form-group col-md-4">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" id="image">
                </div>
            </div>

            <!-- Submit Button -->
            <div class="form-row">
                <div class="form-group col-md-12" required>
                    <button type="button" class="btn btn-primary" onclick="validateForm()">Submit</button>
                </div>
            </div>
        </form>

            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <table class="table table-responsive">
               <thead>
                   <tr>
                   <th>ID</th>
                   <th>Name</th>
                   <th>DOB</th>
               </tr>

               </thead>
               <tbody id="dataList">

               </tbody>
                </table>

            </div>

        </div>





        

        
    </div>

 <script src="script.js"></script>

</body>

</html>