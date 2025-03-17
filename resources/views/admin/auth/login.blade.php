<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url("{{ asset('storage/images/close-up-hand-holding-palm-leaf-white-background.jpg') }}");
            background-size: cover; /* Ensures the image covers the whole area */
            background-repeat: no-repeat; /* Avoid tiling the image */
            background-position: center center;
            
        }
        .login-form {
            width: 360px;
        }
    </style>
</head>
<body>
    <div class="login-form">
        <form action="{{ route('login') }}" method="post" novalidate>
            @csrf()
            <div class="mb-3">
                <label for="" class="form-label">Email</label>
                <input type="text" class="form-control border" name="email">
                <p class="text-danger">{{ $errors->first('email') }}</p>
            </div>
            <div class="mb-4">
                <label for="" class="form-label">Password</label>
                <input type="password" class="form-control border" name="password">
                <p class="text-danger">{{ $errors->first('password') }}</p>
            </div>
            <div class="mb-3">
                <button class="btn btn-danger w-100">Login</button>
            </div>
            <div class="mb-3 text-center">
                <p>__________    Or    __________</p>
            </div>
            <div class="mb-2">
                <a href="{{ route('auth.google') }}" class="btn border-secondary  d-flex justify-content-center align-items-center gap-3">
                    <span>
                        <svg width="24" height="24" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="chrome">
                            <g id="chrome_2" clip-path="url(#clip0_790_446)">
                            <path id="Vector" d="M50 74.9895C63.8071 74.9895 75 63.7966 75 49.9895C75 36.1824 63.8071 24.9895 50 24.9895C36.1929 24.9895 25 36.1824 25 49.9895C25 63.7966 36.1929 74.9895 50 74.9895Z" fill="white"/>
                            <path id="Vector_2" d="M50 25.0005H93.2942C88.9071 17.3992 82.596 11.0869 74.9955 6.69838C67.3951 2.30985 58.7731 -0.000246019 49.9967 0.000366333C41.2202 0.000978684 32.5986 2.31228 24.9988 6.70187C17.3989 11.0915 11.0887 17.4046 6.7027 25.0065L28.3498 62.5005L28.3692 62.4955C26.1671 58.6981 25.005 54.3873 25.0001 49.9977C24.9951 45.608 26.1475 41.2946 28.3411 37.4923C30.5346 33.69 33.6918 30.5332 37.4943 28.3401C41.2968 26.147 45.6103 24.995 50 25.0005Z" fill="url(#paint0_linear_790_446)"/>
                            <path id="Vector_3" d="M50 69.7922C60.9306 69.7922 69.7916 60.9312 69.7916 50.0005C69.7916 39.0699 60.9306 30.2089 50 30.2089C39.0693 30.2089 30.2083 39.0699 30.2083 50.0005C30.2083 60.9312 39.0693 69.7922 50 69.7922Z" fill="#1A73E8"/>
                            <path id="Vector_4" d="M71.6485 62.5065L50.0014 100C58.7779 100.002 67.3999 97.6922 75.0007 93.3042C82.6014 88.9163 88.9129 82.6045 93.3006 75.0036C97.6882 67.4026 99.9974 58.7805 99.9958 50.0041C99.9942 41.2276 97.682 32.6063 93.2917 25.007H49.9977L49.9925 25.0263C54.3822 25.0179 58.6965 26.1668 62.5005 28.3573C66.3046 30.5479 69.4639 33.7026 71.66 37.5034C73.8561 41.3042 75.0114 45.6168 75.0094 50.0065C75.0074 54.3962 73.8481 58.7077 71.6485 62.5065Z" fill="url(#paint1_linear_790_446)"/>
                            <path id="Vector_5" d="M28.3512 62.5069L6.70414 25.0129C2.31482 32.6129 0.00380611 41.2346 0.00347904 50.0111C0.00315197 58.7875 2.31352 67.4094 6.70228 75.0097C11.091 82.61 17.4035 88.9209 25.0049 93.3078C32.6063 97.6947 41.2287 100.003 50.0052 100L71.6523 62.5065L71.6383 62.4923C69.4507 66.2981 66.2985 69.4598 62.4994 71.6589C58.7003 73.858 54.3886 75.0167 49.999 75.0182C45.6093 75.0197 41.2968 73.8639 37.4963 71.6674C33.6957 69.4708 30.5414 66.3112 28.3512 62.5069Z" fill="url(#paint2_linear_790_446)"/>
                            </g>
                            </g>
                            <defs>
                            <linearGradient id="paint0_linear_790_446" x1="6.7027" y1="31.2505" x2="93.2942" y2="31.2505" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#D93025"/>
                            <stop offset="1" stop-color="#EA4335"/>
                            </linearGradient>
                            <linearGradient id="paint1_linear_790_446" x1="43.1706" y1="99.332" x2="86.4664" y2="24.3415" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#FCC934"/>
                            <stop offset="1" stop-color="#FBBC04"/>
                            </linearGradient>
                            <linearGradient id="paint2_linear_790_446" x1="55.4127" y1="96.8786" x2="12.1169" y2="21.8879" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#1E8E3E"/>
                            <stop offset="1" stop-color="#34A853"/>
                            </linearGradient>
                            <clipPath id="clip0_790_446">
                            <rect width="100" height="100" fill="white" transform="translate(0 0.000488281)"/>
                            </clipPath>
                            </defs>
                        </svg>
                    </span>
                    Sign in with google
                </a>
            </div>
        </form>
    </div>
</body>
</html>