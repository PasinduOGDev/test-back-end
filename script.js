function register() {

    const formData = new FormData(document.getElementById('registerForm'));
    const xhr = new XMLHttpRequest();

    let http;
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            http = xhr.responseText;
        }
    }

    xhr.open("POST","register.php",true);
    xhr.send(formData);

    xhr.onload = function() {
        document.getElementById('message').innerHTML = http;
    }

}