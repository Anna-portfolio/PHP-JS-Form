<!DOCTYPE html>
<html lang="en">
    <!-- PHP script -->
    <?php include('script.php'); ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="PHP & JS Form">
        <meta name="keywords" content="PHP, JavaScript, form, email, name, data, dropdown list, CAPTCHA, obligatory field, terms and conditions, newsletter">
    <meta name="author" content="@Anna-portfolio">
    <title>PHP & JS Form</title>
    <link rel="icon" href="images/icon.ico" sizes="16x16">
    <!-- JS script -->
    <script src="app.js" defer></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>PHP & JS Form</title>
</head>
<body>
    <div id="header-container">
        <h1>Contact Form</h1>
    </div>
    <form action="index.php" method="POST">
        <div id="form-container" class="mb-3">
            <div class="form-floating mb-3">
                <input type="text" name="email" class="form-control" id="floatingInput" autocomplete="off" value="<?php echo htmlspecialchars($email) ?>" placeholder="name@example.com">
                <label for="floatingInput">Email address *</label>
                <div class="error-warning"><?php echo $errors['email']; ?></div>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="firstName" class="form-control" id="floatingInput" autocomplete="off" value="<?php echo htmlspecialchars($firstName) ?>" placeholder="First Name">
                <label>First Name *</label>
                <div class="error-warning"><?php echo $errors['firstName']; ?></div>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="lastName" class="form-control" id="floatingInput" autocomplete="off" value="<?php echo htmlspecialchars($lastName) ?>" placeholder="Last Name">
                <label for="floatingInput">Last Name *</label>
                <div class="error-warning"><?php echo $errors['lastName']; ?></div>
            </div>
            <div class="form-floating">
                <select class="form-select" name="subject" id="floatingSelect" aria-label="Floating label select example">
                    <option selected><?php echo htmlspecialchars($subject) ?></option>
                    <option value="Products">Products</option>
                    <option value="Services">Services</option>
                    <option value="Job Openings">Job Openings</option>
                    <option value="Other">Other</option>
                </select>
                <label for="floatingSelect">Choose the Subject from the List *</label>
                <div class="error-warning"><?php echo $errors['subject']; ?></div>
            </div>
            <div class="form-floating">
                <textarea class="form-control" name="message" autocomplete="off" value="<?php echo htmlspecialchars($message) ?>" placeholder="Your message" id="floatingTextarea" maxlength="3000"
                    style="height: 100px"></textarea>
                <label for="floatingTextarea">Your message (min: 10 characters, max: 3000 characters) *</label>
                <div class="error-warning"><?php echo $errors['message']; ?></div>
            </div>
            <div id="captcha-container" name="captcha">
                <button type="button" id="captcha-btn"></button>
                <div>I'm not a robot *</div>
                <div class="error-warning" id="captcha-answer"></div>
            </div>
            <div class="form-check"> 
                <input class="form-check-input" type="checkbox" name="terms" value="1" id="flexCheckOne">
                <label class="form-check-label" for="flexCheckOne">
                    I agree to the Company's <span id="terms" title="intentionally left inactive">Terms & Conditions</span> *.
                </label>
                <div class="error-warning"><?php echo $errors['terms']; ?></div>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckTwo">
                <label class="form-check-label" for="flexCheckTwo">
                    I would like to subscribe to the Company's newsletter and get a 15% discount code. I can
                    unsubscribe at any time by clicking a link in the email.
                </label>
                <div class="error-warning"></div>
            </div>
        <div>
        <div id="btn-container" class="col-12">
            <button id="submit-btn" type="submit" name="submit" class="btn btn-warning btn-lg" title="">Submit</button>
        </div>
        <div class="card">
            <h4>Choose the image that is the correct way up:</h4>
            <div id="captcha-pic-container">
                <div class="captcha-pic" id="pic-1"></div>
                <div class="captcha-pic" id="pic-2"></div>
                <div class="captcha-pic" id="pic-3"></div>
                <div class="captcha-pic" id="pic-4"></div>
                <div class="captcha-pic" id="pic-5"></div>
                <div class="captcha-pic" id="pic-6"></div>
            </div>  
        </div>
    </form>
</body>
</html>