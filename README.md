# PHP-JS-Form

An email form with a CAPTCHA-like verification using PHP, JavaScript, and Bootstrap

![form_img01](https://user-images.githubusercontent.com/75646880/109963773-12d56380-7ced-11eb-9ec0-07933aa75232.png)

![form_img02](https://user-images.githubusercontent.com/75646880/109963765-11a43680-7ced-11eb-88e8-238ca536082c.png)

![form_img03](https://user-images.githubusercontent.com/75646880/109963769-123ccd00-7ced-11eb-840b-ac9ed79e9bc7.png)


Main features:
- form in PHP, CAPTCHA in JavaScript (plain), style in Bootstrap and CSS;
- form elements: email, name, surname, subject, message, CAPTCHA, obligatory (terms & conditions) and voluntary (newsletter) checkboxes, submit button;
- all the fields (except for the newsletter checkbox) are obligatory;
- PHP: checking if the boxes are filled in with the correct characters (depending on the box type: only letters; only letters, numbers & chosen punctuation marks); showing error messages if the fields are not correctly filled in; once the form is submitted, the page redirects to success page;
- JavaScript (CAPTCHA): a pop-up "I'm not a robot" box; six images, only one is correct; the images are suffled each time the box is on, but their ids remain the same; to unlock the submit button, CAPTCHA verification must be successful.


INFO: All images & icons by @Anna-Portfolio.
