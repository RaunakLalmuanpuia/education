@extends('layout.main')

@section('pageHeader')
<h1 class="ui dividing header">
	Schools
</h1>
@stop

@section('content')
<div class="ui grid">
@if(isset($districts))
    <div class="row">
        <div class="sixteen wide column">
            <div class="ui form">
                <div class="fields">
                    <div class="four wide field">
                        <label for="district">District</label>
                        <select name="" id="district" class="ui dropdown">
                            @foreach($districts as $code=>$name)
                            <option value="{{$code}}" @if($districtCode == $code) selected="selected" @endif>{{$name}}</option>
                            @endforeach
                        </select>   
                    </div>
                    <div class="four wide field">
                        <label for="educational_block">Educational Block</label>
                        <select name="" id="educational_block" class="ui dropdown">
                            <option value="">Select District First</option>
                        </select>   
                    </div>
                    <div class="four wide field">
                        <label for="village">Village</label>
                        <select name="" id="village" class="ui dropdown">
                            <option value="">Select District First</option>
                        </select>   
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
    <div class="row">
            <div class="sixteen wide column">
            <div class="map-container" style="position:relative; overflow:hidden">
            	<div id="gmap" style="height:520px">
            		
            	</div>
                <div id="districtInfo" style="background:white;transition: top .2s; height:100%; width: 100%; position:absolute; top:-100%;">
                    
                </div>
                <script id="districtInfoContent" type="text/x-handlebars-template">
                    <div class="ui header">
                        @{{name}}
                        <i class="close icon" onclick="closeDistrictOverview()"></i>
                    </div>
                    <div class="ui inverted blue segment">
                        <div class="ui four inverted tiny statistics">
                            <div class="statistic">
                                <div class="value">@{{totalStudents data}}</div>
                                <div class="label">Total Students</div>                
                            </div>
                            <div class="statistic">
                                <div class="value">@{{totalBoys data}}</div>
                                <div class="label">Total Boys</div>                
                            </div>
                            <div class="statistic">
                                <div class="value">@{{totalGirls data}}</div>
                                <div class="label">Total Girls</div>                
                            </div>
                            <div class="statistic">
                                <div class="value">@{{totalTeachers data}}</div>
                                <div class="label">Total Teachers</div>                
                            </div>
                        </div>
                    </div>
                    Total Number of students class wise
                    <table class="ui compact table">
                        <thead>
                            <tr>
                                <th scope="row">Class</th>
                                <th scope="row">Pre Primary</th>
                                <th scope="row">Class I</th>
                                <th scope="row">Class II</th>
                                <th scope="row">Class III</th>
                                <th scope="row">Class IV</th>
                                <th scope="row">Class V</th>
                                <th scope="row">Class VI</th>
                                <th scope="row">Class VII</th>
                                <th scope="row">Class VIII</th>
                                <th scope="row">Class IX</th>
                                <th scope="row">Class X</th>
                                <th scope="row">Class XI</th>
                                <th scope="row">Class XII</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>Boys</th>
                                <td>@{{data.cpp_b}}</td>
                                <td>@{{data.c1_b}}</td>
                                <td>@{{data.c2_b}}</td>
                                <td>@{{data.c3_b}}</td>
                                <td>@{{data.c4_b}}</td>
                                <td>@{{data.c5_b}}</td>
                                <td>@{{data.c6_b}}</td>
                                <td>@{{data.c7_b}}</td>
                                <td>@{{data.c8_b}}</td>
                                <td>@{{data.c9_b}}</td>
                                <td>@{{data.c10_b}}</td>
                                <td>@{{data.c11_b}}</td>
                                <td>@{{data.c12_b}}</td>
                            </tr>
                            <tr>
                                <th>Girls</th>
                                <td>@{{data.cpp_g}}</td>
                                <td>@{{data.c1_g}}</td>
                                <td>@{{data.c2_g}}</td>
                                <td>@{{data.c3_g}}</td>
                                <td>@{{data.c4_g}}</td>
                                <td>@{{data.c5_g}}</td>
                                <td>@{{data.c6_g}}</td>
                                <td>@{{data.c7_g}}</td>
                                <td>@{{data.c8_g}}</td>
                                <td>@{{data.c9_g}}</td>
                                <td>@{{data.c10_g}}</td>
                                <td>@{{data.c11_g}}</td>
                                <td>@{{data.c12_g}}</td>
                            </tr>
                            <tr>
                                <th>Total</th>
                                <td>@{{totals data 'pp'}}</td>
                                <td>@{{totals data '1'}}</td>
                                <td>@{{totals data '2'}}</td>
                                <td>@{{totals data '3'}}</td>
                                <td>@{{totals data '4'}}</td>
                                <td>@{{totals data '5'}}</td>
                                <td>@{{totals data '6'}}</td>
                                <td>@{{totals data '7'}}</td>
                                <td>@{{totals data '8'}}</td>
                                <td>@{{totals data '9'}}</td>
                                <td>@{{totals data '10'}}</td>
                                <td>@{{totals data '11'}}</td>
                                <td>@{{totals data '12'}}</td>
                            </tr>
                        </tbody>
                    </table>
                    Teachers
                    <table class="ui table">
                        <thead>
                            <tr>
                                <th>Male</th>
                                <th>Female</th>
                                <th>Primary Teachers</th>
                                <th>Upper Primary Teachers</th>
                                <th>Secondary Teachers</th>
                                <th>Higher Secondary Teachers</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>@{{data.tch_m}}</td>
                                <td>@{{data.tch_f}}</td>
                                <td>@{{data.tchpri}}</td>
                                <td>@{{data.tchupr}}</td>
                                <td>@{{data.tchsec}}</td>
                                <td>@{{data.tchhsec}}</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="column">
                            <a class="ui primary labeled icon button" href="/schools/map/district/@{{code}}">
                                <i class="marker icon"></i>
                                View in map
                            </a>
                        </div>
                    </div>
                </script>
                <div id="schoolInfo" class="ui long modal">
                    <div class="ui text loader">Loading</div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('libraries')
	@parent
    <script type="text/javascript">
    var heatmapData = [];
    var map, bounds, mapCenter, markers=[], invalids=[], infowindow, ajaxData = {}, currentSchool;

    /**
     * @constructor
     * @implements {google.maps.MapType}
     */
    function CoordMapType(tileSize) {
      this.tileSize = tileSize;
    }

    CoordMapType.prototype.maxZoom = 19;
    CoordMapType.prototype.name = 'Tile #s';
    CoordMapType.prototype.alt = 'Tile Coordinate Map Type';

    CoordMapType.prototype.getTile = function(coord, zoom, ownerDocument) {
        // console.log(coord)
        var ln = (coord.x/Math.pow(2,zoom)*360-180);
        var n=Math.PI-2*Math.PI*coord.y/Math.pow(2,zoom);
        var lt =  (180/Math.PI*Math.atan(0.5*(Math.exp(n)-Math.exp(-n))))

      var div = ownerDocument.createElement('div');
      // div.style.height = this.tileSize.height + 'px';
      // div.style.fontSize = '10';
      // div.style.borderStyle = 'solid';
      // div.style.borderWidth = '1px';
      // div.style.borderColor = '#AAAAAA';
      // div.style.backgroundColor = '#E5E3DF';
      return div;
    };

    function initialize() {
        bounds = new google.maps.LatLngBounds();
        mapCenter = new google.maps.LatLng(23.27292845506525,92.8125);
        var styles = [
            {
                stylers: [
                    { hue: "#00ffe6" },
                    { saturation: -20 }
                ]
            },{
                featureType: "road",
                elementType: "geometry",
                stylers: [
                    { lightness: 100 },
                    { visibility: "off" }
                ]
            },
            {
                featureType: "all",
                elementType: "labels",
                stylers: [
                    { visibility: "off" }
                ]
            }
        ];
        var mapOptions = {
            zoom: 8,
            scrollWheel: app.route == 'schools.map' ? false : true,
            mapTypeControl: app.route == 'schools.map' ? false : true,
            scaleControl: app.route == 'schools.map' ? false : true,
            draggable: app.route == 'schools.map' ? false : true,
            panControl: app.route == 'schools.map' ? false : true,
            center: mapCenter,
            mapTypeId: app.route == 'schools.map' ? 'coordinate' : google.maps.MapTypeId.HYBRID,
            styles:styles
        };

        if(app.route == 'schools.map'){
            mapOptions.minZoom = 8;
            mapOptions.maxZoom = 8;
            mapOptions.backgroundColor = '#FFFFFF';
        }

        
        var unplotted = [];

        map = new google.maps.Map(document.getElementById('gmap'), mapOptions);
        

        if(app.route == 'schools.map-district'){
            google.maps.event.addListenerOnce(map, 'idle', plotSchools('district', {!! isset($districtCode)? $districtCode : 'null' !!}) );
        }

        if(app.route == 'schools.map'){            
            map.mapTypes.set('coordinate',
                       new CoordMapType(new google.maps.Size(256, 256)));
            map.data.loadGeoJson('/uploads/mizoram.geojson');
            map.data.addListener('click', showDistrictOverview);
            map.data.setStyle({
              fillColor: 'green',
              strokeWeight: 1
            });
        }
    }

