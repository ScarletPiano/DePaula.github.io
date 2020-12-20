<?php
    include '../../../dbConn.php';
    include 'validations.php';

    //sanitizing data
        function sanitize($str, $length=255){
            $str = trim($str);
            $str = htmlentities($str, ENT_QUOTES);
            return substr($str,0,$length);
        }
                
           
// retrieves and stores name and comment   
    if ($mysqli){
        if( !empty($_GET['userName']) && !empty($_GET['comment'])){
            $name = sanitize($_GET['userName'], 30);
            $com = sanitize($_GET['comment']);
            
            $stmt=$mysqli->prepare("insert into comments (userName, comment) values (?, ?)");
            $stmt->bind_param("ss",$name,$com);
            $stmt->execute();
            $stmt->close();
        }
        
        //Retrieve and return name and comment
        $result=$mysqli->query('select userName, comment from comments');
        if ($result){
            while($rowHolder = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $records[] = $rowHolder;
            }
        }
        //email portion
        if(!empty($_GET['email']) && !empty($_GET['content'])){
            $email = $_GET['email'];
            $con = sanitize($_GET['content']);
            $email = filter_var($email, FILTER_SANITIZE_EMAIL);
            if(!filter_var($email, FILTER_VALIDATE_EMAIL) === false){
                echo("$email is vaild, we'll get back to you soon!");
                $stmt=$mysqli->prepare("insert into emails (email, content) values (?, ?)");
                $stmt->bind_param("ss",$email,$con);
                $stmt->execute();
                $stmt->close();
            }else{
                echo("Sorry, $email isn't a valid email.");
            }
        }
    }

    $title = "Comments";
    $page = "com";
    include 'header.php';
?>
<main>
<div class="text">
    <div class="wrapper">
        <h1 class="bannerC">Comments</h1>
        <div class="comStuff">
            <div class="os">
                <p>Other users have said...</p>
            </div>
            <ul>
                <?php
                    foreach($records as $this_row){
                        echo '<li>'.$this_row['userName'].": ".$this_row['comment'].'</li>';
                    }
                ?>
            </ul>
        </div>
        <div class="input">
        <p> Please, let others know what you thought of your visit!</p>
        <form action="comments.php" method="get" id="comForm" name='comForm'>
            Username: <input type="text" id="user" size="30" name="userName"/><br/>
            Comment:  <input type="text" id="com" size="31" name="comment" /><br/>
            <div class="clearfix">
                <input type="submit" class="buttons" onclick="submitForm()" value="Submit"/>
                <input type="reset" class="buttons" value="Reset Form" />
            </div>
            <br/><br/>
        </form>
        <p>If you would like to get in contact with the creator of this site, add your email:</p>
        <form action="comments.php" method="get" id="emForm" name='emForm'>
            Email: <input type="text" id="em" size="30" name="email"/><br/>
            Content: <input type="text" id="con" size="30" name="content" /><br/>
            <input type="submit" class="buttons" onclick="submitForm2()" value="Submit"/>
            <input type="reset" class="buttons" value="Reset Form" />
        </form>
        </div>
    </div>
</div>   
</main>
<?php 
    include 'footer.php';
?>