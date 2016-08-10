$(document).ready(function() {
  /*
     A script that adds a method to jQuery Validaiton plugin.
     It allows to check whether values in the input field
     of given group are matching.
  */
    jQuery.validator.addMethod("notEqualToGroup", function(value, element, options) {
      // get all the elements passed here with the same class
      var elems = $(element).parents('form').find(options[0]);
      // the value of the current element
      var valueToCompare = value;
      // count
      var matchesFound = 0;
      // loop each element and compare its value with the current value
      // and increase the count every time we find one
      jQuery.each(elems, function(){
      thisVal = $(this).val();
      if(thisVal == valueToCompare){
      matchesFound++;
      }
      });
      // count should be either 0 or 1 max
      if(this.optional(element) || matchesFound <= 1) {
              //elems.removeClass('error');
              return true;
          } else {
              //elems.addClass('error');
          }
    }, jQuery.validator.format("Παρακαλώ εισάγετε μια μοναδική τιμή")); // display error message
// ============== END OF THE METHOD SCRIPT ==============

/*
   The following script handles validation of the form.
   Plugin used: jQuery Validaiton.
   Author's website: https://jqueryvalidation.org/
*/
    $('#myForm').validate({ // initialize the plugin
        rules: { // setting rules for each input field
            name: {
                required: true, // make the field required (cannot be empty)
                minlength: 2, // the input cannot be shorter than 2 characters
            },
            surname: {
                required: true,
                minlength: 2,
            },
            email: {
                required: true,
                email: true // validate the field with emphasis on email address structure
            },
            am: {
                required: true,
                number: true // the input must be a number in range of 0-9
            },
            exam: {
                required: true,
                number: true
            },
            repeatlab: {
                required: true,
                number: true
            },
            priorityone: {
                required: true,
                number: true,
                notEqualToGroup: ['.priority-lab'], // the input cannot be the same as other input in the same group
                range: [0, 5] // the input must be a number in range of 0-5
            },
            prioritytwo: {
                required: true,
                number: true,
                notEqualToGroup: ['.priority-lab'],
                range: [0, 5]
            },
            prioritythree: {
                required: true,
                number: true,
                notEqualToGroup: ['.priority-lab'],
                range: [0, 5]
            },
            priorityfour: {
                required: true,
                number: true,
                notEqualToGroup: ['.priority-lab'],
                range: [0, 5]
            },
            priorityfive: {
                required: true,
                number: true,
                notEqualToGroup: ['.priority-lab'],
                range: [0, 5]
            }
        },
        // ============== END OF THE VALIDATION RULES SCRIPT ==============

        /*
        This script highlights the input fields based on validity.
        Valid input is highlighted in green color and a "tick" icon is added.
        Invalid input is highlighten in red and a "X" icon is added.
        */
        highlight: function(element, errorClass, validClass) {
            if (element.type === "radio") {
                this.findByName(element.name).addClass(errorClass).removeClass(validClass);
            } else {
                $(element).closest('.form-group').removeClass('has-success has-feedback').addClass('has-error has-feedback');
                $(element).closest('.form-group').find('i.fa').remove();
                $(element).closest('.form-group').append('<i class="fa fa-times fa-lg form-control-feedback"></i>');
            }
        },
        unhighlight: function(element, errorClass, validClass) {
            if (element.type === "radio") {
                this.findByName(element.name).removeClass(errorClass).addClass(validClass);
            } else {
                $(element).closest('.form-group').removeClass('has-error has-feedback').addClass('has-success has-feedback');
                $(element).closest('.form-group').find('i.fa').remove();
                $(element).closest('.form-group').append('<i class="fa fa-check fa-lg form-control-feedback"></i>');
            }
        },
        errorElement: 'span', // create span html element
        errorClass: 'help-block', // add "help-block" class to the element
        errorPlacement: function(error, element) { // inserts element underneath the input field.
            if (element.length) {
                error.insertAfter(element);
            } else {
                error.insertAfter(element);
            }
        }
    });
    // ============== END OF THE HIGHLIGHT AND ERROR PLACEMENT SCRIPT ==============


    //validation function
});