function showDistrictOverview(e){

    var districts = {!!isset($districtData)? $districtData->info : 'null' !!};

    var result = $.grep(Object.keys(districts), function(q){
        return districts[q].name.toLowerCase() == e.feature.getProperty('NAME_2').toLowerCase() 
    });

    var districtInfo = districts[result];
    var source   = $("#districtInfoContent").html();
    var template = Handlebars.compile(source);
    var html    = template(districtInfo);

    $('#districtInfo').html(html).css('top',0);
}
function closeDistrictOverview () {
    $('#districtInfo').css('top','-100%');
}
function showSchoolInfo (schoolId) {
    $('#schoolInfo')
        .modal({
            onHidden: function(){
                $('#schoolInfo').html('<div class="ui text loader">Loading</div>');
            },
            observeChanges: true
        })
        .modal('show');

    if(currentSchool != schoolId){
        currentSchool = schoolId
        $.ajax({
            url:'/ajax/get-school-detail',
            data:{
                id:schoolId
            },
            type:'get',
        }).done(function(data){
            ajaxData = data;
            $('#schoolInfo').html(data)
        });
    }else{
        $('#schoolInfo').html(ajaxData)
    }
}

var plotSchools = function(type, code){
    if(type != 'district'){
        if(code == 'all'){
            if(type == 'educational_block'){
                code = $('#district option[selected="selected"]').val();
            }

            if(type == 'village'){
                code = $('#district option[selected="selected"]').val();
            }
            code = code.slice(0,4);
            type = 'district';
        }
        bounds = new google.maps.LatLngBounds();
        for(var i=0; i<markers.length;i++){
            if(markers[i][type + '_code'] != code){
                markers[i].setMap(null);
            }
            else{
                markers[i].setMap(map);
                bounds.extend(markers[i].position);
            }
        }
        map.fitBounds(bounds);
        return;
    }

    for(var i=0; i<markers.length;i++){
        markers[i].setMap(null);
    }
    markers = [];
    districtChange(code);

    $.ajax({
        url: '/ajax/get-schools-by-location',
        data: {
            type: type,
            code: code
        }
    }).done(function(data){
        renderMarkers(data);
    });
}

