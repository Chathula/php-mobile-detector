php-mobile-detector
===================

<h3><u><i>Detect the Mobile Phones Using the PHP</i></u></h3>


Usage
===================


<h4>Include File</h4>

<code><?php include 'mobile.php'; ?> </code>



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

<code>
<?php <br/>
include 'mobile.php';<br/>
$mobile = new Mobile();<br/>
if ($mobile->isAndroid) {<br/>
 &nbsp;header("Location: android.yoursite.com");<br/>
}
<br/>?>
</code>



<h4>Detect an iPhone Device</h4>

<code>
<?php <br/>
include 'mobile.php';<br/>
$mobile = new Mobile();<br/>
if ($mobile->isIphone) {<br/>
 &nbsp;header("Location: iphone.yoursite.com");<br/>
}<br/>
?>
</code>




<h4>Other Detectable Devices</h4>

<code>
Blackberry = isBlackberry;<br/>
Ipod = isIpod; <br/>
Ipad = isIpad; <br/>
Opera Mini = isOperaMini;<br/> 
Palm = isPalm; <br/>
Windows = isWindows;<br/> 
Other = isOther; 
</code>




<h4>Detect an Android Device and Any Other Device at once</h4>

<code>
<?php <br/>
include 'mobile.php';<br/>
$mobile = new Mobile();<br/>
if ($mobile->isAndroid) {<br/>
 &nbsp;header("Location: android.yoursite.com");<br/>
} elseif ($mobile->isMobile) {<br/>
 &nbsp;header("Location: m.yoursite.com");<br/>
}<br/>
?>
</code>



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
