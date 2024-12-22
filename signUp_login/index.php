<?php 
	include "../includes/header.php";
?>
<div class="sign-login-container">
    <div class="sign-login">
        <div class="login">
            <h1 class="text-secondary text-fonts">Sign In</h1>
            <p>Welcome back! Sign in to your Account</p>
            <div class="form">
                <form action="">
                    <div class="sign-in">
                        <label for="signInEmail">Email Address</label>
                        <input type="email" name="" id="signInEmail" placeholder="Exapmle@email.com*" required>
                    </div>
                    <div class="sign-in">
                        <label for="signInPassword">Password</label>
                        <input type="email" name="" id="signInPassword" placeholder="Password*" required>
                    </div>
                    <div class="check-box">
                        <label><input type="checkbox" required>Remember Me</label>
                        <a href="<?php echo $url?>">Forgot Password</a>
                    </div>
                    <button type="submit" class="button">Login</button>
                </form>
            </div>
        </div>
        <div class="middle-line">
            <div></div>
            <div class="text-secondary">Or</div>
            <div></div>
        </div>
        <div class="sign-up">
            <h1 class="text-secondary text-fonts">Create New Account</h1>
            <p>Create your very own Kilimanjaro Account</p>
            <div class="form">
                <form action="">
                    <input type="text" name="" id="" required placeholder="First Name*">
                    <input type="text" name="" id="" required placeholder="Last Name*">
                    <input type="email" name="" id="" required placeholder="Email*">
                    <input type="tel" name="" id="" required placeholder="Phone Number e.g 0708847326*">
                    <input type="date" name="" id="" required>
                    <input type="password" name="" id="" required placeholder="Password*">
                    <div class="check-box">
                        <label>
                            <input type="checkbox" name="" id="">
                            I authorize Kilimanjaro to send notifications on 
                            SMS/Messages/Promotional/Informational messages
                        </label>
                    </div>
                    <button type="submit" class="button">Submit</button>
                </form>
            </div>
        </div>
    </div>

</div>

<?php 
	include "../includes/footer.php";
?>