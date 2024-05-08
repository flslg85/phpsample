console.clear();

document.querySelector("#show-login").addEventListener("click", function(){
    document.querySelector(".popup").classList.add("active");
  });
  document.querySelector(".popup .close-btn").addEventListener("click", function(){
    document.querySelector(".popup").classList.remove("active");
  });

$(function() {
    $("form[name='registrationForm']").validate({
    
    rules: {
      fname: {
        required: true,
        alphanumeric: true                 
                 },
      emergencyInfo: {
        required: true,
        alphanumeric: true                 
                 },
      sex: "required",
      email: {
        required: true,
        email: true
      },
      passCode: {
        required: true,
        minlength: 8,
      },
      phone: {
        required: true,
        minlength: 10,
        maxlength: 11,
        digits: true
      },
      Bday: "required"
    },
    
   
    messages: {
      fName: {
        required: "name is required",
        alphanumeric: "Given name cannot contain special characters"                  
                  },
      familyName: {
        required: "Family name is required",
        alphanumeric: "Family name cannot contain special characters"                  
                  },
      passCode: {
        required: "Password is required",
        minlength: "Password must contain at least 8 characters",
        
      },
      onlineMail: "Enter your vaild E-mail address",
      sex: "Gender is required",
      Phone: {
        required: "Phone number is required",
        minlength: "Please enter a valid phone number",     
        maxlength: "Please enter a valid phone number",
        digits: "Please enter a valid phone number"
              },
      Bday: "Enter your Birth Date"
    }
      

  });
});

