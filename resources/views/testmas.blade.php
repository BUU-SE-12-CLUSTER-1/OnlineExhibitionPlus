<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assets/css/testmas.css')}}">
 
    <title>Document</title>
</head>
<body>
    <div class="project pj_01">
        <div class="wrapper">
            <img src="{{url('assets\img\testmas\1.jpg')}}" alt="Description of the image">
            <img src="{{url('assets\img\testmas\5.jpg')}}" alt="Description of the image">
            <img src="{{url('assets\img\testmas\9.jpg')}}" alt="Description of the image">
            <img src="{{url('assets\img\testmas\13.jpg')}}" alt="Description of the image">
        </div>
    </div>
    <div class="information_01">
        <div class="inf_wrapper">
            <div class="inf_all" id="myDiv01">
                <script>
                    document.getElementById("myDiv01").addEventListener("click", function() {
                        window.location.href = "/testPJ01";
                    });
                </script>
                <button type="button" class="star"></i></button>
                <div class="detail">
                    <h2>System</h2>
                    <p>Author : ปลายุท</p>
                    <p>Advisor : ปลาวัน</p>
                    <div class="btn_tag">
                        <button class="tag1">Tag A</button>
                        <button class="tag2">Tag B</button>
                    </div>  
                </div>
            </div>
            <div inf_all id="myDiv02">
                <script>
                    document.getElementById("myDiv02").addEventListener("click", function() {
                        window.location.href = "/testPJ02";
                    });
                </script>
                <button type="button" class="star"></button>
                <div class="detail">
                    <h2>System</h2>
                    <p>Author : ปลาวิท</p>
                    <p>Advisor : ปลาทู</p>
                    <div class="btn_tag">
                        <button class="tag1">Tag A</button>
                        <button class="tag2">Tag B</button>
                    </div>
                </div>
            </div>
            <div inf_all id="myDiv03">
                <script>
                    document.getElementById("myDiv03").addEventListener("click", function() {
                        window.location.href = "/testPJ03";
                    });
                </script>
                <button type="button" class="star"></i></button>
                <div class="detail">
                    <h2>System</h2>
                    <p>Author : ปลาวีนา</p>
                    <p>Advisor : ปลาทรี</p>
                    <div class="btn_tag">
                        <button class="tag1">Tag A</button>
                        <button class="tag2">Tag B</button>
                    </div>
                </div>
            </div>
            <div inf_all id="myDiv04">
                <script> 
                    document.getElementById("myDiv04").addEventListener("click", function() {
                        window.location.href = "/testPJ04";
                    });
                </script>
                <button type="button" class="star"></button>
                <div class="detail">
                    <h2>System</h2>
                    <p>Author : ปลาเจรา</p>
                    <p>Advisor : ปลาโฟ</p>
                    <div class="btn_tag">
                        <button class="tag1">Tag A</button>
                        <button class="tag2">Tag B</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
</body>
</html>
