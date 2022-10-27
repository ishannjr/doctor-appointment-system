const express = require('express');
const Razorpay = require('Razorpay'); 
  
// This razorpayInstance will be used to
// access any resource from razorpay
const razorpayInstance = new Razorpay({
  
    // Replace with your key_id
    key_id: rzp_test_TLFUaYv01pKN4W,
  
    // Replace with your key_secret
    key_secret: qlSDvnLavtVPke38hu15cjaF
});
  
const app = express();
const PORT = process.env.PORT || '5059';
  
// Here we will create two routes one 
// /createOrder and other /verifyOrder 
// Replace these comments with the code 
// provided later in step 2 & 8 for routes
  
app.listen(PORT, ()=>{
    console.log("Server is Listening on Port ", PORT);
});
//Inside app.js
app.post('/createOrder', (req, res)=>{

	// STEP 1:
	const {amount,currency,receipt, notes} = req.body;	
		
	// STEP 2:	
	razorpayInstance.orders.create({amount, currency, receipt, notes},
		(err, order)=>{
		
		//STEP 3 & 4:
		if(!err)
			res.json(order)
		else
			res.send(err);
		}
	)
});
