/**
 * This file is responsible for handeling modal input from education page. And dynamically load education page
 * with updated content.
 */



document.getElementById("education_form").addEventListener('submit', function (e) {
    e.preventDefault();
    const url = "/admin/add-education";
    const data = new FormData(this);
    fetch(url, {
        method: "POST",
        body: data,
    }).then((response) => {
        return response.json();
    }).then((json) => {
        if (json.errors) {
            Object.keys(json.errors).forEach((e) => {
                const errorField = document.querySelector(`input[name="${e}"]`);
                console.log(errorField)
                let errorLog = document.createElement('div');
                errorLog.classList.add('d-block', 'text', 'text-danger');
                errorLog.innerText = json.errors[e];
                errorField.parentNode.appendChild(errorLog);
            })
        }
        else if (json.success) {
            console.log(json.success);
            document.getElementById("education_form").reset();
            // To closing the modal
            const modal = document.getElementById('addEducationModal');
            modal.classList.remove('show');
            var modalBackdrop = document.querySelector('.modal-backdrop');
            console.log(modalBackdrop)
            if (modalBackdrop) {
              modalBackdrop.parentNode.removeChild(modalBackdrop);
            }
        }
    })



})
