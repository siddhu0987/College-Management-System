<html>
<head> <title> ENGINEERING INSTITUTE OF TECHNOLOGY </title>



<link rel="stylesheet" type="text/css" href="style1.css" >
</head>
<body bgcolor="turquoise">
<p align="center" style="font-size: 300%;">

<center><h1> COLLEGE DATABASE MANAGEMENT SYSTEM</h1></center>


</p>



<meta name="viewport" content="width=device-width, initial-scale=1.0" >



<ul>
    <li><a>Home</a></li>
    <li><a href="http://localhost/CollegeSite/programs.php">Programs</a>
        <ul>
            <li><a> Under Graduate</a>
                <ul>
                    <li><a>B.Tech in Civil Eng.</a></li>
                    <li><a>B.Tech in CSE</a></li>
                    <li><a>B.Tech in EEE</a></li>
                    <li><a>B.Tech in ECE</a></li>
                    <li><a>B.Tech in ME</a></li>    
                    <li><a>B.Tech in IT</a></li>
                </ul>
            </li>
            
            
            <li><a>Post Graduate</a>
            
                <ul>
                    <li><a>M.Tech in Civil Eng.</a></li>
                    <li><a>M.Tech in CSE</a></li>
                    <li><a>M.Tech in EEE</a></li>
                    <li><a>M.Tech in ECE</a></li>
                    <li><a>M.Tech in ME</a></li>    
                    <li><a>M.Tech in IT</a></li>  
                </ul>
            </li>
        </ul>
        
    <li><a href="http://localhost/CollegeSite/departments.php">Departments </a>
    
            <ul>
                    <li><a>Dept. of  Civil Eng.</a></li>
                    <li><a>Dept. of CSE</a></li>
                    <li><a>Dept. of EEE</a></li>
                    <li><a>Dept of ECE</a></li>
                    <li><a>Dept. of  ME</a></li> 
                    <li><a>Dept. of  IT Eng</a></li>
                    <li><a>Dept. of Phy</a></li>
                    <li><a>Dept. of Chem</a></li>
                    <li><a>Dept. of Maths</a></li>
                       
                
                </ul>
    </li>
    
    <li><a href="http://localhost/CollegeSite/notice.php">Notice</a>
        <ul>
            <li><a>News</a></li>
            <li><a>Events</a></li>
        </ul>
    </li>
    
    <li><a href="http://localhost/CollegeSite/aboutus.php">About Us</a></li>
    <li><a href="http://localhost/CollegeSite/contactus.php">Contact Us</a></li>

     <li><a href="http://localhost/CollegeSite/home.php">Login</a>
     </li>
    
</ul>


<IMG SRC="college1.jpg" width=100% height=70%></IMG>



<p align="center">
<font size="18px" >
NOTICE BOARD

</font>

<font size="5px" color="black" >
<br />
<br />
1.Result will be announced on XX-XX-201X
<br />
2.Application for Supplementary Examination May/June 2018
<br />
3.Publication of Grades - April/May 2018 Examination in
</font>

    
<p align="center">
<font size="18px" >
QUICK FACTS
</font>




<marquee bgcolor="black" scrollamount="5">
<font size="6px" color="white">
@ Ranked 10th amongst Top Engineering Colleges of Eminence
</marquee>
</div>
<marquee bgcolor="black" scrollamount="5" direction="right">
<font size="6px" color="white">
@ Top Engineering Colleges Ranked by State.
</marquee>

<marquee bgcolor="black" scrollamount="5">
<font size="6px" color="white">
@ Ranked 15th Among the Top 25 Engineering Colleges Ranked by Placement.
</marquee>

<marquee bgcolor="black" scrollamount="5" direction="right">
<font size="6px" color="white">
@ 100% placement record especially in CSE.
</marquee>

<marquee bgcolor="black" scrollamount="5">
<font size="6px" color="white">
@ Top Notch Alumni Network of ex students and faculties.
</marquee>




</font>


</p>




<br />
<br />
<br />

<div class="container">
  <div style="text-align:center">
    <h2>Contact Us</h2>
    <p>
    <font size="5px">
    Swing by for a cup of coffee, or leave us a message:
    </font></p>
  </div>
  <div class="row">
    <div class="column">
      <div id="map" style="width:100%;height:400px"></div>
    </div>
    <div class="column">
      <form action="http://localhost/project/project_php.php">
      <font size="5px">
      <h2><CENTER> COMMENT SECTION</CENTER></h2>
      <br />
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <label for="country">State</label>
        <select id="country" name="country">
          <option value="australia">Bihar</option>
          <option value="canada">Jharkhand</option>
          <option value="usa">West Bengal</option>
        </select>
        
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:35px"></textarea>
        <input type="reset" value="reset">
        </font>
      </form>
    </div>
  </div>
</div>
</div>
<!-- Initialize Google Maps -->
<script>
function myMap() {
  var myCenter = new google.maps.LatLng(25.608220,85.078553);
  var mapCanvas = document.getElementById("map");
  var mapOptions = {center: myCenter, zoom: 12};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position:myCenter});
  marker.setMap(map);
}
</script>







<script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>


<hr >

<!-- Add icon library -->

<label align='center'><h1>Follow Us On</h1></label>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Add font awesome icons -->
<p align="center"> 
<a href="http://facebok.com" class="fa fa-facebook"></a>
<a href="http://twitter.com" class="fa fa-twitter"></a>
<a href="http://instagram.com" class="fa fa-instagram"></a>
</p>


<br />
<br />
<br />





</body>
</html>

