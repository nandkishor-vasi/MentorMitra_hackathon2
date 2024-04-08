 <!-- <?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: login.php");
   }
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="home.css">
    <script>
        function toggleChatBox() {
            var box = document.getElementById("chat");
            box.classList.toggle("hidden");
        }
            </script>
</head>
<body>
    <div class="nav">
        <div class="logo">
            <img src="Final Logo.png" width="28px" height="34px">
            <p><a href="home.php">MentorMitra</a></p>
        </div>
        <div class="right-links">
            
            
          <?php 
            
            $id = $_SESSION['id'];
            $query = mysqli_query($con,"SELECT*FROM users WHERE Id=$id");

            while($result = mysqli_fetch_assoc($query)){
                $res_Uname = $result['Username'];
                $res_Email = $result['Email'];
                $res_Age = $result['Age'];
                $res_id = $result['Id'];
            }
            
            echo "<a href='edit.php?Id=$res_id' class='smooth-underline' >Change Profile</a>";
            ?> 
                <div>
                    <a style="text-decoration:none" href="course.php" class="smooth-underline">My Courses</a>
                </div>
                <!-- <div>
                    <a href="edit.php" class="smooth-underline">Change Profile</a>
                </div> -->
                
                <div class="user_logo">
                    <i class="fa-solid fa-user"></i>
                </div>
                <div>
                <button class="btn"><a style="cursor: pointer;" href="php/logout.php">Log Out</a></button>
                </div>
        </div>
    </div>
    
    <div class="main">
    <main>
        <div class="main-box">
            <div class="top">
                    <p>Hello <b><?php echo $res_Uname ?></b>, Welcome</p>
                    <p>Your email is <b><?php echo $res_Email ?></b>.</p>
                   <p>And you are <b><?php echo $res_Age ?> years old</b></p>
            </div>
        </div>
    </main>
    <div class="parallax-container">
        <div class="parallax" style="background-image: url(Image\ of\ mentor.jpg)">
        </div>
        </div>    
    </div>
    <button onclick="toggleChatBox()"><img src="https://e7.pngegg.com/pngimages/922/800/png-clipart-computer-icons-font-awesome-symbol-symbol-miscellaneous-online-chat.png" alt="chat" class="chat">   </button>
    <section class="hero">
        <h2>Welcome to our Virtual Mentorship Program</h2>
        <p>Connect with experienced mentors and accelerate your personal and professional growth.</p>
        <a style="gap: 6px; background-color: azure; border-radius: 0.5rem;width: 7rem; position: absolute; left:45.5%;top: 50.5rem;" href="#id2">Meet Mentors</a>
    </section>
<div id="courses">hi</div>
<br>
<br>
<br>
    <div class="flex justify-center heading">
        <h2 class="flex justify-center">Our Courses</h2>
    </div>
    
<div onclick="location.href='course.php'" style="cursor: pointer;" class="courses flex space-even">
    <div class="box"><img src="https://ananda.ai/wp-content/uploads/2021/12/vlog-44-1024x536.jpg" alt=""></div>
    <div class="box"><img src="https://ananda.ai/wp-content/uploads/2021/12/vlog-44-1024x536.jpg" alt=""></div>
    <div class="box"><img src="https://ananda.ai/wp-content/uploads/2021/12/vlog-44-1024x536.jpg" alt=""></div>
    <div class="box"><img src="https://ananda.ai/wp-content/uploads/2021/12/vlog-44-1024x536.jpg" alt=""></div>
</div>
<div class="names">
    <div class="tag">
        <p>Psychology</p>
    </div>
    <div class="tag">
        <p>Data</p>
    </div>
    <div class="tag">
        <p>Business & Marketing</p>
    </div>
    <div class="tag">
        <p>Share Market & Stocks</p>
    </div>
</div>
<div class="after flex justify-center item-center"><button class="next-page flex justify-center "
    onclick="window.location.href=`course.php`">View More</button>
</div>
<div id="id2">hi</div>
<br>
<div class="meet">
    <p
        style="color: white;font-size: 2.2rem;margin-left: 26%;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
        Meet our most demanding "Mentors"</p>
