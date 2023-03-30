<!DOCTYPE html>
<html>
 <head>
<meta charset="UTF-8">
<title> rTracker Create </title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
 <body>
    <h1>Please upload a copy of your reciept</h1>
    <div class="image-preview-container">
        <div class="preview">
            <img id="preview-selected-image" />
        </div>
        <label for="file-upload">Upload Image</label>
        <input type="file" id="file-upload" accept="image/*" onchange="previewImage(event);" />
        <br>
 
</form>
</div>
    
    <div class = "form">
        <form method="post">
            <input type="text" placeholder="Name of company" id="name" autocomplete="off">
            <input type="email" placeholder="Company email" id="email" autocomplete="off">
            <input type="text" placeholder="Item" id="subject" autocomplete="off">
            <input type="date" placeholder="ExpDate" id="date" autocomplete="off">
            <textarea id="message" placeholder="Description..." cols="30" rows="10"></textarea>
            <button id="btn">Submit</button>
        </form>
        
<script>
 
const previewImage = (event) => {

    const imageFiles = event.target.files;  
    const imageFilesLength = imageFiles.length;
    
    if (imageFilesLength > 0) {
        const imageSrc = URL.createObjectURL(imageFiles[0]);       
        const imagePreviewElement = document.querySelector("#preview-selected-image");      
        imagePreviewElement.src = imageSrc;
        imagePreviewElement.style.display = "block";
    }
};
</script>

 </body>
 <script src="https://smtpjs.com/v3/smtp.js">
</script>
 <script>
    var btn = document.getElementById('btn');
    btn.addEventListener('click',function(e){
        e.preventDefault()
        var name = document.getElementById('name').value;
        var email = document.getElementById('email').value;
        var subject = document.getElementById('subject').value;
        var date = document.getElementById('date').value;
        var message = document.getElementById('message').value;
        var body = 'Company: ' +name + '<br/> Company email: ' + email + '<br/> Item: ' +subject + '<br/> Warrenty expiration date: ' + date + '<br/> Description: '+ message;


        Email.send({
    SecureToken : "cf3a0db1-54fa-4297-bc06-43bf634b6ddf",
    To : 'brad3229@gmail.com',
    From : "brad3229@gmail.com",
    Subject : subject,
    Body : body
}).then(
  message => alert(message)
);
}).then(
  message => alert(message)
);

 </script>
 </html>