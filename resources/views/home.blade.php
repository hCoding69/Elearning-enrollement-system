<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <link rel="stylesheet" href="/fontawesome-free-6.6.0-web/css/all.min.css">
    <link rel="stylesheet" href="/bootstrap-5.3.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Manrope:wght@200..800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Manrope:wght@200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body>
    <div class="bar">
        <div class="container">

            <div class="up">
                <div class="one">
                    <i class="fa-regular fa-envelope icon"></i>
                    <p class="info">info@skillgrodemo.com</p>
                </div>
                <div class="box">
                    <div class="one">
                        <i class="fa-solid fa-phone icon"></i>
                        <p class="info">Call us:</p>
                        <p class="info">+123 599 8989</p>
                    </div>
                    <div class="one">
                        <i class="fa-regular fa-envelope icon"></i>
                        <p class="info">Follow Us On :</p>
                        <div class="info">
                            <a href="" class="me-2">
                                <i class="fa-brands fa-instagram icon"></i>
                            </a>
                            <a href="" class="me-2">
                                <i class="fa-brands fa-tiktok icon"></i>
                            </a>
                            <a href="" class="me-2">
                                <i class="fa-brands fa-youtube icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="banner">
        <div class="container">
            <div class="content">
                <div class="col-lg-5 col-md-12 con">
                    <p class="prin">Master <strong>Architecture</strong>  Softwares with Our Course!</p>
                    <p class="sec">Every learning journey is unique. We'll guide you through mastering architecture softwares.</p>
                    <div class="text" >
                        <a class="register rounded-pill" href="">Register Now <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="image">
                        <img src="/images/right.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="heading">
        <div class="head">
            <div class="l3eba rounded-pill">
                Course Enrollment
            </div>
            <div class="title">
                Complete Your Registration for the Architecture Software Course
            </div>
            <div class="descTitle">
                To secure your spot in our architecture software course, please provide the required information in the registration form below.
            </div>
        </div>
    </div>
    <form action="{{route("store")}}" method="POST">
        @csrf
        <div class="section">
            <div class="container">
                @if(session('success'))
            <div class="alert alert-success mt-2">
                {{ session('success') }}
            </div>
            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
            @endif
                <div class="grr">


                <div class="form">
                    <div class="input">
                        <label for="">Name</label>
                        <input name="name" type="text" placeholder="Name" required>
                    </div>
                    <div class="input">
                        <label for="">Email</label>
                        <input name="email" type="email" placeholder="Email" required>
                    </div>
                    <div class="input">
                        <label for="">Country</label>
                        <input name= "country" type="text" placeholder="Country" required>
                    </div>
                    <div class="input">
                        <label for="">Phone Number</label>
                        <input name="phone" type="text" placeholder="Phone number" required>
                    </div>
                    <div class="input">
                        <label for="">Occupation</label>
                        <input type="text" name="occupation" placeholder="Student or empolyee" required>
                    </div>
                    <div class="input">
                        <label for="">University Level</label>
                        <input type="text" name="uni" placeholder="University Level" required>
                    </div>
                    <div class="input">
                        <label for="">Software course</label>
                        <select id="" required name="course">
                            <option value="">Choose your Software</option>
                            <option value="1">Revit</option>
                            <option value="2">Autocad</option>
                        </select>
                    </div>
                    <div class="click">
                        <button type="submit" class="rounded-pill ">Join us </button>
                    </div>
                </div>
            </div>
            </div>
        </div>

    </form>
        <div class="foot">
            <div class="container ">
                <div class="bb">
                    <p>©Haytam. All rights reserved.</p>
                    <div class="logos">
                        <a href="" class="me-2">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="" class="me-2">
                            <i class="fa-brands fa-tiktok"></i>
                        </a>
                        <a href="" class="me-2">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                    </div>
                </div>


            </div>

        </div>



    <script src="/fontawesome-free-6.6.0-web/js/all.min.js"></script>
    <script src="/bootstrap-5.3.3-dist/js/bootstrap.js"></script>
</body>
</html>
