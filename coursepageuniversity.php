<?php
    include_once 'header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Learning - Course Selection</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #EDEEB7;
            animation:transitionIn 3s;
        }

        header {
            background-color: none;
            color:black;
            padding: 2px;
            text-align: center;
        }

        main {
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .course-card {
            background-color:#c0c0c0;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            margin: 20px;
            width: 300px;
            transition: transform 0.3s ease-in-out;
            opacity: 0.8;
            
        }

        .course-card:hover {
            transform: scale(1.05);
        }

        .course-img {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }

        .course-info {
            padding: 20px;
        }

        h2 {
            color: #123524;
        }

        p {
            line-height: 1.6;
        }

        .learn-more-btn {
            display: block;
            width: 100%;
            padding: 10px;
            background-color:#123524;
            color: #fff;
            text-align: center;
            text-decoration: none;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
            width:fit-content;
        }

        .learn-more-btn:hover {
            background-color: #228b22;
        }

        footer {
            background-color: #D4CC9A;
            color:black;
            text-align: center;
            padding: 0.1px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

       .logo
        {
	        border-top-left-radius:20px;
	        border-top-right-radius:20px;
	        border-bottom-right-radius:20px;
            overflow: hidden;
	        opacity:0.5;
        }
        

@keyframes transitionIn
{
	from
	{
		opacity:0;
		transform:rotateX(-10deg);
	}
	to
	{
		opacity:1;
		transform:rotateX(0);
	}
}
.one
{
    font-size:25px;
}

    </style>
</head>

<body>
<div class="logo">
 <img src="logo.jpg" width="100" height="100">
</div>
    <header class="one">
        <h1>Explore Our Courses</h1>
        <!--p>Select the course that suits your learning goals</p-->
        
    </header>

    <main>
        <div class="course-card">
            <img class="course-img" src="mathematics_image.jpg" alt="Course 1 Image">
            <div class="course-info">
                <h2>Pure Mathematics</h2>
                <p>Pure mathematics, also known as theoretical or abstract mathematics, is a branch of the discipline that explores the inherent beauty and logic of mathematical concepts without immediate concern for their real-world applications. </p>
                <a href="#" class="learn-more-btn">Start Follow</a>
            </div>
        </div>

        <div class="course-card">
            <img class="course-img" src="1200-GettyImages-1395775101.jpg" alt="Course 2 Image">
            <div class="course-info">
                <h2>Botanical Science</h2>
                <p>Botanical science, also known as botany, is the scientific study of plants and plant life. It encompasses a wide range of disciplines, from the microscopic study of plant cells and genetics to the macroscopic exploration of ecosystems and plant behavior. </p>
                <a href="#" class="learn-more-btn">Start Follow</a>
            </div>
        </div>

        <div class="course-card">
            <img class="course-img" src="S3dp2NuCNokhipB6YwdPsG-1200-80.jpg" alt="Course 2 Image">
            <div class="course-info">
                <h2>Computer Science</h2>
                <p>Computer Science is a discipline that encompasses the study of computers and computational systems.It has both partical and the theoretical part. Gain valuable insights and practical knowledge.</p>
                <a href="#" class="learn-more-btn">Start Follow</a>
            </div>
        </div>

        <!-- Add more course cards as needed -->
    </main>

    <!--footer>
        <p>&copy; 2024 AIS Online Learning Platform</p>
    </footer-->

    
</body>

</html>
