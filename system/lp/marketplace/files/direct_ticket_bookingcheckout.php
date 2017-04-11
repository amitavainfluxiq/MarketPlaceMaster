<?php
/**
 * Created by PhpStorm.
 * User: ktapc
 * Date: 4/5/2017
 * Time: 1:04 PM
 */?>

<div class="container-fluid conference_banner">

    <div class="conference_banner_img">


        <img src="system/themes/mpm_landingpage/images/bookingcheckout_landingbanner.jpg">

    </div>
    <div class="clearfix"></div>


    <div class="about_banner_bgblocknew"></div>


    <div class="clearfix"></div>



    <div class="aboutnew_banner_text">
        <div class="bannertextblock_newabout">

            <table width="100%" border="0">
                <tr>
                    <td>


                        <h1>
                            <strong>MarketPlace Master<br/>
                                Dealership Series</strong>

                        </h1>
                        <div class="new_bannerimg2ck"> <img src="system/themes/mpm_landingpage/images/mediaroom_bannerimg2.png"></div>
                        <h3>JOIN US IN DALLAS, TEXAS SEPTEMBER</h3>

                        <h4>SEPT. 6th,7th AND 8th</h4>



                    </td>

                </tr>

            </table>

        </div>

    </div>



    <div class="clearfix"></div>
</div>



<div class="bookingcheckoutbody">

    <div class="container bookingcheckout_wrapper">

        <div class="col-lg-8 col-md-12 col-xs-12 col-sm-12 bookingcheckou_left">


                <div class="bookingcheckout_probox">
                    <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12 probox_left">
                        <img src="system/themes/mpm_landingpage/images/bookingcheckout_ddpro1.png">

                    </div>

                    <div class="col-lg-8 col-md-8 col-xs-12 col-sm-12 probox_right">
                        <h2>Conference Pass plus 1 full year webinar subscription access</h2>
                        <h3>
                            <span class="ticketquantity">2</span>
                            *$
                            <span class="ticketprice">449.00</span>
                            *$
                            <span class="ticketactualsubtotal">898.00</span>


                        </h3>


                        <div class="qty_box">
                            <span>Quantity</span>
                            <a href="javascript:void(0)" onclick="checkdeletequan()">-</a>
                            <input id="showquan" type="text" class="chkqty_input" value="">
                            <a href="javascript:void(0)"  onclick="checkaddquan()">+</a>
                            <div class="clearfix"></div>
                        </div>


                    </div>

                    <div class="clearfix"></div>



                </div>

















            <div class="bookingcheckout_ordersummerybox">
                <div class="panel panel-default">
                    <!-- Default panel contents -->
                    <div class="panel-heading">Order Summary</div>
                    <!-- Table -->
                    <table class="table table-striped table-responsive">
                        <tbody>
                        <tr>
                            <td>Package :</td>
                            <td>&nbsp;</td>
                        </tr>

                            <tr>
                                <td>Conference Pass plus 1 full year webinar subscription access</td>

                                <td><span class="ticketquantity">2</span>
                                    *$
                                    <span class="ticketprice">449.00</span>
                                    *$
                                    <span class="ticketactualsubtotal">898.00</span></td>

                            </tr>



                            <tr>
                                <td>Sub-total :</td>
                                <td>$449.00</td>
                            </tr>




                        <tr>
                            <td>Total:</td>
                            <td>$449.00</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>






        <div class="col-lg-4 col-md-12 col-xs-12 col-sm-12 bookingcheckou_right">

            <div class="bookingcheckou_rightwrapper">
            <form  class='kform' name='landing_page'>





                <div class="bookingcheckout_form">
                    <h3>  FINAL STEP<br/>
                        Billing Information</h3>

                    <h4>Payment information</h4>

                        <div class="form-group">

                            <input type="text" class="form-control txtclass" name="username" placeholder="Username">
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">

                            <input type="password" class="form-control txtclass" name="password" placeholder="Password">
                            <div class="clearfix"></div>
                        </div>

                    <div class="form-group">

                        <input type="text" class="form-control txtclass" id="bill_first_name" name="bill_first_name" placeholder="First Name">
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">

                        <input type="text" class="form-control" name="bill_last_name" id="bill_last_name" placeholder="Last Name">
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">

                        <input type="text" class="form-control" name="company" id="company" placeholder="Company Name">
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">

                        <textarea class="formcontroltextarea2 txtclass" name="bill_address_line_1" id="bill_address_line_1" placeholder="Address"></textarea>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">

                        <input type="text" class="form-control" id="bill_city" name="bill_city" placeholder="City">
                        <div class="clearfix"></div>
                    </div>


                    <div class="form-group">

                        <input type="text" class="form-control" id="bill_postal_code" name="bill_postal_code" placeholder="Zip">
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">

                        <input type="text" class="form-control" id="bill_phone" name="bill_phone" placeholder="Phone">
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">

                        <input type="text" class="form-control" name="email" placeholder="Email">
                        <div class="clearfix"></div>
                    </div>



                    <h4>Payment Terms</h4>

                    <div class="form-group">

                        <select class="form-control_select" id="paymenttype" name="payment_type">

                            <option value="" selected="selected">Choose Payment Type</option>
                            <option value="onetimeach">One Time ACH Payment</option>

                            <option value="onetimecredit">One Time Credit Card Payment</option>

                            <option value="wire">Wire Transfer</option>
                            <option value="mail">Mail A Check</option>
                        </select>
                        <div class="clearfix"></div>
                    </div>

                    <div class="form-group chakeboxdiv">
                        <input type="checkbox" name="terms" style="display: inline-block; width: 20px; float: left;" >
                        <a href="javascript:void(0)"  data-toggle="modal" data-target="#termsmodal" style="display: inline-block; float: left; padding-left: 2px;" >I have read and agreed to the <span style="color: #febd00;">Terms and Conditions</span></a>
                        <div class="clearfix"></div>
                    </div>


                    <div class="bookingsubmitdiv"> <input class="bookingsubmit" type="submit" value="Submit"></div>



                </div>

                <div class="clearfix"></div>
            </form>

        </div>
        </div>



        <div class="clearfix"></div>
    </div>

