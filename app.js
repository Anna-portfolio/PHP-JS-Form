let captchaPic = document.querySelector("#captcha-pic-container").children;
let captchaPicContainer = document.getElementById("captcha-pic-container");
let captchaAnswer = document.getElementById("captcha-answer");
let captchaBtn = document.getElementById("captcha-btn");
let captchaCard = document.querySelector(".card");
let submitBtn = document.getElementById("submit-btn");

let picArray = [];
let randomArray = [];

window.onload = function () {
    submitBtn.disabled = true;
    submitBtn.style.backgroundColor = "#b7b7b7";
    submitBtn.style.borderColor = "#000000";
};

for (let i = 0; i < captchaPic.length; i++) {
    picArray.push(captchaPic[i]);
    randomArray.push(captchaPic[i]);
}

function getCaptchaContainer() {
    captchaBtn.addEventListener("click", () => {
        captchaCard.classList.toggle("card-display");
    });
}

getCaptchaContainer();

//gets a random order of CAPTCHA images (ids remain the same)
function randomPic() {
    for (let j = 0; j < randomArray.length; j++) {
        captchaPicContainer.appendChild(
            randomArray.splice(
                Math.floor(Math.random() * randomArray.length),
                1,
            )[0],
        );
    }
}

randomPic();

function captchaClick() {
    let correctAnswer = picArray[0];
    correctAnswer.addEventListener("click", () => {
        captchaAnswer.innerText = "";
        captchaAnswer.style.color = "rgb(5, 222, 67)";
        captchaCard.classList.remove("card-display");
        captchaBtn.classList.add("captcha-confirmed-background");
        captchaBtn.disabled = true;
        submitBtn.style.backgroundColor = "#ffca2c";
        submitBtn.style.borderColor = "#ffc720";
        submitBtn.disabled = false;
    });

    let wrongAnswers = picArray;
    wrongAnswers.shift();

    for (let i = 0; i < wrongAnswers.length; i++) {
        wrongAnswers[i].addEventListener("click", () => {
            captchaCard.classList.remove("card-display");
            captchaAnswer.innerText = "Prove that you are not a robot";
        });
    }
}
captchaClick();
