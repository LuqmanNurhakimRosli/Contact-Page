
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgba(175, 172, 245, 0.8);
        }
        .container{
            max-width: 600px;
            width: 100%;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(50, 44, 241, 0.8);
            border-radius: 10px;
            
            

        }
    </style>
</head>
<body>
     
    <div class="container mt-2">
        
        <div class="row">
            
            <div class="col-md-12">
                <h2>BRO I WANT YOUR FEEDBACK</h2>
             

             
             <form action="store-contact-us.php" method="post">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control" required="">
                </div>

                
                <form action="store-contact-us.php" method="post">
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control" required="">
                </div>

                
                <form action="store-contact-us.php" method="post">
                <div class="form-group">
                    <label for="">Message</label>
                    <input type="text" name="message" class="form-control" required="">
                </div>

                
                <input type="submit" class="btn btn-primary" name="submit" value="submit">

             </form>

             </div>
        </div>

    </div>
</body>
</html>