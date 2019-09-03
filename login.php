<html><head></head><body></body>
<?php 
function createSession()
{
    //Validate User
    include_once('credentials.php');
    @mysql_connect(HOST,USER,PASSWORD) or die(mysql_error());
    @mysql_select_db('portal') or die(mysql_error());
    $row=@mysql_query("select * from reg where uname='".$_POST['uname']."' and pwd='".$_POST['pwd']."';") or die(mysql_error());
    
    if(mysql_affected_rows()>0)
    {
        session_start();
        $row=mysql_fetch_assoc($row);
        $_SESSION['uname']=$_POST['uname'];
        $_SESSION['name']=$row['name'];
        $_SESSION['id']=$row['id'];
        $_SESSION['phno']=$row['phno'];
        $_SESSION['category']=$row['category'];
        print("<h1>Session Created. You are a ".$row['category']."</h1>");
    }
    else
        header("location:http://localhost/RCPL/portal/login.php");
}
createSession();
if(isset($_SESSION['uname']))
{
        @mysql_connect(HOST,USER,PASSWORD) or die("Connection not  established");
        mysql_select_db("portal");
        $values=mysql_query("select * from reg where category='".$_SESSION['category']."';");
        echo("<table cellpadding='10px' align='center'><th>ID</th><th>NAME</th><th>GENDER</th><th>CATEGORY</th><th>DOB</th><th>CONTACT NO</th><th>E-MAIL</th><th>Edit</th><th>Delete</th>");
        while($row=mysql_fetch_assoc($values))
        {
            echo("<tr>");
            echo("<td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['gender']."</td><td>".$row['category']."</td><td>".$row['dob']."</td><td>".$row['phno']."</td><td>".$row['eid']."</td><td><a href='http://localhost/RCPL/portal/registrationForm.php?id=".$row['id']."' target='_blank'>Edit</a></td><td><a href='http://localhost/RCPL/portal/delete.php?id=".$row['id']."' target='_blank'>Delete</a></td>");
            echo("</tr>");
        }
        echo("</table>");
}
?> </html><?php
