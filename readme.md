eSIM-webapp
========

eSim-webapp is an online version of desktop tool eSIM where user can create and simulate circuits online.
eSim is an open source EDA tool for circuit design, simulation, analysis and PCB design, developed by FOSSEE team at IIT Bombay. 
It is an integrated tool build using open source software such as Kicad (http://www.kicad-pcd.org), Ngspice (http://ngspice.sourcefouge.net/) 
It is released under GNU GPL License. It runs on Ubuntu Linux, Windows XP and Windows.

##Pre-requisites

1.Web browser(currently internet explorer not supported).
2.Apache2 or any web-server(for download and server simulation feature)
3.ngspice(for server simulation)


Quick Start
===========

##Installation for apache2

1)Go to terminal and type the following command

sudo apt-get install apache2

##Installation for ngspice

1) Go to terminal and type the following command

sudo apt-get install ngspice


##Linking the website to server

1)Download the zip file from git hub or clone it  on your system.
2)Copy the files and paste it inside your web-servers site access folder. For apache it is /var/www/html/ if you are using the root directory. 
3)Give the folder requied file permissions as per your web-server.
4)Change the savenetlist.js located in scripts folder to add you download.php location and make the necesaary changes.
5)Open your web browser open the index.html file via your local host.
6)Enjoy and Explore. CHEERS

Contact
=======

For further information and support you can contact

nielmishra@gmail.com

License
=======

This is distributed under the terms of the MIT license. 

Road Ahead
==========

1)Change the current properties for elements to allign with esim desktop version
2)Complete the simulation part to display output client side via ajax.
3)Make the flow of the website better.







