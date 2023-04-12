<?php   
 //create.php  
 $conn=mysqli_connect('localhost','root','','project') or die();  
 $msg="";  
 if (isset($_POST['insert'])) {  
      $CompanyName=$_POST['CompanyName'];  
      $CompanyEmail=$_POST['CompanyEmail'];  
      $Item=$_POST['Item'];
      $ExpDate=$_POST['ExpDate'];
      $Message=$_POST['Message'];  
      $query= "INSERT INTO `data_insert`(`CompanyName`, `CompanyEmail`, `Item`, `ExpDate`, `Message` ) VALUES ('$CompanyName','$CompanyEmail','$Item', '$ExpDate', '$Message')";  
      $data=mysqli_query($conn,$query);  
      if ($data) {  
           $msg="Your data inserted successfully";  
      }else{  
           $msg="Try after some time !";  
      }  
 }  
 ?>  
<!DOCTYPE html>  
 <html>  
 <head>  
      <meta charset="utf-8">  
      <title>rTracker Create Page</title>  
      <style type="text/css"> 
           *{  
                padding: 0;  
                margin: 0;  
                box-sizing: border-box;  
           }  
           body{  
                background: #5d6d7d;  
                width: 100%;  
                min-height: 100vh;  
                display: flex;  
                justify-content: center;  
                align-items: center;  
           }  
           .container{  
                width: 500px;  
                background: #fff;  
           }  
           .container form{  
                width: 100%;  
                padding: 30px;  
           }  
           .container form input{  
                width: 100%;  
                padding: 15px 10px;  
                outline: none;  
                margin: 10px 0;  
           }  
           .btn{  
                cursor: pointer;  
                background: #247AFD;  
                border: none;  
                padding: 10px 30px;  
                color: #fff;  
           }  
           h1{  
                display: block;  
                text-align: center;  
                padding-top: 20px;  
           }
           .button {
                display: inline-block;
                background-color: #247AFD;
                border: none;
                color: white;
                padding: 10px 20px;
                text-align: center;
                text-decoration: none;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
                font-family: Arial;
           }  

           @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
