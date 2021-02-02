<?
$merchantID = 20; //Нужно заменить параметр на полученный ID
$merchantUserID = 4;
$serviceID = 31;  $transID = "user23151";
$transAmount = number_format(1000, 2, '.', '');
$returnURL = "сайт поставщика";
$HTML = <<<CODE
<form action="https://my.click.uz/services/pay" id=”click_form” method="get" target="_blank">
                                    <input type="hidden" name="amount" value="$transAmount" />
                                    <input type="hidden" name="merchant_id" value="$merchantID"/>
                                    <input type="hidden" name="merchant_user_id" value="$merchantUserID"/>
                                    <input type="hidden" name="service_id" value="$serviceID"/>
                                    <input type="hidden" name="transaction_param" value="$transID"/>
                                    <input type="hidden" name="return_url" value="$returnURL"/>
                                    <input type="hidden" name="card_type" value="$cardType"/>
                                    <button type="submit" class="click_logo"><i></i>Оплатить через CLICK</button>                         
</form>
CODE;