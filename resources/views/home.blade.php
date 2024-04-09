@extends('layouts.layout')
@section('title')
    home | Online Exhibition+
@endsection
@section('content')
<script src="https://kit.fontawesome.com/a87b92189d.js" crossorigin="anonymous"></script>
    <head>
        <link rel="stylesheet" href="{{ asset('assets/css/homePage.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/button_home.css') }}">
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
                    <form action="{{url('/search-project')}}" method="POST">
                        @csrf
                        <div class="search_container">
                        <input type="text" class="search" name="search_project" placeholder="Search project here">
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
                                    <div class="container_bnt_tag">
                                        <a href="/testTag01"><button class="tag1">Tag A</button></a>
                                        <a href="/testTag02"><button class="tag2">Tag B</button></a>
                                    </div>
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
                                    <a href="/testTag01"><button class="tag1">Tag A</button></a>
                                    <a href="/testTag02"><button class="tag2">Tag B</button></a>
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
                                    <a href="/testTag01"><button class="tag1">Tag A</button></a>
                                    <a href="/testTag02"><button class="tag2">Tag B</button></a>
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
                                    <a href="/testTag01"><button class="tag1">Tag A</button></a>
                                    <a href="/testTag02"><button class="tag2">Tag B</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- หน้าโปรเจค2 --}}
                <div class="project pj_02">
                    <div class="wrapper">
                        <img src="{{url('assets\img\testmas\2.jpg')}}">
                        <img src="{{url('assets\img\testmas\6.jpg')}}">
                        <img src="{{url('assets\img\testmas\10.jpg')}}">
                        <img src="{{url('assets\img\testmas\14.jpg')}}">
                    </div>
                </div>
                <div class="information_02">
                    <div class="inf_wrapper">
                        <div class="inf_all" id="myDiv05">
                            <script>
                                document.getElementById("myDiv05").addEventListener("click", function() {
                                    window.location.href = "/testPJ01";
                                });
                            </script>
                            <button type="button" class="star"></i></button>
                            <div class="detail">
                                <h2>System</h2>
                                <p>Author : ปลายุท</p>
                                <p>Advisor : ปลาวัน</p>
                                <div class="btn_tag">
                                    <a href="/testTag01"><button class="tag1">Tag A</button></a>
                                    <a href="/testTag02"><button class="tag2">Tag B</button></a>
                                </div>
                            </div>
                        </div>
                        <div inf_all id="myDiv06">
                            <script>
                                document.getElementById("myDiv06").addEventListener("click", function() {
                                    window.location.href = "/testPJ02";
                                });
                            </script>
                            <button type="button" class="star"></button>
                            <div class="detail">
                                <h2>System</h2>
                                <p>Author : ปลาวิท</p>
                                <p>Advisor : ปลาทู</p>
                                <div class="btn_tag">
                                    <a href="/testTag01"><button class="tag1">Tag A</button></a>
                                    <a href="/testTag02"><button class="tag2">Tag B</button></a>
                                </div>
                            </div>
                        </div>
                        <div inf_all id="myDiv07">
                            <script>
                                document.getElementById("myDiv07").addEventListener("click", function() {
                                    window.location.href = "/testPJ03";
                                });
                            </script>
                            <button type="button" class="star"></i></button>
                            <div class="detail">
                                <h2>System</h2>
                                <p>Author : ปลาวีนา</p>
                                <p>Advisor : ปลาทรี</p>
                                <div class="btn_tag">
                                    <a href="/testTag01"><button class="tag1">Tag A</button></a>
                                    <a href="/testTag02"><button class="tag2">Tag B</button></a>
                                </div>
                            </div>
                        </div>
                        <div inf_all id="myDiv08">
                            <script>
                                document.getElementById("myDiv08").addEventListener("click", function() {
                                    window.location.href = "/testPJ04";
                                });
                            </script>
                            <button type="button" class="star"></button>
                            <div class="detail">
                                <h2>System</h2>
                                <p>Author : ปลาเจรา</p>
                                <p>Advisor : ปลาโฟ</p>
                                <div class="btn_tag">
                                    <a href="/testTag01"><button class="tag1">Tag A</button></a>
                                    <a href="/testTag02"><button class="tag2">Tag B</button></a>
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
                                    window.location.href = "/testPJ01";
                                });
                            </script>
                            <button type="button" class="star"></i></button>
                            <div class="detail">
                                <h2>System</h2>
                                <p>Author : ปลายุท</p>
                                <p>Advisor : ปลาวัน</p>
                                <div class="btn_tag">
                                    <a href="/testTag01"><button class="tag1">Tag A</button></a>
                                    <a href="/testTag02"><button class="tag2">Tag B</button></a>
                                </div>
                            </div>
                        </div>
                        <div inf_all id="myDiv10">
                            <script>
                                document.getElementById("myDiv10").addEventListener("click", function() {
                                    window.location.href = "/testPJ02";
                                });
                            </script>
                            <button type="button" class="star"></button>
                            <div class="detail">
                                <h2>System</h2>
                                <p>Author : ปลาวิท</p>
                                <p>Advisor : ปลาทู</p>
                                <div class="btn_tag">
                                    <a href="/testTag01"><button class="tag1">Tag A</button></a>
                                    <a href="/testTag02"><button class="tag2">Tag B</button></a>
                                </div>
                            </div>
                        </div>
                        <div inf_all id="myDiv11">
                            <script>
                                document.getElementById("myDiv11").addEventListener("click", function() {
                                    window.location.href = "/testPJ03";
                                });
                            </script>
                            <button type="button" class="star"></i></button>
                            <div class="detail">
                                <h2>System</h2>
                                <p>Author : ปลาวีนา</p>
                                <p>Advisor : ปลาทรี</p>
                                <div class="btn_tag">
                                    <a href="/testTag01"><button class="tag1">Tag A</button></a>
                                    <a href="/testTag02"><button class="tag2">Tag B</button></a>
                                </div>
                            </div>
                        </div>
                        <div inf_all id="myDiv12">
                            <script>
                                document.getElementById("myDiv12").addEventListener("click", function() {
                                    window.location.href = "/testPJ04";
                                });
                            </script>
                            <button type="button" class="star"></button>
                            <div class="detail">
                                <h2>System</h2>
                                <p>Author : ปลาเจรา</p>
                                <p>Advisor : ปลาโฟ</p>
                                <div class="btn_tag">
                                    <a href="/testTag01"><button class="tag1">Tag A</button></a>
                                    <a href="/testTag02"><button class="tag2">Tag B</button></a>
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
                                    window.location.href = "/testPJ01";
                                });
                            </script>
                            <button type="button" class="star"></i></button>
                            <div class="detail">
                                <h2>System</h2>
                                <p>Author : ปลายุท</p>
                                <p>Advisor : ปลาวัน</p>
                                <div class="btn_tag">
                                    <a href="/testTag01"><button class="tag1">Tag A</button></a>
                                    <a href="/testTag02"><button class="tag2">Tag B</button></a>
                                </div>
                            </div>
                        </div>
                        <div inf_all id="myDiv14">
                            <script>
                                document.getElementById("myDiv14").addEventListener("click", function() {
                                    window.location.href = "/testPJ02";
                                });
                            </script>
                            <button type="button" class="star"></button>
                            <div class="detail">
                                <h2>System</h2>
                                <p>Author : ปลาวิท</p>
                                <p>Advisor : ปลาทู</p>
                                <div class="btn_tag">
                                    <a href="/testTag01"><button class="tag1">Tag A</button></a>
                                    <a href="/testTag02"><button class="tag2">Tag B</button></a>
                                </div>
                            </div>
                        </div>
                        <div inf_all id="myDiv15">
                            <script>
                                document.getElementById("myDiv15").addEventListener("click", function() {
                                    window.location.href = "/testPJ03";
                                });
                            </script>
                            <button type="button" class="star"></i></button>
                            <div class="detail">
                                <h2>System</h2>
                                <p>Author : ปลาวีนา</p>
                                <p>Advisor : ปลาทรี</p>
                                <div class="btn_tag">
                                    <a href="/testTag01"><button class="tag1">Tag A</button></a>
                                    <a href="/testTag02"><button class="tag2">Tag B</button></a>
                                </div>
                            </div>
                        </div>
                        <div inf_all id="myDiv16">
                            <script>
                                document.getElementById("myDiv16").addEventListener("click", function() {
                                    window.location.href = "/testPJ04";
                                });
                            </script>
                            <button type="button" class="star"></button>
                            <div class="detail">
                                <h2>System</h2>
                                <p>Author : ปลาเจรา</p>
                                <p>Advisor : ปลาโฟ</p>
                                <div class="btn_tag">
                                    <a href="/testTag01"><button class="tag1">Tag A</button></a>
                                    <a href="/testTag02"><button class="tag2">Tag B</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

    </body>
@endsection
