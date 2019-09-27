//current_session
loadCurrentSession();
loadAllSession();

function loadCurrentSession(){
    $('.loading-overlay').show();
    var htmls= $('#current_session');
    var row;
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
    $.ajax({
        url: "/current_session",
        method: "GET",
        dataType: "json",
        success: function (response) {
            $('.loading-overlay').hide();
            if(response.success){
                
                const data=response.data;
                row=` <div class="card">
							<img class="card-img"  style="min-height:350px;max-height:700px" src="images/${data.image}" alt="${data.title}">
							<div class="card-img-overlay text-white d-flex flex-column justify-content-center">
							  <h3 class="wpb_heading wpb_singleimage_heading1 card-title text-center">${data.title}</h3>
		
							  <span class="card-subtitle mb-2" style="color:#fff!important;font-size:40px"><b class="text-white" style="color:#fff!important">${data.country}</b></span>
							
		
							<a class="title_link" href="j#">
								<h2 class="wpb_heading wpb_singleimage_heading2 text-center">
		
									<hr />
									<div class="float-left"><h4 href="#" class="ml-5 mt-4 card-link text-info">${data.date}</h4></div>
									<div class="float-right"><a href="/candidate-application" class="btn btn-primary mr-5">APPLY NOW!</a></div>
									
								</h2>
							</a>
							  
							</div>
						</div>
                            `;
                
            
            htmls.html(row);	
           
            }
        },error:function(err){
           // console.log(err);
        }
    }
    );
}


function loadAllSession(){
    $('.loading-overlay').show();
    var htmls= $('#all_session');
    var row='';
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
    $.ajax({
        url: "/list_sessions",
        method: "GET",
        dataType: "json",
        success: function (response) {
            $('.loading-overlay').hide();
                if(response.success && response.data.length > 0){
            
                    const data=response.data;
                data.forEach(element => {
                
                row+=`
                <div class="col-md-6 mt-5">
                        <div class="card">
                                    <img class="card-img"  style="min-height:350px;max-height:700px" src="images/${element.image}" alt="${element.title}">
                                    <div class="card-img-overlay text-white d-flex flex-column justify-content-center">
                                    <h3 class="wpb_heading wpb_singleimage_heading1 card-title text-center">${element.title}</h3>
                
                                    <span class="card-subtitle mb-2" style="color:#fff!important;font-size:40px"><b class="text-white" style="color:#fff!important">${element.country}</b></span>
                                    
                
                                    <a class="title_link" href="j#">
                                        <h2 class="wpb_heading wpb_singleimage_heading2 text-center">
                
                                            <hr />
                                            <div class="float-left"><h4 href="#" class="ml-5 mt-4 card-link text-info">${element.date}</h4></div>
                                            

                                        </h2>
                                    </a>
                                    
                                    </div>
                                </div>
                        </div>
                            `;
                
                });

            htmls.html(row);	
           
            }
        },error:function(err){
           // console.log(err);
        }
    }
    );
}



$(document).ready(function() {

	$('form[id="applay_form"]').validate({
    rules: {
      fname: 'required',
      lname: 'required',
	  lname: 'required',
	  dob:'required',
	  phone_number:'required',
	  phone_code:'required',
	  street:'required',
	  city:'required',
	  province:'required',
	  level_education:'required',
	  former_school_attended:'required',
	  current_occupation:'required',
	  country:'required',
	  education_background:{
        required: true,
		maxlength: 500
      },  
	  q1:{
        required: true,
		maxlength: 500
      },  
	  q2:{
        required: true,
        maxlength: 500
      },
	  q3:'required',
	  q4:{
        required: true,
        maxlength: 500
      },
	  q5:{
        required: true,
        maxlength: 500
      },
	  q6:{
        required: true,
        maxlength: 500
      },
	  q7:{
        required: true,
        maxlength: 500
      },
      email: {
        required: true,
        email: true,
      }
      
    },
    messages: {
      fname: 'First name is required',
      lname: 'Last name is required',
      email: 'Enter a valid email',
	  dob:'Birth Date is required',
	  phone_number:'Phone number is required',
	  phone_code:'Phone area code is required',
	  street:'Street is required',
	  city:'City is required',
	  province:'Province is required',
	  level_education:'This is field is required',
	  former_school_attended:'This is field is required',
	  education_background:'Please make sure words do not exceed 500 characters long.',
	  current_occupation:'This is field is required',
	  country:'Country is required',
	  q1:'Please make sure words do not exceed 500 characters long.',
	  q2:'Please make sure words do not exceed 500 characters long.',
	  q3:'Project name is required',
	  q5:'Please make sure words do not exceed 500 characters long.',
	  q6:'Please make sure words do not exceed 500 characters long.',
	  q7:'Please make sure words do not exceed 500 characters long.'
    },
    submitHandler: function(form) {
     
	$('.loading-overlay').show();
	$('#submit').hide();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
    var data = $(form).serializeArray();
			$.ajax({
				url:"/apply",
				method:'POST',
				data:new FormData(form),
				contentType:false,
				processData:false,
				contentType:false,
				processData:false,
				success:function(data)
				{
                    $('.loading-overlay').hide();
					if(data.success){
					alert(data.message);
					window.location.href="./";
					$('#submit').show();
					}
					
				},error:function(error)
				{
					console.log(error);
				}
			});
	  
    }
  });

});