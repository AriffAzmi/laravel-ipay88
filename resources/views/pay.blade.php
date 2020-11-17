<!DOCTYPE html>
<html>
<head>
	<title>Payment Form</title>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<style>
		h2.bg-success{
    		padding: 15px;
		}

		.required-lbl{
		    color: red;
		}

		label[for="billinginformation"]{
		    display: inline;
		    float: left;
		    margin:0px 45px 0px 0px;
		}

		.card-expiry{
		    padding-left: 0px;
		}

		.confirm-btn{
		    float:right;
		}

		.bg-primary{
		    padding: 10px;
		}

		label{
		    margin-bottom :0px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
	        <strong>Purchase Summary:</strong>
	        <h2 class="bg-success">Today's Total: RM 1.00</h2>
	        
            <form action="{{ route('payment-request') }}" method="POST">
            	@csrf
            	<div class="form-group col-md-12 bg-primary">
	                <label class="control-label" for="contactinformation">Contact Information:</label>
	            </div>
	            
	            <div class="form-group col-md-6">
	              <span class="required-lbl">* </span><label class="control-label" for="emailaddress">Name </label>
	              <div class="controls">
	                <input id="name" name="name" type="text" placeholder="" class="form-control" required="">
	              </div>
	            </div>
	            
	            <div class="form-group col-md-6">
	              <span class="required-lbl">* </span><label class="control-label" for="emailaddress">Email Address</label>
	              <div class="controls">
	                <input id="email" name="email" type="email" placeholder="" class="form-control" required="">
	              </div>
	            </div>
	            
	            <div class="form-group col-md-6">
	              <label class="control-label" for="phone">Phone</label>
	              <div class="controls">
	                <input id="contact_no" name="contact_no" type="number" placeholder="" class="form-control" required="">
	              </div>
	            </div>
	            <div class="form-group col-md-6">
	              <label class="control-label" for="phone">Select Bank</label>
	              <div class="controls">
	                <select name="paymentID" id="paymentID" class="form-control">
	                	<option value="6" selected>Maybank2U</option>
	                	<option value="8">Alliance Online</option>
	                	<option value="10">AmOnline</option>
	                	<option value="14">RHB Online</option>
	                	<option value="15">Hong Leong Online</option>
	                	<option value="20">CIMB Click</option>
	                	<option value="31">Public Bank Online</option>
	                	<option value="102">Bank Rakyat Internet Banking</option>
	                	<option value="103">Affin Online</option>
	                	<option value="124">BSN Online</option>
	                	<option value="134">Bank Islam</option>
	                	<option value="152">UOB</option>
	                	<option value="166">Bank Muamalat</option>
	                	<option value="167">OCBC</option>
	                	<option value="168">Standard Chartered Bank</option>
	                	<option value="198">HSBC Online Banking</option>
	                	<option value="199">Kuwait Finance House</option>
	                </select>
	              </div>
	            </div>
	            
	            <div class="form-group col-md-12">
	                <div class="control-group confirm-btn">
	                  <label class="control-label" for="placeorderbtn"></label>
	                  <div class="controls">
	                    <button id="placeorderbtn" name="placeorderbtn" class="btn btn-primary">Pay Now</button>
	                  </div>
	                </div>
	            </div>
            </form>
        </div>
	</div>
</body>
</html>