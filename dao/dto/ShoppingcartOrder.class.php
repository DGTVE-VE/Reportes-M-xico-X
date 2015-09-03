<?php
	/**
	 * Object represents table 'shoppingcart_order'
	 *
     	 * @author: http://phpdao.com
     	 * @date: 2015-09-03 19:45	 
	 */
	class ShoppingcartOrder{
		
		var $id;
		var $userId;
		var $currency;
		var $status;
		var $purchaseTime;
		var $billToFirst;
		var $billToLast;
		var $billToStreet1;
		var $billToStreet2;
		var $billToCity;
		var $billToState;
		var $billToPostalcode;
		var $billToCountry;
		var $billToCcnum;
		var $billToCardtype;
		var $processorReplyDump;
		var $refundedTime;
		var $companyName;
		var $companyContactName;
		var $companyContactEmail;
		var $recipientName;
		var $recipientEmail;
		var $customerReferenceNumber;
		var $orderType;
		
	}
?>