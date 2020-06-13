# Code of conduct

### What if you want to run this project on your computer?

I want to explain how you can run this project yourself(Using Raspberry Pi). Please follow the order.
(In fact, I wanted to make it accessible from other laptops or mobile phones through port forwarding, but it didn't work out as I wanted.)

1. Download the source code from my GitHub.

2. Connect your raspberry pie and place the source file in the /var/www/html path.

3. If you check the current code, you can see that the IP address required to turn over to another page is fixed at my raspberry pi IP address. So if possible, fix your Raspberry Pi IP address or modify the code to match your IP address.

4. Trun off 'nginx' and Activate 'apache2' in Raspberry Pi
` $ sudo systemctl stop nginx `
` $ sudo service apache2 restart `

5. Enter the IP address and php file name of raspberry pi in the Web.
ex) http://192.168.0.0/signup.php
