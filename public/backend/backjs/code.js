$(function(){
    $(document).on('click','#delete',function(e){
        e.preventDefault();
        var link = $(this).attr("href");

        Swal.fire({
            title: 'Are you sure?',
            text: "Delete This Data?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result)=>{
            if(result.isConfirmed){
                window.location.href = link;
                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                );
            }
        });
    });
});

// for multidelete



function initializeDeleteImageScript() {
    const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.onmouseenter = Swal.stopTimer;
            toast.onmouseleave = Swal.resumeTimer;
        }
    });

    // Function to save Toastr message to localStorage
    function saveToastrMessage(message) {
        localStorage.setItem('toastrMessage', message);
    }

    // Function to retrieve Toastr message from localStorage
    function getToastrMessage() {
        const message = localStorage.getItem('toastrMessage');
        localStorage.removeItem('toastrMessage'); // Clear the stored message after retrieval
        return message;
    }

    $(function () {
        // Show Toastr message if available
        const storedMessage = getToastrMessage();
        if (storedMessage) {
            Toast.fire({
                icon: 'success',
                title: storedMessage
            });
        }

        $(document).on('submit', 'form', function (e) {
            e.preventDefault();
            var form = $(this);
            var formData = form.serialize();
            var selectedImages = form.find('input[name="selected_images[]"]:checked').length;

            if (selectedImages === 0) {
                Toast.fire({
                    icon: 'warning',
                    title: 'Please select at least one image to delete.'
                });
                return;
            }

            Swal.fire({
                title: 'Are you sure?',
                text: 'Delete Selected Data?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Submit the form when user confirms
                    $.ajax({
                        type: form.attr('method'),
                        url: form.attr('action'),
                        data: formData,
                        success: function (response) {
                            // Handle success response if needed
                            Swal.fire(
                                'Deleted!',
                                'Image(s) successfully deleted.',
                                'success'
                            );

                            // Save Toastr message to localStorage for retrieval after page reload
                            saveToastrMessage('Image(s) successfully deleted.');

                            // Reload the page after SweetAlert is closed
                            setTimeout(() => {
                                location.reload();
                            }, 1000); // Delay to ensure Swal.fire is closed before reloading
                        },
                        error: function (error) {
                            // Handle error response if needed
                            console.error(error);
                        }
                    });
                }
            });
        });
    });
}

// Call the function to initialize the script on the specific page
initializeDeleteImageScript();
