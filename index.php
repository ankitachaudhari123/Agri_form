<!DOCTYPE html>
<html>
<head>
	<title> FORM SURVEY</title>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css" rel="stylesheet"/>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>


<body>

<div class="main_div">
	<br>
	<div class="from_div">
		<form method="POST" action="" id="form_id">
		<br>
		<h3 class="heading" style="font-size: 30px;">सर्वे फॉर्म  </h3>
		<div style="width: 100%;height: 50px;display: inline-flex;">
			<div style="width: 12%; height: 50px;">
				<h5 class="que_section">नाव :</h5>
			</div>
			<div style="width: 88%;height: 50px;">
				<input type="text" name="full_name" class="form-control full_name info" required>
			</div>
		</div>
		<br>
		<div style="width: 100%;height: 50px;display: inline-flex;">
			<div style="width: 25%; height: 50px;">
				<h5 class="que_section">मोबाईल नंबर :</h5>
			</div>
			<div style="width: 75%;height: 50px;">
				 <input type="number" name="mobile_number" class="form-control mobile_number info_1" required="">
			</div>
		</div>
		<br>
		<div style="width: 100%;height: 50px;display: inline-flex;">
			<div style="width: 25%; height: 50px;">
				<h5 class="que_section">ई-मेल आयडी :</h5>
			</div>
			<div style="width: 75%;height: 50px;">
				<input type="email" name="email_id" class="form-control email_id info_1">
			</div>
		</div>
		<br>
		<div style="width: 100%;height: 50px;display: inline-flex;">
			<div style="width: 14%; height: 50px;">
				<h5 class="que_section">पत्ता : </h5>
			</div>
			<div style="width: 86%;height: 50px;">
				<textarea class="form-control address info" name="address"></textarea>
				<!-- <input type="text" name="" class="form-control address info"> -->
			</div>
		</div>
		<br>
		<br>
		<h5 class="que_section">तुम्ही तुमच्या शेतामध्ये कोणत्या प्रकारची पिके काढता?</h5>
		<select class="form-control ans-section ans_section_1" name="ans_section_1">
			<option>पर्याय निवडा</option>
			<option>भाज्या (उदा. टोमॅटो, काकडी, बेल मिरची </option>
			<option>फळ (उदा. सफरचंद, स्ट्रॉबेरी, पीच</option>
		    <option>धान्य (उदा. गहू, तांदूळ, कॉर्न</option>
		    <option>इतर (कृपया निश्चित करा)</option>
		</select>
		<input type="text" name="or_ans_input_section_1" class="or_ans_input_section_1 form-control ans-section">
		<br>
		<h5 class="que_section">सिंचनासाठी आपण कोणत्या पद्धती वापरता? </h5>
		<select class="form-control ans-section ans_section_2" name="ans_section_2">
			<option>पर्याय निवडा</option>
			<option>ठिबक सिंचन</option>
			<option>पावसाच्या पाण्याने</option>
		    <option>हाताने लागवड/कापणी</option>
		    <option>इतर (कृपया निश्चित करा)</option>
		</select>
		<input type="text" name="or_ans_input_section_2" class="or_ans_input_section_2 form-control ans-section">
		<br>
		<h5 class="que_section">आपण कोणत्या प्रकारचे कीटकनाशक वापरता?</h5>
		<select class="form-control ans-section ans_section_3" name="ans_section_3">
			<option>पर्याय निवडा</option>
			<option>एकत्रित कीटक व्यवस्थापन (IPM)</option>
			<option>सेंद्रिक/नैसर्गिक खते</option>
		    <option>पारंपारिक कीटकनाशके</option>
		    <option>काहीही नाही</option>
		</select>
		<br>
		<h5 class="que_section">तुमचे कोणतेही पीक सेंद्रिय पद्धतीने घेतले जाते का?</h5>
		<select class="form-control ans-section ans_section_4" name="ans_section_4">
			<option>पर्याय निवडा</option>
			<option>होय</option>
			<option>नाही</option>
		</select>
		<br>
		<h5 class="que_section">तुम्ही तुमच्या शेतातील पाण्याचा वापर आणि संवर्धन कसे करता?</h5>
		<select class="form-control ans-section ans_section_5" name="ans_section_5">
			<option>पर्याय निवडा</option>
			<option>संवर्धन मशागत</option>
		    <option>अक्षय ऊर्जा (उदा., सौर, वारा)</option>
		    <option>इतर (कृपया निश्चित करा) </option>
		</select>
		<input type="text" name="or_ans_input_section_5" class="form-control ans-section or_ans_input_section_5">
		<br>
		<h5 class="que_section">तुम्ही तुमचे पिके कुठे विकता?</h5>
		<select class="form-control ans-section ans_section_6" name="ans_section_6">
			<option>पर्याय निवडा</option>
			<option>थेट ग्राहकांना </option>
			<option>शेतकरी बाजार </option>
		    <option>हॉटेल/किराणा दुकान</option>
		    <option>व्यापारी </option>
		    <option>इतर (कृपया निश्चित करा)</option>
		</select>
		<input type="text" name="or_ans_input_section_6" class="form-control ans-section or_ans_input_section_6">
		<br>
		<h5 class="que_section">शेतकरी म्हणून तुम्हाला कोणत्या मुख्य आव्हानाना सामोरे जावं लागतं?</h5>
		<select class="form-control ans-section ans_section_7" name="ans_section_7">
			<option>पर्याय निवडा</option>
			<option>हवामान परिवर्तनशीलता</option>
			<option>विस्तार (उदा., हरितगृह)</option>
		    <option>विविधीकरण (उदा. मूल्यवर्धित उत्पादने)</option>
		    <option>इतर (कृपया निश्चित करा)</option>
		</select>
		<input type="text" name="or_ans_input_section_7" class="form-control ans-section or_ans_input_section_7">
		<br>
		<input type="submit" name="submit" class="btn">
		</form>
		<br>
	</div>
	<br><br>
</div>
</body>
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"
></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</html>
<script type="text/javascript">
    $('.ans_section_1').change(function(){
    	if ($('.ans_section_1').val() == 'इतर (कृपया निश्चित करा)') {
    		$('.or_ans_input_section_1').show();
    	}
    	else{
    		$('.or_ans_input_section_1').hide();
    	}
    })
    $('.ans_section_2').change(function(){
    	if ($('.ans_section_2').val() == 'इतर (कृपया निश्चित करा)') {
    		$('.or_ans_input_section_2').show();
    	}
    	else{
    		$('.or_ans_input_section_2').hide();
    	}
    })
     $('.ans_section_5').change(function(){
    	if ($('.ans_section_5').val() == 'इतर (कृपया निश्चित करा)') {
    		$('.or_ans_input_section_5').show();
    	}
    	else{
    		$('.or_ans_input_section_5').hide();
    	}
    })
     $('.ans_section_6').change(function(){
    	if ($('.ans_section_6').val() == 'इतर (कृपया निश्चित करा)') {
    		$('.or_ans_input_section_6').show();
    	}
    	else{
    		$('.or_ans_input_section_6').hide();
    	}
    })
     $('.ans_section_7').change(function(){
    	if ($('.ans_section_7').val() == 'इतर (कृपया निश्चित करा)') {
    		$('.or_ans_input_section_7').show();
    	}
    	else{
    		$('.or_ans_input_section_7').hide();
    	}	
    })
	// $('.btn').click(function(){
	// 	var full_name = $('.full_name').val();
	// 	var mobile_number = $('.mobile_number').val();
	// 	var email_id = $('.email_id').val();
	// 	var address = $('.address').val();
	// 	var ans_section_1 = $('.ans_section_1').val();
	// 	var or_ans_input_section_1 = $('.or_ans_input_section_1').val();
	// 	var ans_section_2 = $('.ans_section_2').val();
	// 	var or_ans_input_section_2 = $('.or_ans_input_section_2').val();
	// 	var ans_section_3 = $('.ans_section_3').val();
	// 	var ans_section_4 = $('.ans_section_4').val();
	// 	var ans_section_5 = $('.ans_section_5').val();
	// 	var or_ans_input_section_5 = $('.or_ans_input_section_5').val();
	// 	var ans_section_6 = $('.ans_section_6').val();
	// 	var or_ans_input_section_6 = $('.or_ans_input_section_6').val();
	// 	var ans_section_7 = $('.ans_section_7').val();
	// 	var or_ans_input_section_7 = $('.or_ans_input_section_7').val();
	// 	if (full_name == '') {
	// 		alert("Enter Full Name");
	// 	}
	// 	$.ajax({
	// 		url:'php/insert_farmer_details.php',
	// 		method:'POST',
	// 		data:{full_name:full_name, mobile_number:mobile_number, email_id:email_id, address:address, ans_section_1:ans_section_1, or_ans_input_section_1:or_ans_input_section_1, ans_section_2:ans_section_2, or_ans_input_section_2:or_ans_input_section_2, ans_section_3:ans_section_3, ans_section_4:ans_section_4, ans_section_5:ans_section_5, or_ans_input_section_5:or_ans_input_section_5, ans_section_6:ans_section_6, or_ans_input_section_6:or_ans_input_section_6, ans_section_7:ans_section_7, or_ans_input_section_7:or_ans_input_section_7},
	// 		success:function(res){
	// 			location.href = 'success.php';
	// 		}
	// 	})
	// });

	$('#form_id').submit(function (event) { 
                event.preventDefault();                 
                var form = document.getElementById('form_id'); 
                var formData = new FormData(form);                
                $.ajax({ 
                    url: 'php/insert_farmer_details.php', 
                    method: 'POST', 
                    data: formData, 
                    processData: false, 
                    contentType: false, 
                    success: function (response) {                       
                       location.href='success'
                    }, 
                   
                }); 
               
            }); 


</script>