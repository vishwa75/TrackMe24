<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vision Secure Vault</title>
    <link rel="stylesheet" href="<?=base_url()?>css/styles.css?v=1.0">
    <script src="<?=base_url()?>js/jquery-3.7.1.js"></script>
</head>
<body>
<script>
console.log("jQuery version:", jQuery.fn.jquery);
</script>
    <div>
        <section class="grid grid-cols-12">
            <div id="left" class="col-start-1 col-end-7 w-full bg-gray-300" style="background-image: url('<?=base_url()?>/sl4.webp'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                <div class="grid place-items-center h-screen">
                    <!-- <h1 class="text-5xl">Login &#8594;</h1> -->
                </div>
            </div>
            <div id="right" class="flex items-center justify-center col-start-7 col-end-13 bg-white">
                <div id="changeToRegister" class="flex justify-center items-center px-20 min-h-screen min-w-full text-xl">
                    <div class="flex flex-col min-w-full">
                        <div>
                            <form action="login" class="mx-auto w-2/3" id="loginForm">
                                <div class="text-3xl flex justify-center">Login Here</div>
                                <div class="flex">
                                    <input class="w-full flex-1 p-3 mt-8 border-t-0 border-r-0 border-l-0 border-b-2 border-gray-400 placeholder-gray-600 text-lg font-normal rounded-t-lg" type="text" id="username" name="username" placeholder="User Name" />
                                </div>
                                <div class="flex">
                                    <input class="w-full flex-1 p-3 mt-8 border-t-0 border-r-0 border-l-0 border-b-2 border-gray-400 placeholder-gray-600 text-lg font-normal rounded-t-lg" type="password" id="password" name="password" placeholder="Password" />
                                </div>
                                <div class="flex justify-center">
                                    <button class="w-full flex justify-center items-center rounded-lg bg-purple-600 hover:bg-green-700 mt-12 py-2 font-bold text-white" type="submit">Login</button>
                                </div>
                            </form>
                        </div>
                        <div>
                        <div class="text-xl mt-6 flex flex-col justify-center items-center space-y-3">
                            <div id="errorMessage"></div>
                            <a href="#">Forget your Password?</a>
                            <p id="register" class="text-lg cursor-pointer">Register User</p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script>
    $(document).ready(function() {
        $('#loginForm').submit(function(event) {
            event.preventDefault();
            var formData = $(this).serialize();
            $.ajax({
                type: 'POST',
                url: '<?= base_url('login') ?>',
                data: formData,
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        window.location.href = '<?= base_url('dashboard')?>';
                    } else {
                        $('#errorMessage').text(response.error).addClass('text-red-500').slideDown();
                        setTimeout(function() {
                            $('#errorMessage').slideUp();
                        }, 3000);
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                }
            });
        });

        $('#registerForm').submit(function(event){
            event.preventDefault();
            var registerData = $(this).serialize();
            if(registerValidation()){
                $.ajax({
                type: 'POST',
                url: '<?= base_url('register') ?>',
                data: registerData,
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        window.location.href = '<?= base_url('login')?>';
                    } else {
                        $('#errorMessage').text(response.error).addClass('text-red-500').slideDown();
                        setTimeout(function() {
                            $('#errorMessage').slideUp();
                        }, 3000);
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                }
            });
            }
        })

        function showRegisterForm() {
            $('#changeToRegister').fadeOut(500, function() {
                $('#changeToRegister').html(`
                    <div class="flex justify-center items-center min-h-screen min-w-full text-xl">
                        <div class="flex flex-col min-w-full">
                            <div>
                                <form action="register" class="mx-auto w-full" id="registerForm">
                                    <div class="text-3xl flex justify-center mb-8">Register</div>
                                    
                                    <!-- 4x2 grid layout -->
                                    <div class="grid grid-cols-2 gap-6">
                                        <div class="flex flex-col">
                                            <input class="w-full p-3 border-t-0 border-r-0 border-l-0 border-b-2 border-gray-400 placeholder-gray-600 text-lg font-normal rounded-t-lg" 
                                                type="text" id="reg_username" name="username" placeholder="User Name" />
                                            <div id="UserNameErrorMessage"></div>
                                        </div>
                                        <div class="flex flex-col">
                                            <input class="w-full p-3 border-t-0 border-r-0 border-l-0 border-b-2 border-gray-400 placeholder-gray-600 text-lg font-normal rounded-t-lg" 
                                                type="email" id="reg_email" name="email" placeholder="Email" />
                                            <div id="emailErrorMessage"></div>
                                        </div>
                                        <div class="flex flex-col">
                                            <input class="w-full p-3 border-t-0 border-r-0 border-l-0 border-b-2 border-gray-400 placeholder-gray-600 text-lg font-normal rounded-t-lg" 
                                                type="password" id="reg_password" name="password" placeholder="Password" />
                                            <div id="passwordErrorMessage"></div>
                                        </div>
                                        <div class="flex flex-col">
                                            <input class="w-full p-3 border-t-0 border-r-0 border-l-0 border-b-2 border-gray-400 placeholder-gray-600 text-lg font-normal rounded-t-lg" 
                                                type="password" id="reg_confirmPassword" name="confirmPassword" placeholder="Confirm Password" />
                                            <div id="confirmPasswordErrorMessage"></div>
                                        </div>
                                        <div class="flex flex-col">
                                            <input class="w-full p-3 border-t-0 border-r-0 border-l-0 border-b-2 border-gray-400 placeholder-gray-600 text-lg font-normal rounded-t-lg" 
                                                type="text" id="reg_phone" name="phone" placeholder="Phone Number" />
                                            <div id="PhoneErrorMessage"></div>
                                        </div>
                                        <div class="flex flex-col">
                                            <input class="w-full p-3 border-t-0 border-r-0 border-l-0 border-b-2 border-gray-400 placeholder-gray-600 text-lg font-normal rounded-t-lg" 
                                                type="text" id="reg_DOB" name="DOB" placeholder="Date Of Birth" />
                                            <div id="DOBErrorMessage"></div>
                                        </div>
                                        <div class="flex flex-col">
                                            <input class="w-full p-3 border-t-0 border-r-0 border-l-0 border-b-2 border-gray-400 placeholder-gray-600 text-lg font-normal rounded-t-lg" 
                                                type="text" id="reg_Country" name="Country" placeholder="Country" />
                                            <div id="CountryErrorMessage"></div>
                                        </div>
                                        <div class="flex flex-col">
                                            <input class="w-full p-3 border-t-0 border-r-0 border-l-0 border-b-2 border-gray-400 placeholder-gray-600 text-lg font-normal rounded-t-lg" 
                                                type="text" id="reg_state" name="State" placeholder="State" />
                                            <div id="StateErrorMessage"></div>
                                        </div>
                                    </div>

                                    <div class="flex justify-center">
                                        <button class="w-1/2 flex justify-center items-center rounded-lg bg-purple-600 hover:bg-green-700 mt-12 py-2 font-bold text-white" type="submit">Register</button>
                                    </div>

                                    <div class="flex justify-center mt-6">
                                        <p id="backToLogin" class="text-lg cursor-pointer">Back To Login</p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                `).fadeIn(500, function() {
                    // Re-attach the event listener after the form is inserted
                    $('#backToLogin').on('click', function() {
                        showLoginForm();
                    });
                });
            });
        }

        // Function to display the login form
        function showLoginForm() {
            $('#changeToRegister').fadeOut(500, function() {
                $('#changeToRegister').html(`
                    <div class="flex justify-center items-center px-20 min-h-screen min-w-full text-xl">
                        <div class="flex flex-col min-w-full ">
                            <div>
                                <form action="login" class="mx-auto w-2/3" id="loginForm">
                                    <div class="text-3xl flex justify-center">Login Here</div>
                                    <div class="flex">
                                        <input class="w-full flex-1 p-3 mt-8 border-t-0 border-r-0 border-l-0 border-b-2 border-gray-400 placeholder-gray-600 text-lg font-normal rounded-t-lg" type="text" id="username" name="username" placeholder="User Name" />
                                    </div>
                                    <div class="flex">
                                        <input class="w-full flex-1 p-3 mt-8 border-t-0 border-r-0 border-l-0 border-b-2 border-gray-400 placeholder-gray-600 text-lg font-normal rounded-t-lg" type="password" id="password" name="password" placeholder="Password" />
                                    </div>
                                    <div class="flex justify-center">
                                        <button class="w-full flex justify-center items-center rounded-lg bg-purple-600 hover:bg-green-700 mt-12 py-2 font-bold text-white" type="submit">Login</button>
                                    </div>
                                </form>
                            </div>
                            <div>
                            <div class="text-xl mt-6 flex flex-col justify-center items-center space-y-3">
                                <div id="errorMessage"></div>
                                <a href="#">Forget your Password?</a>
                                <p id="register" class="text-lg cursor-pointer">Register User</p>
                            </div>
                            </div>
                        </div>
                    </div>
                `).fadeIn(500, function() {
                    // Re-attach the event listener for the register button
                    $('#register').on('click', function() {
                        showRegisterForm();
                    });
                });
            });
        }

        // Initial event listener for the register button
        $('#register').on('click', function() {
            showRegisterForm();
        });

        // AJAX form submission handling for login
        $('#loginForm').submit(function(event) {
            event.preventDefault();
            var formData = $(this).serialize();
            $.ajax({
                type: 'POST',
                url: '<?= base_url('login') ?>',
                data: formData,
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        window.location.href = '<?= base_url('dashboard')?>';
                    } else {
                        $('#errorMessage').text(response.error).addClass('text-red-500').slideDown();
                        setTimeout(function() {
                            $('#errorMessage').slideUp();
                        }, 3000);
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                }
            });
        });
    });
    </script>
</body>
</html>
