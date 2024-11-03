@extends('dashboard.layout.layoutdashboard')
@section('body')
    <style>
        .divmes {
            margin: 100px 0 0 0;
            padding: 20px;
        }

        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-direction: row-reverse;
        }

        .divmes .links {
            width: 350px;
            background: #ddd;
            height: 70vh;
            overflow-y: auto;
            overflow-x: hidden;
            border-radius: 5px;
        }

        .divmes .links ul {
            padding: 0 10px;
        }

        .divmes .links li {
            list-style: none;
            margin: 10px 0;
        }

        .divmes .links li a {
            text-decoration: none;
        }

        .divmes .links .profile {
            display: flex;
            align-items: center;
            justify-content: start;
            background: #ddd;
            border-radius: 5px;
            padding: 5px;
            border-bottom: 1px solid #aaa;
            transition: all 0.4s;
        }

        .divmes .links .profile:hover {
            background: #cecdcd;
        }

        .divmes .links .profile .div-img {
            width: 70px;
            height: 70px;
            border-radius: 50%;
        }

        .divmes .links .profile .div-img img {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            border: 1px solid #1a2035;
        }

        .divmes .div-img {
            position: relative;
        }

        .divmes .div-img .online::after {
            content: "";
            /* padding: 5px; */
            position: absolute;
            bottom: 5px;
            right: 0;
            background: green;
            width: 10px;
            height: 10px;
            border-radius: 50%;
        }

        .divmes .links .profile .text {
            margin: 0 10px;
            color: #1a2035;
        }
    </style>
    <section class="divmes">
        <h3>Messenger</h3>
        <div class="navbar">
            <div>
                <h2>wesam</h2>
            </div>
            <div>
                <nav class="links">
                    <ul>
                        <li>
                            <a href="#">
                                <div class="profile">
                                    <div class="div-img">
                                        <img src="team-4.jpg" alt="" />
                                        <span class="online"></span>
                                    </div>
                                    <div class="text">
                                        <h4>Wesam Shaker</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="profile">
                                    <div class="div-img">
                                        <img src="team-4.jpg" alt="" />
                                        <span class="online"></span>
                                    </div>
                                    <div class="text">
                                        <h4>Wesam Shaker</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="profile">
                                    <div class="div-img">
                                        <img src="team-4.jpg" alt="" />
                                        <span class="online"></span>
                                    </div>
                                    <div class="text">
                                        <h4>Wesam Shaker</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="profile">
                                    <div class="div-img">
                                        <img src="team-4.jpg" alt="" />
                                        <span class="online"></span>
                                    </div>
                                    <div class="text">
                                        <h4>Wesam Shaker</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="profile">
                                    <div class="div-img">
                                        <img src="team-4.jpg" alt="" />
                                        <span class="online"></span>
                                    </div>
                                    <div class="text">
                                        <h4>Wesam Shaker</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="profile">
                                    <div class="div-img">
                                        <img src="team-4.jpg" alt="" />
                                        <span class="online"></span>
                                    </div>
                                    <div class="text">
                                        <h4>Wesam Shaker</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="profile">
                                    <div class="div-img">
                                        <img src="team-4.jpg" alt="" />
                                        <span class="online"></span>
                                    </div>
                                    <div class="text">
                                        <h4>Wesam Shaker</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="profile">
                                    <div class="div-img">
                                        <img src="team-4.jpg" alt="" />
                                        <span class="online"></span>
                                    </div>
                                    <div class="text">
                                        <h4>Wesam Shaker</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="profile">
                                    <div class="div-img">
                                        <img src="team-4.jpg" alt="" />
                                        <span class="online"></span>
                                    </div>
                                    <div class="text">
                                        <h4>Wesam Shaker</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="profile">
                                    <div class="div-img">
                                        <img src="team-4.jpg" alt="" />
                                        <span class="online"></span>
                                    </div>
                                    <div class="text">
                                        <h4>Wesam Shaker</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="profile">
                                    <div class="div-img">
                                        <img src="team-4.jpg" alt="" />
                                        <span class="online"></span>
                                    </div>
                                    <div class="text">
                                        <h4>Wesam Shaker</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="profile">
                                    <div class="div-img">
                                        <img src="team-4.jpg" alt="" />
                                        <span class="online"></span>
                                    </div>
                                    <div class="text">
                                        <h4>Wesam Shaker</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="profile">
                                    <div class="div-img">
                                        <img src="team-4.jpg" alt="" />
                                        <span class="online"></span>
                                    </div>
                                    <div class="text">
                                        <h4>Wesam Shaker</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="profile">
                                    <div class="div-img">
                                        <img src="team-4.jpg" alt="" />
                                        <span class="online"></span>
                                    </div>
                                    <div class="text">
                                        <h4>Wesam Shaker</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
@endsection
