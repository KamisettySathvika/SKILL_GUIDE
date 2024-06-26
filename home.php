<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
    <title>SkillGuide</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
    <nav>
        <ul>
            <li><img src="./assets/image/SG-Logo.png" alt="logo" id="img"></li>
            <li><a href='home.html'>Home</a></li>
            <li><a href=#Soultions>Soultions</a></li>
            <li><a href=#Resources>Resources</a></li>
            <li><a href='https://chat.openai.com/chat'>Chat GPT</a></li>
            <li><a href="home.php?logout='1'" onClick="home.php">LogOut</a></li>
        </ul>
    </nav>
    <section class="section">
        <img src="assets/image/banner.png" alt="Banner Image">
        <h1>SkillGuide-Your Coding Ally</h1>
        <h3>SkillGuide aims to be a go-to online guide for students and developers to enhance their coding skills. It's all about simplicity and accessibility. The goal is to create a one-stop platform offering programming books, coding challenges, and open source internships.
            SkillGuide is your friendly companion, providing straightforward resources and opportunities. Whether you're diving into coding or refining your skills, SkillGuide is here to guide you through the journey with simplicity and inclusivity.</h3>
    </section>
    
    <div id="Soultions">
        <h2>Soultions</h2>
        <p>Here are some of the solutions that SkillGuide offers:</p>
        <div>
            <h3>Programming Books</h3>
            <p>Find all programming language books for professionals and beginners. SkillGuide offers a wide range of programming books available in many languages.</p>
            <button><a href="books.html">Check out</a></button>
        </div>
        <div>
            <h3>Competitive programming</h3>
            <p>Enhance your coding skills with competitive programming challenges. SkillGuide offers a variety of coding challenges to help you improve your problem-solving skills.</p>
            <button><a href="compet.html">Check out</a></button>
        </div>
        <div>
            <h3>Tech Specializations</h3>
            <p>Explore various tech specializations and find the one that suits your interests. SkillGuide provides information on different tech fields to help you choose the right specialization.</p>
            <button><a href="special.html">Check out</a></button>
        </div>
        <div>
            <h3>Tech Events</h3>
            <p>Stay updated on the latest tech events and workshops happening around you. SkillGuide offers information on tech events to help you connect with the tech community.</p>
            <button><a href="events.html">Check out</a></button>
        </div>
        <div>
        <h3>Tech Info</h3>
        <p>Get the latest tech news and updates from SkillGuide. Stay informed about the tech industry with our curated tech news and articles.</p>
        <button><a href="techinfo.html">Check out</a></button>
        </div>
        <div>
            <h3>General opportunities</h3>
            <p>Explore various open source internships and job opportunities. SkillGuide provides information on internships and job openings in the tech industry.</p>
            <button><a href="General.html">Check out</a></button>
        </div>
    </div>
    <div id="Resources">
        <div>
            <h2>Resources</h2>
            <h4>Popular Tech Resources </h4>
            <h6>Helps to Growth your career to next level. Have a look on it...! </h6>
        </div>
        <div>
            <h4>DevDocs</h4>
            <p>DevDocs is an open source web app that combines documentation for lots of developer tools into a single searchable interface. Speed and simplicity clear hierarchy.</p>
            <button><a href="https://devdocs.io/">Check out</a></button>
        </div>
        <div>
            <h4>Roadmap</h4>
            <p>Roadmap.sh is a community effort to create roadmaps, guides and other educational content to help guide the developers in picking up the path and guide their learnings.</p>
            <button><a href="https://roadmap.sh/">Check out</a></button>
        </div>
        <div>
            <h4>Hackr</h4>
            <p>In Google search shows you hundreds of Programming courses/tutorials, but Hackr.io tells you which is the best one. Find the best online courses & tutorials</p>
            <button><a href="https://hackr.io/">Check out</a></button>
        </div>
</div>
<footer>
    <div>Crafted with ❤️ by Kamisetty Sathvika &copy;</div>
</footer>
</body>

</html>
