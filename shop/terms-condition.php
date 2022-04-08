<?php 

include('header-up.php'); 

?>

<!-- 
	Upper Header Section 
-->
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="topNav">
		<div class="container">
			<div class="alignR">
				<div class="pull-left socialNw">
					<a href="https://www.twitter.com/login" target="_blank"><span class="icon-twitter"></span></a>
					<a href="https://www.facebook.com/Seint-Online-Shopping-766719666785048/" target="_blank"><span class="icon-facebook"></span></a>
					<a href="https://www.youtube.com/" target="_blank"><span class="icon-youtube"></span></a>
					<a href="https://www.tumblr.com/login" target="_blank"><span class="icon-tumblr"></span></a>
				</div>
				<a href="index.php"> <span class="icon-home"></span> Home</a> 
				<!-- <a href="register-login.php"><span class="icon-user"></span> Register / Login</a>  -->
				<a href="contact.php"><span class="icon-envelope"></span> Contact us</a>
				<a href="view_cart.php" class="add-to-cart">
					<span class="icon-shopping-cart"></span>
					 <?php echo $itemsall.' Item(s) ';
						if($item_total == 0 ){ }
						 else{ 
                              echo ' <strong>-</strong> <span class="badge badge-warning">'.$item_total.''.$currency.'</span>'; 
                        }  ?>
				</a>
				
			</div>
		</div>
	</div>
</div>

<!--
Lower Header Section 
-->
<div class="container">
<div id="gototop"> </div>
<header id="header">
<div class="row">
	<div class="span7">
	<h2 style="color: #c8383c;font-family: verdana;">Seint Online Shop</h2>
	</div>
	<div class="span5 alignR">
	<p><br><br><a href="#" style="color: #000;"><span class="icon-phone"></span>&nbsp;+959 973 600 116</a>&nbsp;&nbsp;
	<a href="deliveryinfo.php" class="btn btn-mini"><span class="icon-truck"></span>&nbsp;Delivery</a><br><br></p>
    
</div>
</div>
</header>

<!--
Navigation Bar Section 
-->
<div class="navbar">
	  <div class="navbar-inner">
		<div class="container">
		  <a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </a>
		  <div class="nav-collapse">
			<ul class="nav">
			  <li class=""><a href="index.php">Home</a></li>
			  <li class="">&nbsp;&nbsp;&nbsp;</li>
			  <li class="">&nbsp;&nbsp;&nbsp;</li>
			  <li class=""><a href="new-products.php">What's New</a></li>
			  <li class="">&nbsp;&nbsp;&nbsp;</li>
			  <li class=""><a href="list-view.php">List View</a></li>
			  <li class="">&nbsp;&nbsp;&nbsp;</li>
			  <li class=""><a href="top-sellers.php">Best selling</a></li>
			  <li class="">&nbsp;&nbsp;&nbsp;</li>
			  <li class=""><a href="specials.php">Special Events</a></li>
			  <li class="">&nbsp;&nbsp;&nbsp;</li>
			</ul>
			<form action="result.php" method="get" class="navbar-search pull-left">
                <input type="search" name="s" placeholder="Search" class="search-query span2">
            </form>
			<ul class="nav pull-right">

				<li class=""><a href="feedback.php"><span class="icon-comments"></span>&nbsp;Feedbacks</a></li>
				<li class="">&nbsp;&nbsp;&nbsp;</li>
				<li class="">&nbsp;&nbsp;&nbsp;</li>
			</ul>
		  </div>
		</div>
	  </div>
</div>
<!-- 
Body Section 
-->
	<hr class="soften">