</div>




<div class="container-fluid conblock7">

    <img src="system/themes/mpm_landingpage/images/blck7_logo.png" alt="#"  class="blck7_logo" >

    <h2>Sept 6th, 7th, and 8th - Dallas, Texas</h2>
    <h3>Copyright &copy; 2017 · MarketPlace Master.com · All Rights Reserved.</h3>



</div>








<!--modal-->



<div class="modal fade" id="termsmodal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">


            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <div class="modal-body">
                <div class="popuptop">
                    <div class="popuplogo" style="display: block; text-align: center; width: 100%;">
                        <img src="system/themes/marketplace/images/popuplogo.png" alt="#" >
                    </div>




                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
                <div class="popupdes popupdesnewpopip" style="margin: 0px;">

                   <h4>Terms And Conditions</h4>

                </div>

                <div class="popupdetail">


 <span class="popupboldtext">MarketplaceMaster Dealership Series</span><br/>

4122 S Carriage Square Suite#2c<br/>

Taylorsville UT 84129

</p>



<p>


    <span class="popupboldtext">Support :</span> Contact of MarketplaceMaster Dealership Series may be achieved via phone at 801.317.1876 or email at support@marketplacemaster.com. Customer service office is open Monday through Friday 9:00 AM to 5:00 PM Mountain time<br/><br/>
   <span class="popupboldtext"> Dealership pass and year round webinar series purchase- </span><br/><br/>

 <span class="popupboldtext">Conference Pass and one Full Year Webinar Training Access :</span>Once you have purchased your passs you wil be automatically added to the monthly webinar seriees log in. You will have access to the live webinars and the replay anytime after the webinar has passed.  You will receive a reminder of the fothcoming webiar 24 hours before each occurance. This access is for 1 full year starting the purchase month of your pass.  Conference and Expo passes will be avaialbe at registration furst day of the confernce.<br/><br/>

 <span class="popupboldtext">Conference and Webinar Dates and Times :</span> The montlhy webiar training series occurs every second Thursday of each month at 3PM Pacific | 6PM Eastern. The MarketplaceMasters Dealership Series show dates are Thursday, Friday and Saturday September 7, 8 & 9, 2017. Exhibitor setup will be Thursday September 7th from 12:00 PM – 7:00 PM Teardown: Exhibitors expressly agree not to begin packing or dismantling until after 2:30 pm Wednesday, May 4, 2016. Exhibitors must start their dismantle no later than 3:30 pm or be subject to Viper labor force and charges applied accordingly. Exhibitors may tear down until 6 p.m. Booths must be dismantled and room cleared by 6 pm Wednesday, May 4, 2016. Trade Show management will handle all equipment moved at exhibitor’s expense if exhibitor does not comply with 6 pm deadline. <br/><br/>

 <span class="popupboldtext">Non-Attendance :</span> If you have not transferred or cancelled your pass and do not attend the event, no refund is available. <br/><br/>

 <span class="popupboldtext">Lake Arrivals/Missed sessions :</span>   If you arrive late for an event or are absent from any session, the full pass price remains payable.<br/><br/>

 <span class="popupboldtext">Identification :</span>  All attendees must provide a form of identification.<br/><br/>

 <span class="popupboldtext">Attendee Badge Usage :</span> Attendee’s registration badge must be worn at all times during the Conference. Access to the Conference facilities will not be granted to those without proper credentials.<br/><br/>

 <span class="popupboldtext">Photography & Filming :</span> Professional photographs, audio, and video will be captured during the Conference. Attendees hereby grant MarketplaceMaster Dealership Series and its representatives permission to photograph and/or record them at the Conference, and distribute (both now and in the future) the Attendee\'s image or voice in photographs, videotapes, electronic reproductions, and audiotapes of such events and activities. <br/><br/>

 <span class="popupboldtext">Photography or Recording Usage by Attendees :</span> AWP appreciates all coverage of the Conference. Photography, audio recordings, and video recordings are not permitted without the prior written consent of AWP. All requests for press passes must be made in advance of the Conference to support@marketplacemaster.com. Passes may be available at the AWP Help Desk based on need and availability. Press credentials are required for the issuance of a press pass, and AWP requires that a copy of all published material be submitted to support@marketplacemaster.com.<br/><br/>

 <span class="popupboldtext">Unforeseen circumstances :</span> If circumstances beyond our control require us to cancel an event, you will be notified immediately.  We will notify you of the new date for the event or else offer to transfer your pass to another equivalent event. In the unlikely event of the programme being cancelled by MarketplaceMasters Dealership series, a full refund will be made.  <br/><br/>
 
