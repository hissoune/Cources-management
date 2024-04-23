
function filter_pr_date(url) {
    var form = document.getElementById('form-dd');
    var formData = new FormData(form);
    
    var xhr = new XMLHttpRequest();
    xhr.open('GET', url, true);

    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                // Assuming the response is HTML content
                document.body.innerHTML = xhr.response;
            } else {
                console.error('Filter request failed');
            }
        }
    };

    // Send the form data as query parameters in the URL
    xhr.send(new URLSearchParams(formData).toString());

    return false;
}

