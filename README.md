# PHP-JS-Form

An email form with a CAPTCHA-like verification using PHP, JavaScript, and Bootstrap


![form_img01](https://user-images.githubusercontent.com/75646880/109963933-4617f280-7ced-11eb-8fdc-821c09931961.png)

![form_img02](https://user-images.githubusercontent.com/75646880/109963935-47491f80-7ced-11eb-8577-e862ee56163c.png)

![form_img03](https://user-images.githubusercontent.com/75646880/109963938-47e1b600-7ced-11eb-8094-4992c6c8f09b.png)

Main features:
- form in PHP, CAPTCHA in JavaScript (plain), style in Bootstrap and CSS;
- form elements: email, name, surname, subject, message, CAPTCHA, obligatory (terms & conditions) and voluntary (newsletter) checkboxes, submit button;
- all the fields (except for the newsletter checkbox) are obligatory;
- PHP: checking if the boxes are filled in with the correct characters (depending on the box type: only letters; only letters, numbers & chosen punctuation marks); showing error messages if the fields are not correctly filled in; once the form is submitted, the page redirects to success page;
- JavaScript (CAPTCHA): a pop-up "I'm not a robot" box; six images, only one is correct; the images are suffled each time the box is on, but their ids remain the same; to unlock the submit button, CAPTCHA verification must be successful.


INFO: All images & icons by @Anna-Portfolio.
