  
   <section class="st-content">
    
    
      <section class="subscription description-pge theme-marg">
        <div class="container">
        
        <div class="top-heading pt-0 pb-5 text-center">
                        <h2 class="text-white">Payment Confirmation</h2>
         </div>
        
          <div class="row">
            
                <div class="col-md-6 mx-auto">
                    <div class="sub_inner">
                         <h3 class="mt-0"><img src="<?php echo $this->request->webroot; ?>images/s1.png"> <?php  if(!empty($plans->name)){ echo $plans->name; } ?></h3>
                         <p><?php  if(!empty($plans->description)){ echo $plans->description; } ?></p>
                         <h2><span style="color:#2ED3AE;">$</span> <?php  if(!empty($plans->price)){ echo $plans->price; } ?></h2>
                     </div>
                     
                     <div class="change-inner grey float-left w-100">

                  
                        <form action="<?php echo $this->request->webroot."plans/payment" ?>" method="post" id="paymentfrom">   
                  
                       
                            
                            <div class="form-group">
                              <label>Choose payment method</label>  
                              <ul class="m-0 p-0">
                                    <li><input type="radio" name="paymentmethod" value="paypal">Paypal</li>
                                    <li><input type="radio" name="paymentmethod" value="bitcoin">Bitcoin</li>
                                    <li><input type="radio" name="paymentmethod" value="stripe">Stripe</li>
                                </ul>
                            </div>
                               <input type="hidden" class="form-control" name="planid" value="<?php  if(!empty($plans->id)){ echo $plans->id; } ?>">
                         
                          <button type="submit" class="theme-btn theme-bg mx-auto">Pay Now</button>
                         
                          
                        </form>

                        </div>
                     
                  </div>
            
              
            </div>
        </div>
      </section> 
    
    
   </section><!--st-content-end-->


    <script type="text/javascript"> 
$().ready(function() {
  var form = $("#paymentfrom").validate({
    rules: {
      paymentmethod: {
       required: true
      }
    },
    messages: {
      name: "Please Choose payment method"

    }
  });

 
});
    </script>    