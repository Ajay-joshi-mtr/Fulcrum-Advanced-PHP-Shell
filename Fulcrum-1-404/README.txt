The main.php is php code you will upload on the server, which is less than 160 bytes, which then requests the decrypter.txt from a pastebin link(you can upload the decrypter.txt to any pastebin and then change location in main.php)

The decrypter.txt(from pastebin) will then request the main shell source(encrypted), and then will try to decrypt it from the key recieved(you can just change the location in decrypter.txt to point to your encrypted webshell ot you can use the encrpted webshells provided)

The main.php forwards your request to decrypter.txt(from pastebin) and if no POST request is sent for the key, it will display a 404 page

you need to send a POST request in this format to run on your shell(you can use unlocker.html to send requests)
http://site.com/shell.php
POST DATA:
key=yourkey&iv=youriv