<div class="well well-small" style="font-family: calibri;font-size: 17px;color: #555;">
	
	<div class="row-fluid">

		<h1>Terms And Conditions</h1>
		<hr class="soften"/>	
        <p>This document sets out the terms which you may use our Website and Social Media. Please carefully read all terms and conditions before using our Website and Social Media.</p>
            <h2>1. Acceptance of Website and Social Media Terms and Conditions</h2>
                <h3>1.1 You accept and consent to the Website and Social Media Terms and Conditions and the Returns Policy in full by using our Website and Social Media.</h3>
                <h3>1.2 You must not use our Website and Social Media if you do not accept the Website and Social Media Terms and Conditions</h3>
            <h2>2. Acceptable Use</h2>
                <h3>2.1 We grant you a non-exclusive, non-transferable, revocable, limited licence to:</h3>
                    <h4>(a) view and use information accessible from the Website and Social Media; and</h4>
                    <h4>(b) purchase goods or services from the Website.</h4>
                <h3>2.2 You must not:</h3>
                    <h4>(a) cause damage or interfere with accessibility to the Website and Social Media;</h4>
                    <h4>(b) use it in connection with illegal, fraudulent or harmful purposes or activities;</h4>
                    <h4>(c) store, transmit or distribute Malicious Computer Program; or</h4>
                    <h4>(d) conduct any systematic or automated data collection activities.</h4>
            <h2>3. Intellectual Property Rights</h2>
                <h3>3.1 We own or are licensed to use our intellectual property in the Website and Social Media.</h3>
                <h3>3.2 You may only view and download Content on the Website for caching purposes and print a single copy of Content for personal use.</h3>
                <h3>3.3 You must not:</h3>
                    <h4>(a) republish any Content from this Website and Social Media;</h4>
                    <h4>(b) present any Content in public;</h4>
                    <h4>(c) reproduce or exploit any Content on this Website and Social Media for commercial purpose;</h4>
                    <h4>(d) edit or otherwise modify any Content on the Website and Social Media; or</h4>
                    <h4>(e) redistribute any Content from this Website and Social Media unless we expressly permitted redistribution.</h4>
            <h2>4. Posting Policy</h2>
                <h3>4.1 You may upload Posts on the Website and Social Media subject to this clause.</h3>
            <h2>Intellectual Property Rights</h2>
                <h3>4.2 You grant us a non-exclusive, transferable, sub-licensable, royalty-free, world-wide licence to use any Intellectual Property in Posts, including rights to:</h3>
                    <h4>(a) copy, reformat, edit or translate;</h4>
                    <h4>(b) publicly perform or present;</h4>
                    <h4>(c) distribute for any purpose including for commercial or advertising purpose; and</h4>
                    <h4>(d) incorporate in our Website and Social Media or any other works.</h4>
                <h3>4.3 IP Licence in relation to that material ends when you delete that Post but you understand that even if you delete Posts, we may still keep back-ups for a reasonable period of time.</h3>
            <h2>Prohibited Posts</h2>
                <h3>4.4 You must not upload any Post that:</h3>
                    <h4>(a) is unlawful or promotes illegal behaviour;</h4>
                    <h4>(b) is harmful, threatening, abusive or harassing;</h4>
                    <h4>(c) incites violence or is graphical of violence;</h4>
                    <h4>(d) is pornographic or exploits people in a sexual manner;</h4>
                    <h4>(e) is defamatory or libellous;</h4>
                    <h4>(f)&nbsp; relates to gambling;</h4>
                    <h4>(g) relates to alcohol;</h4>
                    <h4>(h) promotes racism, bigotry, hatred, physical harm or any other discriminatory behaviour;</h4>
                    <h4>(i)&nbsp; is false, misleading or fraudulent;</h4>
                    <h4>(j)&nbsp; consists of any Malicious Computer Program;</h4>
                    <h4>(k) impersonates any person or entity or falsely misrepresent your affiliation with a person or entity;</h4>
                    <h4>(l)&nbsp; violates or encourages violation of these terms and conditions;</h4>
                    <h4>(m) infringes or violates another&rsquo;s rights including copyrights or intellectual property rights;</h4>
                    <h4>(n) invades another&rsquo;s privacy;</h4>
                    <h4>(o) includes photograph or image of another person or another person&rsquo;s property without their consent;</h4>
                    <h4>(p) reveals anyone&rsquo;s identification documents or sensitive financial information;</h4>
                    <h4>(q) is posted to disrupt the operation of the Website and Social Media and its related services; and</h4>
                    <h4>(r)&nbsp; advertises any company or their goods or services other than us.</h4>
            <h2>Your Warranty in Post</h2>
                <h3>4.5 By uploading Posts on our Website and Social Media, you warrant that:</h3>
                    <h4>(a) you have the right and authority to provide the Post in the manner it is posted;</h4>
                    <h4>(b) you own the Post and have the right to assign copyright ownership and other Intellectual Property to us; and</h4>
                    <h4>(c) the Content is not prohibited content under clause 4.4.</h4>
            <h2>Monitoring of Website and Social Media</h2>
                <h3>4.6 We have not reviewed and cannot review all Posts and we are not responsible for liability arising out of your Post.</h3>
                <h3>4.7 We may, at our sole discretion, pre-screen, reject or remove any Post you provide for any reason.</h3>
        <h2>5. Third Party Websites and Materials</h2>
            <h3>5.1 In this clause:</h3>
                <h4>(a) <b>Third Party Material</b> means material from a Third Party Website which are linked or framed to and from a Third Party Website.</h4>
                <h4>(b) <b>Third Party Website</b> means a website operated by a third party.</h4>
            <h3>5.2 We do not verify, endorse or approve Third Party Material.</h3>
            <h3>5.3 We provide no warranty or representation about Third Party Material:</h3>
                <h4>(a) regarding the quality, accuracy, merchantability or fitness for purpose of Third Party Material or products or services available from Third Party Website; or</h4>
                <h4>(b) as to whether they infringe any intellectual property rights.</h4>
            <h3>5.4 We are not responsible for:</h3>
                <h4>(a) any offers, statements or representations that are made on behalf of a Third Party Website; or</h4>
                <h4>(b) Malicious Computer Program from Third Party Websites.</h4>
            <h3>5.5 We may receive payments from a Third Party Website in relation to goods or services supplied by them as a result of you linking to the Third Party Website from our Website and Social Media.</h3>
        <h2>6. No Warranty</h2>
            <h3>6.1 The Website and Social Media is provided &lsquo;as is&rsquo; and we do not provide any express or implied representation or warranty and disclaims all responsibility as to:</h3>
                <h4>(a) the availability of the Website and Social Media and its associated services at the time you wish to use it;</h4>
                <h4>(b) merchantability, fitness for a particular purpose and non-infringement;</h4>
                <h4>(c) accuracy or validity of information and Content on the Website and Social Media; and</h4>
                <h4>(d) whether Content is free from Malicious Computer Program.</h4>
            <h3>6.2 No Content on the Website and Social Media constitutes advice of any kind and you should consult with an appropriate professional for professional advice.</h3>
        <h2>7. Limitation of Liability</h2>
            <h3>7.1 In this clause, a <b>Covered Party</b> means:</h3>
                <h4>(a) us, our affiliates, and any officer, director, employee, sub-contractor, agent, body corporate or successor; and</h4>
                <h4>(b) each third party supplier of Content, their affiliates, and any officer, director, employee, subcontractor, agent, body corporate or successor.</h4>
            <h3>7.2 To the maximum extent permitted by law, a Covered Party is not liable for liability arising out of or related to:</h3>
                <h4>(a) content provided to you for free-of-charge;</h4>
                <h4>(b) inaccuracy, errors or omissions with content;</h4>
                <h4>(c) unavailability or interruption of usage of the Website and its services;</h4>
                <h4>(d) any delay or failure in performance beyond the reasonable control of a covered party; and</h4>
                <h4>(e) loss of data.</h4>
            <h3>7.3 To the fullest extent permitted under the law, a Covered Party is not responsible for any indirect, special or consequential liability to a user (including legal fees) arising out of or from content or use of the Website and Social Media.</h3>
            <h3>7.4 Exclusion of liability in clause 7.2 applies even if you expressly advise a Covered Party of the potential loss.</h3>
            <h3>7.5 To the extent we cannot exclude liability and to the fullest extent permitted under the law, a Covered Party&rsquo;s aggregate liability for negligence, breach of contract or under any legislation is limited, at our discretion, to:</h3>
                <h4>(a) in case of goods, any one or more of the following:</h4>
                    (i) replacement of the goods or supply of equivalent goods;<br>
                    (ii) repair of the goods;<br>
                    (iii) payment of costs of replacing the goods or acquiring equivalent goods; or<br>
                    (iv) payment of costs of repairing goods; and<br>
                <h4>(b) in case of services:</h4>
                    (i) supply of the services again; or<br>
                    (ii) payment of the cost of supplying the services again.<br>
            <h3>7.6 Nothing in this agreement will exclude or limit our liability in respect of any:</h3>
                <h4>(a) death or personal injury caused by our negligence;</h4>
                <h4>(b) fraud or fraudulent misrepresentation on the part of us; or</h4>
                <h4>(c) matter which it would be illegal or unlawful for us to exclude or limit, or to attempt or purport to exclude or limit, its liability.</h4>
        <h2>8. Indemnity</h2>
            <h3>8.1 You agree to indemnify us and undertake to keep us indemnified against any Liability (including legal fees) arising out of:</h3>
                <h4>(a) your breach of these Website and Social Media Terms and Conditions; and</h4>
                <h4>(b) any Claim that you have breached these Website and Social Media Terms and Conditions.</h4>
        <h2>9. Cookies Policy</h2>
            <h3>9.1 You agree that:</h3>
                <h4>(a) we may store cookies on your device; and</h4>
                <h4>(b) we may issue and request cookies from your device to collect both personal and non-personal information.</h4>
            <h3>9.2 You may disable cookies on your browser if you do not agree to the Cookies Policy.</h3>
            <h3>9.3 You agree that we may use, including but not limited to, following types of cookies:</h3>
                <h4>(a) authentication cookies;</h4>
                <h4>(b) session cookies;</h4>
                <h4>(c) persistent cookies; and</h4>
                <h4>(d) flash cookies.</h4>
            <h3>9.4 We use cookies for the reasons including but not limited to:</h3>
                <h4>(a) improve the performance by reporting any errors that occur;</h4>
                <h4>(b) provide statistics about how the Website and Social Media is used;</h4>
                <h4>(c) remember settings that you use for our Website and Social Media;</h4>
                <h4>(d) identify and show that you are logged into the Website and Social Media;</h4>
                <h4>(e) link to social networks like Facebook and Twitter;</h4>
                <h4>(f) provide more suitable ads tailored to you.</h4>
        <h2>10. Breach of Terms and Conditions</h2>
            <h3>10.1 If you breach any of these terms and conditions we may take appropriate actions including but not limited to:</h3>
                <h4>(a) issuing a warning notice;</h4>
                <h4>(b) suspending your access to the Website and Social Media;</h4>
                <h4>(c) prohibiting your access to the Website and Social Media; or</h4>
                <h4>(d) bringing court proceedings against you.</h4>
        <h2>11. Termination</h2>
            <h3>11.1 Website and Social Media Terms and Conditions terminate automatically if we cease to operate the Website and Social Media.</h3>
        <h2>12. Jurisdiction</h2>
            <h3>12.1 We make no representation that Content are appropriate or available for use in other locations and jurisdictions.</h3>
            <h3>12.4 No Party may object to the jurisdiction of any of those courts on the ground that it is an inconvenient forum or that it does not have jurisdiction.</h3>
        <h2>13. Amendment</h2>
            <h3>13.1 We may make changes to the Website and Social Media and these terms and conditions at any time without notice.</h3>
        <h2>14. Whole Agreement</h2>
            <h3>14.1 This Agreement embodies the whole Agreement between the Parties relating to the subject matter of this Agreement and supersedes all previous agreements in respect of your usage of our Website and Social Media.</h3>
        <h2>15. Assignment</h2>
            <h3>15.1 We may transfer, assign, sub-license or otherwise deal with our rights and obligations under these terms of use without notifying you or obtaining your consent.</h3>
            <h3>15.2 You may not transfer, sub-license or otherwise deal with your rights and obligations under these terms of use.</h3>
        <h2>16. Severability</h2>
            <h3>16.1 If all of any part of any provision of this Agreement is invalid or unenforceable, then:</h3>
                <h4>(a) that provision is severed from this Agreement to the extent necessary to remove the invalidity or illegality; and</h4>
                <h4>(b) the remaining provision of this Agreement remains valid and enforceable.</h4>
        <h2>17. Survival of Certain Terms</h2>
            <h3>17.1 The terms of this Agreement which are capable of having effect after this Agreement ends continue to have full effect, including clauses in relation to:</h3>
                <h4>(a) protection of intellectual property;</h4>
                <h4>(b) post-agreement restraints; and</h4>
                <h4>(c) guarantees, warranties, indemnities and limitation of liability.</h4>
        <h2>18. Interpretation</h2>
            <h3>18.1 In this Agreement, unless the contrary intention appears:</h3>
                <h4>(a) a reference to this Agreement or any instrument includes any variation or replacement of any of them;</h4>
                <h4>(b) a reference to a person includes a body corporate, joint venture, association, government body, firm and any other entity;</h4>
                <h4>(c) a reference to legislation includes any amendments to it, any legislation substituted for it, and any subordinate legislation made under it;</h4>
                <h4>(d) the singular includes the plural and vice versa;</h4>
                <h4>(e) words of one gender include any gender;</h4>
                <h4>(f) headings do not affect the interpretation of this Agreement;</h4>
                <h4>(g) reference to a Party includes that Party&rsquo;s personal representatives, successors and permitted assigns;</h4>
                <h4>(h) reference to a thing (including a right) includes a part of that thing;</h4>
                <h4>(i) if a Party comprises two or more persons:</h4>
                <h4>(i) reference to a Party means each of the persons individually and any two or more of them jointly;</h4>
                <h4>(ii) a promise by that Party binds each of them individually and all of them jointly;</h4>
                <h4>(iii) a right given to that Party is given to each of them individually; and</h4>
                <h4>(iv) a representative, warranty or undertaking by that Party is made by each of them individually;</h4>
                <h4>(j) a provision must not be construed against a Party only because that Party prepared it;</h4>
                <h4>(k) a provision must be read down to the extent necessary to be valid and if it cannot be read down to that extent, it must be severed;</h4>
                <h4>(l) if a thing is to be done on a day which is not a Business Day, it must be done on the Business Day before that day;</h4>
                <h4>(m) another grammatical form of a defined expression has a corresponding meaning;</h4>
                <h4>(n) the word &ldquo;include&rdquo; is used without any limitation;</h4>
                <h4>(o) the rights, duties and remedies in this Agreement operate to the extent that they are not excluded by law; and</h4>
                <h4>(p) examples are descriptive only and not exhaustive.</h4>
        <h2>19. Definitions</h2>
            <h3>19.1 The following words have these meanings unless the contrary intention appears:</h3>
                <h4>(a) <b>Agreement</b> means the Website and Social Media Terms and Conditions as amended from time to time.</h4>
                <h4>(c) <b>Claim</b> means any claim, suit, action, demand, or right.</h4>
                <h4>(d) <b>Content</b> means any material on the Website and Social Media as amended from time to time including but not limited to text, document, image, logo, photo, audio material, video material and audio-visual material.</h4>
                <h4>(e) <b>Liability</b> means responsibility for any loss (either direct or indirect), damage, injury, or expense.</h4>
                <h4>(f) <b>Malicious Computer Program </b>includes programs that contain viruses, Trojan horses, worms or any other computer programming that may damage, modify, delete, detrimentally interfere with, access without authority or expropriate any system, data or personal information.</h4>
                <h4>(g) <b>Party</b> means a party to this terms and conditions.</h4>
                <h4>(h) <b>Parties</b> mean all parties to this terms and conditions.</h4>
                <h4>(i) <b>Post or Posts </b>includes comments, images, photos, writings or any other material that you upload on our Website and Social Media.</h4>
                <h4>(j) <b>Social Media</b> includes but is not limited to our Facebook, Tumbler and Twitter sites.</h4>
                <h4>(k) <b>Website and Social Media Terms and Conditions</b> means the terms and conditions set out in this document.</h4>
                <h4>(l) <b>You, Your or Yours</b> refers to a user of this Website and Social Media.</h4>
	</div>

	
</div>
<!-- 
Clients 
-->
<?php include('section.php'); ?>

<!--
Footer
-->
<?php include('footer.php'); ?>

</div><!-- /container -->

<div class="copyright">
<div class="container">
	<span>COPYRIGHT &copy; <?php echo date("Y") ?> <br> Seint<sup class="tm">TM</sup> All Rights Reserved Online Shop </span>
</div>
</div>
<a href="#" class="gotop"><i class="icon-double-angle-up"></i></a>
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.easing-1.3.min.js"></script>
    <script src="assets/js/jquery.scrollTo-1.4.3.1-min.js"></script>
    <script src="assets/js/shop.js"></script>
  </body>
</html>