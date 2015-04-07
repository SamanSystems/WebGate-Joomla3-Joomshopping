<div class="col100">
<fieldset class="adminform">
<table class="admintable" width = "100%" >

 <tr>
   <td style="width:250px;" class="key">
     <?php echo "شناسه درگاه - MerchantID";?>
   </td>
   <td>
     <input type = "text" class = "inputbox" name = "pm_params[merchantID]" size="45" value = "<?php echo $params['merchantID']?>" />
     <?php //echo JHTML::tooltip(_JSHOP_SOFORTUEBERWEISUNG_DESCRIPTION);?>             
   </td>
 </tr>
 <tr>
   <td style="width:250px;" class="key">
     <?php echo "کلمه عبور - Password";?>
   </td>
   <td>
     <input type = "text" class = "inputbox" name = "pm_params[password]" size="45" value = "<?php echo $params['password']?>" />
     <?php //echo JHTML::tooltip(_JSHOP_SOFORTUEBERWEISUNG_DESCRIPTION);?>             
   </td>
 </tr>
 <tr>
   <td class="key">
     <?php echo _JSHOP_TRANSACTION_END;?>
   </td>
   <td>
     <?php              
     print JHTML::_('select.genericlist', $orders->getAllOrderStatus(), 'pm_params[transaction_end_status]', 'class = "inputbox" size = "1"', 'status_id', 'name', $params['transaction_end_status'] );
    // echo " ".JHTML::tooltip(_JSHOP_PAYPAL_TRANSACTION_END_DESCRIPTION);
     ?>
   </td>
 </tr>
 <tr>
   <td class="key">
     <?php echo _JSHOP_TRANSACTION_PENDING;?>
   </td>
   <td>
     <?php 
     echo JHTML::_('select.genericlist',$orders->getAllOrderStatus(), 'pm_params[transaction_pending_status]', 'class = "inputbox" size = "1"', 'status_id', 'name', $params['transaction_pending_status']);
  //   echo " ".JHTML::tooltip(_JSHOP_PAYPAL_TRANSACTION_PENDING_DESCRIPTION);
     ?>
   </td>
 </tr>
 <tr>
   <td class="key">
     <?php echo _JSHOP_TRANSACTION_FAILED;?>
   </td>
   <td>
     <?php 
     echo JHTML::_('select.genericlist',$orders->getAllOrderStatus(), 'pm_params[transaction_failed_status]', 'class = "inputbox" size = "1"', 'status_id', 'name', $params['transaction_failed_status']);
   //  echo " ".JHTML::tooltip(_JSHOP_PAYPAL_TRANSACTION_FAILED_DESCRIPTION);
     ?>
   </td>
 </tr>
 <tr>
   <td class="key">
     <?php echo "تایید پرداخت پس از بازگشت از پارس پال";?>
   </td>
   <td>
     <?php              
     print JHTML::_('select.booleanlist', 'pm_params[checkdatareturn]', 'class = "inputbox" size = "1"', $params['checkdatareturn']);     
     ?>
   </td>
 </tr>
</table>
</fieldset>
</div>
<div class="clr"></div>