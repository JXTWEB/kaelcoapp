<head>
    <base href="./">

    
<style>

@import url("https://fonts.googleapis.com/css2?family=Nunito:wght@400;800&display=swap");

:root {
  --main-color: #e7b910;
  --secondary-color: #9bf654;
  --gradient: linear-gradient(
    135deg,
    var(--main-color),
    var(--secondary-color)
  );
}

* {
  box-sizing: border-box;
}

body {
  background: #f6f5f7;
  font-family: "Nunito", sans-serif;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  margin: 1rem 0;
}

h1 {
  font-weight: bold;
  margin: 0;
}

p {
  font-size: 14px;
  font-weight: 100;
  line-height: 20px;
  letter-spacing: 0.5px;
  margin: 20px 0 30px;
}

.social-container {
  margin: 20px 0;
}

.social-container a {
  border: 1px solid #dddddd;
  border-radius: 50%;
  display: inline-flex;
  justify-content: center;
  align-items: center;
  margin: 0 5px;
  height: 40px;
  width: 40px;
}

span {
  font-size: 12px;
}

a {
  color: #333;
  font-size: 14px;
  text-decoration: none;
  margin: 15px 0;
}

button {
  cursor: pointer;
  border-radius: 20px;
  border: 1px solid var(--main-color);
  background: var(--main-color);
  color: #fff;
  font-size: 12px;
  font-weight: bold;
  padding: 12px 45px;
  letter-spacing: 1px;
  text-transform: uppercase;
  transition: transform 80ms ease-out;
}

button:hover {
  background: var(--secondary-color);
}

button:active {
  transform: scale(0.95);
}

button:focus {
  outline: none;
}

button.ghost {
  background-color: transparent;
  border-color: #fff;
}

button.ghost:hover {
  background: #fff;
  color: var(--secondary-color);
}

form {
  background-color: #fff;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  padding: 0 50px;
  height: 100%;
  text-align: center;
}

input {
  background-color: #eee;
  border: none;
  padding: 12px 15px;
  margin: 8px 0;
  width: 100%;
  font-family: inherit;
}

.container {
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
  position: relative;
  overflow: hidden;
  height: 768px;
  width: 480px;
  max-width: 100%;
}

.form-container {
  position: absolute;
  top: 0;
  width: 100%;
  transition: all 0.6s ease-in-out;
}

.sign-in-container {
  top: 0;
  height: 50%;
  z-index: 2;
}

.container.right-panel-active .sign-in-container {
  transform: translateY(100%);
}

.sign-up-container {
  top: 0;
  height: 50%;
  opacity: 0;
  z-index: 1;
}

.container.right-panel-active .sign-up-container {
  transform: translateY(100%);
  opacity: 1;
  z-index: 5;
  animation: show 0.6s;
}

@keyframes show {
  0%,
  49.99% {
    opacity: 0;
    z-index: 1;
  }
  50%,
  100% {
    opacity: 1;
    z-index: 5;
  }
}

.overlay-container {
  position: absolute;
  left: 0;
  top: 50%;
  height: 50%;
  width: 100%;
  overflow: hidden;
  transition: transform 0.6s ease-in-out;
  z-index: 100;
}

.container.right-panel-active .overlay-container {
  transform: translateY(-100%);
}

.overlay {
  background: var(--secondary-color);
  background: var(--gradient);
  background-repeat: no-repeat;
  background-size: cover;
  background-position: 0 0;
  color: #fff;
  position: relative;
  top: -100%;
  width: 100%;
  height: 200%;
  transform: translateY(0);
  transition: transform 0.6s ease-in-out;
}

.container.right-panel-active .overlay {
  transform: translateY(50%);
}

.overlay-panel {
  position: absolute;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  padding: 0 40px;
  text-align: center;
  left: 0;
  width: 100%;
  height: 50%;
  transform: translateY(0);
  transition: transform 0.6s ease-in-out;
}

.overlay-left {
  transform: translateY(-20%);
}

.container.right-panel-active .overlay-left {
  transform: translateY(0);
}

.overlay-right {
  bottom: 0;
  transform: translateY(0);
}

.container.right-panel-active .overlay-right {
  transform: translateY(20%);
}

@media (min-width: 768px) {
  body {
    margin: -20px 0 50px;
  }

  .container {
    width: 768px;
    max-width: 100%;
    height: 480px;
  }

  .form-container {
    top: 0;
    height: 100%;
    width: 50%;
  }

  .sign-in-container {
    left: 0;
    width: 50%;
    height: 100%;
  }

  .container.right-panel-active .sign-in-container {
    transform: translateX(100%);
  }

  .sign-up-container {
    left: 0;
    width: 50%;
    height: 100%;
  }

  .container.right-panel-active .sign-up-container {
    transform: translateX(100%);
  }

  .overlay-container {
    left: 50%;
    top: 0;
    height: 100%;
    width: 50%;
  }

  .container.right-panel-active .overlay-container {
    transform: translateX(-100%);
  }

  .overlay {
    top: 0;
    left: -100%;
    height: 100%;
    width: 200%;
    transform: translateX(0);
  }

  .container.right-panel-active .overlay {
    transform: translateX(50%);
  }

  .overlay-panel {
    top: 0;
    height: 100%;
    width: 50%;
    transform: translateX(0);
  }

  .overlay-left {
    transform: translateX(-20%);
  }

  .container.right-panel-active .overlay-left {
    transform: translateX(0);
  }

  .overlay-right {
    right: 0;
    top: 0;
    left: 50%;
    transform: translateX(0);
  }

  .container.right-panel-active .overlay-right {
    transform: translateX(20%);
  }
}

</style>
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
 </head>

<div class="container" id="container">
      <div class="form-container sign-up-container">
        <form>
 
          <h1>Sign Up</h1>
      
          <input type="text" placeholder="Name" />
          <input type="email" placeholder="Email" />
          <input type="password" placeholder="Password" />
          <button onclick="return false;">Sign Up</button>
        </form>
      </div>
      <div class="form-container sign-in-container">
        <form>
       <img class="avatar-img"   src="KaelcoLogo.jpg" width="120" alt="user@email.com">
          <h1>Sign In </h1>
         
      

          <input type="password" placeholder="Entry Code" />
          <a href="#">Forgot your password?</a>
          <button onclick="return false;">Sign In</button>
        </form>
      </div>
      <div class="overlay-container">
        <div class="overlay">
          <div class="overlay-panel overlay-left">
            <h1>KAELCO APP!</h1>
            <p> login with your kaelco account?</p>
            <button class="ghost" id="signIn">Sign In</button>
          </div>
          <div class="overlay-panel overlay-right">
          <h1>KAELCO APP!</h1>
            <p>register kaelco account ?</p>
            <button class="ghost" id="signUp">Sign Up</button>
          </div>
        </div>
      </div>
    </div>







    <script>

const signUpButton = document.getElementById("signUp");
const signInButton = document.getElementById("signIn");
const container = document.getElementById("container");

signUpButton.addEventListener("click", () => {
  container.classList.add("right-panel-active");
});

signInButton.addEventListener("click", () => {
  container.classList.remove("right-panel-active");
});


    </script>