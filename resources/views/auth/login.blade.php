<DOCTYPE! html>
    <html>
        <head>
            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
            <style>
                body {
                font-family: 'Nunito', sans-serif;
                background-image: url("https://i.pinimg.com/564x/28/0f/e4/280fe4f5d710c7d8a70983bb33fa2038.jpg");
            }
                .emailtext {
                    font-size:20px;
                    color:#FE929F;
                    font-family: cursive;
                    
            }
                .header {
                    background-color: #FE929F;
                    padding: 30px 40px;
                    color: white;
                    text-align: center;
 
                }
                .Chad {
                    width: 300px;
                    padding: 55px;
                    margin: auto;
                    margin-top: 60;
                    background-color: #FFFFFF;
                    border-radius:10px;
                }
                .emailbox{
                    width: 300px;
                    height: 40px;
                    border-radius:10px;
                    border:white;
                    
                    
                }

                .passbox{
                    width: 300px;
                    height: 40px;
                    background-color:white;
                    border-radius:10px;
                    border:white;
                }
                .passtext{
                    font-size:20px;
                    color:#FE929F; 
                    font-family: cursive;  
                }
                .login_bt{
                    margin-left:100px;
                    margin-top:20px;
                    background-color: #D5D2C1;
                    border: none;
                    color: #FE929F;
                    padding: 15px 32px;
                    text-align: center;
                    text-decoration: none;
                    display: inline-block;
                    font-size: 16px;
                    font-family: cursive;
                }
                .rememb{
                    color:#a5815f;
                }
                .forgot_bt{
                    color:#EE22B2;
                }
                .logo{
                    width: 250px;
                    height: 250px;
                    margin-left:825px;
                }
            </style>
        </head>
        
        <div id="myDIV" class="header">
            <h2 style="margin:5px font-family: cursive; font-size: 3em; font-weight: bold;  text-shadow:3px 3px rgb(121, 18, 18); ">Thanyaporn's Portfolio</h2>
  
        </div>
   

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <div class="Chad">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="emailtext">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <br>  
                <x-jet-input id="email" class="emailbox block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="passtext">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <br>
                <x-jet-input id="password" class="passbox block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="rememb flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="forgot_bt underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
                <br>
                
                <x-jet-button class="login_bt">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </div>    
        </form>
    