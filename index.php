<?php include("header.php");?>
<style>
#form1{margin-top: -105px;}
</style>


<div class="page-head">
	<div class="container no-padding">
		<div class="row">
			<div class="col-md-6">
				<h2>Our Plan</h2>
			</div>
			<div class="col-md-6">
				<ol class="breadcrumb">
					<li><a href="index.php">Home</a></li>					
					<li class="active">Plan</li>
				</ol>
			</div>
		</div>
	</div>
</div>
<div style="min-height:20px"></div>
        
        
        <div class="about-wrap">
	<div class="container no-padding">
		<div class="row">
			<div class="col-md-12 no-padding about-info1">
				<div class="col-md-12 section-title animate">
					
				</div>

				<div class="space60"></div>
				<div class="clearfix"></div>

				<div class="col-md-12 no-padding pricing-table1">
					<div class="col-md-2 no-padding no-b">
						<ul class="plan-lists">
							<li class="p-dark">Plan Name</li>
							<li>Pages</li>
							<li class="p-dark">Banner</li>
							<li>Ecommerce</li>
							<li class="p-dark">Widgets</li>
							<li>Support + Addon</li>
                            <li class="p-dark"></li>
                            <li></li>
						</ul>
					</div>

					<div class="col-md-2 no-padding">
						<ul class="plan-info">
							<li class="plan_price ">$99</li>
							<li class="plan_title p-dark">Plan A</li>
							<li>Static Pages</li>
							<li class="p-dark">Yes</li>
							<li><div class="plan_no"></div></li>
                            <li class="p-dark"><div class="plan_no"></div></li>
							<li>6 Months</li>
							
							
							<?php if($_REQUEST['message']) {?>
							<div id="btn1">
							<li class="p-dark p-btn">
							<!--<form method="POST" action="https://voguepay.com/pay/"><input type="hidden" name="v_merchant_id" value="1271-0029696" /><input type="hidden" name="memo" value="Order from Rajendra Bharadia" /><input type="hidden" name="item_1" value="Plan A" /><input type="hidden" name="price_1" value="19696.05" /><input type="hidden" name="description_1" value="" /><br /><input type="image" src="https://voguepay.com/images/buttons/buynow_blue.png" alt="PAY" /></form>-->
							
							<form method="POST" action="https://voguepay.com/pay/">
							<input type="hidden" name="v_merchant_id" value="7409-0030847" />
							<input type="hidden" name="memo" value="Order from rajendra kumar" />
							<input type="hidden" name="item_1" value="Plan A" />
							<input type="hidden" name="price_1" value="99" /><input type="hidden" name="description_1" value="" />
							<input type='hidden' name='notify_url' value='http://shubhimpex.net/notification2.php' />
                     <input type='hidden' name='fail_url' value='http://shubhimpex.net/notification2.php' />
                     <input type='hidden' name='success_url' value='http://shubhimpex.net/notification2.php' />
							<br /><input type="image" src="https://voguepay.com/images/buttons/buynow_grey.png" alt="PAY" /></form>
							</li>
								<li></li>					
							<li class="p-btn">
							
							<form id="form1" action="shubhubarecent/process.php" method="post">
<input id="price" name="price" value="99" type="hidden"><br>
 <input name="description" value="Plan A" type="hidden"><br>
 <input class="c-btn" id="submit" name="submit" value="Pay Now" type="submit"></form>
							<br>
							<a href="paymentClient.php?TOTAL=99&DESCRIPTION=Plan A">Etranzact</a>
							</li>
							</div>
						
							
							<?php }else {?>
							
							<li class="p-btn"><a href="subscribe.php">Subscribe</a></li>
							<?php }?>
							
							
						
						
						
						</ul>
					</div>

					<div class="col-md-2 no-padding">
						<ul class="plan-info">
							<li class="plan_price ">$149</li>
							<li class="plan_title p-dark">Plan B</li>
							<li>3-4 Pages</li>
							<li class="p-dark">Yes</li>
							<li><div class="plan_no"></div></li>
                            <li class="p-dark"><div class="plan_no"></div></li>
							<li>1 year</li>
							
							<?php if($_REQUEST['message']) {?>
							<div id="btn2"><li class="p-dark p-btn">
							
							<!--<form method="POST" action="https://voguepay.com/pay/"><input type="hidden" name="v_merchant_id" value="1271-0029696" /><input type="hidden" name="memo" value="Order from Rajendra Bharadia" /><input type="hidden" name="item_1" value="Plan B" /><input type="hidden" name="price_1" value="29643.55" /><input type="hidden" name="description_1" value="" /><br /><input type="image" src="https://voguepay.com/images/buttons/buynow_blue.png" alt="PAY" /></form>
							-->
							<form method="POST" action="https://voguepay.com/pay/"><input type="hidden" name="v_merchant_id" value="7409-0030847" /><input type="hidden" name="memo" value="Order from rajendra kumar" /><input type="hidden" name="item_1" value="Plan B" /><input type="hidden" name="price_1" value="149" /><input type="hidden" name="description_1" value="" />
							<input type='hidden' name='notify_url' value='http://shubhimpex.net/notification2.php' />
                     <input type='hidden' name='fail_url' value='http://shubhimpex.net/notification2.php' />
                     <input type='hidden' name='success_url' value='http://shubhimpex.net/notification2.php' />
							<br /><input type="image" src="https://voguepay.com/images/buttons/buynow_grey.png" alt="PAY" /></form>
							
							
							</li>
								<li></li>						
							<li class="p-btn">
							
							<form id="form1" action="shubhubarecent/process.php" method="post">
<input id="price" name="price" value="149" type="hidden"><br>
 <input name="description" value="Plan B" type="hidden"><br>
 <input class="c-btn" id="submit" name="submit" value="Pay Now" type="submit"></form><br>
							<a href="paymentClient.php?TOTAL=149&DESCRIPTION=Plan B">Etranzact</a>
							</li>
							</div>
							<?php }else {?>
							
							<li class="p-btn"><a href="subscribe.php">Subscribe</a></li>
							<?php }?>
							
							
							
							
							
						
						
						
						</ul>
					</div>

					<div class="col-md-2 no-padding">
						<ul class="plan-info popular">
							<li class="plan_price ">$199</li>
							<li class="plan_title p-dark">Plan C</li>
							<li>4-5 dynamic Pages</li>
							<li class="p-dark">animated custom design</li>
							<li><div class="plan_no"></div></li>
                            <li class="p-dark"><div class="plan_no"></div></li>
							<li>1 yr + life time antivirus.</li>
							
							
							<?php if($_REQUEST['message']) {?>
							<div id="btn3"><li class="p-dark p-btn">
							<!--
							<form method="POST" action="https://voguepay.com/pay/"><input type="hidden" name="v_merchant_id" value="1271-0029696" /><input type="hidden" name="memo" value="Order from Rajendra Bharadia" /><input type="hidden" name="item_1" value="Plan C" /><input type="hidden" name="price_1" value="39591.05" /><input type="hidden" name="description_1" value="" /><br /><input type="image" src="https://voguepay.com/images/buttons/buynow_blue.png" alt="PAY" /></form>
-->

<form method="POST" action="https://voguepay.com/pay/"><input type="hidden" name="v_merchant_id" value="7409-0030847" /><input type="hidden" name="memo" value="Order from rajendra kumar" /><input type="hidden" name="item_1" value="Plan C" /><input type="hidden" name="price_1" value="199" /><input type="hidden" name="description_1" value="" />
<input type='hidden' name='notify_url' value='http://shubhimpex.net/notification2.php' />
                     <input type='hidden' name='fail_url' value='http://shubhimpex.net/notification2.php' />
                     <input type='hidden' name='success_url' value='http://shubhimpex.net/notification2.php' />
<br /><input type="image" src="https://voguepay.com/images/buttons/buynow_grey.png" alt="PAY" /></form>

</li>
							<li></li>	
							<li class="p-btn">
							
							<form id="form1" action="shubhubarecent/process.php" method="post">
<input id="price" name="price" value="199" type="hidden"><br>
 <input name="description" value="Plan C" type="hidden"><br>
 <input class="c-btn" id="submit" name="submit" value="Pay Now" type="submit"></form><br>
							<a href="paymentClient.php?TOTAL=199&DESCRIPTION=Plan C">Etranzact</a>
							</li></div>
													
						<?php }else {?>
							
							<li class="p-btn"><a href="subscribe.php">Subscribe</a></li>
							<?php }?>
							
							
							
							
						
						
						
						
						</ul>
					</div>

					<div class="col-md-2 no-padding">
						<ul class="plan-info">
						<li class="plan_price ">$249</li>
							<li class="plan_title p-dark">Plan D</li>
							<li>CMS based website</li>
							<li class="p-dark">banner management </li>
					    	<li>Yes</li>
                            <li class="p-dark">Yes</li>
							<li>2yr +life time antivirus.</li>
							
						
							<?php if($_REQUEST['message']) {?>
							<div id="btn4"><li class="p-dark p-btn">
							
							<!--<form method="POST" action="https://voguepay.com/pay/"><input type="hidden" name="v_merchant_id" value="1271-0029696" /><input type="hidden" name="memo" value="Order from Rajendra Bharadia" /><input type="hidden" name="item_1" value="Plan D" /><input type="hidden" name="price_1" value="49538.55" /><input type="hidden" name="description_1" value="" /><br /><input type="image" src="https://voguepay.com/images/buttons/buynow_blue.png" alt="PAY" /></form>
							-->
							
			<form method="POST" action="https://voguepay.com/pay/"><input type="hidden" name="v_merchant_id" value="7409-0030847" /><input type="hidden" name="memo" value="Order from rajendra kumar" /><input type="hidden" name="item_1" value="Plan D" /><input type="hidden" name="price_1" value="249" /><input type="hidden" name="description_1" value="" />
			<input type='hidden' name='notify_url' value='http://shubhimpex.net/notification2.php' />
                     <input type='hidden' name='fail_url' value='http://shubhimpex.net/notification2.php' />
                     <input type='hidden' name='success_url' value='http://shubhimpex.net/notification2.php' />
			<br /><input type="image" src="https://voguepay.com/images/buttons/buynow_grey.png" alt="PAY" /></form>				
							
</li>
							<li></li>	
							<li class="p-btn">
							
							<form id="form1" action="shubhubarecent/process.php" method="post">
<input id="price" name="price" value="249" type="hidden"><br>
 <input name="description" value="Plan D" type="hidden"><br>
 <input class="c-btn" id="submit" name="submit" value="Pay Now" type="submit"></form><br>
							<a href="paymentClient.php?TOTAL=249&DESCRIPTION=Plan D">Etranzact</a>
							</li></div>
						
													
						<?php }else {?>
							
							<li class="p-btn"><a href="subscribe.php">Subscribe</a></li>
							<?php }?>
							
							
							
						
						
						
						</ul>
					</div>

					<div class="col-md-2 no-padding p-last">
						<ul class="plan-info">
							<li class="plan_price ">$299</li>
							<li class="plan_title p-dark">Plan E</li>
							<li>Full CMS/Unlimited Pages</li>
							<li class="p-dark">banner management </li>
							<li>Yes</li>
                            <li class="p-dark">Yes</li>
							<li>3yr +life time antivirus.</li>
							
							
							<?php if($_REQUEST['message']) {?>
							<div id="btn5"><li class="p-dark p-btn">
							
							<!--<form method="POST" action="https://voguepay.com/pay/"><input type="hidden" name="v_merchant_id" value="1271-0029696" /><input type="hidden" name="memo" value="Order from Rajendra Bharadia" /><input type="hidden" name="item_1" value="Plan E" /><input type="hidden" name="price_1" value="59486.05" /><input type="hidden" name="description_1" value="" /><br /><input type="image" src="https://voguepay.com/images/buttons/buynow_blue.png" alt="PAY" /></form>
							-->
			
			<form method="POST" action="https://voguepay.com/pay/"><input type="hidden" name="v_merchant_id" value="7409-0030847" /><input type="hidden" name="memo" value="Order from rajendra kumar" /><input type="hidden" name="item_1" value="Plan E" /><input type="hidden" name="price_1" value="299" /><input type="hidden" name="description_1" value="" />
			<input type='hidden' name='notify_url' value='http://shubhimpex.net/notification2.php' />
                     <input type='hidden' name='fail_url' value='http://shubhimpex.net/notification2.php' />
                     <input type='hidden' name='success_url' value='http://shubhimpex.net/notification2.php' />
			<br /><input type="image" src="https://voguepay.com/images/buttons/buynow_grey.png" alt="PAY" /></form>				
							
</li>
							<li></li>	
							<li class="p-btn">
							
							<form id="form1" action="shubhubarecent/process.php" method="post">
<input id="price" name="price" value="299" type="hidden"><br>
 <input name="description" value="Plan E" type="hidden"><br>
 <input class="c-btn" id="submit" name="submit" value="Pay Now" type="submit"></form>
 <br>
							<a href="paymentClient.php?TOTAL=299&DESCRIPTION=Plan E">Etranzact</a>
							</li></div>
												
						<?php }else {?>
							
							<li class="p-btn"><a href="subscribe.php">Subscribe</a></li>
							<?php }?>
							
													
						
						</ul>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
        
            

<?php include("footer.php");?>