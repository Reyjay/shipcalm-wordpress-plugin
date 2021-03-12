<template>
  <div class="sc-pricing-wrapper">

    <!--Pricing Group-->
    <div class="sc-pricing-group">

        <!--Section Title-->
        <div class="sc-title">
            <input @click="toggleSection" type="checkbox" id="fulfillemnt-price" name="fulfillemnt-price" value="" class="sc-toggle-section" checked>
            <label for="fulfillemnt-price">Do you need eCommerce Fulfillment? <!--<a>learn more</a>--></label>
        </div>
        
        <div class="sc-children-wrapper">

            <!--Section Item-->
            <div class="sc-child">

                <!--Section Inner Items-->
                <div class="sc-child-item-wrapper">

                    <div class="sc-child-item">
                        <div class="sc-img-wrap">
                            <img src="https://via.placeholder.com/150x150" alt="*fill*">
                            <div class="sc-helper-text">Less than 12in³</div>
                        </div>
                        <div class="sc-description">
                            <p>How many different types of <strong>small sized products</strong> do you sell?  <!--<a href="#">learn more</a>--></p>
                            <div class="sc-number-picker">
                                <NumberPicker startingValue="0" cost="3" v-model="bag"  />
                                aa{{result}}aa
                                <span class="sc-helper-text">($3/mo per product)</span>
                            </div>
                        </div>
                    </div>

                    <div class="sc-child-item">
                        <div class="sc-img-wrap">
                            <img src="https://via.placeholder.com/150x150" alt="*fill*">
                            <div class="sc-helper-text">Greater than 24ft³ or less than 2ft³</div>
                        </div>
                        <div class="sc-description">
                            <p>How many different types of medium sized products do you sell? </p>
                            <div class="sc-number-picker">
                                <NumberPicker startingValue="0" cost="5" />
                                <span class="sc-helper-text">($5/mo per product)</span>
                            </div>
                        </div>
                    </div>

                    <div class="sc-child-item">
                        <div class="sc-img-wrap">
                            <img src="https://via.placeholder.com/150x150" alt="*fill*">
                            <div class="sc-helper-text">Less then 12in³</div>
                        </div>
                        <div class="sc-description">
                            <p>How many different types of large sized products do you sell? </p>
                            <div class="sc-number-picker">
                                <NumberPicker startingValue="0" cost="50" />
                                <span class="sc-helper-text">($50/mo per product)</span>
                            </div>
                        </div>
                    </div>

                </div><!--END Inner Items-->

                <div class="sc-pricing-details">
                    <p class="sc-price-dec">
                        Per product picking space
                    </p>
                    <div class="sc-price-num">
                        $100 <span>/ mo</span>
                    </div>
                </div>

            </div><!--END Section Item Group-->


            <!--Section Item-->
            <div class="sc-child">

                <!--Section Inner Items-->
                <div class="sc-child-item-wrapper">

                    <div class="sc-child-item">
                        <div class="sc-img-wrap">
                            <img src="https://via.placeholder.com/150x150" alt="*fill*">
                            <div class="sc-helper-text">Less then 12in³</div>
                        </div>
                        <div class="sc-description">
                            <p>How many items do you need us to ship each month?</p>
                            <div class="sc-number-picker">
                                <NumberPicker startingValue="0" cost="1.50" />
                                <span class="sc-helper-text">($1.50/mo per item | Minimum of 250)</span>
                            </div>
                        </div>
                    </div>

                </div><!--END Inner Items-->

                <div class="sc-pricing-details">
                    <p class="sc-price-dec">
                        Fulfillment
                    </p>
                    <div class="sc-price-num">
                        - <span>/ mo</span>
                    </div>
                </div>

            </div><!--END Section Item Group-->

        </div>

    </div><!--END Pricing Group-->


    <!--Pricing Group-->
    <div class="sc-pricing-group">

        <!--Section Title-->
        <div class="sc-title">
            <input @click="toggleSection" type="checkbox" id="return-price" name="return-price" value="" checked>
            <label for="return-price">Do you need us to do any returns? <!--<a>learn more</a>--></label>
        </div>

        
        <div class="sc-children-wrapper">

            <!--Section Item-->
            <div class="sc-child">

                <!--Section Inner Items-->
                <div class="sc-child-item-wrapper">

                    <div class="sc-child-item">
                        <div class="sc-img-wrap">
                            <img src="https://via.placeholder.com/150x150" alt="*fill*">
                            <div class="sc-helper-text"></div>
                        </div>
                        <div class="sc-description">
                            <p>What percentage of your items get returned that we'll need to process?</p>
                            <div class="sc-number-picker">
                                <NumberPicker startingValue="2" cost="2" />
                                <span class="sc-helper-text">(2% is a good place to start)</span>
                            </div>
                        </div>
                    </div>

                </div><!--END Inner Items-->

                <div class="sc-pricing-details">
                    <p class="sc-price-dec">
                        Returns
                    </p>
                    <div class="sc-price-num">
                        $100 <span>/ mo</span>
                    </div>
                </div>

            </div><!--END Section Item Group-->

        </div>


    </div><!--END Pricing Group-->

    <!--Pricing Group-->
    <div class="sc-pricing-group">

        <!--Section Title-->
        <div class="sc-title">
            <input @click="toggleSection" type="checkbox" id="backstock-price" name="backstock-price" value="" checked>
            <label for="backstock-price">Do you have pallets of backstocked products? <!--<a>learn more</a>--></label>
        </div>

        
        <div class="sc-children-wrapper">

            <!--Section Item-->
            <div class="sc-child">

                <!--Section Inner Items-->
                <div class="sc-child-item-wrapper">

                    <div class="sc-child-item">
                        <div class="sc-img-wrap">
                            <img src="https://via.placeholder.com/150x150" alt="*fill*">
                            <div class="sc-helper-text"></div>
                        </div>
                        <div class="sc-description">
                            <p>How many pallets of <strong>backstock</strong> will you need to store per month?</p>
                            <div class="sc-number-picker">
                                <NumberPicker startingValue="2" cost="40" />
                                <span class="sc-helper-text">($40/mo per pallet)</span>
                            </div>
                        </div>
                    </div>

                </div><!--END Inner Items-->

                <div class="sc-pricing-details">
                    <p class="sc-price-dec">
                        Backstock
                    </p>
                    <div class="sc-price-num">
                        $100 <span>/ mo</span>
                    </div>
                </div>

            </div><!--END Section Item Group-->

        </div>


    </div><!--END Pricing Group-->

    <!--Pricing Group-->
    <div class="sc-pricing-group">

        <!--Section Title-->
        <div class="sc-title">
            <input @click="toggleSection" type="checkbox" id="amazon-price" name="amazon-price" value="" checked>
            <label for="amazon-price">Do you need Amazon prep and forwarding services?</label>
        </div>

        
        <div class="sc-children-wrapper">

            <!--Section Item-->
            <div class="sc-child">

                <!--Section Inner Items-->
                <div class="sc-child-item-wrapper">

                    <div class="sc-child-item">
                        <div class="sc-img-wrap">
                            <img src="https://via.placeholder.com/150x150" alt="*fill*">
                            <div class="sc-helper-text"></div>
                        </div>
                        <div class="sc-description">
                            <p>How many <strong>items</strong> do you send to Amazon every month?</p>
                            <div class="sc-number-picker">
                                <NumberPicker startingValue="0" cost="1" />
                                <span class="sc-helper-text"></span>
                            </div>
                        </div>
                    </div>

                    <div class="sc-child-item">
                        <div class="sc-img-wrap">
                            <img src="https://via.placeholder.com/150x150" alt="*fill*">
                            <div class="sc-helper-text"></div>
                        </div>
                        <div class="sc-description">
                            <p>How many <strong>total cases</strong> of items will we ship?</p>
                            <div class="sc-number-picker">
                                <NumberPicker startingValue="0" cost="1" />
                                <span class="sc-helper-text"></span>
                            </div>
                        </div>
                    </div>

                </div><!--END Inner Items-->

                <div class="sc-pricing-details">
                    <p class="sc-price-dec">
                        Amazon Prep
                    </p>
                    <div class="sc-price-num">
                        $100 <span>/ mo</span>
                    </div>
                </div>

            </div><!--END Section Item Group-->


            <!--Section Item-->
            <div class="sc-child">

                <!--Section Inner Items-->
                <div class="sc-child-item-wrapper">

                    <div class="sc-child-item">
                        <div class="sc-img-wrap">
                            <img src="https://via.placeholder.com/150x150" alt="*fill*">
                            <div class="sc-helper-text">Less then 12in³</div>
                        </div>
                        <div class="sc-description">
                              <p>Do you need us to add <strong>FNSKUs</strong> to every items before we ship to amazon?</p>
                              <div class="sc-form-group">
                                <input type="radio" id="false" name="fnskubag" value="false" checked>
                                <label for="false">No</label><br>
                                <input type="radio" id="true" name="fnskubag" value="true">
                                <label for="true">Yes</label><br>
                              </div>
                              <p>How many <strong>FNSKUs</strong> a month will you need poly bagged?</p>
                              <div class="sc-number-picker">
                                <div class="sc-secondary-question">
                                  <NumberPicker startingValue="0" cost="1" />
                                  <span class="sc-helper-text"></span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!--END Inner Items-->

                <div class="sc-pricing-details">
                    <p class="sc-price-dec">
                        FNSKU Prep
                    </p>
                    <div class="sc-price-num">
                        - <span>/ mo</span>
                    </div>
                </div>

            </div><!--END Section Item Group-->

            <!--Section Item-->
            <div class="sc-child">

                <!--Section Inner Items-->
                <div class="sc-child-item-wrapper">

                    <div class="sc-child-item">
                        <div class="sc-img-wrap">
                            <img src="https://via.placeholder.com/150x150" alt="*fill*">
                            <div class="sc-helper-text"></div>
                        </div>
                        <div class="sc-description">
                              <p>Do we need to put the items in <strong>poly bags</strong> before sending to amazon?</p>
                              <div class="sc-form-group">
                                <input type="radio" id="false" name="polybag" value="false" checked>
                                <label for="false">No</label><br>
                                <input type="radio" id="true" name="polybag" value="true">
                                <label for="true">Yes</label><br>
                              </div>
                              <p>How many <strong>items a month</strong> will need poly bagged?</p>
                              <div class="sc-number-picker">
                                <div class="sc-secondary-question">
                                  <NumberPicker startingValue="0" cost="1" />
                                  <span class="sc-helper-text"></span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!--END Inner Items-->

                <div class="sc-pricing-details">
                    <p class="sc-price-dec">
                        Poly Bag Prep
                    </p>
                    <div class="sc-price-num">
                        - <span>/ mo</span>
                    </div>
                </div>

            </div><!--END Section Item Group-->

            <!--Section Item-->
            <div class="sc-child">

                <!--Section Inner Items-->
                <div class="sc-child-item-wrapper">

                    <div class="sc-child-item">
                        <div class="sc-img-wrap">
                            <img src="https://via.placeholder.com/150x150" alt="*fill*">
                            <div class="sc-helper-text"></div>
                        </div>
                        <div class="sc-description">

                              <p>Do we need to <strong>bundle items</strong> together to send to amazon?</p>
                              <div class="sc-form-group">
                                <input type="radio" id="false" name="bundleitems" value="false" checked>
                                <label for="false">No</label><br>
                                <input type="radio" id="true" name="bundleitems" value="true">
                                <label for="true">Yes</label><br>
                              </div>

                              <p>How many bundles per month?</p>
                              <div class="sc-number-picker">
                                <div class="sc-secondary-question">
                                  <NumberPicker startingValue="0" />
                                  <span class="sc-helper-text"></span>
                                </div>
                            </div>

                            <p>How many items in each bundle?</p>
                              <div class="sc-number-picker">
                                <div class="sc-secondary-question">
                                  <NumberPicker startingValue="0" />
                                  <span class="sc-helper-text"></span>
                                </div>
                            </div>

                        </div>
                    </div>

                </div><!--END Inner Items-->

                <div class="sc-pricing-details">
                    <p class="sc-price-dec">
                        Bundle Prep
                    </p>
                    <div class="sc-price-num">
                        - <span>/ mo</span>
                    </div>
                </div>

            </div><!--END Section Item Group-->

        </div>

    </div><!--END Pricing Group-->

    <!--Pricing Group-->
    <div class="sc-pricing-group">

        <!--Section Title-->
        <div class="sc-title">
            <input @click="toggleSection" type="checkbox" id="customer-service-price" name="customer-service-price" value="" checked>
            <label for="customer-service-price">Do you want us to do your customer service for you? <!--<a>learn more</a>--></label>
        </div>

        
        <div class="sc-children-wrapper">

            <!--Section Item-->
            <div class="sc-child">

                <!--Section Inner Items-->
                <div class="sc-child-item-wrapper">

                  <div class="sc-child-item">
                      <div class="sc-img-wrap">
                          <img src="https://via.placeholder.com/150x150" alt="*fill*">
                          <div class="sc-helper-text"></div>
                      </div>
                      <div class="sc-description">
                          <div class="sc-form-group">
                            <input type="radio" id="tier1" name="customersupport" value="tier1" checked>
                            <label for="tier1">
                                <p>Tier 1</p>
                                <p>This is some example text</p>
                            </label>
                          </div>

                          <div class="sc-form-group">
                            <input type="radio" id="tier2" name="customersupport" value="tier2">
                            <label for="tier2">
                                <p>Tier 2</p>
                                <p>This is some example text</p>
                            </label>
                          </div>

                          <div class="sc-form-group">
                            <input type="radio" id="tier3" name="customersupport" value="tier3">
                            <label for="tier3">
                                <p>Tier 3</p>
                                <p>This is some example text</p>
                            </label>
                          </div>
                          
                      </div>
                  </div>

                </div><!--END Inner Items-->

                <div class="sc-pricing-details">
                    <p class="sc-price-dec">
                        Customer Service
                    </p>
                    <div class="sc-price-num">
                        $100 <span>/ mo</span>
                    </div>
                </div>

            </div><!--END Section Item Group-->

        </div>


    </div><!--END Pricing Group-->
    


    <!--Pricing Group-->
    <div class="sc-pricing-group">

        <!--Section Title-->
        <div class="sc-title">
            <input @click="toggleSection" type="checkbox" id="wholesale-price" name="wholesale-price" value="" checked>
            <label for="wholesale-price">Do you need wholesale fulfillment? <!--<a>learn more</a>--></label>
        </div>

        
        <div class="sc-children-wrapper">

            <!--Section Item-->
            <div class="sc-child">

                <!--Section Inner Items-->
                <div class="sc-child-item-wrapper">

                    <div class="sc-child-item">
                        <div class="sc-img-wrap">
                            <img src="https://via.placeholder.com/150x150" alt="*fill*">
                            <div class="sc-helper-text"></div>
                        </div>
                        <div class="sc-description">
                            <p>How many <strong>wholesale orders</strong> will we process each month?  <!--<a href="#">learn more</a>--></p>
                            <div class="sc-number-picker">
                                <NumberPicker startingValue="0" />
                                <span class="sc-helper-text"></span>
                            </div>
                        </div>
                    </div>

                    <div class="sc-child-item">
                        <div class="sc-img-wrap">
                            <img src="https://via.placeholder.com/150x150" alt="*fill*">
                            <div class="sc-helper-text"></div>
                        </div>
                        <div class="sc-description">
                            <p>How many <strong>total cases</strong> of product will each order contain?  <!--<a href="#">learn more</a>--></p>
                            <div class="sc-number-picker">
                                <NumberPicker startingValue="0" />
                                <span class="sc-helper-text"></span>
                            </div>
                        </div>
                    </div>

                </div><!--END Inner Items-->

                <div class="sc-pricing-details">
                    <p class="sc-price-dec">
                        Wholesale Fulfillment
                    </p>
                    <div class="sc-price-num">
                        - <span>/ mo</span>
                    </div>
                </div>

            </div><!--END Section Item Group-->


            <!--Section Item-->
            <div class="sc-child">

                <!--Section Inner Items-->
                <div class="sc-child-item-wrapper">

                    <div class="sc-child-item">
                        <div class="sc-img-wrap">
                            <img src="https://via.placeholder.com/150x150" alt="*fill*">
                            <div class="sc-helper-text">Less then 12in³</div>
                        </div>
                        <div class="sc-description">
                            <p>How many items do you need us to ship each month?</p>
                            <div class="sc-number-picker">
                                <NumberPicker startingValue="0" />
                                <span class="sc-helper-text">($1.50/mo per item | Minimum of 250)</span>
                            </div>
                        </div>
                    </div>

                </div><!--END Inner Items-->

                <div class="sc-pricing-details">
                    <p class="sc-price-dec">
                        Fulfillment
                    </p>
                    <div class="sc-price-num">
                        - <span>/ mo</span>
                    </div>
                </div>

            </div><!--END Section Item Group-->

        </div>

    </div><!--END Pricing Group-->



    <!--Pricing Group-->
    <div class="sc-pricing-group">

        <!--Section Title-->
        <div class="sc-title">
            <input @click="toggleSection" type="checkbox" id="assemble-price" name="assemble-price" value="" checked>
            <label for="assemble-price">Do you need us to assemble your products or subscription boxes? <!--<a>learn more</a>--></label>
        </div>

        
        <div class="sc-children-wrapper">

            <!--Section Item-->
            <div class="sc-child">

                <!--Section Inner Items-->
                <div class="sc-child-item-wrapper">

                    <div class="sc-child-item">
                        <div class="sc-img-wrap">
                            <img src="https://via.placeholder.com/150x150" alt="*fill*">
                            <div class="sc-helper-text"></div>
                        </div>
                        <div class="sc-description">
                            <p>How many <strong>subscriptions boxes</strong> do you need us to make per month?  <!--<a href="#">learn more</a>--></p>
                            <div class="sc-number-picker">
                                <NumberPicker startingValue="0" />
                                <span class="sc-helper-text"></span>
                            </div>
                        </div>
                    </div>

                    <div class="sc-child-item">
                        <div class="sc-img-wrap">
                            <img src="https://via.placeholder.com/150x150" alt="*fill*">
                            <div class="sc-helper-text"></div>
                        </div>
                        <div class="sc-description">
                            <p>How many <strong>minutes</strong> does it take to assemble a subscription box?  <!--<a href="#">learn more</a>--></p>
                            <div class="sc-number-picker">
                                <NumberPicker startingValue="0" />
                                <span class="sc-helper-text"></span>
                            </div>
                        </div>
                    </div>

                </div><!--END Inner Items-->

                <div class="sc-pricing-details">
                    <p class="sc-price-dec">
                        Subscription Boxes
                    </p>
                    <div class="sc-price-num">
                        - <span>/ mo</span>
                    </div>
                </div>

            </div><!--END Section Item Group-->


            <!--Section Item-->
            <div class="sc-child">

                <!--Section Inner Items-->
                <div class="sc-child-item-wrapper">

                    <div class="sc-child-item">
                        <div class="sc-img-wrap">
                            <img src="https://via.placeholder.com/150x150" alt="*fill*">
                            <div class="sc-helper-text">Less then 12in³</div>
                        </div>
                        <div class="sc-description">
                            <p>How many items do you need us to ship each month?</p>
                            <div class="sc-number-picker">
                                <NumberPicker startingValue="0" />
                                <span class="sc-helper-text">($1.50/mo per item | Minimum of 250)</span>
                            </div>
                        </div>
                    </div>

                </div><!--END Inner Items-->

                <div class="sc-pricing-details">
                    <p class="sc-price-dec">
                        Fulfillment
                    </p>
                    <div class="sc-price-num">
                        - <span>/ mo</span>
                    </div>
                </div>

            </div><!--END Section Item Group-->

        </div>

    </div><!--END Pricing Group-->



    <!--Pricing Group-->
    <div class="sc-pricing-group">

        <!--Section Title-->
        <div class="sc-title">
            <input @click="toggleSection" type="checkbox" id="custom-price" name="custom-price" value="" checked>
            <label for="custom-price">Do you have other custom requirements? <!--<a>learn more</a>--></label>
        </div>

        
        <div class="sc-children-wrapper">

            <!--Section Item-->
            <div class="sc-child">

                <!--Section Inner Items-->
                <div class="sc-child-item-wrapper">

                    <div class="sc-child-item">
                        <div class="sc-img-wrap">
                            <img src="https://via.placeholder.com/150x150" alt="*fill*">
                            <div class="sc-helper-text"></div>
                        </div>
                        <div class="sc-description">
                            <p>We offer a wide range of custom services such as gift wrapping, tissue paper, custom packaging, and much more.  <a href="#">Reach out to our team</a> if you hhave any questions on pricing or service availability.</p>
                        </div>
                    </div>

                </div><!--END Inner Items-->

                <div class="sc-pricing-details">
                    <p class="sc-price-dec">
                        Custom Requirments
                    </p>
                    <div class="sc-price-num">
                        TBD
                    </div>
                </div>

            </div><!--END Section Item Group-->

        </div>

    </div><!--END Pricing Group-->



    <!--Pricing Group-->
    <div class="sc-pricing-group">

        <!--Section Title-->
        <div class="sc-title">
            <input @click="toggleSection" type="checkbox" id="shipment-price" name="shipment-price" value="" checked>
            <label for="shipment-price">How many inbound/restocking shipments will you send us? <!--<a>learn more</a>--></label>
        </div>

        
        <div class="sc-children-wrapper">

            <!--Section Item-->
            <div class="sc-child">

                <!--Section Inner Items-->
                <div class="sc-child-item-wrapper">

                    <div class="sc-child-item">
                        <div class="sc-img-wrap">
                            <img src="https://via.placeholder.com/150x150" alt="*fill*">
                            <div class="sc-helper-text"></div>
                        </div>
                        <div class="sc-description">
                            <p>How many <strong>20' floor loaded containers</strong> a year?</p>
                            <div class="sc-number-picker">
                                <NumberPicker startingValue="2" />
                                <span class="sc-helper-text">($30 / per receipt)</span>
                            </div>
                        </div>
                    </div>

                    <div class="sc-child-item">
                        <div class="sc-img-wrap">
                            <img src="https://via.placeholder.com/150x150" alt="*fill*">
                            <div class="sc-helper-text"></div>
                        </div>
                        <div class="sc-description">
                            <p>How many <strong>40' floor loaded containers</strong> a year?</p>
                            <div class="sc-number-picker">
                                <NumberPicker startingValue="2" />
                                <span class="sc-helper-text">($30 / per receipt)</span>
                            </div>
                        </div>
                    </div>

                    <div class="sc-child-item">
                        <div class="sc-img-wrap">
                            <img src="https://via.placeholder.com/150x150" alt="*fill*">
                            <div class="sc-helper-text"></div>
                        </div>
                        <div class="sc-description">
                            <p>How many <strong>truck deliveries (LTL or FTL)</strong> of palletized shipments per year?</p>
                            <div class="sc-number-picker">
                                <NumberPicker startingValue="2" />
                                <span class="sc-helper-text">($30 / per receipt)</span>
                            </div>
                        </div>
                    </div>

                </div><!--END Inner Items-->

                <div class="sc-pricing-details">
                    <p class="sc-price-dec">
                        Restocking
                    </p>
                    <div class="sc-price-num">
                        - <span>/ mo</span>
                    </div>
                </div>

            </div><!--END Section Item Group-->

            <!--Section Item-->
            <div class="sc-child">

                <!--Section Inner Items-->
                <div class="sc-child-item-wrapper">

                    <div class="sc-child-item">
                        <div class="sc-img-wrap">
                            <img src="https://via.placeholder.com/150x150" alt="*fill*">
                            <div class="sc-helper-text"></div>
                        </div>
                        <div class="sc-description">
                            <p>How many <strong>inbound shipments via small parcel carriers (UPS, FedEx, etc)</strong> will you send us per year?</p>
                            <div class="sc-number-picker">
                                <NumberPicker startingValue="2" />
                                <span class="sc-helper-text">($30 / per receipt)</span>
                            </div>
                        </div>
                    </div>

                </div><!--END Inner Items-->

                <div class="sc-pricing-details">
                    <p class="sc-price-dec">
                        Restocking
                    </p>
                    <div class="sc-price-num">
                        - <span>/ mo</span>
                    </div>
                </div>
            </div>

        </div>

    </div><!--END Pricing Group-->


    <!--Pricing Group-->
    <div class="sc-pricing-group">

        <!--Section Title-->
        <div class="sc-title">
            <input @click="toggleSection" type="checkbox" id="restock-price" name="restock-price" value="" disabled>
            <label for="restock-price">How many inbound/restocking shipments will you send us? <!--<a>learn more</a>--></label>
        </div>

        
        <div class="sc-children-wrapper">

            <!--Section Item-->
            <div class="sc-child">

                <!--Section Inner Items-->
                <div class="sc-child-item-wrapper">

                    <div class="sc-child-item">
                        <div class="sc-img-wrap">
                            <img src="https://via.placeholder.com/150x150" alt="*fill*">
                            <div class="sc-helper-text"></div>
                        </div>
                        <div class="sc-description">
                            <p>How many <strong>items removed from Amazon (FBA)</strong> per month?</p>
                            <div class="sc-number-picker">
                                <NumberPicker startingValue="2" cost=".30" />
                                <span class="sc-helper-text">(30₵ / per receipt)</span>
                            </div>
                        </div>
                    </div>

                </div><!--END Inner Items-->

                <div class="sc-pricing-details">
                    <p class="sc-price-dec">
                        Restocking
                    </p>
                    <div class="sc-price-num">
                        - <span>/ mo</span>
                    </div>
                </div>

            </div><!--END Section Item Group-->

        </div>

    </div><!--END Pricing Group-->




    <!--Pricing Group-->
    <div class="sc-pricing-group">

        <!--Section Title-->
        <div class="sc-title">
            <input @click="toggleSection" type="checkbox" id="postage-price" name="postage-price" value="" disabled>
            <label for="postage-price">Postage & Freight? <!--<a>learn more</a>--></label>
        </div>

        
        <div class="sc-children-wrapper">

            <!--Section Item-->
            <div class="sc-child">

                <!--Section Inner Items-->
                <div class="sc-child-item-wrapper">

                    <div class="sc-child-item">
                        <div class="sc-img-wrap">
                            <img src="https://via.placeholder.com/150x150" alt="*fill*">
                            <div class="sc-helper-text"></div>
                        </div>
                        <div class="sc-description">
                            <p>Billed in addition to the monthly platform and service fees.  All of ShipCalm's negotiated rates are passed through with a 10% mark-up.</p>
                        </div>
                    </div>

                </div><!--END Inner Items-->

                <div class="sc-pricing-details">
                    <p class="sc-price-dec">
                        Postage & Freight
                    </p>
                    <div class="sc-price-num">
                        TBD
                    </div>
                </div>

            </div><!--END Section Item Group-->

        </div>

    </div><!--END Pricing Group-->


    <!--Pricing Group-->
    <div class="sc-pricing-group">

        <!--Section Title-->
        <div class="sc-title">
            <input @click="toggleSection" type="checkbox" id="platform-price" name="platform-price" value="" disabled>
            <label for="platform-price">Platform Fee <!--<a>learn more</a>--></label>
        </div>

        
        <div class="sc-children-wrapper">

            <!--Section Item-->
            <div class="sc-child">

                <!--Section Inner Items-->
                <div class="sc-child-item-wrapper">

                    <div class="sc-child-item">
                        <div class="sc-img-wrap">
                            <img src="https://via.placeholder.com/150x150" alt="*fill*">
                            <div class="sc-helper-text"></div>
                        </div>
                        <div class="sc-description">
                            <p>Our platform fee provides you with a dedicated account manager, onboarding, and ongoing data integrations support.</p>
                        </div>
                    </div>

                </div><!--END Inner Items-->

                <div class="sc-pricing-details">
                    <p class="sc-price-dec">
                        Platform
                    </p>
                    <div class="sc-price-num">
                        $199 <span>/ mo</span>
                    </div>
                </div>

            </div><!--END Section Item Group-->

        </div>

    </div><!--END Pricing Group-->



    <!--Pricing Group-->
    <div class="sc-pricing-group sc-footer-total">

        
        <div class="sc-children-wrapper">

            <!--Section Item-->
            <div class="sc-child">

                <!--Section Inner Items-->
                <div class="sc-child-item-wrapper">

                    <button>Next Step: Get started today!</button>

                </div><!--END Inner Items-->

                <div class="sc-pricing-details">
                    <p class="sc-price-dec">
                        Total Estimate
                    </p>
                    <div class="sc-price-num">
                        $574 <span>/ mo</span>
                    </div>
                </div>

            </div><!--END Section Item Group-->

        </div>


    </div><!--END Pricing Group-->