html,body{
  display: grid;
  height: 100%;
  place-items: center;
  text-align: center;
}
.container1{
  height: 350px;
  width: 430px;
  position: relative;
}
.container1 .wrapper{
  position: relative;
  height: 300px;
  width: 100%;
  border-radius: 10px;
  background: #fff;
  border: 2px dashed #c2cdda;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
}
.wrapper.active{
  border: none;
}
.wrapper .image{
  position: absolute;
  height: 100%;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
}
.wrapper img{
  height: 100%;
  width: 100%;
  object-fit: cover;
}
.wrapper .icon{
  font-size: 100px;
  color: #9658fe;
}
.wrapper .text{
  font-size: 20px;
  font-weight: 500;
  color: #5B5B7B;
}
.wrapper #cancel-btn i{
  position: absolute;
  font-size: 20px;
  right: 15px;
  top: 15px;
  color: #9658fe;
  cursor: pointer;
  display: none;
}
.wrapper.active:hover #cancel-btn i{
  display: block;
}
.wrapper #cancel-btn i:hover{
  color: #e74c3c;
}
.wrapper .file-name{
  position: absolute;
  bottom: 0px;
  width: 100%;
  padding: 8px 0;
  font-size: 18px;
  color: #fff;
  display: none;
  background: linear-gradient(135deg,#3a8ffe 0%,#9658fe 100%);
}
.wrapper.active:hover .file-name{
  display: block;
}
.container #custom-btn{
  margin-top: 30px;
  display: block;
  width: 100%;
  height: 50px;
  border: none;
  outline: none;
  border-radius: 25px;
  color: #fff;
  font-size: 18px;
  font-weight: 500;
  letter-spacing: 1px;
  text-transform: uppercase;
  cursor: pointer;
  background: linear-gradient(135deg,#3a8ffe 0%,#9658fe 100%);
}
      </style>  
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
 </head>  
 <body>  
 <div class="container">  
      <h1>Insert Receipt Data</h1>  
      <form method="post" action="create.php">  
           <input type="text" name="CompanyName" placeholder="Enter Company Name" required>  
           <input type="email" name="CompanyEmail" placeholder="Enter Company Email" required>  
           <input type="text" name="Item" placeholder="Enter Item" required>
           <input type="text" name="Message" placeholder="Enter Description" required>
           Enter Warranty Expiration date:
           <input type="date" name="ExpDate" placeholder="Enter Expiration Date" required>
           <div class="container1"><!---nepal code--->
         <div class="wrapper">
            <div class="image">
               <img src="" alt="">
            </div>
            <div class="content">
               <div class="icon">
                  <i class="fas fa-cloud-upload-alt"></i>
               </div>
               <div class="text">
                  No file chosen, yet!
               </div>
            </div>
            <div id="cancel-btn">
               <i class="fas fa-times"></i>
            </div>
            <div class="file-name">
               File name here
            </div>
         </div>
         <button onclick="defaultBtnActive()" id="custom-btn">Choose a file</button>
         <input id="default-btn" type="file" hidden>
      </div>
      <br/>
      <br/>
      <br/>
      <div class="container"> </div>
      <input type="submit" name="insert" value="Insert Data" class="btn" id="submitBtn">
      <a href="index.php" id="custom-btn" class="button">Home</a>
      <a href="view.php" id="custom-btn" class="button">View</a>
      <script>
         const wrapper = document.querySelector(".wrapper");
         const fileName = document.querySelector(".file-name");
         const defaultBtn = document.querySelector("#default-btn");
         const customBtn = document.querySelector("#custom-btn");
         const cancelBtn = document.querySelector("#cancel-btn i");
         const img = document.querySelector("img");
         let regExp = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_ ]+$/;
         function defaultBtnActive(){
           defaultBtn.click();
         }
         defaultBtn.addEventListener("change", function(){
           const file = this.files[0];
           if(file){
             const reader = new FileReader();
             reader.onload = function(){
               const result = reader.result;
               img.src = result;
               wrapper.classList.add("active");
             }
             cancelBtn.addEventListener("click", function(){
               img.src = "";
               wrapper.classList.remove("active");
             })
             reader.readAsDataURL(file);
           }
           if(this.value){
             let valueStore = this.value.match(regExp);
             fileName.textContent = valueStore;
           }
         });
      </script> <!--- end of nepal code--->
           <?php echo $msg = '';
           ?>  


      </form>  
 </div>  
 </body>  
 </html>

 </body>
 <!--- Send email to user and save what they input to the view.php file--->
 <script src="https://smtpjs.com/v3/smtp.js">
</script>
<script>
  var submitBtn = document.getElementById('submitBtn');
  submitBtn.addEventListener('click', function(e) {
    e.preventDefault();
    var companyName = document.getElementsByName('CompanyName')[0].value;
    var companyEmail = document.getElementsByName('CompanyEmail')[0].value;
    var item = document.getElementsByName('Item')[0].value;
    var expDate = document.getElementsByName('ExpDate')[0].value;
    var message = document.getElementsByName('Message')[0].value;

    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'create.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
      if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
        console.log(this.responseText);
      }
    };
    xhr.send('insert=true&CompanyName=' + companyName + '&CompanyEmail=' + companyEmail + '&Item=' + item + '&ExpDate=' + expDate + '&Message=' + message);

    var body = 'Company: ' + companyName + '<br/> Company email: ' + companyEmail + '<br/> Item: ' + item + '<br/> Warranty expiration date: ' + expDate + '<br/> Description: ' + message;

    Email.send({
      SecureToken: "cf3a0db1-54fa-4297-bc06-43bf634b6ddf",
      To: 'brad3229@gmail.com',
      From: "brad3229@gmail.com",
      Subject: item,
      Body: body
    }).then(
      message => alert(message)
    );
  });
</script>
 </html>
