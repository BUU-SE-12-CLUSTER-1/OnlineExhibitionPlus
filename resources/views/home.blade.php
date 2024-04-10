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
                        <img src="{{url('assets\img\testmas\3.jpg')}}">
                        <img src="{{url('assets\img\testmas\7.jpg')}}">
                        <img src="{{url('assets\img\testmas\11.jpg')}}">
                        <img src="{{url('assets\img\testmas\15.jpg')}}">
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
                        <img src="{{url('assets\img\testmas\4.jpg')}}">
                        <img src="{{url('assets\img\testmas\8.jpg')}}">
                        <img src="{{url('assets\img\testmas\12.jpg')}}">
                        <img src="{{url('assets\img\testmas\16.jpg')}}">
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
