 function validate_form() {
            if (document.regForm.studName.value == "") {
                alert("Please fill in the 'Your Name' box.");
                return false;
            }
            if (document.regForm.mail.value == "") {
                alert("Enter Email ID");
                return false;
            }
            if (document.regForm.scontact.value == "") {
                alert("Enter Your Contact number");
                return false;
            }
            if (document.regForm.motherName.value == "") {
                alert("Please fill in the 'Your Mother Name' box.");
                return false;
            }
            if (document.regForm.scontact.value.length != 10) {
              alert("Provide valid contact number");
              return false;
            }
            if (document.regForm.bday.value == "") {
              alert("Please fill in the 'Your Birth Date' box.");
              return false;
            }
            alert("sucessfully Submitted");



            
        }

        function isNumberKey(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode;
            if (charCode != 46 && charCode > 31 &&
                (charCode < 48 || charCode > 57)) {
                alert("Enter Number");
                return false;
            }
            return true;
        }
