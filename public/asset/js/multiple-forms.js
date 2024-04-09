$(document).ready(function() {
    var currentStep = 1;
    var totalSteps = $('.prog-bar').length;

    $('#submitBtn').click(function() {
        if (currentStep < totalSteps && validateCurrentStep()) {
        // if (currentStep < totalSteps) {
            // currentStep++;
            // validateCurrentStep()
            // updateFormVisibility();
            console.log('fff');
        }
    });

    $('#nextBtn').click(function() {
        if (currentStep < totalSteps && validateCurrentStep()) {
        // if (currentStep < totalSteps) {
            currentStep++;

            updateFormVisibility();
        }
    });

    $('#prevBtn').click(function() {
        if (currentStep > 1) {
            // $('#frs' + currentStep--);
            currentStep--;
            $('#prevBtn').removeClass('hidden');
            updateFormVisibility();
        }
    });

    function validateCurrentStep() {
        if (currentStep === 3) {
            var password = $('#password').val();

            if (password === '') {
                $('#typepwd').addClass('invalid-feedback').text('Please enter a password.');
                $('#typepwd').removeClass('hidden');
                $('#typepwd').addClass('visible');
                $('#typepwd').addClass('invalid-bg');
                return false;
            } else {
                $('#typepwd').removeClass('invalid-feedback').text('');
                $('#typepwd').addClass('hidden');
                return true;
            }
        }

        return true;
    }

    function validateRepass() {
        if (currentStep === 4) {
            var password = $('#password').val();
            var coofirm_password = $('#password-confirm').val();

            if (password !== coofirm_password) {
                $('#retypepwd').addClass('invalid-feedback');
                $('#retypepwd').removeClass('hidden');
                $('#retypepwd').addClass('visible');
                return false;
            } else {
                $('#retypepwd').removeClass('invalid-feedback').text('');
                $('#retypepwd').addClass('hidden');
            }
        }
    }

    function updateFormVisibility() {
        $('.form-reg').removeClass('active').addClass('hidden');
        $('#frs' + currentStep).addClass('active').removeClass('hidden');

        $('.prog-bar').removeClass('active');
        // $('#reg-name').addClass('active');
        for (var i = 1; i <= currentStep; i++) {
            $('#reg-' + i).addClass('active');
        }


        if (currentStep == 1) {
            // $('#prevBtn').addClass('hidden');
            $('#nextBtn').removeClass('hidden');
            $('#prevBtn').addClass('hidden');
            $('#submitBtn').addClass('hidden');
            $('#reg-' + currentStep).addClass('active');
            $('#reg-' + currentStep).removeClass('hidden');
        } else {
            $('#prevBtn').removeClass('hidden');
        }

        if (currentStep == totalSteps) {
            $('#nextBtn').addClass('hidden');
            $('#submitBtn').removeClass('hidden');
        } else {
            $('#nextBtn').removeClass('hidden');
            $('#submitBtn').addClass('hidden');
        }
    }
    updateFormVisibility();
});
