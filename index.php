<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "poppins",sans-serif;
}
body {
    background-color: #c9d6ff;
    background: linear-gradient(to right, #e2e2e2, #c9d6ff);
}
.container{
    background: #fff;
    width: 450px;
    padding: 1.5rem;
    margin: 50px auto;
    border-radius: 10px;
    box-shadow: 0 20px 35px rgba(0,0,1,0.9);
}
form{
    margin: 0.2rem;
    display: flex;
    flex-direction: column;
    align-items: center;
}
.form-tittle{
    font-size: 1.5rem;
    font-weight: bold;
    text-align: center;
    padding: 1.3rem;
    margin-bottom: 0.4rem;
}
input{
    color: inherit;
    width: 100%;
    background-color: transparent;
    border: none;
    border-bottom: 1px solid #757575;
    padding-left: 1.5rem;
    font-size: 15px;
    margin-top:15px;
}
input:focus{
    background-color: transparent;
    outline: transparent;
    border-bottom: 2px solid hsl(327, 90%, 28%);
}
/* input::placeholder{
    color: transparent;
} */


.or{
    text-align: center;
    font-size: 1.1rem;
    margin-top: 0.5rem;
}
.icons{
    text-align: center;
}
.icons i{
    color: rgb(125, 125, 235);
    padding: 0.8rem 1.5rem;
    border-radius: 10px;
    font-size: 1.5rem;
    cursor: pointer;
    border: 2px solid #dfe9f5;
    margin: 0 15px;
    transition: 1s;
}
.icons i:hover{
    background-color: #07001f;
    font-size: 1.6rem;
    border: 2px solid rgb(125, 125, 235);
}
.links{
    display: flex;
    justify-content: space-around;
    padding: 0 4rem;
    margin-top: 0.9rem;
    font-weight: bold;    
}
button{
    color: rgb(125, 125, 235);
    background-color: transparent;
    border: none;
    font-size: 1rem;
    font-weight: bold;
}
button:hover{
    color: blue;
    text-decoration: underline;
}
.btn{
    color: rgb(255,255,255);
    background-color: rgb(125, 125, 235);
    border: none;
    font-size: 1rem;
    font-weight: bold;
    width: 100%;
    border-radius: 5px;
    padding: 5px 0;
    margin-top: 10px;
}
.btn:hover{
    background-color: #07001f;
    color: rgb(125, 125, 235);
    text-decoration: none;
}

</style>

<body>
    <div class="container" id="signUp" style="display: none;">
        <h1 class="form-tittle">Register</h1>
        <form action="auth/register.php" method="POST">
            <input name="name" placeholder="Name">
            <input name="email" placeholder="Email">
            <input name="password" type="password" placeholder="Password">
            <button class="btn">Register</button>
        </form>
        <p class="or">
            -------------or-------------
        </p>
        <div class="icons">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook"></i>
            <i class="fab fa-twitter"></i>
        </div>
        <div class="links">
            <p>Already Have Account ?</p>
            <button id="signInButton">Sign In</button>
        </div>
    </div>
    
    <div class="container" id="signIn">
        <h1 class="form-tittle">Sign In</h1>
        
        <form action="auth/login.php" method="POST">
            <input name="email" placeholder="Email">
            <input name="password" type="password" placeholder="Password">
            <button class="btn">Login</button>
        </form>
        <p class="or">
            -------------or-------------
        </p>
        <div class="icons">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook"></i>
            <i class="fab fa-twitter"></i>
        </div>
        <div class="links">
            <p>Don't have account yet?</p>
            <button id="signUpButton">Sign Up</button>
        </div>
    </div>



    <script>
        const signUpButton=document.getElementById('signUpButton');
        const signInButton=document.getElementById('signInButton');
        const signInForm=document.getElementById('signIn');
        const signUpForm=document.getElementById('signUp');

        signUpButton.addEventListener('click',function(){
            signInForm.style.display='none';
            signUpForm.style.display='block';
        })

        signInButton.addEventListener('click',function(){
            signUpForm.style.display='none';
            signInForm.style.display='block';
        })

    </script>
</body>

</html>