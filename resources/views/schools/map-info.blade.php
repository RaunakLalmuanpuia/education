    <i class="close icon"></i>
    <div class="header">
        {{$school->name}}
    </div>
    <div class="content">
        <div class="ui inverted blue segment">
            <div class="ui four inverted tiny statistics">
                <div class="statistic">
                    <div class="value">{{$totalStudents}}</div>
                    <div class="label">Total Students</div>                
                </div>
                <div class="statistic">
                    <div class="value">{{$totalBoys}}</div>
                    <div class="label">Total Boys</div>                
                </div>
                <div class="statistic">
                    <div class="value">{{$totalGirls}}</div>
                    <div class="label">Total Girls</div>                
                </div>
                <div class="statistic">
                    <div class="value">{{$totalTeachers}}</div>
                    <div class="label">Total Teachers</div>                
                </div>
            </div>
        </div>
        Total Number of students class wise
        <table class="ui compact table">
            <thead>
                <tr>
                    <th scope="row">Class</th>
                    @foreach($totals as $classNumber => $data)
                    <th scope="row">{{$data['name']}}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Boys</th>
                    @foreach($totals as $classNumber => $data)
                    <td>{{$data['boys']}}</td>
                    @endforeach
                </tr>
                <tr>
                    <th>Girls</th>
                    @foreach($totals as $classNumber => $data)
                    <td>{{$data['girls']}}</td>
                    @endforeach
                </tr>
                <tr>
                    <th>Total</th>
                    @foreach($totals as $classNumber => $data)
                    <td>{{$data['total']}}</td>
                    @endforeach
                </tr>
            </tbody>
        </table>
        <div class="ui horizontal divider">
            Teachers
        </div>
        <div class="ui grid">
            <div class="row">
                <div class="eight wide column">
                    <ul>
                    @foreach($postings as $posting)
                        <li><a href="{{Auth::check() ? '/teachers/' . $posting->teacher->id : '/public/teachers/' . $posting->teacher->id}}">{{$posting->teacher->name}}</a></li>
                    @endforeach
                    </ul>
                </div>
                <div class="eight wide column">
                
                </div>
            </div>
        </div>
    </div>
    <div class="actions">
        <div class="ui black deny button">
            Close
        </div>
        <a href="{{Auth::check() ? '/schools/' . $school->school_id : '/public/schools/' . $school->school_id}}" class="ui positive right labeled icon button">
            View all details
            <i class="checkmark icon"></i>
        </a>
    </div>