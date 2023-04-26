<?php   
 $conn=mysqli_connect("localhost","root","","project"); //database connection  
 //hostname, username, password, database name  
 if ($conn) {  
      echo "Connection successfully";  
 }else{  
      echo "Error";  
 }  
 //check database connect or not  
 $query="select * from data_insert";  
 $connect=mysqli_query($conn,$query);  
 $num=mysqli_num_rows($connect); //check in database any data have or not  
 ?>  
 <!DOCTYPE html>  
 <html>  
 <head>  
      <meta charset="utf-8">  
      <title>How to Select Data from Database in PHP & Display in Table Format</title>  
      <style type="text/css">  
           *{  
                padding: 0;  
                margin: 0;  
                box-sizing: border-box;  
           }  
           body{  
                width: 100%;  
                min-height: 100vh;  
                background-color: #5d6d7d;  
           }  
           .container{  
                max-width: 900px;  
                margin: 100px auto;  
                width: 100%;  
           }  
           table{  
                border-collapse: collapse;  
                width: 100%;  
           }  
           table th{  
                background-color: #247AFD;  
                color: #fff;  
                padding: 10px;  
                font-family: Arial;
           }  
           table td{  
                padding: 12px;  
                color: #fff;  
                font-size: 1em;  
                text-align: center;  
                font-family: Arial;
           }  
           table tr:nth-child(odd){  
                background-color: #797676;  
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
  width: 30%;
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
 </head>  
 <body>  
 <div class="container">  
      <table border="1">  
           <tr>  
                <th>ID</th>  
                <th>CompanyName</th>  
                <th>CompanyEmail</th>  
                <th>Item</th>  
                <th>ExpDate</th>
                <th>Description</th>
                <th>Image</th>
           </tr>  
           <?php   
                if ($num>0) {  
                     while($data=mysqli_fetch_assoc($connect)){  
                          echo "  
                               <tr>  
                               <td>".$data['id']."</td>  
                               <td>".$data['CompanyName']."</td>  
                               <td>".$data['CompanyEmail']."</td>  
                               <td>".$data['Item']."</td> 
                               <td>".$data['ExpDate']."</td>
                               <td>".$data['Message']."</td>
                               <td>".$data['image']."</td>
                               </tr>  
                          ";  
                     }  
                }  
           ?>  
      </table>  
      <a href="index.php" id="custom-btn" class="button">Home</a>
      <a href="create.php" id="custom-btn" class="button">Create</a>
 </div>  
 </body>  
 </html>
