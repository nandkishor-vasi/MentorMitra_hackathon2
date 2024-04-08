
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <link rel="stylesheet" href="course.css">
</head>
<body>
    <div class="sidebar">
        <ul>
            <li><a href="login.php">My Cart</a></li>
            <li><a href="#psychology">Psychology</a></li>
            <li><a href="#data">Data</a></li>
            <li><a href="#Business and Marketing">Business and Marketing</a></li>
            <li><a href="#Stock-Market">Stock-market</a></li>
        </ul>
    </div>
        
        <div class="content">
            <!--courses no. 1!!-->
            <div class="parallax-container" id="psychology"></div>
            <div class="grid">
                <h2 style="color: black;">Psychology Courses</h2>
                <div class="course">
                    <form action="" method="">
                    <div class="course-container">
                        <div class="course-item" data-course="Psychology Course 1">
                                    <div style="display: block;">
                                       <div style="display: flex;">
                                           <div class="image-container">
                                               <img src="courseImg/physcology1.jpg" alt="Psychology Course 1">
                                            </div>
                                            <div class="detail">
                                                <h3>Introduction to Psychology</h3>
                                                <p>In this course Students are introduced to the fundamental principles of psychology, including its history, major theories, and research methods.</p>
                                                <button class="more-info" ><a style="color:white; text-decoration:none;" href="login.php">More-info</a></button> 
                                            </div>
                                        </div> 
                                    <div class="more-details">                                
                                        <ol>Detatils: delve into various topics that explore the complexities of human thought, emotion, and behavior.</ol>
                                        <ol>Duration: 336 hours (14days)</ol>
                                        <ol>Mentor: Max Muller</ol>               
                                        <ol>Price: 100 </ol>
                                        <input type="hidden" name="Item_Name" value="Introduction to Psycholog">
                                        <input type="hidden" name="Price" value="100 ">               
                                        <button onclick="location.href='login.php'" class="add-to-cart">Add</button>
                                </div>
                                </div>
                            </div>
                        </div>
                        </form>

                        <!--2nd ediit-->
                        <form action="" method="">
                        <div class="course-container">
                            <div class="course-item" data-course="Psychology Course 1">
                                        <div style="display: block;">
                                           <div style="display: flex;">
                                               <div class="image-container">
                                                   <img src="courseImg/forensic.jpg" alt="Psychology Course 1">
                                                </div>
                                                <div class="detail">
                                                    <h3> Forensic Psychology</h3>
                                                    <p>This Course Introduces students to the intersection of psychology and the legal system.</p>
                                                    <button class="more-info" ><a style="color:white; text-decoration:none;" href="login.php">More-info</a></button> 
                                                </div>
                                            </div> 
                                        <div class="more-details">
                                            <ol>Detatils: Exploring topics like criminal behavior, profiling, and eyewitness testimony, students analyze how psychological principles are applied in legal contexts.</ol>
                                        <ol>Duration: 480 hours (20days)</ol>
                                        <ol>Mentor: N.K.Vasi</ol> 
                                        <ol>Mentor: 500 </ol>
                                        <input type="hidden" name="Item_Name" value="Forensic Psychology">
                                        <input type="hidden" name="Price" value="500 ">                
                                            <button onclick="location.href='login.php'" class="add-to-cart" >Add</button>
                                        </div>
                                    </div>
                                        
                                </div>
                            </div>
                        </form>


                    <!--3rd-->
                    <form action=" " method="  ">
                    <div class="course-container">
                        <div class="course-item" data-course="Psychology Course 1">
                                    <div style="display: block;">
                                       <div style="display: flex;">
                                           <div class="image-container">
                                               <img src="courseImg/counseling.jpg" alt="Psychology Course 1">
                                            </div>
                                            <div class="detail">
                                                <h3> Counselling Psychology</h3>
                                                <p>This Courses will focuses on helping individuals cope with personal challenges and improve their overall well-being</p>
                                                <button class="more-info" ><a style="color:white; text-decoration:none;" href="login.php">More-info</a></button>
                                            </div>
                                        </div> 
                                    <div class="more-details">
                                        <ol>Detatils: explore theories and techniques for providing therapeutic support across diverse populations. </ol>
                                        <ol>Duration: 336 hours (14days)</ol>
                                        <ol>Mentor: Shachi S.</ol> 
                                        <ol>Price:380  </ol> 
                                        <input type="hidden" name="Item_Name" value="Counselling Psychology">
                                        <input type="hidden" name="Price" value="380 ">
                                        <input onclick="location.href='login.php'" class="add-to-cart" type="submit" name="Add_To_Cart" value="add to cart">
                                    </div>
                                </div>
                                </div>
                            </div>
                        </form>
                        <form action=" " method="  ">
                        <div class="course-container">
                            <div class="course-item" data-course="Psychology Course 1">
                                        <div style="display: block;">
                                           <div style="display: flex;">
                                               <div class="image-container">
                                                   <img src="courseImg/pd.jpg" alt="Psychology Course 1">
                                                </div>
                                                <div class="detail">
                                                    <h3>Personal Development</h3>
                                                    <p> This Course focuses on enhancing self-awareness, building skills, and achieving one's full potential.</p>
                                                    <button class="more-info" ><a style="color:white; text-decoration:none;" href="login.php">More-info</a></button>
                                                </div>
                                            </div> 
                                        <div class="more-details">
                                            <ol>Detatils: Through self-reflection and goal-setting exercises, individuals identify strengths and areas for growth </ol>
                                        <ol>Duration: 240 hours(10days)</ol>
                                        <ol>Mentor: Jui S.</ol> 
                                        <ol>Price: 150 </ol>
                                        <input type="hidden" name="Item_Name" value="Personal Development">
                                        <input type="hidden" name="Price" value="150 "> 
                                        <input onclick="location.href='login.php'" class="add-to-cart" type="submit" name="Add_To_Cart" value="add to cart">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>              
            </div>

            <div class="content" id="data">
                <!--courses no. 1!!-->
                <div class="parallax-container" ></div>
                <div class="grid">
                    <h2 style="color: black;">Data</h2>
                    <div class="course">
                        <form action=" " method="  ">
                        <div class="course-container">
                            <div class="course-item" data-course="Psychology Course 1">
                                        <div style="display: block;">
                                           <div style="display: flex;">
                                               <div class="image-container">
                                                   <img src="courseImg/fundamentals-ds.jpg" alt="Psychology Course 1">
                                                </div>
                                                <div class="detail">
                                                    <h3>Data Science Fundamentals</h3>
                                                    <p> It include basics of data Science, including data manipulation , visualization , statistical analysis, and machine learning. It provides a solid foundation for understanding key concepts and techniques used in the field.</p>
                                                    <button class="more-info" ><a style="color:white; text-decoration:none;" href="login.php">More-info</a></button>
                                                </div>
                                            </div> 
                                        <div class="more-details">
                                            <ol>Detatils:It provides a solid foundation for understanding key concepts and techniques used in the field. </ol>
                                        <ol>Duration: 336 hours(14days)</ol>
                                        <ol>Mentor: Aditi J.</ol>                                             
                                        <ol>price: 200 </ol>
                                        <input type="hidden" name="Item_Name" value=">Data Science Fundamentals">
                                        <input type="hidden" name="Price" value="200 ">                                             
                                        <input onclick="location.href='login.php'" class="add-to-cart" type="submit" name="Add_To_Cart" value="add to cart">
                                        </div>
                                    </div>
                                        
                                    </div>
                                </div>
                            </form>

                            <!--2nd ediit-->
                            <form action=" " method="  ">
                            <div class="course-container">
                                <div class="course-item" data-course="Psychology Course 1">
                                            <div style="display: block;">
                                               <div style="display: flex;">
                                                   <div class="image-container">
                                                       <img src="courseImg/Data-Analysis-with-Python.webp" alt="Psychology Course 1">
                                                    </div>
                                                    <div class="detail">
                                                        <h3>Data Analysis with python </h3>
                                                        <p>This course focuses on practical data-analysis using Python!</p>
                                                        <button class="more-info" ><a style="color:white; text-decoration:none;" href="login.php">More-info</a></button> 
                                                    </div>
                                                </div> 
                                            <div class="more-details">
                                                <ol>Detatils:learn how to clean and preprocess data, perform exploratory data analysis, and create visualizations to extract insights. </ol>
                                                <ol>Duration: 456 hours(19days)</ol>
                                                <ol>Mentor: Tanmay S.</ol>                                                 
                                                <ol>Price: 230  </ol>
                                                <input type="hidden" name="Item_Name" value="Data Analysis with python ">
                                                <input type="hidden" name="Price" value="230 ">                                                  
                                                <input onclick="location.href='login.php'" class="add-to-cart" type="submit" name="Add_To_Cart" value="add to cart">
                                            </div>
                                        </div>
                                            
                                    </div>
                                </div>
                            </form>
    
    
                        <!--3rd-->
                        <form action=" " method="  ">
                        <div class="course-container">
                            <div class="course-item" data-course="Psychology Course 1">
                                        <div style="display: block;">
                                           <div style="display: flex;">
                                               <div class="image-container">
                                                   <img src="courseImg/machine-learning.jpeg" alt="Psychology Course 1">
                                                </div>
                                                <div class="detail">
                                                    <h3>Machine learning</h3>
                                                    <p>This course delves into the principles and algorithms of machine learning</p>
                                                    <button class="more-info" ><a style="color:white; text-decoration:none;" href="login.php">More-info</a></button> 
                                                </div>
                                            </div> 
                                        <div class="more-details">
                                            <ol>Detatils: Teaching students how to build predictive models and make data-driven decisions.  </ol>
                                            <ol>Duration: 480 hours(24days)</ol>
                                            <ol>Mentor: Ayush J.</ol>
                                            <ol>Price: 400 </ol>
                                            <input type="hidden" name="Item_Name" value="Machine learning">
                                            <input type="hidden" name="Price" value="400 ">             
                                            <input onclick="location.href='login.php'" class="add-to-cart" type="submit" name="Add_To_Cart" value="add to cart">    
                                    </div>
                                    </div>
                                        
                                    </div>
                                </div>
                            </form>

                            <form action=" " method="  ">
                            <div class="course-container">
                                <div class="course-item" data-course="Psychology Course 1">
                                            <div style="display: block;">
                                               <div style="display: flex;">
                                                   <div class="image-container">
                                                       <img src="courseImg/big data techno.jpg" alt="Psychology Course 1">
                                                    </div>
                                                    <div class="detail">
                                                        <h3>Big Data Technologies</h3>
                                                        <p>This course introduces students to big data technologies and tools for processing and analyzing large datasets</p>
                                                        <button class="more-info" ><a style="color:white; text-decoration:none;" href="login.php">More-info</a></button> 
                                                    </div>
                                                </div> 
                                            <div class="more-details">
                                                <ol>Detatils: learn how to work with big data infrastructure and implement scalable solutions for data-intensive applications. </ol>
                                                <ol>Duration: 336 hours (14days)</ol>
                                                <ol>Mentor: Hrishikesh</ol>                                                 
                                                <ol>Price: 200 </ol> 
                                                <input type="hidden" name="Item_Name" value="Big Data Technologies">
                                                <input type="hidden" name="Price" value="200 ">                                                
                                                <input onclick="location.href='login.php'" class="add-to-cart" type="submit" name="Add_To_Cart" value="add to cart">
                                            </div>
                                        </div>                                    
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>              
                </div>

            <!--Courses no. 3 !!-->
            <div class="content">
                <!--courses no. 1!!-->
                <div class="parallax-container" id="dc"></div>
                <div class="grid">
                    <h2 style="color: black;">Business and Marketing</h2>
                    <div class="course">
                        <form action=" " method="  ">
                        <div class="course-container">
                            <div class="course-item" data-course="Psychology Course 1">
                                        <div style="display: block;">
                                           <div style="display: flex;">
                                               <div class="image-container">
                                                   <img src="courseImg/fundamentals-marketing.png" alt="Psychology Course 1">
                                                </div>
                                                <div class="detail">
                                                    <h3>Marketing Fundamentals</h3>
                                                    <p>This course covers the core principles of marketing,</p>
                                                    <button class="more-info" ><a style="color:white; text-decoration:none;" href="login.php">More-info</a></button> 
                                                </div>
                                            </div> 
                                        <div class="more-details">
                                            <ol>Detatils:learn how to identify target audiences, create effective marketing campaigns, and measure campaign success. </ol>
                                            <ol>Duration: 336 hours (14days)</ol>
                                            <ol>Mentor: Aditya S.</ol>                                             
                                            <ol>Price: 250 </ol>
                                            <input type="hidden" name="Item_Name" value="Marketing Fundamentals">
                                            <input type="hidden" name="Price" value="250 ">                                             
                                            <input onclick="location.href='login.php'" class="add-to-cart" type="submit" name="Add_To_Cart" value="add to cart">
                                        </div>
                                    </div>
                                        
                                </div>
                            </div>
                        </form>
                            <!--2nd ediit-->
                            <form action=" " method="  ">
                            <div class="course-container">
                                <div class="course-item" data-course="Psychology Course 1">
                                            <div style="display: block;">
                                               <div style="display: flex;">
                                                   <div class="image-container">
                                                       <img src="courseImg/digital-marketing.jpg" alt="Psychology Course 1">
                                                    </div>
                                                    <div class="detail">
                                                        <h3>Digital Marketing</h3>
                                                        <p> Students learn how to develop and implement digital marketing strategies to increase brand awareness, generate leads, and drive conversions</p>
                                                        <button class="more-info" ><a style="color:white; text-decoration:none;" href="login.php">More-info</a></button> 
                                                    </div>
                                                </div> 
                                            <div class="more-details">
                                                <ol>Detatils:  course focuses on leveraging digital channels such as social media, search engine optimization (SEO), email marketing, and content marketing to reach and engage customers online.  </ol>
                                                <ol>Duration: 288 hours (12days)</ol>
                                                <ol>Mentor: Shivam</ol>                                                 
                                                <ol>Price: 250 </ol>
                                                <input type="hidden" name="Item_Name" value="Digital Marketing">
                                            <input type="hidden" name="Price" value="250 ">                                                 
                                                <input onclick="location.href='login.php'" class="add-to-cart" type="submit" name="Add_To_Cart" value="add to cart">
                                            </div>
                                        </div>
                                            
                                    </div>
                                </div>
                            </form>
    
    
                        <!--3rd-->
                        <form action=" " method="  ">
                        <div class="course-container">
                            <div class="course-item" data-course="Psychology Course 1">
                                        <div style="display: block;">
                                           <div style="display: flex;">
                                               <div class="image-container">
                                                   <img src="courseImg/What-is-Business-Analytics-1.jpg" alt="Psychology Course 1">
                                                </div>
                                                <div class="detail">
                                                    <h3>Business Analytics</h3>
                                                    <p> From Course u will learn how to use analytical tools and techniques to extract actionable insights from data.</p>
                                                    <button class="more-info" ><a style="color:white; text-decoration:none;" href="login.php">More-info</a></button> 
                                                </div>
                                            </div> 
                                        <div class="more-details">
                                            <ol>Detatils:This course teaches students how to analyze business data to make informed decisions and optimize business performance </ol>
                                        <ol>Duration: 336 hours (14days)</ol>
                                        <ol>Mentor: Vedant V.</ol> 
                                        <ol>Price: 190 </ol>
                                        <input type="hidden" name="Item_Name" value="Business Analytics">
                                            <input type="hidden" name="Price" value="190 ">
                                        <input onclick="location.href='login.php'" class="add-to-cart" type="submit" name="Add_To_Cart" value="add to cart">
                                        </div>
                                    </div>
                                        
                                </div>
                            </div>
                        </form>
                            <form action=" " method="  ">
                            <div class="course-container">
                                <div class="course-item" data-course="Psychology Course 1">
                                            <div style="display: block;">
                                               <div style="display: flex;">
                                                   <div class="image-container">
                                                       <img src="courseImg/enterpreneuership.png" alt="Psychology Course 1">
                                                    </div>
                                                    <div class="detail">
                                                        <h3>Entrepreneurship and Innovation</h3>
                                                        <p>This course explores the process of starting and growing a business, emphasizing creativity, innovation, and strategic thinking</p>
                                                        <button class="more-info" ><a style="color:white; text-decoration:none;" href="login.php">More-info</a></button> 
                                                    </div>
                                                </div> 
                                            <div class="more-details">
                                        <ol>Detatils:learn about business model development, market validation, financial planning, and risk management </ol>
                                        <ol>Duration: 384 hours (16days)</ol>
                                        <ol>Mentor: Issac Biden</ol> 
                                        <ol>Price: 200 </ol>
                                        <input type="hidden" name="Item_Name" value="Entrepreneurship and Innovation">
                                            <input type="hidden" name="Price" value="200 ">
                                        <input onclick="location.href='login.php'" class="add-to-cart" type="submit" name="Add_To_Cart" value="add to cart">
                                            </div>
                                        </div>     
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>              
                </div>


            <!--courses no. 4-->
            <div class="content">
                <!--courses no. 1!!-->
                <div class="parallax-container" id="ppl"></div>
                <div class="grid">
                    <h2 style="color: black;">Share-Market and Stocks</h2>
                    <div class="course">
                        <form action=" " method="  ">
                        <div class="course-container">
                            <div class="course-item" data-course="Psychology Course 1">
                                        <div style="display: block;">
                                           <div style="display: flex;">
                                               <div class="image-container">
                                                   <img src="courseImg/stock-market-fundamentals.jpg" alt="Psychology Course 1">
                                                </div>
                                                <div class="detail">
                                                    <h3>Stock Market Fundamentals</h3>
                                                    <p>It will give you the basic fundamentals for beginneers</p>
                                                    <button class="more-info" ><a style="color:white; text-decoration:none;" href="login.php">More-info</a></button> 
                                                </div>
                                            </div> 
                                        <div class="more-details">
                                        <ol>Detatils:covers the basic principles and concepts of the stock market, including how it functions, key players involved, and the different types of stocks and investment vehicles available. </ol>
                                        <ol>Duration: 336 hours (14days)</ol>
                                        <ol>Mentor: Tanish W.</ol> 
                                        <ol>Price: 160  </ol>
                                        <input type="hidden" name="Item_Name" value="Stock Market Fundamentals">
                                        <input type="hidden" name="Price" value="160 ">
                                        <input onclick="location.href='login.php'" class="add-to-cart" type="submit" name="Add_To_Cart" value="add to cart">
                                        </div>
                                    </div>
                                        
                                </div>
                            </div>
                        </form>
                            <!--2nd ediit-->
                            <form action=" " method="  ">
                            <div class="course-container">
                                <div class="course-item" data-course="Psychology Course 1">
                                            <div style="display: block;">
                                               <div style="display: flex;">
                                                   <div class="image-container">
                                                       <img src="courseImg/investment-strategies-and-portfolio-management-.jpg" alt="Psychology Course 1">
                                                    </div>
                                                    <div class="detail">
                                                        <h3>Investment Strategies and Portfolio management</h3>
                                                        <p>This sub-course delves into various investment strategies and techniques used to build and manage investment portfolios.</p>
                                                        <button class="more-info" ><a style="color:white; text-decoration:none;" href="login.php">More-info</a></button> 
                                                    </div>
                                                </div> 
                                            <div class="more-details">
                                        <ol>Detatils: Topics may include value investing, growth investing, diversification, risk management, and asset allocation. </ol>
                                        <ol>Duration: 360 hours (15days)</ol>
                                        <ol>Mentor: Vedant J.</ol> 
                                        <ol>Price: 200 </ol>
                                        <input type="hidden" name="Item_Name" value="Investment Strategies and Portfolio management">
                                        <input type="hidden" name="Price" value="200 "> 
                                        <input onclick="location.href='login.php'" class="add-to-cart" type="submit" name="Add_To_Cart" value="add to cart">
                                            </div>
                                        </div>
                                            
                                    </div>
                                </div>
                            </form>
    
    
                        <!--3rd-->
                        <form action=" " method="  ">
                        <div class="course-container">
                            <div class="course-item" data-course="Psychology Course 1">
                                        <div style="display: block;">
                                           <div style="display: flex;">
                                               <div class="image-container">
                                                   <img src="courseImg/technical-analysis.jpg" alt="Psychology Course 1">
                                                </div>
                                                <div class="detail">
                                                    <h3>Technical Analysis</h3>
                                                    <p>This sub-course focuses on analyzing stock price movements and market trends using technical indicators and chart patterns.</p>
                                                    <button class="more-info" ><a style="color:white; text-decoration:none;" href="login.php">More-info</a></button> 
                                                </div>
                                            </div> 
                                        <div class="more-details">
                                            <ol>Detatils: learn how to interpret stock charts, identify buying and selling signals, and make informed trading decisions based on technical analysis. </ol>
                                        <ol>Duration: 336 hours(14days)</ol>
                                        <ol>Mentor: Tanay C.</ol> 
                                        <ol>Price: 280 </ol>
                                        <input type="hidden" name="Item_Name" value="Technical Analysis">
                                        <input type="hidden" name="Price" value="280 "> 
                                        <input onclick="location.href='login.php'" class="add-to-cart" type="submit" name="Add_To_Cart" value="add to cart">
                                        </div>
                                    </div>
                                        
                                </div>
                            </div>
                        </form>
                            <form action=" " method="  ">
                                <div class="course-container">
                                <div class="course-item" data-course="Psychology Course 1">
                                            <div style="display: block;">
                                               <div style="display: flex;">
                                                   <div class="image-container">
                                                       <img src="courseImg/market-analysis.jpg" alt="Psychology Course 1">
                                                    </div>
                                                    <div class="detail">
                                                        <h3>Market Analysis and Economics Trends</h3>
                                                        <p>Will learn how to conduct economic research and interpret market data to make informed investment decisions.</p>
                                                        <button class="more-info" ><a style="color:white; text-decoration:none;" href="login.php">More-info</a></button> 
                                                    </div>
                                                </div> 
                                            <div class="more-details">
                                                <ol>Detatils: This sub-course focuses on analyzing macroeconomic trends, geopolitical events, and market indicators to forecast market movements and identify investment opportunities.  </ol>
                                        <ol>Duration: 336 hours (14days)</ol>
                                        <ol>Mentor: Samihan</ol> 
                                        <ol>Price: 110 </ol>
                                        <input type="hidden" name="Item_Name" value="Market Analysis and Economics Trends">
                                        <input type="hidden" name="Price" value="110 ">
                                        <input onclick="location.href='login.php'" class="add-to-cart" type="submit" name="Add_To_Cart" value="add to cart">
                                            </div>
                                        </div>        
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>              
                </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- <script src="course.js"></script> -->
</body>
</html>