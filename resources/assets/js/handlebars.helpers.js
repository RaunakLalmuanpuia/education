Handlebars.registerHelper('totalStudents', function(data) {
    var q = parseInt(data.cpp_b) + parseInt(data.cpp_g) + parseInt(data.c1_b) + parseInt(data.c1_g) + parseInt(data.c2_b) + parseInt(data.c2_g) + parseInt(data.c3_b) + parseInt(data.c3_g) + parseInt(data.c4_b) + parseInt(data.c4_g) + parseInt(data.c5_b) + parseInt(data.c5_g) + parseInt(data.c6_b) + parseInt(data.c6_g) + parseInt(data.c7_b) + parseInt(data.c7_g) + parseInt(data.c8_b) + parseInt(data.c8_g) + parseInt(data.c9_b) + parseInt(data.c9_g) + parseInt(data.c10_b) + parseInt(data.c10_g) + parseInt(data.c11_b) + parseInt(data.c11_g) + parseInt(data.c12_b) + parseInt(data.c12_g);
    return q.toString().replace(/(\d)(?=(\d\d)+\d$)/g, "$1,");;
});

Handlebars.registerHelper('totalBoys', function(data) {
    var q = parseInt(data.cpp_b) + parseInt(data.c1_b) + parseInt(data.c2_b) + parseInt(data.c3_b) + parseInt(data.c4_b) + parseInt(data.c5_b) + parseInt(data.c6_b) + parseInt(data.c7_b) + parseInt(data.c8_b) + parseInt(data.c9_b) + parseInt(data.c10_b) + parseInt(data.c11_b) + parseInt(data.c12_b);
    return q.toString().replace(/(\d)(?=(\d\d)+\d$)/g, "$1,");;
});

Handlebars.registerHelper('totalGirls', function(data) {
    var q = parseInt(data.cpp_g) + parseInt(data.c1_g) + parseInt(data.c2_g) + parseInt(data.c3_g) + parseInt(data.c4_g) + parseInt(data.c5_g) + parseInt(data.c6_g) + parseInt(data.c7_g) + parseInt(data.c8_g) + parseInt(data.c9_g) + parseInt(data.c10_g) + parseInt(data.c11_g) + parseInt(data.c12_g);
    return q.toString().replace(/(\d)(?=(\d\d)+\d$)/g, "$1,");;
});

Handlebars.registerHelper('totalTeachers', function(data) {
    var q = parseInt(data.tch_t);
    return q.toString().replace(/(\d)(?=(\d\d)+\d$)/g, "$1,");;
});

Handlebars.registerHelper('totals', function(data,c) {
    return girls = parseInt(data['c' + c + '_g']) + parseInt(data['c' + c + '_b']);
});

Handlebars.registerHelper('ifInArray', function(value, list, options) {
	var ar = list.split(',');
	if(ar.indexOf(value.toString()) != -1)
		return options.fn(this);
	return options.inverse(this);
  // return person.firstName + " " + person.lastName;
});

Handlebars.registerHelper('colspan', function(value) {
	if(value == 4) 
		return 5; // classes 5,6,7,8 + header
	// var ar = list.split();
	// if(ar.indexOf(value) >= 0)
	// 	return options.fn(this);
	// return options.inverse(this);
  // return person.firstName + " " + person.lastName;
});


// Handlebars.registerHelper('cells', function(data,c, gender) {
// 	var q = 'c' + c + '_g';
// 	if(data[q] <= 0)
// 		return;
//     return  new Handlebars.SafeString(
//     	'<td>' + data[q] + '</td>'
//     	);
// });
// Handlebars.registerHelper('totalCells', function(data,c) {
// 	var q = 'c' + c + '_g';
// 	if(data[q] <= 0)
// 		return;
//     return  new Handlebars.SafeString(
//     	'<td>' + data[q] + '</td>'
//     	);
// });