In the event of it being found necessary, for whatever reason, that the conference is being postponed or the dates being changed, the MarketplaceMaster Dealership Series shall not be liable for any expenditure, damage or loss incurred by the delegate.<br/><br/>

 <span class="popupboldtext">Speakers:</span> Views expressed by speakers are their own. MarketplaceMaster Dealership does not accept liability for advice given, or views expressed, by any speaker at the conference or in any material provided to delegates.<br/><br/>

 <span class="popupboldtext">Refund Policy for Conference Registration :</span> All conference registration sales are final and nonrefundable. In extreme events a refund may be considered, but this is at the full discretion of the MarketplaceMaster management, A registration may be transferred to another individual for the event and request must be made 30 days prior to the event. For more information about registration transfer, please contact support@marketplacemaster.com.<br/><br/>
 <span class="popupboldtext">Exhibitor Expo and Media Package Polcies - </span><br/><br/>

 <span class="popupboldtext">Exhibitor media and press release package -</span> Upon the purchase of your booth space, webcast media interview and high syndicate press release you will be contacted and scuehdeld within 2 business days for your interview.  We will syndicate the video from the interview within 7 buseinss days of the time we have finsihed the recording.<br/><br/>

 <span class="popupboldtext">Exhibitor registration and housing -</span> We are holding the event at the Hyatt Regency, Dallas Texas. Exhibitors can find out information on hotel rooms and accommodations for the conference and EXPO on our website at this link.  http://www.marketplacemaster.com/ta.<br/><br/>

 <span class="popupboldtext">Location of Exhibits -</span> The Exhibit Show will be in the Hyatt Regency Dallas EXPO Floor.. Measurements shown on the diagram are as accurate as possible, but management reserves the right at all times to modify the floor plan to meet the needs of the exhibit and the exhibitors.<br/><br/>

 <span class="popupboldtext">Additional Badges -</span> Participating firms will be permitted 2 complimentary exhibitor badges for each 10 x 10 booth rented and 3 for the 10X20 and 20X20 booths. Additional booth representatives will be required to pay purchase a regular show pass to attend. Other individuals such as family members or non-business related guests who may be associated with the company but are not working in the booth must pay in full as a visitor to the conference. Children that are 16 and working in the booth, must have special permission from the Hyatt and be within their policies.<br/><br/>

 <span class="popupboldtext">Booth Set up -</span> Standard drapery booth equipment (back 8’ high, side rail dividers 3’ high) and a booth sign (7” x 44”) bearing the company name and booth number are included in the rental fee.<br/><br/>

 <span class="popupboldtext">Services Contractor for the Event  -</span> The official exhibit service contractor will be assigned to the event in June of 2017. At this time, we will circulate the contact info to all registered Exhibitors. All services that exhibitors customarily require will be available through the official service contractor. No other contractors will be permitted without prior approval. Complete shipping instructions and information regarding furniture and carpet rental; electrical work; plumbing; and labor for erecting and dismantling exhibits, drayage, and so on will be mailed to exhibitors in advance. Marketplace Master will maintain a service desk in the exhibit area. <br/><br/>

 <span class="popupboldtext">Exhibit installation and break down -</span> It is mutually agreed that it is the duty and responsibility of each exhibitor to install the exhibit before the opening of the exhibition and to dismantle the exhibit immediately after the close of the exhibition.<br/><br/>

 <span class="popupboldtext">Exhibit setup -</span> Noon on Thursday September 7th Exhibit Hall opens for booth set up. 8:00 AM on the 8th, Exhibit Hall open during all conference hours until 6:00 PM on the 9th. <br/><br/>

 <span class="popupboldtext">Exhibit move out -</span> At 6:00 PM September 9th, the Exhibit Hall closes. Exhibitors have until midnight to remove their Exhibit out of the Hall.<br/><br/>

 <span class="popupboldtext">Attentive Requirements -</span>  Exhibits are expected to be fully installed by the morning of the 8th and open with staff attending during all of the Exhibit Hall open hours. <br/><br/>

