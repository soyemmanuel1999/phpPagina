<?php
define('ProPayPal', 0);
if(ProPayPal){
    define("PayPalClientId", "*********************");
    define("PayPalSecret", "*********************");
    define("PayPalBaseUrl", "https://api.paypal.com/v1/");
    define("PayPalENV", "production");
} else {
    define("PayPalClientId", "AfiVlKXQc1F8pzaB-tWN7WCthAafDfaaAuW99VA1tQwn2d99_nokCIIU8dfGnQuvYEztrpJ5Wz0TIEmZ");
    define("PayPalSecret", "ENwCgvWmJvZYv03BzEdTVzUtn1HJpepM-TZcvMEN-BCOtN8XGRyM67PDQSDHR_-QaJs1E4O05EINOD0y");
    define("PayPalBaseUrl", "https://api.sandbox.paypal.com/v1/");
    define("PayPalENV", "sandbox");
    
}
?>