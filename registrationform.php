<html>
    <head>
        <title>
            <?php echo((isset($_GET['id']) and !isset($_GET['uname']))?"Edit":"Registration Form"); ?>
        </title>
    </head>
    
    <body BGCOLOR="LIGHTCORUM">
        <label align='center'><h1>Registration Form</h1></label>
        <form method="get">
        <table style="width:60%" align="center">
            <tr >
                <td ><label>ID : </label></td>
                <td align='center'><input type= "number" maxlength="7" min="1400000" required="true" id="id" name="id" value="<?php 
                $row=0;
                if(isset($_GET['id']))
                {
                    echo($_GET['id']);
                    getDetails();
                } ?>"/></td>
                <hr />
            </tr>
            
            <tr>
                <td >Name : </td>
                <td  align='center'><input type= "text" id="name" name="name" required="true" value="<?php 
                if(isset($_GET['id']))
                {echo($row['name']);
                    
                } ?>"/></td>
            </tr>
            <tr>
                <td >Category : </td>
                <td align="center"><select id="category" name="category"  value="<?php 
                if(isset($_GET['id']))
                {
                    echo($row['category']);
                    
                } ?>"><option>Student</option><option>Teacher</option></select></td>
            </tr>
            <tr>
                <td >Gender : </td>
                <td align="center"><input type="radio" id="gender" name="gender" value="Male" checked="<?php 
                if(isset($_GET['id']))
                {
                    if($row['gender']=='Male')
                        echo "true";
                    else echo"false";
                }
                 ?>">Male</input>  or  <input type="radio" id="gender" name="gender" value="Female" <?php 
                if(isset($_GET['id']))
                {
                    if($row['gender']=='Female')
                        echo "checked";
                }
                 ?> >Female</input></td>
                
            </tr>
            <tr>
                <td >DOB : </td>
                <td align="center"><input type="date"  id="dob" name="dob value="<?php 
                if(isset($_GET['id']))
                {
                    $d=strtotime($row['dob']);
                    echo(date('d-m-Y',$d));
                    
                } ?>" /></td>
                
            </tr>
            
            
            <tr>
                <td >Contact No. : </td>
                <td align='center'><input type= "tel" id="phone_no" name="phno" required="true" value="<?php 
                if(isset($_GET['id']))
                {
                    echo($row['phno']);
                    
                } ?>"/></td>
            </tr>
            <tr>
                <td >Email : </td>
                <td align='center'><input type= "text" id="email_id" name="eid" required="true" value="<?php 
                if(isset($_GET['id']))
                {
                    echo($row['eid']);
                    
                } ?>"/></td>
            </tr>
            <tr>
                <td >Username : </td>
                <td  align='center'><input type= "text" id="username" name="uname" required="true"  value="<?php 
                if(isset($_GET['id']))
                {
                    echo($row['uname']);
                    
                } ?>"/></td>
            </tr>
            <hr />
            <tr>
                <td >Password : </td>
                <td  align='center'><input type="password" id="password" name="pwd" required="true"  value="<?php 
                if(isset($_GET['id']))
                {
                    echo($row['pwd']);
                    
                } ?>"/></td>
            </tr>
            <tr>
                <td >Confirm Password : </td>
                <td  align='center'><input type= "password" id="cnf_pwd" name="cpwd" required="true"/></td>
            </tr>
            
        </table>
        <table align="center" style="width: 30%;">
            <tr>
            <td><input type="submit" id="register" name="sbmt" ></input></td>
            <td><input type="reset"/></td>
            </tr>
        </table>
        </form>
        <?php
        /*
        Roll -> id
        Name -> name
        category -> category
        Gender -> gender
        Date of birth -> dob
        Contact No -> phno
        Email Id -> eid
        Username -> uname
        Password -> pwd
        */
        if(isset($_GET['sbmt']))
            registerData();
        function registerData()
        {
            include_once('credentials.php');
            
            @mysql_connect(HOST,USER,PASSWORD) or die("Connection not established!!!");
            $db=@mysql_select_db(DBNAME) or die("Database not Found");
            @mysql_query("insert into reg(id,name,category,gender,dob,phno,eid,uname,pwd) values("
                .$_GET['id'].",'".$_GET['name']."','"
                .$_GET['category']."','".$_GET['gender']."','".$_GET['dob']."',".$_GET['phno'].
                ",'".$_GET['eid']."','".$_GET['uname']."','".$_GET['pwd']."');") or die(mysql_error());
            
            if(mysql_affected_rows()>0)
                echo("Data Inserted");
            
        }
        function getDetails()
        {
                    global $row;
                    include_once('credentials.php');
                    @mysql_connect(HOST,USER,PASSWORD) or die("Connection not established");
                    mysql_select_db('portal');
                    $row=mysql_fetch_assoc(mysql_query("select * from reg where id=".$_GET['id'].";"));
        }
        ?>
        
    </body>
    
</html>