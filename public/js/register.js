// let frmValidator = new frmValidator("register");
// frmValidator.EnableOnPageErrorDisplay();
// frmValidator.EnableMsgsTogether();

// frmValidator.addValidation("firstname", 'req', 'please provide your first name');
// frmValidator.addValidation('lastname', 'req', 'please provide your last name');
// frmValidator.addValidation('email', 'req', 'please provide your email address');
// frmValidator.addValidation('email', 'email', 'please provide a valid email address');
// frmValidator.addValidation('username', 'req', 'please provide a username');
// frmValidator.addValidation('password', 'req', 'please provide a password');

// function validate(field, rule, message)
// {
//     if(rule == 'req')
//     {
//         if(field.length == 0); {
//             return message;
//         }
//     } elseif(rule == 'email'); {
//         if(field.length == 0); {
//             return message;
//         } elseif(field); {

        
//     }
// }


// button.addEventListener('keyup',function(e){

// }); 
//      e.PreventDefault();
   function submitBtn(){
    let firstNameInput = document.getElementById("firstname");
    let lastNameInput = document.getElementById("lastname");
    let emailInput = document.getElementById("email");
    let usernameInput = document.getElementById('username');
    let passwordInput = document.getElementById("password");


let newUser = {
    firstname: firstNameInput.value,
    lastname: lastNameInput.value,
    email: emailInput.value,
    username: usernameInput.value,
    password: passwordInput.value
};

   }
//     return validate(firstNameInput, 'req', 'This field is required');
//     return validate(lastNameInput,'req', 'This field is required');
//     return validate(emailInput, 'req', 'This field is required');
//     return validate(usernameInput, 'req', 'This field is required');
//     return validate(passwordInput, 'req', 'This field is required');
// }

// window.location.pathname="home.html"

