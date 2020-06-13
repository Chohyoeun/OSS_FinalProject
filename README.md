# Conerstone Hall Classroom Reservation Server

### What does this project do?
This server provides the Cornerstone Hall classroom reservation service. On the main page, the user enters their name, student number and phone number. Then, it passes to the classroom selection page, and when the room is selected, the reservation date and the reservation time can be entered. When the reservation is completed, you will be taken to the reservation done page. What matters here is that duplication is impossible. If the date and time entered in the classroom overlap with other people, the page appears with the phrase Failed.

### Why is this project useful?
Currently, there is no system in Cornerstone Hall to reserve a classroom. You can visit the undergraduate office to make reservation, but problems often arise because they are not recorded or stored anywhere. After thinking about how to solve these problems, I came to think about the classroom reservation system. It can meet convenience and efficiency at the same time. This server can also be applied to other reservation systems to be used effectively.

### How do I get started?
First of all, to visually show where the classroom is, a tool called 'Revit' is used to model the Cornerstone Hall 3D and to extract images to show the location of the classroom. Then, I will use 'phpMyAdmin' and 'MySQL' to store student information and establish a database that stores classroom reservation information. I also use 'Apache' and 'PHP' to build an absolute server.

### Where can I get more help, if I need it?
I can borrow related books from the school library. And I will try my best by referring to the video of the lecture related to 'php'.

# Contribute

# Code of conduct

### What if you want to run this project on your computer?

I want to explain how you can run this project yourself(Using Raspberry Pi). Please follow the order.
(In fact, I wanted to make it accessible from other laptops or mobile phones through port forwarding, but it didn't work out as I wanted.)

1. Download the source code from my GitHub.
2. Connect your raspberry pie and place the source file in the /var/www/html path.
3. If you check the current code, you can see that the IP address required to turn over to another page is fixed at 192.168.137.196. So if possible, fix your Raspberry Pi IP address or modify the code to match your IP address.
4. Trun off 'nginx' and Activate 'apache2' in Raspberry Pi
` $ sudo service apache2 restart `

## Video Address link: https://youtu.be/5XgMkdKNo9M
