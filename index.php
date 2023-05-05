<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');
   
   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }else{
      mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'message sent successfully!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>My Personal Website Design</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

   <!-- aos css link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message" data-aos="zoom-out">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>

<!-- header section starts  -->

<header class="header">

   <div id="menu-btn" class="fas fa-bars"></div>

   <!--<a href="#home" class="logo">Portfolio</a>-->
   <img src="logo.jpg" class="logo">


   <nav class="navbar">
      <a href="#home" class="active">home</a>
      <a href="#about">about</a>
      <a href="#services">services</a>
      <a href="#portfolio">portfolio</a>
      <a href="#contact">contact</a>
   </nav>

   <div class="follow">
      <a href="#" class="fab fa-facebook-f"></a>
      <a href="#" class="fab fa-twitter"></a>
      <a href="#" class="fab fa-instagram"></a>
      <a href="#" class="fab fa-linkedin"></a>
      <a href="#" class="fab fa-github"></a>
   </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

   <div class="image" data-aos="fade-right">
      <img src="images/user-img.jpg" alt="">
   </div>

   <div class="content">
      <h3 data-aos="fade-up">Hi, I Am Rohit Nakrani</h3>
      <span data-aos="fade-up">PHP Developer</span>
      <p data-aos="fade-up"> This is my official website to showes all
                        <br> Details and work experience web development.</p>
      <a data-aos="fade-up" href="#about" class="btn">about me</a>
   </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

   <h1 class="heading" data-aos="fade-up"> <span>biography</span> </h1>

   <div class="biography">

      <p data-aos="fade-up">My Personal details or information that is personal to you.</p>

      <div class="bio">
         <h3 data-aos="zoom-in"> <span>name : </span> Rohit Nakrani </h3>
         <h3 data-aos="zoom-in"> <span>email : </span> rohitnakrani8758@gmail.com </h3>
         <h3 data-aos="zoom-in"> <span>address : </span> Ahmedabad, Gujarat ,India </h3>
         <h3 data-aos="zoom-in"> <span>phone : </span> +91 9537170279 </h3>
         <h3 data-aos="zoom-in"> <span>age : </span> 22 years </h3>
         <h3 data-aos="zoom-in"> <span>experience : </span> 2+ years </h3>
      </div>

      <a href="#" class="btn" data-aos="fade-up">download CV</a>

   </div>
   
   <div class="skills" data-aos="fade-up">

      <h1 class="heading"> <span>skills</span> </h1>
      <br>
      <h1>I know many different types of technology. Such as Html, Css, JavaScript, Php.<h1>
<br>
      <div class="progress">
         <div class="bar" data-aos="fade-left"> <h3><span>HTML</span> <span>95%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>CSS</span> <span>80%</span></h3> </div>
         <div class="bar" data-aos="fade-left"> <h3><span>JavaScript</span> <span>65%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>PHP</span> <span>100%</span></h3> </div>
         <div class="bar" data-aos="fade-left"> <h3><span>Magento</span> <span>88%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>Laravel</span> <span>65%</span></h3> </div>
      </div>

   </div>

   <div class="edu-exp">

      <h1 class="heading" data-aos="fade-up"> <span>education & experience</span> </h1>

      <div class="row">

         <div class="box-container">

            <h3 class="title" data-aos="fade-right">education</h3>

            <div class="box" data-aos="fade-right">
               <span>( 2013 - 2014 )</span>
               <h3>10th Completed </h3>
               <p>Pam International School <BR>Gujarat Secondary and Higher Secondary Education Board (GSEB) conducts examinations for Class 10 every year in March.<br><br></p>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( 2014 - 2016 )</span>
               <h3>11th - 12th Science Completed </h3>
               <p>Devasya International School <BR>Gujarat Secondary and Higher Secondary Education Board (GSEB) conducts Higher Secondary School Certificate (HSC) board exams for Class 12 every year. GSEB HSC is divided into two streams— General Stream and Science stream.</p>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( 2016 - 2020 )</span>
               <h3>Bachelor of Engineering <BR> [IT (Information Technology) ]</h3>
               <p>Hasmukh Goswami College of Engineering<br>Bachelor of Engineering in IT is a specialized engineering program in the domain of computer and Information Technology. The motive of the course is to provide students with sufficient knowledge and skills that they would be required to channelize their learning in a practical sense when they enter the job market.</p>
            </div>

         </div>

         <div class="box-container">

            <h3 class="title" data-aos="fade-left">experience</h3>

            <div class="box" data-aos="fade-left">
               <span>( 2019 - 2020 )</span>
               <h3>Web Developer [Python Developer]</h3>
               <p>Python is a high-level, general-purpose programming language. <br>Its design philosophy emphasizes code readability with the use of significant indentation via the off-side rule. Python is dynamically typed and garbage-collected.</p>
            </div>

            <div class="box" data-aos="fade-left">
               <span>( 2020 - 2021 )</span>
               <h3> Web Developer [PHP Developer]</h3>
               <p>PHP is a general-purpose scripting language geared toward web development. It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1993 and released in 1995. The PHP reference implementation is now produced by The PHP Group.</p>
            </div>

            <div class="box" data-aos="fade-left">
               <span>( 2021 - 2023 )</span>
               <h3> Web Developer [PHP Developer] , <BR>[Magento Developer] , [Laravel Developer]</h3>
               <p>Magento developers are in charge of developing, maintaining, and improving their clients' eCommerce websites. <br> Laravel is a free and open-source PHP web framework, created by Taylor Otwell and intended for the development of web applications following the model–view–controller architectural pattern and based on Symfony.<br><br></p>
            </div>

         </div>

      </div>

   </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

   <h1 class="heading" data-aos="fade-up"> <span>services</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-code"></i>
         <h3>web development</h3>
      <p>Web development is the work involved in developing a website for the Internet (World Wide Web) or an intranet (a private network). Web development can range from developing a simple single static page of plain text to complex web applications, electronic businesses, and social network services.<br><br></p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-paint-brush"></i>
         <h3>graphic design</h3>
         <p>Graphic design is a craft where professionals create visual content to communicate messages. By applying visual hierarchy and page layout techniques, designers use typography and pictures to meet users' specific needs and focus on the logic of displaying elements in interactive designs.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fab fa-bootstrap"></i>
         <h3>bootstrap</h3>
         <p>Bootstrap is a free and open-source CSS framework directed at responsive, mobile-first front-end web development. It contains HTML, CSS and JavaScript-based design templates for typography, forms, buttons, navigation, and other interface components.<br><br><br> </p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-chart-line"></i>
         <h3>seo marketing</h3>
         <p>Search engine optimization (SEO) is the practice of orienting your website to rank higher on a search engine results page (SERP) so that you receive more traffic. The aim is typically to rank on the first page of Google results for search terms that mean the most to your target audience.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-bullhorn"></i>
         <h3>digital marketing</h3>
         <p>Digital marketing, also called online marketing, is the promotion of brands to connect with potential customers using the internet and other forms of digital communication. This includes not only email, social media, and web-based advertising, but also text and multimedia messages as a marketing channel.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fab fa-wordpress"></i>
         <h3>wordpress</h3>
         <p>WordPress is a free and open-source content management system written in hypertext preprocessor language and paired with a MySQL or MariaDB database with supported HTTPS. Features include a plugin architecture and a template system, referred to within WordPress as "Themes". </p>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- portfolio section starts  -->

<section class="portfolio" id="portfolio">

   <h1 class="heading" data-aos="fade-up"> <span>Information Technology</span> </h1>
   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <img src="images/rohit.jpg" alt="">
         <h3>web development</h3>
         <span>( 2020 - 2023 )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/rohit1.jpg" alt="">
         <h3>web development</h3>
         <span>( 2020 - 2023 )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/rohit2.jpg" alt="">
         <h3>web development</h3>
         <span>( 2020 - 2023 )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/rohit7.jpg" alt="">
         <h3>web development</h3>
         <span>( 2020 - 2023 )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/rohit4.jpg" alt="">
         <h3>web development</h3>
         <span>( 2020 - 2023 )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/rohit5.jpg" alt="">
         <h3>web development</h3>
         <span>( 2020 - 2023 )</span>
      </div>

   </div>

</section>

<!-- portfolio section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

   <h1 class="heading" data-aos="fade-up"> <span>contact me</span> </h1>

   <form action="" method="post">
      <div class="flex">
         <input data-aos="fade-right" type="text" name="name" placeholder="enter your name" class="box" required>
         <input data-aos="fade-left" type="email" name="email" placeholder="enter your email" class="box" required>
      </div>
      <input data-aos="fade-up" type="number" min="0" name="number" placeholder="enter your number" class="box" required>
      <textarea data-aos="fade-up" name="message" class="box" required placeholder="enter your message" cols="30" rows="10"></textarea>
      <input type="submit" data-aos="zoom-in" value="send message" name="send" class="btn">
   </form>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-phone"></i>
         <h3>phone</h3>
         <p>+91-9537170279</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-envelope"></i>
         <h3>email</h3>
         <p>rohitnakrani8758@gmail.com</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-map-marker-alt"></i>
         <h3>address</h3>
         <p>Ahmedabad, Gujarat ,India</p>
      </div>

   </div>

</section>

<!-- contact section ends -->

<div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>mr. Rohit Nakrani web designer</span> </div>












<!-- custom js file link  -->
<script src="js/script.js"></script>

<!-- aos js link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

   AOS.init({
      duration:800,
      delay:300
   });

</script>
   
</body>
</html>