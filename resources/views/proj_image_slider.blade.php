<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto slideshow</title>
    <!--Stylesheet-->
    <link rel="stylesheet" href="style.css">
    <style>
        *{
            padding: 0;
            margin: 0;
            width: 100px;
            height: 700px;
        }
        body{
            background-color: #7aacff;
        }
        .container{
            width: 85vmin;
            position: absolute;
            transform: translate(-50%,-50%);
            top: 50%;
            left: 50%;
            overflow: hidden;
            border: 20px solid #ffffff;
            border-radius: 8px;
            box-shadow: 10px 25px 30px rgba(30,30,200,0.3);
            object-fit: cover;
        }
        .wrapper{
            width: 100%;
            display: flex;
            animation: slide 12s infinite;
        }
        .wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* ปรับขนาดรูปภาพให้เต็มกรอบโดยทำให้มีการตัดทอนของรูปแต่รักษาสัดส่วน */
            aspect-ratio: 16 / 9; /* กำหนดอัตราส่วนรูปภาพเพื่อให้แสดงในสไลด์โชว์ */
        }
        @keyframes slide{
            0%{
                transform: translateX(0);
            }
            25%{
                transform: translateX(0);
            }
            30%{
                transform: translateX(-100%);
            }
            50%{
                transform: translateX(-100%);
            }
            55%{
                transform: translateX(-200%);
            }
            75%{
                transform: translateX(-200%);
            }
            80%{
                transform: translateX(-300%);
            }
            100%{
                transform: translateX(-300%);
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="wrapper">
            <?php
                $images = array("https://wallpapercave.com/wp/wp2273273.jpg", "https://wallpapercave.com/wp/jJzPPVN.jpg", "https://wallpaperaccess.com/full/106956.jpg", "https://cdn.wallpapersafari.com/3/36/9a0eDC.jpg");
                foreach ($images as $image) {
                    echo "<img src='$image' class='slide-image'>";
                }
            ?>
            
        </div>
    </div>
</body>
</html>
         
            