</div>
    <div class="container">
        <div  class="box">
            <img src="https://pwonlyias.com/wp-content/uploads/2024/04/unnamed-29-660ea2c2457a1.webp" alt="">
            <div class="info">
                <h3>Daniel Kahneman</h3>
                <p>Specialty: Psychology</p>
                <p>Experience: 30+ years</p>
            </div>            
        </div>
        <div class="box">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRdsicCwWjzt28QlbulVlUrjLtd5vNeOV-R0OxO8T2SOg&s" alt="">
            <div class="info">
                <h3>Anita Borg</h3>
                <p>Specialty: Web Development</p>
                <p>Experience: 10+ years</p>
            </div>
        </div>
        <div id="id3" class="box">
            <img src="https://www.kenan-flagler.unc.edu/wp-content/uploads/1970/01/Cropped_KristopherKeller_2.jpg" alt="">
            <div class="info">
                <h3>Kristopher Keller</h3>
                <p>Specialty: Business & Marketing</p>
                <p>Experience: 15+ years</p>
            </div>
        </div>
        <div id="id4" class="box">
            <img src="https://images.yourstory.com/cs/images/undefined/ManishGoelFounder-DirectorResearchRanking-1618217791593.png" alt="">
            <div class="info">
                <h3>Manish Goel</h3>
                <p>Specialty: Share Market & Stocks</p>
                <p>Experience: 15+ years</p>
            </div>
        </div>
    </div><section class="features" id="features">
        <h2 style="color: white;">Our Features</h2>
        <div class="feature-box">
            <h3>Expert Mentors</h3>
            <p>Connect with industry experts and leaders in various fields.</p>
        </div>
        <div class="feature-box">
            <h3>Flexible Scheduling</h3>
            <p>Schedule mentorship sessions at your convenience.</p>
        </div>
        <div class="feature-box">
            <h3>Personalized Guidance</h3>
            <p>Receive personalized guidance tailored to your goals and aspirations.</p>
        </div>
    </section>
    <section class="testimonials" id="feedbacks">
        <h2>What Our Mentees Say</h2>
        <div class="testimonial-box">
            <p>"The mentorship program helped me gain valuable insights and guidance that propelled my career forward. Highly recommended!"</p>
            <cite>- John Doe</cite>
        </div>
        <div class="testimonial-box">
            <p>"I was amazed by the depth of knowledge and support provided by my mentor. It truly made a difference in my professional journey."</p>
            <cite>- Jane Smith</cite>
        </div>
    </section>
    <div class="chat-container" id="chat"><a onclick="toggleChatBox()"><i class="fa-solid fa-xmark close"></i></a>
        <div class="chat-box" id="chat-box">
            
            <div class="chat-bot">Welcome! How can I assist you today?</div>
        </div>
        <input type="text" id="user-input" placeholder="Type your message...">
        <button onclick="sendUserMessage()">Send</button>
    </div>
    <footer>
        <div  class="foot-panel1">
          <a href="#" style="text-decoration: none;color: black;">Back to Top</a>
        </div>
        <div class="foot-panel2">
          <ul>
            <p>Get to Know Us</p>
            <a>Careers</a>
            <a>Blog</a>  
            <a>About Amazon</a>
          </ul>
          <ul>
            <p>Get to Know Us</p>
            <a>Careers</a>
            <a>Blog</a>  
          </ul><ul>
            <p>Get to Know Us</p>
            <a>Careers</a>
            <a>Blog</a>  
          </ul><ul>
            <p>Get to Know Us</p>
            <a>Careers</a>
            <a>Blog</a>  
          </ul>
        </div>
        <div class="foot-panel4">
          <div class="pages">
            <a>Conditions of use</a>
            <a>Privacy Notice</a>
            <a>Your Ads Privacy Choices</a>
          </div>
          <div class="copyright">
            © 1996-2023, Amazon.com, Inc. or its affiliates
          </div>
        </div>
      </footer>
      <script src="home.js"></script>
</body>
</html>