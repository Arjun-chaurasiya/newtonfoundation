document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('contact');

    form.addEventListener('submit', function (e) {
        e.preventDefault();

        const formData = new FormData(form);

        fetch('/', {
            method: 'POST',
            body: formData,
        })
            .then(function () {
                // Print the form values
                for (const pair of formData.entries()) {
                    console.log(pair[0] + ': ' + pair[1]);
                }

                // You can also redirect the user to a thank you page if needed
                // window.location.href = 'thank-you.html';
            })
            .catch(function (error) {
                console.error('Error:', error);
            });
    });
});
