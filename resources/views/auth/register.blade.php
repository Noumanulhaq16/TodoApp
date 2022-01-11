<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from seantheme.com/hud/page_register.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Dec 2021 11:03:22 GMT -->

<head>
    <meta charset="utf-8" />
    <title>ToDo | Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <link href="{{asset('assets/css/vendor.min.css')}}" rel="stylesheet" />
    <link href="assets/css/app.min.css" rel="stylesheet" />

</head>

<body class='pace-top'>

    <div id="app" class="app app-full-height app-without-header">

        <div class="register">

            <div class="register-content">
                @if(Session::has('message'))
                <div class="alert alert-danger alert-block">
                    <strong>{{ Session::get('message') }} </strong>
                </div>
                @endif
                <form action="{{route('register_process')}}" method="POST">
                    @csrf
                    <h1 class="text-center">Sign Up</h1>
                    <p class="text-white text-opacity-50 text-center">TODO APP</p>
                    <div class="mb-3">
                        <label class="form-label">Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control form-control-lg bg-white bg-opacity-5" placeholder="e.g John Smith" name="name" value="" />
                        <span class="alert text-danger alert-block">{{$errors->first('name')}}</span>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email Address <span class="text-danger">*</span></label>
                        <input type="text" class="form-control form-control-lg bg-white bg-opacity-5" placeholder="username@address.com" value="" name="email" />
                        <span class="alert text-danger alert-block">{{$errors->first('email')}}</span>

                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password <span class="text-danger">*</span></label>
                        <input type="password" class="form-control form-control-lg bg-white bg-opacity-5" value="" name="password" />
                        <span class="alert text-danger alert-block">{{$errors->first('password')}}</span>

                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-outline-theme btn-lg d-block w-100">Sign Up</button>
                    </div>
                    <div class="text-white text-opacity-50 text-center">
                        Already have an ID? <a href="{{route('/')}}">Sign In</a>
                    </div>
                </form>
            </div>

        </div>





    </div>


    <script src="{{asset('assets/js/vendor.min.js')}}"></script>
    <script src="{{asset('assets/js/app.min.js')}}"></script>

    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '../../www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-53034621-1', 'auto');
        ga('send', 'pageview');
    </script>
    <script src="../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="d6bcb0c2d186d2541a6d5dea-|49" defer=""></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6c63015618d60c05","version":"2021.12.0","r":1,"token":"4db8c6ef997743fda032d4f73cfeff63","si":100}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from seantheme.com/hud/page_register.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Dec 2021 11:03:22 GMT -->

</html>
