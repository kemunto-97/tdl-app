$(document).ready(function () {

    //Tasks
    $('#newTask').on('click', function () {
        $('#addTask').val("add-Task");
        $('#taskForm').trigger("reset");
        $('#taskModalLabel').html("Add Task");
        $('#taskModal').modal('show');
    });
    $('#addTask').on('click', function (e) {
        e.preventDefault();
        true;
        true;
        "";
        let name = $('#name').val();
        let _token = $('#_token').val();

        var fd = {
            name: name, _token: '{{ csrf_token() }}'
        };
       
        var form_data = document.getElementById("taskForm");

        $.ajax({
            processData: false,
            contentType: false,
            cache: false,
            url: "/storetask",
            type: "POST",
            data: new FormData(form_data),
            beforeSend: function () {
                Swal.fire({
                    icon: 'info',
                    title: 'Submit!',
                    text: 'Submitting...'
                });
            },
            success: function (data) {
                if (data === "200") {
                    Swal.fire({
                        icon: 'success',
                        title: 'SAVED!',
                        showConfirmButton: false,
                        timer: 1000
                    }).then(function () {
                        window.location.reload();
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Error processing request! Please try again.'
                    });
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            }
        })
    })


    //Journals
    $('#newJournal').on('click', function () {
        $('#addJournal').val("add-Journal");
        $('#journalForm').trigger("reset");
        $('#journalModalLabel').html("Add Journal");
        $('#journalModal').modal('show');
    });
    $('#addJournal').on('click', function (e) {
        e.preventDefault();
        true;
        true;
        "";
        let intention = $('#intention-name').val();
        let affirmation = $('#affirmation-name').val();
        let gratitude = $('#gratitude-name').val();
        let _token = $('#_token').val();

        var fd = {
            intention: intention,  affirmation: affirmation,  gratitude: gratitude, _token: '{{ csrf_token() }}'
        };
       
        var form_data = document.getElementById("journalForm");

        $.ajax({
            processData: false,
            contentType: false,
            cache: false,
            url: "/storejournal",
            type: "POST",
            data: new FormData(form_data),
            beforeSend: function () {
                Swal.fire({
                    icon: 'info',
                    title: 'Submit!',
                    text: 'Submitting...'
                });
            },
            success: function (data) {
                if (data === "200") {
                    Swal.fire({
                        icon: 'success',
                        title: 'SAVED!',
                        showConfirmButton: false,
                        timer: 1000
                    }).then(function () {
                        window.location.reload();
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Error processing request! Please try again.'
                    });
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            }
        })
    })

    //Goals
    $('#newGoal').on('click', function () {
        $('#addGoal').val("add-Goal");
        $('#goalForm').trigger("reset");
        $('#goalModalLabel').html("Add Goal");
        $('#goalModal').modal('show');
    });
    $('#addGoal').on('click', function (e) {
        e.preventDefault();
        true;
        true;
        "";
        let goal = $('#goal-name').val();
        let duration = $('#duration-name').val();
        let status = $('#status-name').val();
        let _token = $('#_token').val();

        var fd = {
            goal: goal,  duration: duration,  status: status, _token: '{{ csrf_token() }}'
        };
       
        var form_data = document.getElementById("goalForm");

        $.ajax({
            processData: false,
            contentType: false,
            cache: false,
            url: "/storegoal",
            type: "POST",
            data: new FormData(form_data),
            beforeSend: function () {
                Swal.fire({
                    icon: 'info',
                    title: 'Submit!',
                    text: 'Submitting...'
                });
            },
            success: function (data) {
                if (data === "200") {
                    Swal.fire({
                        icon: 'success',
                        title: 'SAVED!',
                        showConfirmButton: false,
                        timer: 1000
                    }).then(function () {
                        window.location.reload();
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Error processing request! Please try again.'
                    });
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            }
        })
    })

})