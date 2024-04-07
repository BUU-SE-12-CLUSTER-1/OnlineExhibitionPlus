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
                    <div class="search_container">
                        <input type="text" class="search" name="search_user" placeholder="Search project here">
                        <button type="submit" class="search_button" name="btn_search_user">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        </button>   
                    </div>
                </td>
                 <td>
                    <button class="buttonAdvanced">Advanced Search</button>
                 </td>
            </table>

            {{-- หน้าโปรเจค1 --}}
                <div class="project pj_01">
                    <div class="wrapper">
                        <img src="{{url('assets\img\testmas\1.jpg')}}">
                        <img src="{{url('assets\img\testmas\5.jpg')}}">
                        <img src="{{url('assets\img\testmas\9.jpg')}}">
                        <img src="{{url('assets\img\testmas\13.jpg')}}">
                    </div>
                </div>
                <div class="information_01">
                    <div class="inf_wrapper">
                        <div class="inf_all">
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
                        <div inf_all>
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
                        <div inf_all>
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
                        <div inf_all>
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
                        <div class="inf_all">
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
                        <div inf_all>
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
                        <div inf_all>
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
                        <div inf_all>
                            <button type="button" class="star"></i></button>
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
                        <div class="inf_all">
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
                        <div inf_all>
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
                        <div inf_all>
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
                        <div inf_all>
                            <button type="button" class="star"></i></button>
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
                        <div class="inf_all">
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
                        <div inf_all>
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
                        <div inf_all>
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
                        <div inf_all>
                            <button type="button" class="star"></i></button>
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
        </div>

    </body>
@endsection


