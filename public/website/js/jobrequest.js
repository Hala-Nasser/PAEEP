var next_click = document.querySelectorAll(".next_button");
var main_form = document.querySelectorAll(".main");
var step_list = document.querySelectorAll(".progress-bar li");
var num = document.querySelector(".step-number");
let formnumber = 0;

next_click.forEach(function (next_click_form) {
    next_click_form.addEventListener('click', function () {
        // if (!validateform()) {
        //     return false
        // }
        // if(validateForm(formnumber)){
        //     if (formnumber < 1) {
        //         formnumber++;
        //         updateform();
        //         progress_forward();
        //         contentchange();
        //     }
        // }

    });
});

var back_click = document.querySelectorAll(".back_button");
back_click.forEach(function (back_click_form) {
    back_click_form.addEventListener('click', function () {
        formnumber--;
        updateform();
        progress_backward();
        contentchange();
    });
});

var username = document.querySelector("#user_name");
var shownname = document.querySelector(".shown_name");


var submit_click = document.querySelectorAll(".submit_button");
submit_click.forEach(function (submit_click_form) {
    submit_click_form.addEventListener('click', function () {
        shownname.innerHTML = username.value;
        formnumber++;
        updateform();
    });
});

var heart = document.querySelector(".fa-heart");
heart.addEventListener('click', function () {
    heart.classList.toggle('heart');
});


var share = document.querySelector(".fa-share-alt");
share.addEventListener('click', function () {
    share.classList.toggle('share');
});



function updateform() {
    main_form.forEach(function (mainform_number) {
        mainform_number.classList.remove('active');
    })
    main_form[formnumber].classList.add('active');
}

function progress_forward() {
    // step_list.forEach(list => {

    //     list.classList.remove('active');

    // });


    num.innerHTML = formnumber + 1;
    step_list[formnumber].classList.add('active');
}

function progress_backward() {
    var form_num = formnumber + 1;
    step_list[form_num].classList.remove('active');
    num.innerHTML = form_num;
}

var step_num_content = document.querySelectorAll(".step-number-content");

function contentchange() {
    step_num_content.forEach(function (content) {
        content.classList.remove('active');
        content.classList.add('d-none');
    });
    step_num_content[formnumber].classList.add('active');
}


// function validateform() {
//     validate = true;
//     var validate_inputs = document.querySelectorAll(".main.active input");
//     validate_inputs.forEach(function (vaildate_input) {
//         vaildate_input.classList.remove('warning');
//         if (vaildate_input.hasAttribute('required')) {
//             if (vaildate_input.value.length == 0) {
//                 validate = false;
//                 vaildate_input.classList.add('warning');
//             }
//         }
//     });
//     return validate;

// }

function validateForm($page_number) {
    let formData = new FormData();
    // if ($page_number == 0) {
        formData.append('first_name', document.getElementById('first_name').value);
        formData.append('father_name', document.getElementById('father_name').value);
        formData.append('grandfather_name', document.getElementById('grandfather_name').value);
        formData.append('last_name', document.getElementById('last_name').value);
        formData.append('phone', document.getElementById('phone').value);
        formData.append('email', document.getElementById('email').value);
        formData.append('gender', document.getElementById('gender').value);
        formData.append('qualification', document.getElementById('qualification').value);
    // } else if ($page_number == 1) {
    if ($page_number == 1) {

        formData.append('birthday', document.getElementById('birthday').value);
        formData.append('cv', document.getElementById('cv').files[0]);
        console.log(document.getElementById('cv').value);
    }

    formData.append('page_number', $page_number);

    axios.post('/website/job-request', formData)
        .then(function (response) {

            // console.log(response);
            // const Toast = Swal.mixin({
            //     toast: true,
            //     position: 'top-end',
            //     showConfirmButton: false,
            //     timer: 1500,
            //     timerProgressBar: true,
            //     didOpen: (toast) => {
            //         toast.addEventListener('mouseenter', Swal.stopTimer)
            //         toast.addEventListener('mouseleave', Swal.resumeTimer)
            //     }
            // })
            // Toast.fire({
            //     icon: 'success',
            //     title: response.data.message
            // })

            // return true;
            if (formnumber < 1) {
                formnumber++;
                updateform();
                progress_forward();
                contentchange();
            } else if (formnumber == 1) {
                // performStore();
                console.log(response);
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 1500,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })
                Toast.fire({
                    icon: 'success',
                    title: response.data.message
                })
                window.location.href = "/website/job-request";
            }
        }).catch(function (error) {
            console.log(error);
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 1500,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                icon: 'error',
                title: error.response.data.message
            })
            // return false;
        });
}
