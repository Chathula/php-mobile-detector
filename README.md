php-mobile-detector
===================

<h3><u><i>Detect the Mobile Phones Using the PHP</i></u></h3>


Usage
===================


<h4>Include File</h4>

```php<?php include 'mobile.php'; ?> ```



<h4>Detect Any Mobile Device</h4>


```php
<?php 
include 'mobile.php';
$mobile = new Mobile();<br/>

if ($mobile->isMobile) {
 header("Location: m.yoursite.com");
}

?>
```


<h4>Detect an Android Device</h4>

```php
<?php
include 'mobile.php';
$mobile = new Mobile();

if ($mobile->isAndroid) {
 header("Location: android.yoursite.com");
}

?>
```



<h4>Detect an iPhone Device</h4>

```php
<?php
include 'mobile.php';
$mobile = new Mobile();

if ($mobile->isIphone) {
 header("Location: iphone.yoursite.com");
}

?>
```




<h4>Other Detectable Devices</h4>

```php
Blackberry = isBlackberry;
Ipod = isIpod;
Ipad = isIpad;
Opera Mini = isOperaMini; 
Palm = isPalm;
Windows = isWindows; 
Other = isOther; 
```




<h4>Detect an Android Device and Any Other Device at once</h4>

```php
<?php
include 'mobile.php';
$mobile = new Mobile();

if ($mobile->isAndroid) {
 header("Location: android.yoursite.com");
} elseif ($mobile->isMobile) {
 header("Location: m.yoursite.com");
}

?>
```



Screenshoots
--

<h4>Not Detected</h4>
<img src="http://i.imgur.com/KvsuXTH.png" />

<h4>Detected an Android Device</h4>
<img src="http://i.imgur.com/ncT5Qng.png" />

<h4>Detected an iPhone Device</h4>
<img src="http://i.imgur.com/AxH1gGE.png" />

<h4>Detected an iPad Device</h4>
<img src="http://i.imgur.com/Jth9QVU.png" />
