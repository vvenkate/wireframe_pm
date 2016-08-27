// Unit Management activity Document
$(document).ready( function() {

	
	//change the fields to show
	$("input[name$='prop_type']").change(function(){
			var value = $(this).val();
			
			if(value == "Villa"){
				$("#villa").removeClass("div_disable");
				$("#villa").addClass("div_enable");				
				
				$("#flat").addClass("div_disable");
				$("#flat").removeClass("div_enable");
				
				$("#warehouse").addClass("div_disable");
				$("#warehouse").removeClass("div_enable");
				
				$("#shop").addClass("div_disable");
				$("#shop").removeClass("div_enable");				
			}
			if(value == "Building"){
				$("#villa").addClass("div_disable");
				$("#villa").removeClass("div_enable");				
				
				$("#warehouse").addClass("div_disable");
				$("#warehouse").removeClass("div_enable");
				
				$("#flat").removeClass("div_disable");
				$("#flat").addClass("div_enable");
				
				$("#shop").addClass("div_disable");
				$("#shop").removeClass("div_enable");
			}
			if(value == "Warehouse"){
				$("#villa").addClass("div_disable");
				$("#villa").removeClass("div_enable");				
				
				$("#flat").addClass("div_disable");
				$("#flat").removeClass("div_enable");
				
				$("#warehouse").removeClass("div_disable");
				$("#warehouse").addClass("div_enable");
				
				$("#shop").addClass("div_disable");
				$("#shop").removeClass("div_enable");
			}
			if(value == "Shop"){
				$("#villa").addClass("div_disable");
				$("#villa").removeClass("div_enable");				
				
				$("#flat").addClass("div_disable");
				$("#flat").removeClass("div_enable");
				
				$("#warehouse").addClass("div_disable");
				$("#warehouse").removeClass("div_enable");
				
				$("#shop").removeClass("div_disable");
				$("#shop").addClass("div_enable");
			}
		}
	);
	
	var occ_flat = 2;
	$("#addflatocc").click(function(){
		var edu_input1name = "flat_floor_no"+occ_flat;
		var edu_input2name = "flat_flat_no"+occ_flat;
		var edu_input3name = "flat_occupied"+occ_flat;
		
		edu_column1= document.createElement("div");
		edu_column1.className = "col-xs-6 col-md-4 group-mail";
		
		//input label
		edu_inputcol1lab = document.createElement("label");
		edu_inputcol1lab.setAttribute("for",edu_input1name);
		edu_inputcol1lab.innerHTML = "Floor No";
		
		//input text
		edu_inputcol1 = document.createElement("input");
		edu_inputcol1.type = "text";
		edu_inputcol1.name = edu_input1name;
		edu_inputcol1.id = edu_input1name;
		edu_inputcol1.className = "form-control";
		edu_inputcol1.setAttribute("placeholder","1 or 2");
		
		edu_column1.appendChild(edu_inputcol1lab);
		edu_column1.appendChild(edu_inputcol1);
		
		edu_column2= document.createElement("div");
		edu_column2.className = "col-xs-6 col-md-4 group-mail";
		
		//input label2
		edu_inputcol2lab = document.createElement("label");
		edu_inputcol2lab.setAttribute("for",edu_input2name);
		edu_inputcol2lab.innerHTML = "Flat Number";
					
		//input text2
		edu_inputcol2 = document.createElement("input");
		edu_inputcol2.type = "text";
		edu_inputcol2.name = edu_input2name;
		edu_inputcol2.id = edu_input2name;
		edu_inputcol2.className = "form-control";
		edu_inputcol2.setAttribute("placeholder","1 or 2");
		
		edu_column2.appendChild(edu_inputcol2lab);
		edu_column2.appendChild(edu_inputcol2);
		
		edu_column3= document.createElement("div");
		edu_column3.className = "col-xs-6 col-md-4 group-mail";
		
		/*
		//input label3
		edu_inputcol3lab = document.createElement("label");
		edu_inputcol3lab.setAttribute("for",edu_input2name);
		edu_inputcol3lab.innerHTML = "Occupied";
		
		//div for radio
		edu_colrad3= document.createElement("div");
		edu_colrad3.className = "radio block";
		
		//input text3
		edu_inputcol3 = document.createElement("input");
		edu_inputcol3.type = "radio";
		edu_inputcol3.name = edu_input3name;
		edu_inputcol3.id = edu_input3name;
		edu_inputcol3.value = "yes";
		
		edu_inputcol3in = document.createElement("label");
		edu_inputcol3in.innerHTML = "Yes";
		
		edu_colrad3.appendChild(edu_inputcol3);
		edu_colrad3.appendChild(edu_inputcol3in);
		
		//div for radio
		edu_colrad4= document.createElement("div");
		edu_colrad4.className = "radio block";
		
		edu_inputcol31 = document.createElement("input");
		edu_inputcol31.type = "radio";
		edu_inputcol31.name = edu_input3name;
		edu_inputcol31.id = edu_input3name;
		edu_inputcol31.value = "no";
		
		edu_inputcol4in = document.createElement("label");
		edu_inputcol4in.innerHTML = "No";
		
		edu_colrad4.appendChild(edu_inputcol31);
		edu_colrad4.appendChild(edu_inputcol4in);
		
		edu_column3.appendChild(edu_inputcol3lab);
		edu_column3.appendChild(edu_colrad3);
		edu_column3.appendChild(edu_colrad4);
		*/
		

		
		//div education row.
		edu_rows_div = document.createElement("div");
		edu_rows_div.className = "row";
		edu_rows_div.appendChild(edu_column1);
		edu_rows_div.appendChild(edu_column2);
		edu_rows_div.appendChild(edu_column3);
		
		$("#addflatoccupied").append(edu_rows_div);
		
		occ_flat++;
	});
	
	
	var unocc_flat = 2;
	$("#addflatunocc").click(function(){
		var edu_input1name = "flat_floor_no_un"+occ_flat;
		var edu_input2name = "flat_flat_no_un"+occ_flat;
		
		edu_column1= document.createElement("div");
		edu_column1.className = "col-xs-6 col-md-4 group-mail";
		
		//input label
		edu_inputcol1lab = document.createElement("label");
		edu_inputcol1lab.setAttribute("for",edu_input1name);
		edu_inputcol1lab.innerHTML = "Floor No";
		
		//input text
		edu_inputcol1 = document.createElement("input");
		edu_inputcol1.type = "text";
		edu_inputcol1.name = edu_input1name;
		edu_inputcol1.id = edu_input1name;
		edu_inputcol1.className = "form-control";
		edu_inputcol1.setAttribute("placeholder","1 or 2");
		
		edu_column1.appendChild(edu_inputcol1lab);
		edu_column1.appendChild(edu_inputcol1);
		
		edu_column2= document.createElement("div");
		edu_column2.className = "col-xs-6 col-md-4 group-mail";
		
		//input label2
		edu_inputcol2lab = document.createElement("label");
		edu_inputcol2lab.setAttribute("for",edu_input2name);
		edu_inputcol2lab.innerHTML = "Flat Number";
					
		//input text2
		edu_inputcol2 = document.createElement("input");
		edu_inputcol2.type = "text";
		edu_inputcol2.name = edu_input2name;
		edu_inputcol2.id = edu_input2name;
		edu_inputcol2.className = "form-control";
		edu_inputcol2.setAttribute("placeholder","1 or 2");
		
		edu_column2.appendChild(edu_inputcol2lab);
		edu_column2.appendChild(edu_inputcol2);
		
		edu_column3= document.createElement("div");
		edu_column3.className = "col-xs-6 col-md-4 group-mail";
		
		
		//div education row.
		edu_rows_div = document.createElement("div");
		edu_rows_div.className = "row";
		edu_rows_div.appendChild(edu_column1);
		edu_rows_div.appendChild(edu_column2);
		edu_rows_div.appendChild(edu_column3);
		
		$("#addflatunoccupied").append(edu_rows_div);
		
		unocc_flat++;
	});
	
	$("#exp_type").change(function(){
		if(this.value == "Maintenance"){
			$("#expdata").removeClass("div_disable");
			$("#expdata").addClass("div_enable");
			var value = $("input[name$='prop_type']:checked").val();
			
				if(value == "Villa"){
					$("#villa").removeClass("div_disable");
					$("#villa").addClass("div_enable");	
				}
				if(value == "Building"){
					$("#flat").removeClass("div_disable");
					$("#flat").addClass("div_enable");	
				}
				if(value == "Warehouse"){
					$("#warehouse").removeClass("div_disable");
					$("#warehouse").addClass("div_enable");	
				}
				if(value == "Shop"){
					$("#shop").removeClass("div_disable");
					$("#shop").addClass("div_enable");	
				}
		}else{
			$("#expdata").addClass("div_disable");
			$("#expdata").removeClass("div_enable");
			
			$("#villa").addClass("div_disable");
			$("#villa").removeClass("div_enable");				
			
			$("#flat").addClass("div_disable");
			$("#flat").removeClass("div_enable");
			
			$("#warehouse").addClass("div_disable");
			$("#warehouse").removeClass("div_enable");
			
			$("#shop").addClass("div_disable");
			$("#shop").removeClass("div_enable");
		}
	});
});