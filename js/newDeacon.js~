var editor;
$(document).ready(function() {




 
 // The function formats the rows for the expanded sales order line items
 function format (result) {
  //alert(d.user_access.qty);
 alert("row expanded");
  /*
 var string = " <tr> <th  class=\"soDetails\" id=\"edit\">   </th> <th class=\"soDetails\" id=\"delete\">  </th> </tr></tr>  <tr>  <th> Product </th> <th> Qty </th> <th> Price </th>  </tr>";
 
 $.each(result, function(i, id) {
 string = string + '<tr> <td> ' + id.product + ' </td>   <td>' +  id.qty + '</td>   <td> ' +  id.price + '</td>  </tr>';

 })
 console.log('This is the string ' + string);
 
 
 return string;
 */
};  

//  edit line item function

function formatEditSO (result) {
 
 console.log("made it to function" + result);
 var string ="<tr> <th id=\"edit\">   </th> <th id=\"delete\">  </th> </tr></tr>  <tr>  <th> </th> <th> Product </th> <th> Qty </th>  </tr>";
 var i;
 $.each(result, function(i, id) {
 string = string + '<tr> <td> <input class=\"soId\" type\"hidden\" name=\"id[' +i +']\" value=\"' + id.id + '\"</td> </input>  <td> <input  name=\"lineItem[' + id.id + '][product]\"      value =\"' + id.product+ '\"> </input></td>   <td> <input name=\"lineItem[' + id.id + '][qty]\"  value =\"' +  id.qty + '\"> </input> </td>     </tr>';
 i++;
 })
 
string = string + '</form> <br>';
 console.log('This is the string ' + string);
 return string;
 
 
}; 




// end of function





	editor = new $.fn.dataTable.Editor( {
		ajax: "table.homily.php",
		table: "#example",
		fields: [ {
				label: "Title:",
				name:  "homily.title"
			}, {
				label: "Date:",
				name:  "homily.date"
			}, {
				label: "Gospel:",
				name:  "homily.gospel" //,
			//	type:  "date"
			} ,
								
			  {
				"label": "Order Details:",
				"name": "access[].id",
				"type": "checkbox"
		} 
		]
	} );
	
	
	var table = $('#example').DataTable( {
			dom:  'T<"clear">lfrtip',
			table: "#example",
		"ajax": {
			url: "table.homily.php",
			type: 'POST'
		},
		
		"columns": [
			{
				"class":          'details-control',
				"orderable":      false,
				"data":           null,
				"defaultContent": ''
			},
			
			{ data: "homily.id" },                
			{ data: "homily.title" },   
			{ data: "homily.gospel" },    
			{ data: "homily.date" }      
			
		],
		"order": [[0, 'asc']],
		tableTools: {
			
			"sSwfPath": "copy_csv_xls_pdf.swf",
			sRowSelect: "os",
		aButtons: [ /*
				{ sExtends: "editor_create", editor: editor },
				{ sExtends: "editor_edit",   editor: editor },
				{ sExtends: "editor_remove", editor: editor }, 
			{
					sExtends: "collection",
					sButtonText: "Save",
					sButtonClass: "save-collection",
					aButtons: [ 'copy', 'csv', 'xls', 'pdf' ]
				}, */
				'print'
				//'xls',
				//'pdf'
			
			//	'copy',
 		//	   'xls',
  			//  'csv',
       //    'pdf',
       //    'print'
			]
		} , 
		initComplete: function ( settings, json ) {
	//	editor.field( 'users.sites' ).update( json.sites );
	//	editor.field( 'access[].id' ).update( json.access );
		
		}
	alert('hello');
	} );
	
	// Add event listener for opening and closing details
	//  this event gets the value of the 2nd td and assigns it to var row
	$('#example tbody').on('click', 'td.details-control', function (e) {
	 
	 

alert();		
		
})

	


})