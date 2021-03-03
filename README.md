# PHP-JS-Form

An email form with CAPTCHA and checkboxes using PHP, JavaScript, and Bootstrap.

Main features:
- form in PHP, CAPTCHA in JavaScript (plain), style in Bootstrap and CSS;
- form elements: email, name, surname, subject, message, CAPTCHA, obligatory (terms & conditions) and voluntary (newsletter) checkboxes, submit button;
- all the fields (except for the newsletter checkbox) are obligatory;
- PHP: checking if the boxes are filled in with the correct characters (depending on the box type: only letters; only letters, numbers & chosen punctuation marks); showing error messages if the fields are not correctly filled in; once the form is submitted, the page redirects to success page;
- JavaScript (CAPTCHA): a pop-up "I'm not a robot" box; six images, only one is correct; the images are suffled each time the box is on, but their ids remain the same; to unlock the submit button, CAPTCHA verification must be successful.


INFO: All images & icons by @Anna-Portfolio.
