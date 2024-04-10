@extends('layouts.layout')
@section('title')
    home | Online Exhibition+
@endsection
@section('content')
<script src="https://kit.fontawesome.com/a87b92189d.js" crossorigin="anonymous"></script>
    <head>
        <link rel="stylesheet" href="{{ asset('assets/css/homePage.css') }}">
        {{-- <link rel="stylesheet" href="{{ asset('assets/css/button_home.css') }}"> --}}
    </head>
    <body>
        <nav class="content_home">
            <table>
                <td id="recentpost">RECENT POSTS</td>
                <td>
                    <div class="dropdown">
                        <label class="years">Years</label>
                    </div>
                </td>
                <td>
                    <form action="{{url('/search-project')}}" method="GET">
                        @csrf
                        <div class="search_container">
                        <input type="text" class="search" name="search" placeholder="Search project here">
                        <button type="submit" class="search_button" name="btn_search_user">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                    </form>

                </td>
                 <td>
                    <button class="buttonAdvanced">Advanced Search</button>
                 </td>
            </table>

            {{-- หน้าโปรเจค1 --}}
                <div class="project pj_01">
                    <div class="wrapper">
                        <img src="{{url('https://www.bizbloqs.com/wp-content/uploads/2021/09/4.-Warehouse_management_System.jpg')}}" alt="">
                        <img src="{{url('https://f.ptcdn.info/024/035/000/1441102373-vcomsoftwa-o.jpg')}}" alt="Smart Clound System">
                        <img src="{{url('https://www.euroicc.com/eiccFL8d362rvZDy/wp-content/uploads/2018/09/Guest-Room-Management-System-Euroicc-Toccata-Hotel-Management-Application-01.png')}}" alt="Description of the image">
                        <img src="{{url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSgvVCYCTeL5xpVUBxEVmFo2oN-VSpUmS-SuERNy3GpWA&s')}}" alt="Description of the image">
                    </div>
                </div>
                <div class="information_01">
                    <div class="inf_wrapper">
                        <div class="inf_all" id="myDiv01">
                            <script>
                                document.getElementById("myDiv01").addEventListener("click", function() {
                                    window.location.href = "#";
                                });
                            </script>
                            <button type="button" class="star"></i></button>
                            <div class="detail">
                                <h2>WareHouse Management System</h2>
                                <p>Author : ศักดิ์สิทธิ์ อ่อนน้อม</p>
                                <p>Advisor : นาย อภิรติ โคตธารินทร์</p>
                                <div class="btn_tag">
                                    <div class="container_bnt_tag">
                                        <a href="#"><button class="tag1">Tag A</button></a>
                                        <a href="#"><button class="tag2">Tag B</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div inf_all id="myDiv02">
                            <script>
                                document.getElementById("myDiv02").addEventListener("click", function() {
                                    window.location.href = "#";
                                });
                            </script>
                            <button type="button" class="star"></button>
                            <div class="detail">
                                <h2>ระบบจัดการสินค้า</h2>
                                <p>Author : ดวงกมล ลืออริยทรัพย์</p>
                                <p>Advisor : นางสาว ธิดารัตน์ อ่อนสนิท</p>
                                <div class="btn_tag">
                                    <a href="#"><button class="tag1">Tag A</button></a>
                                    <a href="#"><button class="tag2">Tag B</button></a>
                                </div>
                            </div>
                        </div>
                        <div inf_all id="myDiv03">
                            <script>
                                document.getElementById("myDiv03").addEventListener("click", function() {
                                    window.location.href = "#";
                                });
                            </script>
                            <button type="button" class="star"></i></button>
                            <div class="detail">
                                <h2>System</h2>
                                <p>Author : ดวงกมล ลืออริยทรัพย์</p>
                                <p>Advisor : ดวงกมล ลืออริยทรัพย์</p>
                                <div class="btn_tag">
                                    <a href="#"><button class="tag1">Tag A</button></a>
                                    <a href="#><button class="tag2">Tag B</button></a>
                                </div>
                            </div>
                        </div>
                        <div inf_all id="myDiv04">
                            <script>
                                document.getElementById("myDiv04").addEventListener("click", function() {
                                    window.location.href = "#";
                                });
                            </script>
                            <button type="button" class="star"></button>
                            <div class="detail">
                                <h2>System</h2>
                                <p>Author : ดวงกมล ลืออริยทรัพย์</p>
                                <p>Advisor : ดวงกมล ลืออริยทรัพย์</p>
                                <div class="btn_tag">
                                    <a href="#"><button class="tag1">Tag A</button></a>
                                    <a href="#"><button class="tag2">Tag B</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- หน้าโปรเจค2 --}}
                <div class="project pj_02">
                    <div class="wrapper">
                        <img src="{{url('https://www.bizbloqs.com/wp-content/uploads/2021/09/4.-Warehouse_management_System.jpg')}}" alt="">
                        <img src="{{url('https://f.ptcdn.info/024/035/000/1441102373-vcomsoftwa-o.jpg')}}" alt="Smart Clound System">
                        <img src="{{url('https://www.euroicc.com/eiccFL8d362rvZDy/wp-content/uploads/2018/09/Guest-Room-Management-System-Euroicc-Toccata-Hotel-Management-Application-01.png')}}" alt="Description of the image">
                        <img src="{{url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSgvVCYCTeL5xpVUBxEVmFo2oN-VSpUmS-SuERNy3GpWA&s')}}" alt="Description of the image">
                    </div>
                </div>
                <div class="information_02">
                    <div class="inf_wrapper">
                        <div class="inf_all" id="myDiv05">
                            <script>
                                document.getElementById("myDiv05").addEventListener("click", function() {
                                    window.location.href = "#";
                                });
                            </script>
                            <button type="button" class="star"></i></button>
                            <div class="detail">
                                <h2>System</h2>
                                <p>Author : ดวงกมล ลืออริยทรัพย์</p>
                                <p>Advisor : ดวงกมล ลืออริยทรัพย์</p>
                                <div class="btn_tag">
                                    <a href="#"><button class="tag1">Tag A</button></a>
                                    <a href="#"><button class="tag2">Tag B</button></a>
                                </div>
                            </div>
                        </div>
                        <div inf_all id="myDiv06">
                            <script>
                                document.getElementById("myDiv06").addEventListener("click", function() {
                                    window.location.href = "#";
                                });
                            </script>
                            <button type="button" class="star"></button>
                            <div class="detail">
                                <h2>System</h2>
                                <p>Author : เทียนชัย คูเมือง</p>
                                <p>Advisor : เทียนชัย คูเมือง</p>
                                <div class="btn_tag">
                                    <a href="#"><button class="tag1">Tag A</button></a>
                                    <a href="#"><button class="tag2">Tag B</button></a>
                                </div>
                            </div>
                        </div>
                        <div inf_all id="myDiv07">
                            <script>
                                document.getElementById("myDiv07").addEventListener("click", function() {
                                    window.location.href = "#";
                                });
                            </script>
                            <button type="button" class="star"></i></button>
                            <div class="detail">
                                <h2>System</h2>
                                <p>Author : เทียนชัย คูเมือง</p>
                                <p>Advisor : เทียนชัย คูเมือง</p>
                                <div class="btn_tag">
                                    <a href="#"><button class="tag1">Tag A</button></a>
                                    <a href="#"><button class="tag2">Tag B</button></a>
                                </div>
                            </div>
                        </div>
                        <div inf_all id="myDiv08">
                            <script>
                                document.getElementById("myDiv08").addEventListener("click", function() {
                                    window.location.href = "#";
                                });
                            </script>
                            <button type="button" class="star"></button>
                            <div class="detail">
                                <h2>System</h2>
                                <p>Author : เทียนชัย คูเมือง</p>
                                <p>Advisor : เทียนชัย คูเมือง</p>
                                <div class="btn_tag">
                                    <a href="#"><button class="tag1">Tag A</button></a>
                                    <a href="#"><button class="tag2">Tag B</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- หน้าโปรเจค3 --}}
                <div class="project pj_03">
                    <div class="wrapper">
                        <img src="{{url('data:image/jpeg;base64,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')}}">
                        <img src="{{url('https://www.timesys.com/wp-content/uploads/vulnerability-management-IoT-embedded-systems.jpg')}}">
                        <img src="{{url('https://i0.wp.com/iot4beginners.com/wp-content/uploads/2020/10/My-Post-4.png?fit=1200%2C628&ssl=1')}}">
                        <img src="{{url('https://www.telecomreviewafrica.com/images/stories/2023/10/The_Synergy_of_AI_and_IoT_for_a_Smarter_Home.jpg')}}">
                    </div>
                </div>
                <div class="information_03">
                    <div class="inf_wrapper">
                        <div class="inf_all" id="myDiv09">
                            <script>
                                document.getElementById("myDiv09").addEventListener("click", function() {
                                    window.location.href = "#";
                                });
                            </script>
                            <button type="button" class="star"></i></button>
                            <div class="detail">
                                <h2>System</h2>
                                <p>Author : เทียนชัย คูเมือง</p>
                                <p>Advisor : เทียนชัย คูเมือง</p>
                                <div class="btn_tag">
                                    <a href="#"><button class="tag1">Tag A</button></a>
                                    <a href="#"><button class="tag2">Tag B</button></a>
                                </div>
                            </div>
                        </div>
                        <div inf_all id="myDiv10">
                            <script>
                                document.getElementById("myDiv10").addEventListener("click", function() {
                                    window.location.href = "#";
                                });
                            </script>
                            <button type="button" class="star"></button>
                            <div class="detail">
                                <h2>System</h2>
                                <p>Author : เทียนชัย คูเมือง</p>
                                <p>Advisor : เทียนชัย คูเมือง</p>
                                <div class="btn_tag">
                                    <a href="#"><button class="tag1">Tag A</button></a>
                                    <a href="#"><button class="tag2">Tag B</button></a>
                                </div>
                            </div>
                        </div>
                        <div inf_all id="myDiv11">
                            <script>
                                document.getElementById("myDiv11").addEventListener("click", function() {
                                    window.location.href = "#";
                                });
                            </script>
                            <button type="button" class="star"></i></button>
                            <div class="detail">
                                <h2>System</h2>
                                <p>Author : เทียนชัย คูเมือง</p>
                                <p>Advisor : เทียนชัย คูเมือง</p>
                                <div class="btn_tag">
                                    <a href="#"><button class="tag1">Tag A</button></a>
                                    <a href="#"><button class="tag2">Tag B</button></a>
                                </div>
                            </div>
                        </div>
                        <div inf_all id="myDiv12">
                            <script>
                                document.getElementById("myDiv12").addEventListener("click", function() {
                                    window.location.href = "#";
                                });
                            </script>
                            <button type="button" class="star"></button>
                            <div class="detail">
                                <h2>System</h2>
                                <p>Author : เทียนชัย คูเมือง</p>
                                <p>Advisor : เทียนชัย คูเมือง</p>
                                <div class="btn_tag">
                                    <a href="#"><button class="tag1">Tag A</button></a>
                                    <a href="#"><button class="tag2">Tag B</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- หน้าโปรเจค4 --}}
                <div class="project pj_04">
                    <div class="wrapper">
                        <img src="{{url('https://i.pinimg.com/originals/72/2e/d4/722ed4271802efddb517f0d9234ca375.gif')}}">
                        <img src="{{url('https://i.pinimg.com/originals/72/2e/d4/722ed4271802efddb517f0d9234ca375.gif')}}">
                        <img src="{{url('https://i.pinimg.com/originals/19/90/56/1990568ce5b412c9e811103d8a7576a1.gif')}}">
                        <img src="{{url('https://static01.nyt.com/images/2020/12/23/business/23Techfix-illo/23Techfix-illo-superJumbo.gif')}}">
                    </div>
                </div>
                <div class="information_04">
                    <div class="inf_wrapper">
                        <div class="inf_all" id="myDiv13">
                            <script>
                                document.getElementById("myDiv13").addEventListener("click", function() {
                                    window.location.href = "#";
                                });
                            </script>
                            <button type="button" class="star"></i></button>
                            <div class="detail">
                                <h2>System</h2>
                                <p>Author : เทียนชัย คูเมือง</p>
                                <p>Advisor : เทียนชัย คูเมือง</p>
                                <div class="btn_tag">
                                    <a href="#"><button class="tag1">Tag A</button></a>
                                    <a href="#"><button class="tag2">Tag B</button></a>
                                </div>
                            </div>
                        </div>
                        <div inf_all id="myDiv14">
                            <script>
                                document.getElementById("myDiv14").addEventListener("click", function() {
                                    window.location.href = "#";
                                });
                            </script>
                            <button type="button" class="star"></button>
                            <div class="detail">
                                <h2>System</h2>
                                <p>Author : เทียนชัย คูเมือง</p>
                                <p>Advisor : เทียนชัย คูเมือง</p>
                                <div class="btn_tag">
                                    <a href="#"><button class="tag1">Tag A</button></a>
                                    <a href="#"><button class="tag2">Tag B</button></a>
                                </div>
                            </div>
                        </div>
                        <div inf_all id="myDiv15">
                            <script>
                                document.getElementById("myDiv15").addEventListener("click", function() {
                                    window.location.href = "#";
                                });
                            </script>
                            <button type="button" class="star"></i></button>
                            <div class="detail">
                                <h2>System</h2>
                                <p>Author : เทียนชัย คูเมือง</p>
                                <p>Advisor : เทียนชัย คูเมือง</p>
                                <div class="btn_tag">
                                    <a href="#"><button class="tag1">Tag A</button></a>
                                    <a href="#"><button class="tag2">Tag B</button></a>
                                </div>
                            </div>
                        </div>
                        <div inf_all id="myDiv16">
                            <script>
                                document.getElementById("myDiv16").addEventListener("click", function() {
                                    window.location.href = "#";
                                });
                            </script>
                            <button type="button" class="star"></button>
                            <div class="detail">
                                <h2>System</h2>
                                <p>Author : เทียนชัย คูเมือง</p>
                                <p>Advisor : เทียนชัย คูเมือง</p>
                                <div class="btn_tag">
                                    <a href="#"><button class="tag1">Tag A</button></a>
                                    <a href="#"><button class="tag2">Tag B</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

    </body>
@endsection
