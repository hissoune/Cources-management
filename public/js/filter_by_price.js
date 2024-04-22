
function filterByPrice(url) {
    var form = document.getElementById('filter_things');
    var formData = new FormData(form);

    var xhr = new XMLHttpRequest();
    xhr.open('POST', url, true);

    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                // Request successful, handle response
                console.log(xhr.responseText);
                // Implement code to update your UI based on response
            } else {
                // Request failed, handle error
                console.error('Filter request failed');
            }
        }
    };

    xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
    xhr.send(formData);

    return false; // Prevent default form submission
}
