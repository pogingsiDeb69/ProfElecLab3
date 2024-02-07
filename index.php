<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Formatting</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!--header-->
    <header class="header-fix">
        <div class="header-container">
            <h1><i class="fa fa-table"></i>Forms</h1>
        </div>
    </header>
    <div class="container">
        <!--first section-->
        <section class="first" id="first-section">
            <aside class="aside">
                <h2><i class="fa fa-question">Info</i></h2>
                <ul>
                    <li>method:POST</li>
                    <li>Mandatory field</li>
                    <li>Standard field: text and password</li>
                    <li>Checkbox: checkbox</li>
                    <li>Standard button: submit</li>
                </ul>

            </aside>
            <article>
                <h2>Login Form</h2>
                <p class="marginbot50">Standard form to enter these login credentials:</p>

                <form action="#first-section" method="POST" name="form">
                    <div>
                        <label for="username">Enter your username:</label>
                        <input type="text" name="username" id="username">
                    </div>
                    <div>
                        <label for="password">Enter your password: </label>
                        <input type="password" name="password" id="password">
                        <br>
                    </div>
                    <div>
                        <br>
                        <label>
                            <input type="checkbox" name="check" id="check">Remember Me
                        </label>
                    </div>
                    <div class="align-right">
                        <label></label>
                        <input type="submit" name="login-form" value="Login">
                    </div>
                </form>


                <?php if (!empty($_POST) && $_POST['login-form']) { ?>
                    <div class="result">
                        <b>Values returned by the form:</b><br>
                        <ul>
                            <?php foreach ($_POST as $key => $value) {
                                echo '<li>' . $key . ' =>' . $value . '</li>';
                            } ?>
                        </ul>
                    </div>
                <?php } ?>
            </article>
        </section>
        <hr>
        <section class="second" id="second-section">
            <aside class="aside">
                <h2><i class="fa fa-question">Info</i></h2>
                <ul>
                    <li>method:POST</li>
                    <li>Mandatory field</li>
                    <li>File sending</li>
                    <li>Standard field: text, email, date, file and password</li>
                    <li>Radio button: submit</li>
                    <li>Standard button: submit</li>
                </ul>

            </aside>
            <article>
                <h2>Registration Form</h2>
                <p class="marginbot50">Standard form for <strong>online registration</strong> on a website:</p>

                <form action="#second-section" method="POST" class="form-element" name="form" enctype="multipart/form-data">
                    <div>
                        <label for="gender" class="required" >Enter your <strong>Gender</strong>: </label>
                        <input type="radio" name="gender" id="F" value="F" required>Female
                        <input type="radio" name="gender" id="M"  value="M">Male
                    </div>
                    <div>
                        <label for="lastname" class="required">Enter your <strong>Lastname</strong>:</label>
                        
                        <input type="text" id="lastname" name="lastname" required>
                    </div>
                    <div>
                    <label for="firstname" class="required">Enter your <strong>First name</strong>:</label>
                    
                        <input type="text" id="firstname" name="firstname" required>
                    </div>
                    <div>
                    <label for="date">Enter your <strong>Date of Birth</strong>:</label>
                    <label></label>
                       <input type="date" name="date" id="date">
                    </div>
                    <div>
                    <label for="photo">Enter your <strong>photo</strong>:</label>
                    <label></label>
                       <input type="file" name="photo" id="photo">
                    </div>
                    <div>
                    <label for="mail" class="required">Enter your <strong>Email address</strong>:</label>
                    
                       <input type="email" name="mail" id="mail" required>
                    </div>
                    <div>
                    <label for="pwrd" class="required">Enter your <strong>Password</strong>:</label>
                    
                       <input type="password" name="pwrd" id="pwrd" required>
                    </div>
                    <div>
                    <label for="re-pwrd" class="required"><strong>Confirm</strong> your Password:</label>
                
                       <input type="password" name="re-pwrd" id="re=pwrd" >
                    </div>
                    <div>
                   <span class="mandatory">* mandatory fields</span>
                    </div>
                    <div>
                        <label></label>
                        <label></label>
                        <label>
                            <input type="checkbox" name="tos" id="check" value="ok" required>Accept TOS
                        </label>
                    </div>
                    <div class="align-right">
                        <label></label>
                        <label></label>
                        <input type="submit" name="register-form" value="Registration" required>
                    </div>
                </form>

                <?php if (!empty($_POST) && $_POST['register-form']) { ?>
                    <div class="result">
                        <b>Values returned by the form:</b><br>
                        <ul>
                            <?php foreach ($_POST as $key => $value) {
                                echo '<li>' . $key . ' =>' . $value . '</li>';
                            } ?>
                        </ul>
                        <b>Image Preview</b><br>
                        <?php
                            include("upload.php");

                        ?>
                    </div>
                <?php } ?>
            </article>
        </section>
                            <hr>
        <section class="third" id="third-section">
            <aside class="aside">
                <h2><i class="fa fa-question">Info</i></h2>
                <ul>
                    <li>method:POST</li>
                    <li>Mandatory fields</li>
                    <li>Placeholder attribute</li>
                    <li>Maxlength and minlength attributes</li>
                    <li>Textarea</li>
                    <li>Standard button: submit</li>
                </ul>

            </aside>
            <article>
                <h2>Contact Form</h2>
                <p class="marginbot50">Standard form for making an <strong>information request</strong> on a website:</p>

                <form action="#third-section" method="POST" class="form-element" name="form">
                <div>
                        <label for="dep" >Department you wish to contact: </label>
                        <span class="mandatory">*</span>
                        <select name="department" id="dep" name="dep">
                            <option value="" default>Select....</option>
                            <option value="sales">Sales Department</option>
                            <option value="comm">Communication Department</option>
                            <option value="tech">Technical Department</option>
                        </select>
                    </div>
                    <div>
                        <label for="title">Enter a <strong>Title</strong>:</label>
                        <span class="mandatory">*</span>
                        <input type="text" name="title" id="title" minlength=20 placeholder="More than 20 characters">
                    </div>

                    <div>
                    <label for="question">Enter your <strong>Question</strong>:</label>
                    <span class="mandatory">*</span>
                       <textarea name="question" id="question" cols="30" rows="10" maxlength="1000" placeholder="Maximum 1000 characters..."></textarea>
                    </div>
                    <div>
                        <label for="eadd">Enter your <strong>Email address</strong>:</label>
                        <span class="mandatory">*</span>
                        <input type="email" name="eadd" id="eadd" placeholder="Your email.">
                    </div>
                    <div class="align-right">
                        <label></label>
                        <label></label>
                        <input type="submit" name="contact-form" value="Contact" required>
                    </div>
                </form>

                <?php if (!empty($_POST) && $_POST['contact-form']) { ?>
                    <div class="result">
                        <b>Values returned by the form:</b><br>
                        <ul>
                            <?php foreach ($_POST as $key => $value) {
                                echo '<li>' . $key . ' =>' . $value . '</li>';
                            } ?>
                        </ul>
                    </div>
                <?php } ?>
            </article>
        </section>

    </div>


</body>

</html>
