# Voguepay Payment Gateway Integration in PHP


### Change must be done in index.php file

{1}Please update your merchant_id.
{2}Update notify_url,fail_url & success_url with your server path.

```
 
<form method="POST" action="https://voguepay.com/pay/">
<input type="hidden" name="v_merchant_id" value="xxxx-xxxxxxx" />
<input type="hidden" name="memo" value="Order from Aviance" />
<input type="hidden" name="item_1" value="Plan A" />
<input type="hidden" name="price_1" value="99" />
<input type="hidden" name="description_1" value="" />
<input type='hidden' name='notify_url' value='http://yourdomain.com/notification2.php' />
<input type='hidden' name='fail_url' value='http://yourdomain.com/notification2.php' />
<input type='hidden' name='success_url' value='http://yourdomain.com/notification2.php' />
<br /><input type="image" src="https://voguepay.com/images/buttons/buynow_grey.png" alt="PAY" />
</form>	

```

### Change must be done in notification2.php file
{1}Please update your merchant_id.

```
$merchant_id = 'xxxx-xxxxxxx';
```