var renderMarkers = function(data){
    schools = data;
    bounds = new google.maps.LatLngBounds();

    if(schools.length > 0){
        for(var i=0; i<schools.length; i++){
            var school = schools[i];
            if(locationInvalid(school)){
                // i--;
                continue;
            }
            var position = new google.maps.LatLng(school.latitude, school.longitude);
            bounds.extend(position);
            marker = new google.maps.Marker({
                position: position,
                map: map,
                school_code:school.code,
                district_code: school.district_code,
                educational_block_code: school.educational_block_code,
                village_code: school.village_code,
                title: school.title,
                optimized: true
            });

            google.maps.event.addListener(marker,'click', function(schoolId){ 
                return function() {
                    showSchoolInfo(schoolId);
                };
            }(school.id));
            markers.push(marker);
        }
        map.fitBounds(bounds);
    }
}
var locationInvalid = function(school){
    return school.latitude < 21.9 ||school.latitude > 24.5 || school.longitude < 90 ||school.longitude > 94 || school.latitude == 0 || school.longitude == 0 || !school.latitude || !school.longitude || school.longitude == 'NULL' || school.latitude == 'NULL' ;
}

@if(getCurrentRoute() == 'schools.map-district')
    $(window).ready(function(){
        $('#district').on('change', function(){
            districtChange(this.value, true);
        })

        $('#educational_block').on('change', function(){
            blockChange(this.value);
        })
        $('#village').on('change', function(){
            villageChange(this.value);
        })
    });

    var educationalBlocks = {!!$blocks!!};
    var villages = {!!$villages!!};

    var districtChange = function(code){
        var blockOptions = '<option value="all">All</option>',
            villageOptions = '<option value="all">All</option>';
        $.each(educationalBlocks, function(k,v){
            if(v.code.indexOf(code) >= 0){
                blockOptions += '<option value="' +v.code+ '">' + v.name + '</option>';
            }
        })
        $.each(villages, function(k,v){
            if(v.code.indexOf(code) >= 0){
                villageOptions += '<option value="' +v.code+ '">' + v.name + '</option>';
            }
        });

        $('select#educational_block').html(blockOptions);
        $('select#village').html(villageOptions);

        if(typeof arguments[1] == 'boolean' && arguments[1] == true)
            plotSchools('district', code);
    }

    var blockChange = function(code){
        var villageOptions = '<option value="all">All</option>';
        $.each(villages, function(k,v){
            if(v.code.indexOf(code) >= 0){
                villageOptions += '<option value="' +v.code+ '">' + v.name + '</option>';
            }
        });

        $('select#village').html(villageOptions);

        plotSchools('educational_block', code);
    }

    var villageChange = function(code){
        plotSchools('village',code);
    }
@endif
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key={{Config::get('services.gmap.key')}}&libraries=geometry,visualization&callback=initialize"></script>
@stop