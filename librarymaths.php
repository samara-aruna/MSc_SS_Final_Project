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
        <h1>Mathematics Books</h1>
        <!--p>Select the course that suits your learning goals</p-->
        
    </header>

    <main>
        <div class="course-card">
            <img class="course-img" src="maths1img.jpg" alt="Course 1 Image">
            <div class="course-info">
                <h2>Combined Mathematics Statics-1</h2>
                <!--p>Mathematics is a branch of knowledge that deals with the study of numbers, quantity, structure, space, and patterns.. Learn about various topics and enhance your skills.</p-->
                <a href="https://nie.lk/pdffiles/other/eALOM%20Com%20Maths%20Statics%20-Book-I.pdf" class="learn-more-btn">Show Book</a>
            </div>
        </div>

        <div class="course-card">
            <img class="course-img" src="maths2img.jpg" alt="Course 2 Image">
            <div class="course-info">
                <h2>Advance High School Mathematics</h2>
                <!--p>Science is a systematic enterprise that builds and organizes knowledge in the form of testable explanations and predictions about the universe.. Gain valuable insights and practical knowledge.</p-->
                <a href="https://www.math.ksu.edu/~dbski/writings/further.pdf" class="learn-more-btn">Show Book</a>
            </div>
        </div>

        <div class="course-card">
            <img class="course-img" src="maths3img.jpg" alt="Course 2 Image">
            <div class="course-info">
                <h2>Mathematics an opne introduction</h2>
                <!--p>Computer Science is a discipline that encompasses the study of computers and computational systems.It has both partical and the theoretical part. Gain valuable insights and practical knowledge.</p-->
                <a href="https://discrete.openmathbooks.org/pdfs/dmoi-tablet.pdf" class="learn-more-btn">Show Book</a>
            </div>
        </div>

        <div class="course-card">
            <img class="course-img" src="maths 6 2.jpg" alt="Course 2 Image">
            <div class="course-info">
                <h2>Mathematics for grade 6 part 2</h2>
                <!--p>Computer Science is a discipline that encompasses the study of computers and computational systems.It has both partical and the theoretical part. Gain valuable insights and practical knowledge.</p-->
                <a href="http://www.edupub.gov.lk/Administrator/English/6/maths%20G-6%20P-II%20E/maths%20G-6%20P-II%20E.pdf
" class="learn-more-btn">Show Book</a>
            </div>
        </div>

        <div class="course-card">
            <img class="course-img" src="junear maths.jpg" alt="Course 2 Image">
            <div class="course-info">
                <h2>Junior Mathematics</h2>
                <!--p>Computer Science is a discipline that encompasses the study of computers and computational systems.It has both partical and the theoretical part. Gain valuable insights and practical knowledge.</p-->
                <a href="https://files.eric.ed.gov/fulltext/ED623271.pdf" class="learn-more-btn">Show Book</a>
            </div>
        </div>

        <div class="course-card">
            <img class="course-img" src="Emaths.jpg" alt="Course 2 Image">
            <div class="course-info">
                <h2>Mathematics of Note and Examples</h2>
                <!--p>Computer Science is a discipline that encompasses the study of computers and computational systems.It has both partical and the theoretical part. Gain valuable insights and practical knowledge.</p-->
                <a href="https://files.eric.ed.gov/fulltext/ED623271.pdf" class="learn-more-btn">Show Book</a>
            </div>
        </div>

        <!-- Add more course cards as needed -->
    </main>

    <!--footer>
        <p>&copy; 2024 AIS Online Learning Platform</p>
    </footer-->
    <script src="https://cdn.botpress.cloud/webchat/v1/inject.js"></script>
<script src="https://mediafiles.botpress.cloud/80ac50c3-06da-4368-8dd7-df91fbc54ce3/webchat/config.js" defer></script>
</body>

</html>