</div>

</template>

<script>
  import '../styles/pricing.scss'
  import NumberPicker from './NumberPicker.vue'

  export default {
    name: 'Pricing',
    props: {
        
    },
    components: {
      NumberPicker
    },
    methods: {
        toggleSection (thisObbs) {
            
            let getClickedEl = thisObbs.target;
            let getContent = getClickedEl.parentElement.parentElement;
            let getInputs = getContent.querySelectorAll('.sc-children-wrapper input');
            
            if (getClickedEl.checked) {
                getContent.classList.remove('hideContent');
                [].forEach.call(getInputs, function(inputObj) {
                    inputObj.removeAttribute("disabled", "");
                });
            } else {
                getContent.classList.add('hideContent');
                [].forEach.call(getInputs, function(inputObj) {
                    inputObj.setAttribute("disabled", "");
                });
            }

        }


    }  
  }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
/*Form Group*/
    .sc-child .sc-form-group {
        display: flex;
        margin-bottom: 20px;
    }
    .sc-child .sc-form-group input[type="radio"] {
        width: 18px;
        height: 18px;
        margin-right: 4px;
        margin-bottom: 0px;
        position: relative;
        bottom: -2px;
    }
    .sc-child .sc-form-group input[type="radio"] + label {
        margin-right: 16px;
    }
    .sc-description p {
        font-weight: 800;
    }
    .margin-bottom-none {
        margin: 0px;
    }
    .sc-child-item .sc-description .sc-form-group label p {
        margin-bottom: 0px;
    }
    .sc-form-group label p + p {
        font-weight: 300;
    }
    .sc-pricing-group.hideContent .sc-children-wrapper {
        display: none;
    }
    .sc-pricing-group.hideContent .sc-title:after {
        border: none !important;
    }
</style>