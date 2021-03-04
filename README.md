# PHP-JS-Form

An email form with a CAPTCHA-like verification using PHP, JavaScript, and Bootstrap


![form_img01](https://user-images.githubusercontent.com/75646880/109962642-bb82c380-7ceb-11eb-936f-aceaef6f8387.png)

![form_img02](https://user-images.githubusercontent.com/75646880/109962645-bc1b5a00-7ceb-11eb-920a-cb886159b03a.png)

![form_img03](https://user-images.githubusercontent.com/75646880/109962652-bcb3f080-7ceb-11eb-85ed-6bac057555be.png)


Main features:
- form in PHP, CAPTCHA in JavaScript (plain), style in Bootstrap and CSS;
- form elements: email, name, surname, subject, message, CAPTCHA, obligatory (terms & conditions) and voluntary (newsletter) checkboxes, submit button;
- all the fields (except for the newsletter checkbox) are obligatory;
- PHP: checking if the boxes are filled in with the correct characters (depending on the box type: only letters; only letters, numbers & chosen punctuation marks); showing error messages if the fields are not correctly filled in; once the form is submitted, the page redirects to success page;
- JavaScript (CAPTCHA): a pop-up "I'm not a robot" box; six images, only one is correct; the images are suffled each time the box is on, but their ids remain the same; to unlock the submit button, CAPTCHA verification must be successful.


INFO: All images & icons by @Anna-Portfolio.
