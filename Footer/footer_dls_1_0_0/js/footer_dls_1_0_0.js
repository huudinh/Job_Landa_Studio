(function () {
    const registerForm = document.getElementById('register-form');
    registerForm.addEventListener('submit', (e) => {
        e.preventDefault();

        const registerInfo = {
            email: registerForm.iemail,
            note: registerForm.inote,
        };
        validateForm(registerInfo);
    });

})();

/* Hàm Kiểm Tra Form Dự Đoán */
function validateForm(registerInfo) {

    if (registerInfo.email.value == "") {
        alert("Bạn chưa nhập Email");
        registerInfo.email.classList.add("border");
        return false;
    } else {
        registerInfo.email.classList.remove("border");
    }

    // if (registerInfo.phone.value == "") {
    //     alert("Bạn chưa nhập số điện thoại");
    //     registerInfo.phone.classList.add("border");
    //     return false;
    // } else if (isNaN(registerInfo.phone.value)) {
    //     alert("Số điện thoại của bạn có ký tự");
    //     registerInfo.phone.classList.add("border");
    //     return false;
    // } else if (!getValidNumber(registerInfo.phone.value)) {
    //     alert("Số điện thoại của bạn không đúng");
    //     registerInfo.phone.classList.add("border");
    //     return false;
    // } else {
    //     registerInfo.phone.classList.remove("border")
    // }

    sendAPI(registerInfo);
    alert('Bạn đã gửi thành công');
    registerInfo.email.value = '';
    registerInfo.note.value = '';
}

/* Check Số điện thoại */
// function getValidNumber(value) {
//     value = value.trim();
//     if (value.substring(0, 1) == '1') {
//         value = value.substring(1);
//     }
//     if (value.length == 10) {
//         return value;
//     }
//     return false;
// }
function sendAPI(registerInfo){
    // var formdata = new FormData();
    value1 = registerInfo.email.value;
    value2 = registerInfo.note.value;
    value3 = new Date().toLocaleDateString();
    name1 = 'Email';
    name2 = 'Comment';
    name4 = 'Date Create';

    var requestOptions = {
    method: 'GET',
    // body: formdata,
    redirect: 'follow'
    };

    fetch(`https://script.google.com/macros/s/AKfycbzQg9918VkGjwsnVREs5egl7ks4PoTk7kJ3P4GezLzr0owdzi5zFVkiuWsuLqUCnMcD/exec?${name1}=${value1}&${name2}=${value2}&${name3}=${value3}`, requestOptions)
    .then(response => response.text())
    .then(result => {
        console.log(result);            
    })
    .catch(error => console.log('error', error));
}
