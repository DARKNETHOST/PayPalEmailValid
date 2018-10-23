# PayPalEmailValid
PayPal Email Validator : Check is Email registered in PayPal<br><br>
`Support on Windows 10 and Linux Operating system Only`<br><br>
**Requirements**

* Download Xampp for Linux 7.2.11 / PHP 7.2.11 : `https://www.apachefriends.org/download.html`<br/>
(if u use windows 10 , install lampp in Ubuntu Terminal)

* Move The `darknethost.so` file `to \opt\lampp\lib\php\extensions\no-debug-*`
* Edit your `/opt/lampp/etc/php.ini` file and add this line:
   ```ini
   [DARKNETHOST]
   extension=darknethost.so
   ```
* Finally, restart your web server

* put paypal.php to htdocs folder and call paypal.php from browser.<br/>
`localhost/paypal/paypal.php?email=test@yahoo.com`

**Update Log**
* [10/24/2018 06:35 AM] Added NeverBounce Checker
```ini
[Result Status]

Email Address Bounced = Bounced Email
Email Address OK = Delivered Email
Catch-all Address = Delivered
```
**Notes**
`Kami tidak bertanggung jawab atas kegiatan yang dilakukan oleh Pengguna dan tidak dapat dimintai pertanggungjawaban oleh siapa pun berkaitan dengan kerugian yang diderita pihak lain sebagai akibat perbuatan Pengguna`
