<div id="retire-modal" class="ui modal">
    
</div>
<script id="retire-modal-content" type="text/x-handlebars-template">
    <div class="header">
    Retire @{{name}}
    </div>
    <div class="content">
        <form 
        method="POST"
        action="http://edu.dev/retirements"
        accept-charset="UTF-8"
        class="ui small form" 
        id="retirement-form"
        >
            <input class="teacher-id" name="teacher_id" type="hidden" value="@{{id}}">
            <input name="status" type="hidden" value="0">
            <div class="field">
                <label for="reason">Reason for retirement</label>
                <select name="retirement_type_id">
                    @{{#each properties.retirement_types}}
                    <option value="@{{id}}" >@{{name}}</option>
                    @{{/each}}
                </select>
            </div>
            <div class="field">
                <label for="date">Date of retirement</label>
                <input type="text" readonly="readonly" id="retired_on" name="retired_on" class='datepicker'>
            </div>
        </form>
    </div>
    <div class="actions">
        <div class="ui black deny button">
        Cancel
        </div>
        <div id="post-retirement" class="ui positive right labeled icon button">
        Validate
        <i class="warning circle icon"></i>
        </div>
    </div>
</script>