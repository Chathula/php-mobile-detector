php-mobile-detector
===================

<h3><u><i>Detect the Mobile Phones Using the PHP</i></u></h3>


Usage
===================


<h4>Include File</h4>

<code><?php 
include 'mobile.php'; ?> </code>



<h4>Detect Any Mobile Device</h4>


<code><?php <br/>
include 'mobile.php';
<br/>
$mobile = new Mobile();<br/>
<br/>
if ($mobile->isMobile) {<br/>
 &nbsp;header("Location: m.yoursite.com");
<br/>}
<br/>
?></code>



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
<img src="http://anonmgur.com/up/1df7a345ef7f4ccb136965ca95d894ff.png" />

<h4>Detected an Android Device</h4>
<img src="http://anonmgur.com/up/ff074fe07bfaa606d846adccb0bb54c6.png" />

<h4>Detected an iPhone Device</h4>
<img src="http://anonmgur.com/up/f8260d7d9342b2918001a6818b343fbe.png" />

<h4>Detected an iPad Device</h4>
<img src="http://anonmgur.com/up/313aabcc2606bb86d5889abe4716c0c4.png" />
