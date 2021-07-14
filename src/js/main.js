const form = document.querySelector("#js-form");

const errTxt = document.querySelector(".p-error-txt");
const firstnameErr = document.querySelector(".firstname_err");
const lastnameErr = document.querySelector(".lastname_err");
const emailErr = document.querySelector(".email_err");
const passErr = document.querySelector(".pass_err");
const repassErr = document.querySelector(".re_pass_err");

const firstName = document.querySelector("#first_name");
const lastName = document.querySelector("#last_name");
const email = document.querySelector("#email");
const pass = document.querySelector("#password");
const repass = document.querySelector("#repassword");
const btn = document.querySelector(".js-btn");

form.onsubmit = (e) => {
    e.preventDefault();
}

btn.onclick = (e) => {
    const obj = {};
    const formData = new FormData(form);
    formData.forEach((value, key) => obj[key] = value);
    const jsonFormData = JSON.stringify(obj);
    fetch("http://localhost:8888/Chat/dist/insert.php", {
        method: "POST",
        mode: "cors",
        headers: {
            "Content-Type": "application/json"
        },
        body: jsonFormData
    }).then((res) => {
        return res.json();
    }).then((json) => {
        if (Object.keys(json).length === 0) {
            window.location.href = "home.php";
        } else {
            errTxt.style.display = "block";
            firstnameErr.textContent = json.first_name;
            lastnameErr.textContent = json.last_name;
            emailErr.textContent = json.email;
            passErr.textContent = json.password;
            repassErr.textContent = json.repassword;
            errTxt.textContent = json.common;
        }
    }).catch((err) => {
        console.log(err);
    });
}