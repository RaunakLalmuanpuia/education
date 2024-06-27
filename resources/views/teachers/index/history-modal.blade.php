<div id="history-modal" class="ui modal">
</div>

<script id="history-modal-content"  type="text/x-handlebars-template">
    <div class="header">
    Posting history for @{{name}}
    </div>
    <div class="content">
        <table class="ui table">
            <thead>
                <tr>
                    <th rowspan="2">Date</th>
                    <th rowspan="2">School</th>
                    <th rowspan="2">Place of Work</th>
                    <th rowspan="2">Designation</th>
                    <th colspan="2" class="center aligned">Appointment</th>
                </tr>
                <tr>
                    <th>Nature</th>
                    <th>Subject</th>
                </tr>
            </thead>
            <tbody>
            @{{#each postings}}
            <tr>
                <td>@{{date}}</td>
                <td>@{{school.name}}</td>
                <td>@{{postOrSchool place_of_post school.name}}</td>
                <td>@{{type_of_teacher.name}}</td>
                <td>@{{nature_of_appointment.name}}</td>
                <td>@{{subject_of_appointment.name}}</td>
            </tr>
            @{{/each}}
            </tbody>
        </table>
    </div>
    <div class="actions">
        <div class="ui black deny button">
        Close
        </div>
    </div>
</script>