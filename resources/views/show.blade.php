<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form id="appointmentForm">
        @csrf
        <input type="datetime-local" name="start_time">
        <input type="datetime-local" name="end_time">
        <textarea name="notes"></textarea>
        <button type="submit">Create Appointment</button>
    </form>
    <script>
        document.getElementById('appointmentForm').addEventListener('submit', function(event) {
            event.preventDefault();

            const form = event.target;
            const formData = new FormData(form);

            fetch('{{ route('appointments.store') }}', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-Token': '{{ csrf_token() }}',
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.errors) {
                    for (const fieldName in data.errors) {
                        const field = form.querySelector(`[name="${fieldName}"]`);
                        if (field) {
                            const errorMessages = data.errors[fieldName].join('<br>');
                            const errorElement = document.createElement('div');
                            errorElement.classList.add('text-danger');
                            errorElement.innerHTML = errorMessages;
                            field.parentNode.insertBefore(errorElement, field.nextSibling);
                        }
                    }
                } else if (data.message) {
                    alert(data.message);
                    form.reset();
                }
            })
            .catch(error => {
                console.error('Error:', error);
                // Handle error
            });
        });
    </script>


</body>
</html>