This concludes the terms and conditions for the MarketplaceMaster Dealership Series website..<br/><br/>

<span class="popupboldtext">Location of Exhibits -</span> The Exhibit Show will be in the Hyatt Regency EXPO Floor, Dallas Texas. Measurements shown on the diagram are as accurate as possible, but management reserves the right at all times to modify the floor plan to meet the needs of the exhibit and the exhibitors. Exhibitor.<br/><br/>
<span class="popupboldtext">Cancellations on Booth Space -</span> All cancellations must be made in writing to the exhibits manager. If the exhibits manager receives notification on or before July 31st, 2017, 50% percent of the money paid for the rental will be refunded. Failure to occupy booth space does not release the exhibitor from the obligation to pay for the full cost of the rental. No refunds will be made after July 31st, 2017. ,
2014.<br/><br/>
<span class="popupboldtext">Booth Space Abandonment -</span>  If booth space is not occupied by 8:00AM on September 8th exhibit management will have the right to use such space as it sees fit to eliminate empty spaces in the Exhibit Hall.<br/><br/>
<span class="popupboldtext">Natural Disasters -</span>  In the event of flood, fire, strikes, riots, civil commotion, or other uncontrollable circumstances that render the exhibit area unfit or unavailable for use within 10 days prior to the opening date of the exhibit, 50 percent of the money paid for rental will be refunded.<br/><br/>
<span class="popupboldtext">Use of Space -</span>  All demonstrations, interviews, literature distributions, or other promotional activities must be confined within the space rented by the exhibitor. Sufficient space must be provided within the booth to contain persons watching any demonstrations and other promotional activities. Each exhibitor is responsible for keeping the aisle or aisles near the booth free of congestion from demonstrations or other promotions.<br/><br/>
<span class="popupboldtext">No Subletting Space -</span>  No exhibitor will assign, sublet, or share the space allotted without management’s knowledge and consent. Exhibitors must show only goods manufactured or dealt in by them
in the normal course of business. Food and beverage products may be distributed in sample quantities by those exhibitors engaged in the processing of these products. Other exhibitors wishing to dispense sample foods or beverages must obtain approval of exhibit management and must conform to the Exhibit Hall’s regulations. Firms or organizations not assigned exhibit space may not solicit business within the exhibit area.<br/><br/>
<span class="popupboldtext">Exhibit Construction -</span>  Booth back walls are 8\' high and side dividers are 3\' high. No special signs, booth construction, apparatus, or lighting fixtures are permitted in excess of 8\' in background height. In straight-line booths, all construction or parts of the display exceeding 4\' in height must be placed at least 5\' in from the aisle. Any other parts of the exhibit occupying the back half of the booth will not be permitted to exceed the 8\' height of the back wall. Island areas of 20\' by 20\' or larger, with the approval of exhibit management, may extend up to—but not exceed—20\' in height.  Interference with other exhibitors’ light and space is prohibited.<br/><br/>
<span class="popupboldtext">Restrictions -</span>  Management reserves the right to restrict exhibits that are not consistent and compatible with adopted Marketplace Master values and that unfairly exploit Marketplace Master products and services. Management also reserves the right to restrict exhibits that become objectionable because
of noise, method of operation, materials, or for any other reason, and to prohibit or evict any exhibit that in the opinion of the management may detract from the general character of the MARKETPLACE MASTER Exhibit show. This restriction includes persons, things, conduct, printed matter, or anything that the management determines objectionable in character. In the event of such restriction or eviction, Marketplace Master is not liable for any refunds or other exhibit expenses.<br/><br/>
<span class="popupboldtext">Sales -</span>  Exhibitors are permitted and encouraged to make sales on the exhibit floor. It is the exhibitor’s sole responsibility to obtain the appropriate licenses or permits as required by law, collect and remit sales taxes, and take care of any other legal business requirements. A copy of the license or permit must be furnished and on file with the Marketplace Master exhibits manager prior to the exhibition’s opening.<br/><br/>
<span class="popupboldtext">Liability- -</span>  Insurance and liability are the full and sole responsibility of the exhibitor. The exhibitor, on signing this contract, agrees to indemnify and hold forever harmless the afore mentioned for any and
all liability and expense for personal injury, accident, or property damage from fire, theft, destructive causes, or loss arising out of, in, at, or in connection with the exhibitor’s display.<br/><br/>
<span class="popupboldtext">Security- -</span>  Exhibit management will provide necessary security during hours the exhibit area is closed. Exhibitors, however, are solely responsible for their own exhibit materials and should insure the exhibit against loss or damage from theft, accident, vandalism, fire, or other causes. All property of an exhibitor is understood to remain in the exhibitor’s care, custody, and control in transit to, from, or within the confines of the Exhibit Hall.<br/><br/>
<span class="popupboldtext">Care of building and equipment -</span>  Exhibitors, or their agents, must not injure or deface the walls or floors of the building, the booths, or the booth equipment. Nothing will be posted on, tacked, nailed, screwed, or otherwise attached to columns, walls, floors, or other parts of the building or furniture. Distribution of promotional gummed stickers or labels is strictly prohibited. When such damage appears, the exhibitor is liable to the owner of the property so damaged. All materials used in decoration must be flameproof. Electrical wiring must conform with National Electrical Code Safety Rules. Combustible materials or explosives are not permitted in the Exhibit Hall.<br/><br/>
<span class="popupboldtext">Users on the Website and Use of the Website Services</span><br/><br/>
<span class="popupboldtext">Use of this Web Site -</span>  The design of the MarketplaceMaster Dealership Series, including all text, graphics, information, and content are protected by copyright and trademark laws and may not be displayed, performed, distributed, or in any way used for public or commercial purpose except as permitted in these Terms of Use. Any unauthorized use of information or materials may violate copyright and/or trademark laws, privacy or publicity laws, and other applicable laws and regulations. MarketplaceMaster Dealership Series reserves the right to prosecute any violators.<br/><br/>
<span class="popupboldtext">Trademarks -</span>  Trademarks, trade names, and logos used on this Page are registered or unregistered trademarks, trade names, and logos of MarketplaceMaster Dealership Series and affiliates. No information contained on this Page should be seen as granting any right to use any trademarks, trade names, or logos displayed on this Page. Only written permission by MarketplaceMaster Dealership Series may grant use of trademarks, trade names, and logos contained on this Site.<br/><br/>
<span class="popupboldtext">User Conduct -</span>  Users of this Page agree to not impersonate any person or entity or misrepresent their affiliation with any person or entity, or attempt or engage in “harvesting” e-mail addresses or personal information, or attempt to gain unauthorized access to other computer systems, or use this Page in any way that could cause damage to the Page or impair the use of this Page, or monitor any portion of the Page. MarketplaceMaster Dealership Series reserves the right to prosecute any user that has violated User Conduct.<br/><br/>
<span class="popupboldtext">Third Party Links -</span>  This Page may contain links to Sites that are not owned or operated by MarketplaceMaster Dealership Series or affiliates. Such links are provided for user convenience and use of the links will transport the user to another Site. MarketplaceMaster Dealership Series and affiliates are not responsible for any content, materials, or information located or accessible on these other Sites; neither do we endorse, guarantee, or warranty content, materials, or information obtained or accessed on these other Sites. Access to any third party link on the MarketplaceMaster Dealership Series Site is done so entirely at the risk of the user.<br/><br/>
<span class="popupboldtext">Inappropriate Material -</span>  It is prohibited to post or transmit any illegal, hostile, defamatory, libelous, obscene, or pornographic material or any material that could be seen as encouraging criminal behavior. MarketplaceMaster Dealership Series reserves the right to remove any materials or information that violates this policy. MarketplaceMaster Dealership Series reserves the right to prosecute any person that violates this policy.<br/><br/>
<span class="popupboldtext">User Information -</span>  Apart from any personally identifiable information subject to the Site’s Privacy Policy, any material, information, suggestions, questions, ideas, concepts, feedback, comments, or other communication, known as “User Communications”, transmitted or posted to MarketplaceMaster Dealership Series in any manner is and will be considered non-confidential and non-proprietary. MarketplaceMaster Dealership Series reserves the right to use any and all User Communications for any purpose including, but not limited to, reproduction, transmission, disclosure, publication, broadcast, development, marketing, and/or manufacturing. MarketplaceMaster Dealership Series reserves the right to remove from the Site any and all User Communications that is deemed inappropriate.<br/><br/>
<span class="popupboldtext">Disclaimer -</span>  Use of this Page is at the sole risk to the user. Any information, materials, and services provided through this Page are provided on an “as is” basis without warranty of any kind, either expressed or implied, including, but not limited to, any warranty regarding information, availability, lack of viruses, accuracy, security, or usefulness of this Site, the Site content or any products or services made available through this Site. MarketplaceMaster Dealership Series and affiliates disclaim any and all such warranties. MarketplaceMaster Dealership Series makes no warranty that the Page, Page content, or any products or services made available will meet requirements of the user. In the event of any problem with the products or services made available, the sole remedy of the user will be to discontinue use of the Page in accordance with the Refund and Return policies made available on the Main Site.<br/><br/>
<span class="popupboldtext">Limitation of Liability -</span>  Under no circumstance shall MarketplaceMaster Dealership Series or affiliates be liable for any damages, loss of profits, or loss of sales arising from, or indirectly or directly related to, access or use of, or inability to access or use, this Page. Under no circumstance shall MarketplaceMaster Dealership Series or affiliates be liable for or seen as in connection with any content posted, transmitted, received, or exchanged by any user on or through this Page.<br/><br/>
<span class="popupboldtext">Indemnification -</span>  Users of this Page agree to defend and hold blameless MarketplaceMaster Dealership Series from any and all claims, liabilities, costs and expenses, including, but not limited to, attorneys’ fees arising in any way from use of this Page. Termination: MarketplaceMaster Dealership Series reserves the right to suspend or terminate a user’s account or use of this Page from a user at any time, for any reason. The user also reserves this right. Users are held personally liable for any placed orders or charges to account prior to termination. MarketplaceMaster Dealership Series reserves the right to modify, suspend, or terminate any and all aspects of this Site at any time, with or without notice.<br/><br/>
<span class="popupboldtext">Termination -</span>  MarketplaceMaster Dealership Series reserves the right to suspend or terminate a user’s account or use of this Page from a user at any time, for any reason. The user also reserves this right. Users are held personally liable for any placed orders or charges to account prior to termination. MarketplaceMaster Dealership Series reserves the right to modify, suspend, or terminate any and all aspects of this Site at any time, with or without notice.<br/><br/>
This concludes the terms and conditions for the MarketplaceMaster Dealership Series website..<br/><br/>


T&C and Rules For Exhibiting at MarketplaceMaster Dealership Series Exhibit<br/><br/>


Exhibit Location : 300 Reunion Boulevard Dallas, Texas, USA, 75207 Tel: +1 214 651 1234

</p>

                </div>


            </div>

        </div>

    </div>
</div>