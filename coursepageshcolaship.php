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
        <h1>අපගේ පාඨමාලා ගවේෂණය කරන්න</h1>
        <!--p>Select the course that suits your learning goals</p-->
        
    </header>

    <main>
        <div class="course-card">
            <img class="course-img" src="course grade5maths.jpg" alt="Course 1 Image">
            <div class="course-info">
                <h2>ගණිතය</h2>
                <p>ගණිතය යනු සංඛ්‍යා, ප්‍රමාණය, ව්‍යුහය, අවකාශය සහ රටා පිළිබඳ අධ්‍යයනය සමඟ කටයුතු කරන දැනුමේ ශාඛාවකි.. විවිධ මාතෘකා ගැන ඉගෙන ගෙන ඔබේ කුසලතා වැඩි දියුණු කරන්න.</p>
                <a href="#" class="learn-more-btn">Start Follow</a>
            </div>
        </div>

        <div class="course-card">
            <img class="course-img" src="course 5 parisaraya.jpg" alt="Course 2 Image">
            <div class="course-info">
                <h2>පරිසරය</h2>
                <p>පරිසරය යනු ජීවීන්ගේ අන්තර් සම්බන්ධිත ජාලය, ඔවුන්ගේ වාසස්ථාන සහ පෘථිවියේ ජීවය පවත්වා ගෙන යන භෞතික මූලද්‍රව්‍ය ඇතුළත් වේ. එයට අප ආශ්වාස කරන වාතය, අප පානය කරන ජලය, ශාක ජීවීන්ට ආධාර කරන පස සහ අපගේ පෘථිවි ග්‍රහලෝකය සෑදී ඇති විවිධ පරිසර පද්ධති ඇතුළත් වේ.</p>
                <a href="#" class="learn-more-btn">Start Follow</a>
            </div>
        </div>

        <div class="course-card">
            <img class="course-img" src="grade 5 ict.jpg" alt="Course 2 Image">
            <div class="course-info">
                <h2>පරිගණකයට හැඳින්වීම</h2>
                <p>පරිගණක විද්‍යාව යනු පරිගණක සහ පරිගණක පද්ධති පිළිබඳ අධ්‍යයනය ඇතුළත් විෂයයකි. එයට අංශු සහ න්‍යායාත්මක යන දෙකම ඇත. වටිනා අවබෝධයක් සහ ප්‍රායෝගික දැනුමක් ලබා ගන්න.</p>
                <a href="#" class="learn-more-btn">Start Follow</a>
            </div>
        </div>
s
        <!-- Add more course cards as needed -->
    </main>

    <!--footer>
        <p>&copy; 2024 AIS Online Learning Platform</p>
    </footer-->

    
</body>

</html>
